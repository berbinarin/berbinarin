@extends('moduls.dashboard.layouts.main', [
'title' => 'Data',
'active' => 'Dashboard',
'modul' => 'Psikotest Free Data',
])

@section('content-dashboard')
<section class="flex w-full">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="flex flex-row w-full p-5">
                <div>
                    <a href="{{ route('dashboard.psikotestfree.data') }}">
                        <i class='bx bx-arrow-back text-[30px] text-primary mr-6 text-left'></i>
                    </a>
                </div>

                <h3 class="text-2xl font-semibold">
                    Edit Responden
                </h3>

            </div>
            <div class="bg-white border-0 rounded-lg shadow-lg flex flex-col w-full outline-none focus:outline-none">
                <!--body-->
                <div class="relative p-6 flex-auto">
                    @foreach ($testData ->users as $user)
                    <form action="{{ route('dashboard.psikotestfree.data.edit', $user->id) }}" class="flex flex-col gap-1" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col gap-5">
                            <div class="flex flex-row gap-10">
                                <div class="form-group flex flex-col mb-1 pt-0 flex-1">
                                    <label for="name" class="text-blueGray-600 text-base">Nama</label>
                                    <input required name="name" value="{{ $user->name }}" class="p-4 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring">
                                </div>
                                <div class="form-group flex flex-col mb-1 pt-0 flex-1">
                                    <label for="gender" class="text-blueGray-600 text-base">Jenis
                                        Kelamin</label>
                                    <select required id="gender" name="gender" class="p-4 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring">
                                        <option value="Male" {{ $user->gender == 'Male' ? 'selected' : '' }}>
                                            Laki-laki
                                        </option>
                                        <option value="Female" {{ $user->gender == 'Female' ? 'selected' : '' }}>
                                            Perempuan
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-row gap-10">
                                <div class="form-group flex flex-col mb-1">
                                    <label for="date_of_birth" class="text-blueGray-600 text-base py-3">Tanggal
                                        Lahir</label>
                                    <input required type="date" name="date_of_birth" value="{{ \Carbon\Carbon::parse($user->date_of_birth)->format('Y-m-d') }}" class="p-4 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring">
                                </div>
                                <div class="form-group mb-1 flex flex-col">
                                    <label for="email" class="text-blueGray-600 text-base py-3">Email</label>
                                    <input required name="email" value="{{ $user->email }}" class="p-4 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring">
                                </div>
                                <div class="form-group mb-1 flex flex-col">
                                    <label for="date_of_birth" class="text-blueGray-600 text-base border-0 py-3">Tanggal
                                        Tes</label>
                                    <input required type="date" name="test_date" value="{{ \Carbon\Carbon::parse($testData->test_date)->format('Y-m-d') }}" class="p-4 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring">
                                </div>

                            </div>

                        </div>
                        <!--footer-->
                        <div class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                            <a href="{{ route('dashboard.psikotestfree.data') }}" class="text-gray-500 background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-edit')">
                                Batal
                            </a>
                            <button type="submit" name="submit" class="focus:ring-2  mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class="text-base font-semibold leading-none text-white">Simpan Data</p>
                            </button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
            <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-edit-backdrop"></div>
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

<!-- <script>
function showTestData(testId) {
    $.ajax({
        url: '/dashboard/admin/psikotest/free/data/' + testId,
        method: 'GET',
        success: function(data) {
            // Populate modal with test data
            $('#test-detail-content').html(JSON.stringify(data, null, 2));
            // Show the modal
            $('#modal-detail').modal('show');
        },
        error: function() {
            alert('Failed to fetch test data.');
        }
    });
}
</script> -->
@endsection