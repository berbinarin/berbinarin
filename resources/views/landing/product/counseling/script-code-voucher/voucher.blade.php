<script>
    // Mapping data sesi
    function mapSesiValue(sesi) {
        return sesi;
    }

    // Function untuk cek apakah voucher valid untuk kondisi tertentu
    function isVoucherEligible(voucher, tanggal, metode, sesi) {
        const tipeArr = Array.isArray(voucher.tipe) ? voucher.tipe : JSON.parse(voucher.tipe || '[]');
        const detailArr = Array.isArray(voucher.detail) ? voucher.detail : JSON.parse(voucher.detail || '[]');
        for (let i = 0; i < tipeArr.length; i++) {
            const tipe = tipeArr[i];
            const detail = detailArr[i];
            if (tipe === 'hari') {
                const [d, m, y] = tanggal.split('/');
                const dateObj = new Date(y, m - 1, d);
                const day = dateObj.getDay();
                const isWeekend = (day === 0 || day === 6);
                if (detail === 'weekdays' && isWeekend) return false;
                if (detail === 'weekend' && !isWeekend) return false;
            }
            if (tipe === 'metode' && metode.toLowerCase() !== detail.toLowerCase()) return false;
            if (tipe === 'sesi' && mapSesiValue(sesi).toLowerCase() !== detail.toLowerCase()) return false;
        }
        return true;
    }

    // Function untuk menghitung harga asli berdasarkan kategori, metode, dan sesi
    function getHargaAsli() {
        const hargaInput = document.getElementById('harga-input') || document.getElementById('harga-hidden');    let hargaAsli = hargaInput.dataset.hargaAsli;
        const kategori = document.querySelector('input[name="kategori"]').value;
        const metode = document.getElementById('metode-select').value;
        const sesi = document.getElementById('sesi-select').value;
        if (!hargaAsli) {
            if (kategori === 'peer-counselor') {
                if (metode === 'online') {
                    hargaAsli = {1: 45000, 2: 90000, 3: 135000}[parseInt(sesi)];
                } else if (metode === 'offline') {
                    hargaAsli = {1: 55000, 2: 110000, 3: 165000}[parseInt(sesi)];
                } else {
                    hargaAsli = 0;
                }
            } else if (kategori === 'psikolog') {
                // Logika harga psikolog yang benar
                const tanggal = document.getElementById('tglkonseling').value;
                let hargaMap = {};
                if (tanggal) {
                    const dateParts = tanggal.split('/');
                    if (dateParts.length === 3) {
                        const dateObj = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
                        const day = dateObj.getDay();
                        const isWeekend = (day === 0 || day === 6);
                        if (!isWeekend) {
                            if (metode === 'online') hargaMap = {1: 150000, 2: 300000, 3: 450000};
                            else if (metode === 'offline') hargaMap = {1: 175000, 2: 350000, 3: 525000};
                        } else {
                            if (metode === 'online') hargaMap = {1: 200000, 2: 340000, 3: 500000};
                            else if (metode === 'offline') hargaMap = {1: 225000, 2: 340000, 3: 500000};
                        }
                    }
                }
                hargaAsli = hargaMap[parseInt(sesi)] || 0;
            } else {
                hargaAsli = 0;
            }
            hargaInput.dataset.hargaAsli = hargaAsli;
        }
        return parseInt(hargaAsli) || 0;
    }

    function redeemVoucher() {
        const kode = document.getElementById('kode_promo').value.trim();
        const kategori = document.querySelector('input[name="kategori"]').value;
        const jadwal_tanggal = document.getElementById('tglkonseling').value;
        const metode = document.getElementById('metode-select').value;
        const sesi = document.getElementById('sesi-select').value;

        // Selalu ambil harga asli, bukan harga yang sudah didiskon
        const hargaAsli = getHargaAsli();

        if (!kode) {
            Swal.fire({ toast: true, position: "top-end", icon: "error", title: "Masukkan kode promo terlebih dahulu.", showConfirmButton: false, timer: 4000 });
            return;
        }
        if (!hargaAsli || !jadwal_tanggal || !metode || !sesi) {
            Swal.fire({ toast: true, position: "top-end", icon: "error", title: "Silakan pilih jadwal, metode, dan sesi terlebih dahulu.", showConfirmButton: false, timer: 4000 });
            return;
        }

        fetch('/produk/konseling/psikolog/cek-voucher', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            body: JSON.stringify({
                code: kode,
                kategori: kategori,
                jadwal_tanggal: jadwal_tanggal,
                metode: metode,
                sesi: sesi
            })
        })
        .then(response => {
            // Pastikan response JSON, jika tidak throw error
            if (!response.ok) throw new Error('Network response was not ok');
            return response.json();
        })
        .then(voucher => {
            if (!voucher || typeof voucher.valid === 'undefined') {
                Swal.fire({ icon: "error", title: "Kode voucher tidak ditemukan!", toast: true, position: "top-end", showConfirmButton: false, timer: 4000 });
                return;
            }
            if (!voucher.valid) {
                Swal.fire({ toast: true, position: "top-end", icon: "error", title: voucher.message || "Kode voucher tidak valid!", showConfirmButton: false, timer: 4000 });
                return;
            }
            if (voucher.jenis_pendaftaran?.toLowerCase() !== kategori.toLowerCase()) {
                Swal.fire({
                    toast: true,
                    position: "top-end",
                    icon: "error",
                    title: "Kode voucher tidak valid",
                    showConfirmButton: false,
                    timer: 4000
                });
                return;
            }
            // Validasi detail voucher
            if (!isVoucherEligible(voucher, jadwal_tanggal, metode, sesi)) {
                Swal.fire({ toast: true, position: "top-end", icon: "error", title: "Kode voucher tidak valid", showConfirmButton: false, timer: 4000 });
                return;
            }

            // Hitung diskon dari harga asli
            const diskon = voucher.percentage;
            const hargaDiskon = hargaAsli - (hargaAsli * diskon / 100);

            // Update tampilan harga
            const hargaAsliSpan = document.getElementById('harga-asli');
            const hargaDiskonSpan = document.getElementById('harga-diskon');
            const hargaInput = document.getElementById('harga-input') || document.getElementById('harga-hidden');
            hargaAsliSpan.textContent = 'Rp ' + hargaAsli.toLocaleString('id-ID');
            hargaAsliSpan.className = 'harga-coret';
            hargaDiskonSpan.textContent = 'Rp ' + hargaDiskon.toLocaleString('id-ID');
            hargaDiskonSpan.className = 'harga-diskon';
            hargaInput.value = hargaDiskon;
            hargaInput.dataset.hargaFinal = hargaDiskon; 
            hargaInput.dataset.hargaAsli = hargaAsli;   

            document.getElementById('kategori_voucher').value = voucher.category || '';
            document.getElementById('code_voucher').value = voucher.code || '';
            document.getElementById('presentase_diskon').value = voucher.percentage || '';

            // Bukti kartu pelajar
            const buktiContainer = document.getElementById('bukti-kartu-pelajar-container');
            const buktiInput = document.getElementById('bukti_kartu_pelajar');
            if (voucher.category?.toLowerCase() === 'pelajar') {
                buktiContainer.style.display = 'block';
                buktiInput.setAttribute('required', 'required');
            } else {
                buktiContainer.style.display = 'none';
                buktiInput.removeAttribute('required');
            }

            document.getElementById('voucher')?.classList?.remove('hidden');
            Swal.fire({ toast: true, position: "top-end", icon: "success", title: "Kode voucher berhasil digunakan!", showConfirmButton: false, timer: 4000 });
        })
        .catch((err) => {
            Swal.fire({ toast: true, position: "top-end", icon: "error", title: "Terjadi kesalahan saat memverifikasi kode.", showConfirmButton: false, timer: 4000 });
        });
    }
</script>