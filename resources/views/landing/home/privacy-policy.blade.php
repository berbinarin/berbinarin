@extends('landing.layouts.app', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Beranda',
    'page' => 'Kebijakan Privasi',
])

@section('content')
<div class="sm:mx-20 mx-4">
    <div>
        <h1 class="max-sm:text-[29px] text-4xl font font-semibold text-black text-center mt-28 sm:mt-36">Kebijakan Privasi</h1>
        <p class="text-[#C4C4C4] sm:text-[15px] text-[13px] text-center mt-2">Telah diperbarui 27 Januari 2025</p>
        <p class="text-[#767676] sm:text-[16px] text-[15px] mt-6 text-justify max-sm:leading-normal">
            Terima kasih telah mengunjungi situs web Berbinar Insightful Indonesia. Privasi Anda sangat penting bagi kami. 
            Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi yang Anda berikan kepada kami
        </p>
    </div>

    <div class="sm:mt-6 mt-3">
        <p class="text-[#3986A3] font-bold sm:text-2xl text-xl">1. Informasi yang Kami Kumpulkan</p>
        <p class="text-[#767676] sm:text-[16px] text-[15px] mt-2 text-justify max-sm:leading-normal">
            Kami dapat mengumpulkan informasi berikut ketika Anda menggunakan layanan kami:
            <ul class="list-disc mt-2 pl-7 sm:pl-10 leading-relaxed sm:text-[16px] text-[15px] text-justify text-[#767676] marker:text-[#3986A3]">
                <li class="max-sm:leading-normal">
                    Informasi Pribadi: Nama, alamat email, nomor telepon, dan informasi lain yang SobatBinar berikan secara sukarela melalui formulir pendaftaran atau kontak.
                </li>  
                <li class="max-sm:leading-normal">
                    Informasi Teknis: Alamat IP, jenis perangkat, jenis peramban, dan data penggunaan lainnya yang dikumpulkan secara otomatis untuk keperluan analitik dan peningkatan layanan.
                </li>  
            </ul>
        </p>
    </div>

    <div class="sm:mt-6 mt-3">
        <p class="text-[#3986A3] font-bold sm:text-2xl text-xl">2. Penggunaan Informasi</p>
        <p class="text-[#767676] sm:text-[16px] text-[15px] mt-2 text-justify max-sm:leading-normal">
            Berbinar menggunakan informasi yang dikumpulkan untuk:
            <ul class="list-disc mt-2 pl-7 sm:pl-10 leading-relaxed sm:text-[16px] text-[15px] text-justify text-[#767676] marker:text-[#3986A3]">
                <li class="max-sm:leading-normal">
                    Memberikan layanan konsultasi psikologi dan edukasi yang klien minta.
                </li>  
                <li class="max-sm:leading-normal">
                    Menghubungi SobatBinar terkait informasi layanan, promosi, atau perubahan kebijakan.
                </li>  
                <li class="max-sm:leading-normal">
                    Meningkatkan pengalaman pengguna dan mengembangkan layanan baru.
                </li>  
            </ul>
        </p>
    </div>

    <div class="sm:mt-6 mt-3">
        <p class="text-[#3986A3] font-bold sm:text-2xl text-xl">3. Perlindungan Data</p>
        <p class="text-[#767676] sm:text-[16px] text-[15px] mt-2 text-justify max-sm:leading-normal">
            Berbinar menjaga keamanan informasi pribadi klien dengan langkah-langkah teknis dan administratif yang sesuai untuk mencegah akses yang tidak sah, penggunaan, atau pengungkapan data klien.
        </p>
    </div>
    
    <div class="sm:mt-6 mt-3">
        <p class="text-[#3986A3] font-bold sm:text-2xl text-xl">4. Berbagi Informasi dengan Pihak Ketiga</p>
        <p class="text-[#767676] sm:text-[16px] text-[15px] mt-2 text-justify max-sm:leading-normal">
            Berbinar tidak akan menjual, menyewakan, atau menukar informasi pribadi klien kepada pihak ketiga sesuai dengan Undang-Undang (UU) Nomor 27 Tahun 2022 tentang Perlindungan Data Pribadi tanpa persetujuan klien, kecuali untuk:
            <ul class="list-disc mt-2 pl-7 sm:pl-10 leading-relaxed sm:text-[16px] text-[15px] text-justify text-[#767676] marker:text-[#3986A3]">
                <li class="max-sm:leading-normal">
                    Mematuhi hukum dan peraturan yang berlaku.
                </li>  
                <li class="max-sm:leading-normal">
                    Menyediakan layanan tertentu melalui mitra terpercaya yang terikat oleh kebijakan privasi yang setara.
                </li>  
            </ul>
        </p>
    </div>

    <div class="sm:mt-6 mt-3">
        <p class="text-[#3986A3] font-bold sm:text-2xl text-xl">5. Hak Anda</p>
        <p class="text-[#767676] sm:text-[16px] text-[15px] mt-2 text-justify max-sm:leading-normal">
            Klien memiliki hak untuk:
            <ul class="list-disc mt-2 pl-7 sm:pl-10 leading-relaxed sm:text-[16px] text-[15px] text-justify text-[#767676] marker:text-[#3986A3]">
                <li class="max-sm:leading-normal">
                    Mengakses, memperbarui, atau menghapus informasi pribadi klien yang kami simpan.
                </li>  
                <li class="max-sm:leading-normal">
                    Menarik persetujuan yang sebelumnya diberikan terkait penggunaan data pribadi.
                </li>  
            </ul>
        </p>
    </div>
    
    <div class="sm:mt-6 mt-3">
        <p class="text-[#3986A3] font-bold sm:text-2xl text-xl">6. Perubahan Kebijakan Privasi</p>
        <p class="text-[#767676] sm:text-[16px] text-[15px] mt-2 text-justify max-sm:leading-normal">
            Kami dapat memperbarui Kebijakan Privasi ini dari waktu ke waktu. 
            Perubahan akan dilakukan melalui database Berbinar, dan penggunaan berkelanjutan klien atas pelayanan kami setelah perubahan mencerminkan persetujuan klien  terhadap kebijakan yang diperbarui.
        </p>
    </div>

    <div class="sm:mt-6 mt-3 mb-10">
        <p class="text-[#3986A3] font-bold sm:text-2xl text-xl">7. Hubungi Kami</p>
        <p class="text-[#767676] sm:text-[16px] text-[15px] mt-2 text-justify max-sm:leading-normal">
            Jika Anda memiliki pertanyaan atau kekhawatiran terkait Kebijakan Privasi ini, silakan hubungi kami di:
            <ul class="list-disc mt-2 pl-7 sm:pl-10 leading-relaxed sm:text-[16px] text-[15px] text-justify text-[#767676] marker:text-[#3986A3]">
                <li class="max-sm:leading-normal">
                    Nomor WhatsApp: 082141869800
                </li>  
                <li class="max-sm:leading-normal">
                    Email: berbinar.in@gmail.com
                </li>  
            </ul>
        </p>
    </div>
@endsection