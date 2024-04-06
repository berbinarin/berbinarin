@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Psikotest Berbinar',
    'active' => 'HasilTes',
])
{{-- menambahkan style untuk tampilan responsive dan mobile --}}
<style>
    @media (max-width: 768px) {
        .float-left, .float-right {
            width: 100%;
        }

        .float-left {
            text-align: left;
        }

        .float-left > div, .float-right > div {
            width: 90%; /* Menyesuaikan lebar kontainer diagram dan keterangan */
            
        }

        .flex {
            flex-direction: row; /* Tetap menggunakan flex-direction: row; */
            justify-content: center; /* Mengatur konten agar berada di tengah */
            align-items: flex-center; /* Mengatur konten agar berada di bagian atas */
            flex-wrap: wrap; /* Membungkus konten */
        }

        .float-left {
            margin-bottom: 1px;
            margin-right: 4rem;
        }

        /* Penyesuaian lebar diagram */
        .float-right .w-full {
            width: 100%; /* Atur lebar diagram menjadi 100% */
        }

        .float-right {
            margin-top: 1px; /* Tambahkan margin atas untuk menjaga jarak antara diagram dan teks */
        }

        .quest-container {
            padding: 1rem; /* Mengurangi padding */
        }
    }
</style>


@section('content')
    <section class="mt-0">
        <div class="flex justify-center items-center">
            <div class="bg-primary t-container z-38 w-full max-w-[1200px] p-8"> 
                <div class="quest-container mt-2 w-full bg-white rounded-3xl p-16"> 
                    <!-- Judul "Hasil Psikotes" -->
                    <h2 class="text-center font-plusJakartaSans text-4xl font-bold mb-1">Hasil Tes</h2>
                    <!-- Paragraf -->
                    <p class="text-center font-plusJakartaSans text-lg mt-2 mb-4">Hasil tes dibawah ini berdasarkan jawaban dari <br> pertanyaan yang telah Anda jawab</p>
                    <div class="flex">
                        <!-- Container untuk diagram -->
                        <div class="float-left w-full md:w-1/2 mt-4 mb-4 ml-1 mr-4 h-90 rounded-3xl" style="background-color: #C7F8FF;">
                            <div class="float-left mt-6 ml-6">
                                Extraversion
                                <div class="float-right w-full mr-3 h-5 rounded-3xl" style="width: 60%; background-color: #75BADB; margin-right: 5%;">
                                    <!-- width adalah persentase -->
                                    <div style="width: 50%; max-width: 100%;  background-color: #3986A3; height: 100%; border-radius: 20px;"></div>
                                </div>
                            </div>
                            <div class="float-left mt-6 ml-6">
                                Conscientiousness
                                <div class="float-right w-full h-5 rounded-3xl" style="width: 60%; background-color: #75BADB; margin-right: 5%;">
                                    <div style="width: 80%; max-width: 100%; background-color: #3986A3; height: 100%; border-radius: 15px;"></div>
                                </div>
                            </div>
                            <div class="float-left mt-6 ml-6">
                                Agreeableness
                                <div class="float-right w-full h-5 rounded-3xl" style="width: 60%; background-color: #75BADB; margin-right: 5%;">
                                    <div style="width: 30%; max-width: 100%; background-color: #3986A3; height: 100%; border-radius: 20px;"></div>
                                </div>
                            </div>
                            <div class="float-left mt-6 ml-6">
                                Openness
                                <div class="float-right w-full h-5 rounded-3xl" style="width: 60%; background-color: #75BADB; margin-right: 5%;">
                                    <div style="width: 90%; max-width: 100%; background-color: #3986A3; height: 100%; border-radius: 20px;"></div>
                                </div>
                            </div>
                            <div class="float-left mt-6 ml-6">
                                Neuroticism
                                <div class="float-right w-full mb-6 h-5 rounded-3xl" style="width: 60%; background-color: #75BADB; margin-right: 5%;">
                                    <div style="width: 70%; max-width: 100%; background-color: #3986A3; height: 100%; border-radius: 20px;"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Konten Hasil Psikotes -->
                        <div class="float-right w-full md:w-1/2 mt-4 mr-12 ml-2">
                            <h2 class="font-plusJakartaSans text-3xl font-bold mb-2 text-center">Lorem Ipsum</h2>
                            <p class="font-plusJakartaSans text" style="text-align: justify; font-size:15px; letter-spacing: 1px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum doloribus harum doloremque aliquid iure magnam ut minus quod neque voluptate porro ipsam veniam culpa odit nostrum ad iusto dolores rem ducimus voluptatem aliquam sapiente illum, animi quibusdam! Maiores accusamus tenetur eaque magnam. Deserunt alias eveniet atque quis ipsum sit iure vel quos. </p>
                        </div>
                    </div>
                </div>   
             </div>
        </div>
    </section>
@endsection