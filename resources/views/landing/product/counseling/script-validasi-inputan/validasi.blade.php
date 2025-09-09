<script>
    // Validasi Step 1
    function validateStep1() { 
        const requiredFields = ['jadwal_tanggal', 'jadwal_pukul', 'metode', 'sesi'];
        const metode = document.getElementById('metode-select').value;

        if (metode === 'offline') {
            requiredFields.push('daerah');
        }

        // Cek kategori voucher dari hasil redeem
        const kategoriVoucher = document.getElementById('bukti-kartu-pelajar-container').style.display === 'block' ? 'pelajar' : '';

        for (let fieldName of requiredFields) {
            let field;
            if (fieldName === 'metode') {
                field = document.getElementById('metode-select');
            } else if (fieldName === 'sesi') {
                field = document.getElementById('sesi-select');
            } else if (fieldName === 'daerah') {
                field = document.getElementById('daerah-select');
            } else {
                field = document.querySelector(`[name="${fieldName}"]`);
            }

            if (!field || field.value.trim() === '' || field.value === 'Pilih metode konseling') {
                return 'Anda belum mengisi "' + getFieldLabel(fieldName) + '" ';
            }
        }

    if (kategoriVoucher === 'pelajar') {
        const buktiKartu = document.getElementById('bukti_kartu_pelajar');
        if (!buktiKartu.files || buktiKartu.files.length === 0) {
            return 'Anda belum mengisi "Bukti Kartu Pelajar" ';
        }
    }

        return null;
    }

    // Falidasi Step 2
    function validateStep2() { 
        const requiredFields = [
                'nama', 'email', 'tanggal_Lahir', 'tempat_lahir', 'alamat','status_pernikahan',
                'jenis_kelamin', 'no_wa', 'suku', 'agama', 'posisi_anak', 'hobi',
                'pendidikan', 'asal_sekolah', 'riwayat_pekerjaan', 'kegiatan_sosial'
            ];

            for (let fieldName of requiredFields) {
                let field = document.querySelector(`[name="${fieldName}"]`);
                if (!field || field.value.trim() === '') {
                    return 'Anda belum mengisi "' + getFieldLabel(fieldName) + '" ';
                }

                // Validasi format tambahan untuk email dan nomor telepon
                if (fieldName === 'email' && !isValidEmail(field.value)) {
                    return 'Format ' + getFieldLabel(fieldName) + ' tidak valid :(';
                }

                if (fieldName === 'no_wa' && !isValidPhoneNumber(field.value)) {
                    return 'Format ' + getFieldLabel(fieldName) + ' tidak valid :(';
                }
            }
            return null;
    }
    
    // Validasi Step 3
    function validateStep3() { 
            const cerita = document.querySelector('[name="topik_pengajuan"],[name="cerita"]');
                if (!cerita || cerita.value.trim() === '') {
                    return '"' + getFieldLabel('cerita') + '" belum diisi :(';
                }
                return null;
    }

    // Validasi email
    function isValidEmail(email) {
        return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
    }
    function isValidPhoneNumber(number) {
        return /^(\+62|62|0)8[1-9][0-9]{6,11}$/.test(number);
    }

    // Helper Validasi
    function getFieldLabel(fieldName) {
        const field = document.querySelector(`[name="${fieldName}"]`);
        if (field) {
                const container = field.closest('.flex.flex-col.space-y-1') ;
                if (container) {
                    const label = container.querySelector('p');
                    if (label) return label.textContent.trim();
                }
            }
            return fieldName.replace(/_/g, ' ');
    }
</script>