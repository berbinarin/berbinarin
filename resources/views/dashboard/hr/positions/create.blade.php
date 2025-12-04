@extends(
    "dashboard.layouts.app",
    [
        "title" => "Positions",
    ]
)

@section("content")
    <style>
        .progress-bar-striped {
            background: repeating-linear-gradient(-45deg, #a6caef, #a6caef 10px, #e3f0fa 10px, #e3f0fa 20px);
            color: #1e3a8a;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const uploadBannerButton = document.getElementById('uploadBannerButton');
            const bannerPreviewContainer = document.getElementById('bannerPreviewContainer');
            const bannerInput = document.getElementById('bannerInput');
            const bannerPreview = document.getElementById('bannerPreview');
            const progressContainer = document.getElementById('progressContainer');
            const progressBar = document.getElementById('progressBar');

            uploadBannerButton.addEventListener('click', function () {
                bannerInput.click();
            });

            bannerInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (file) {
                    bannerPreviewContainer.classList.remove('hidden');

                    progressContainer.classList.remove('hidden');
                    progressBar.style.width = '0%';
                    progressBar.textContent = '0%';
                    progressBar.classList.remove('bg-white', 'text-green-500', 'bg-blue-600', 'text-blue-100');
                    progressBar.classList.add('progress-bar-striped');

                    bannerPreview.style.opacity = '0.6';
                    bannerPreview.style.filter = 'brightness(0.7)';

                    const reader = new FileReader();
                    reader.onload = function (ev) {
                        bannerPreview.src = ev.target.result;

                        let progress = 0;
                        const interval = setInterval(() => {
                            progress += 5;
                            progressBar.style.width = `${progress}%`;

                            if (progress < 100) {
                                progressBar.textContent = `${progress}%`;
                            } else {
                                progressBar.textContent = 'Done';
                                const checkIcon = document.createElement('img');
                                checkIcon.src = 'https://img.icons8.com/?size=100&id=3061&format=png&color=40C057';
                                checkIcon.alt = 'Done';
                                checkIcon.style.width = '20px';
                                checkIcon.style.height = '20px';
                                checkIcon.style.display = 'inline-block';
                                checkIcon.style.marginBottom = '3px';
                                checkIcon.style.marginLeft = '5px';
                                progressBar.appendChild(checkIcon);

                                progressBar.classList.remove('progress-bar-striped');
                                progressBar.classList.add('bg-white', 'text-green-500');
                                clearInterval(interval);

                                bannerPreview.style.opacity = '1';
                                bannerPreview.style.filter = 'brightness(1)';

                                setTimeout(() => {
                                    progressContainer.classList.add('hidden');
                                }, 1500);
                            }
                        }, 100);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>

    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="py-4 md:pb-7 md:pt-12">
                <div class="">
                    <div class="mb-2 flex items-center gap-2">
                        <a href="{{ route("dashboard.positions.index") }}">
                            <img src="{{ asset("assets/images/dashboard/svg-icon/dashboard-back.webp") }}" alt="Back Btn" />
                        </a>
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-2xl lg:text-4xl">Tambah Data Posisi</p>
                    </div>
                    <p class="w-full text-disabled">Admin dapat menambahkan data posisi yang akan ditampilkan pada situs karir Berbinarin.</p>
                </div>
            </div>
            <div class="rounded-md bg-white px-4 py-4 shadow-lg mb-7 shadow-gray-400 md:px-8 md:py-7 xl:px-10">
                <form action="{{ route("dashboard.positions.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex items-start gap-4">
                        <div class="w-full">
                            <div class="mb-8">
                                <h1 class="text-2xl font-bold">Data Posisi</h1>
                                <div class="grid grid-cols-1 gap-6 pt-5 md:grid-cols-2">
                                    <div class="flex flex-col gap-2">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Nama Posisi
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <input id="name" name="name" type="text" placeholder="Human Resource Development" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required />
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Tipe Pekerjaan
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <select id="type" name="type" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                            <option value="" disabled selected>Pilih Tipe Pekerjaan</option>
                                            <option value="Internship">Internship</option>
                                            <option value="Fulltime">Fulltime</option>
                                            <option value="Part Time">Part Time</option>
                                            <option value="Contract">Contract</option>
                                            <option value="Freelancer">Freelancer</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Jabatan
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <select id="positions" name="positions" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                            <option value="" disabled selected>Pilih Jenis Jabatan</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Researcher">Researcher</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Lokasi
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <select id="location" name="location" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                            <option value="" disabled selected>Pilih Lokasi</option>
                                            <option value="Remote">Remote</option>
                                            <option value="Surabaya">Surabaya</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col gap-2 md:col-span-2">
                                        <p class="flex gap-1 text-lg font-semibold">
                                            Divisi
                                            <i class="bx bxs-star text-xs text-red-600"></i>
                                        </p>
                                        <select id="divisi" name="divisi" class="rounded-lg border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none" required>
                                            <option value="" disabled selected>Pilih Divisi</option>
                                            <option value="Web and Mobile Apps Developer">Web and Mobile Apps Developer</option>
                                            <option value="TikTok Creator">TikTok Creator</option>
                                            <option value="Secretary n Finance">Secretary n Finance</option>
                                            <option value="Psychological Testing Product Management">Psychological Testing Product Management</option>
                                            <option value="Marketing Strategist dan Sales">Marketing Strategist dan Sales</option>
                                            <option value="IG Creator">IG Creator</option>
                                            <option value="Human Resource">Human Resource</option>
                                            <option value="Graphic Designer">Graphic Designer</option>
                                            <option value="Class Product Management">Class Product Management</option>
                                            <option value="Counseling Product Management">Counseling Product Management</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full">
                            <button type="button" id="uploadBannerButton" class="mt-20 flex flex-col w-full cursor-pointer items-center justify-center rounded-lg border border-dashed border-blue-500 py-2 text-blue-500">
                                <h1 class="flex items-center gap-2 text-base font-medium">
                                    <i class="bx bx-plus-circle text-xl"></i>
                                    Unggah Banner Posisi
                                </h1>
                                Ukuran : 800px × 300px
                            </button>

                            <div id="bannerPreviewContainer" class="mt-4 hidden">
                                <div class="relative mb-2 flex min-h-[200px] w-full cursor-pointer flex-col items-center justify-center overflow-hidden rounded-xl border-2 border-dashed border-blue-400 transition duration-200 hover:bg-blue-50">
                                    <img id="bannerPreview" class="absolute inset-0 h-full w-full object-cover" src="" alt="Banner Preview" />
                                    <div class="progress-container absolute bottom-2 left-2 hidden w-full rounded-[10px] bg-gray-200" style="width: calc(100% - 1rem); height: 2rem" id="progressContainer">
                                        <div id="progressBar" class="progress-bar flex h-full items-center justify-center rounded-[10px] bg-blue-600 text-center text-sm font-medium leading-none text-blue-100 ring-2 ring-inset ring-white transition-all duration-300" style="width: 0%">0%</div>
                                    </div>
                                </div>
                            </div>

                            <input type="file" id="bannerInput" name="banner_path" accept=".jpeg, .webp, .jpg, .png" class="hidden" required />
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end border-t-2 border-t-gray-400 pt-5">
                        <button type="submit" class="flex items-center gap-2 rounded-xl bg-blue-500 px-3 py-2 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">Unggah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
