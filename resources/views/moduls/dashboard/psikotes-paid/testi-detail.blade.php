@extends('dashboard.layouts.app', [
    'title' => 'Pendaftaran Psikotes',
    'active' => 'Dashboard',
    'modul' => 'Psikotest Paid Testimoni',
])

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="pt-2 pb-5">
                    <div class="flex flex-row">
                        <div class="">
                            <a href="{{ route('dashboard.psikotespaid.testimoni') }}">
                                <i class='bx bx-arrow-back text-[35px] text-primary mr-6 mt-3 text-left'></i>
                            </a>
                        </div>
                        <div class="">
                            <p tabindex="0"
                                class="focus:outline-none text-4xl font-bold leading-normal text-gray-800 mb-2">
                                Detail Testimoni</p>
                            <p class="text-disabled">Fitur ini menampilkan data testimoni user yang telah melakukan
                                Psikotes.</p>
                            <!-- <button onclick="toggleModal('modal-id')" type="button" style="margin-right: 0.5rem"
                                                                                                                class="focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                                                                                                                <p class=" font-medium leading-none text-dark">Edit Data</p>
                                                                                                            </button>
                                                                                                            <button onclick="toggleModal('modal-delete')" type="button"
                                                                                                                class="delete-button focus:ring-2 focus:ring-offset-2  mt-8 sm:mt-3 inline-flex items-start justify-start px-6 py-3 text-white bg-primary hover:bg-primary focus:outline-none rounded">
                                                                                                                <p class=" font-medium leading-none text-dark">Delete Data</p>
                                                                                                            </button> -->
                        </div>
                    </div>
                </div>
                <div class="bg-white w-[1000px] p-7 ml-14 rounded-md">
                    <form>
                        <div class="w-full flex flex-col gap-5">
                            <div>
                                <label class="mt-3 font-bold text-black">Ceritakan pengalaman SobatBinar dalam mengikuti
                                    kegiatan
                                    psikotes di Berbinar!</label>
                                <input class="px-3 pt-3 mt-2 text-black bg-white rounded-md shadow-md w-full"
                                    value="{{ $testimoni->sharing_experience }}">

                                </input>
                            </div>

                            <div>
                                <label class="mt-3 font-bold text-black">Bagaimana pendapat SobatBinar mengenai kegiatan
                                    psikotes
                                    yang telah terlaksana?</label>

                                <input class="px-3 pt-3 mt-2 mr-28 text-black bg-white rounded-md shadow-md w-full"
                                    value="{{ $testimoni->opinion_psikotest }}">
                                </input>
                            </div>
                            <div>
                                <label class="mt-3 font-bold text-black">Apakah SobatBinar memiliki masukan atau saran
                                    mengenai
                                    kegiatan pelaksanaan psikotes di Berbinar?</label>
                                <input class="self-end px-3 pt-3 mt-2 mr-28 text-black bg-white rounded-md shadow-md w-full"
                                    value="{{ $testimoni->opinion_psikotest }}">
                                </input>
                            </div>
                            <div>
                                <label class="mt-3 font-bold text-black">Apakah SobatBinar setuju jika Berbinar membagikan
                                    testimoni SobarBinar melalui sosial media kami?</label>
                                <input class="self-end px-3 pt-3 mt-2 mr-28 text-black bg-white rounded-md shadow-md w-full"
                                    value="{{ $testimoni->sharing_testimonial }}">
                                </input>
                                {{-- <div class="flex flex-row gap-3">
                                    <div class="flex gap-2 mt-3 tracking-normal text-black whitespace-nowrap ml-2">
                                        <input type="radio" id="agree" name="consent" value="agree"
                                            class="shrink-0 rounded-full h-5 w-5" />
                                        <label for="agree" class="-mt-0.5">Setuju</label>
                                    </div>
                                    <div class="flex gap-2 mt-3 tracking-normal text-black ml-2">
                                        <input type="radio" id="disagree" name="consent" value="disagree"
                                            class="shrink-0 rounded-full h-5 w-5" />
                                        <label for="disagree" class="-mt-0.5">Tidak Setuju</label>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal.style.display === "none" || modal.style.display === "") {
                modal.style.display = "block";
            } else {
                modal.style.display = "none";
            }
        }
    </script>

    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>

    <script>
        document.querySelectorAll('.delete-button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const formId = this.getAttribute('data-id');
                Swal.fire({
                    title: 'Hapus Responden',
                    text: "Apakah anda yakin menghapusnya?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hapus'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('deleteForm-' + formId).submit();
                    }
                });
            });
        });
    </script>
@endsection
