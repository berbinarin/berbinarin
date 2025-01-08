@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Tentang Kami',
    'page' => 'Tentang Kami',
])

@section('content')
<section class="mt-32 mx-36">
    <div class="justify-center items-center flex flex-col gap-y-6">
        <iframe width="400" height="250" src="https://www.youtube.com/embed/q9YxKxz8Mz0?si=6oCKZ1WgzNclUKDH" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
        </iframe>

        <p class="text-5xl font-semibold text-black">Tentang <span class="text-[#3986A3]">Berbinar</span></p>
        <p class="text-lg text-justify text-[#70787D]">Setiap individu mengalami episode yang sama di tahap kehidupannya. 
            Inilah pentingnya seseorang memiliki pengetahuan seputar psikologi dan memahami dirinya sendiri. 
            Berbinar hadir menawarkan layanan konseling bersama psikolog partner dan peer counselor untuk setiap individu yang sedang berjuang. 
            Kami juga memiliki layanan online yang bisa diakses dengan fleksibel, di mana pun Anda berada, karena apa yang Anda rasakan dan alami itu penting dan Anda berhak menjadi lebih baik lagi.
        </p>
    </div>

    <div class="justify-center mt-28">
        <div class="bg-white shadow-md flex flex-row h-auto p-8 justify-between items-center">
            <div class="flex flex-initial">
                <img src="{{ asset('assets/images/landing/asset-tentang/image/pak-danny.png') }}" alt="Danny Sanjaya Arfensia, M.Psi., Psikolog" class="h-52 w-auto">
            </div>
            <div class="flex flex-1">
                <p class="text-justify ">
                    Berbinar yang diambil dari kata bercahaya, dibangun untuk menerangi masyarakat dengan layanan psikologi yang kredibel dan sesuai dengan apa yang dibutuhkan oleh masyarakat. 
                    Berbinar dengan logo bola mata yang bersinar, bersemangat dalam memberikan layanan psikologi terbaik untuk masyarakat, menggunakan warna biru yang dikaitkan dengan langit dan laut, 
                    yang merupakan ruang terbuka dapat menginspirasi manusia untuk menciptakan lingkungan yang sehat secara fisik dan psikologis. 
                    Pemilihan kata Insightful Indonesia dalam nama perusahaan menggambarkan bahwa perusahaan melihat masyarakat Indonesia yang mudah terpapar oleh pengetahuan dari internet, tanpa mengetahui kredibilitasnya, 
                    dapat menggunakan produk yang ditawarkan untuk memperluas wawasan mereka. Harapan saya selaku CEO PT Berbinar Insightful Indonesia dengan menawarkan proposal penawaran kerjasama ini kepada 
                    perusahaan, sekolah, atau komunitas di berbagai wilayah Indonesia agar dapat mengenalkan produk kami kepada masyarakat dan menjalin kerjasama yang dapat menguntungkan kedua belah pihak.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection