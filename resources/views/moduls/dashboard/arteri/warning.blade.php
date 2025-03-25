<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
id="modal-id">
    <div class="relative my-5 mx-48 justify-center items-center" style="width: 500px">
        <!--content-->
        <div
            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <!--body-->
            <div class="relative p-5 flex-auto">
                <div class="flex flex-col items-center gap-1">
                    <img class="w-16" src="{{ asset('assets/images/warning.png') }}"/>
                    <p class="pt-5">Apakah Anda yakin ingin menghapus item ini?</p>
                    <!--footer-->
                    <form method="delete"
                        class="flex items-center justify-center pt-7 rounded-b gap-5">
                        @csrf
                        <button type="submit" name="submit"
                            class="inline-flex px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                            <p class="text-base font-semibold leading-none text-white">
                                Ya</p>
                        </button>
                        <button
                            class="background-transparent font-bold  px-6 py-2 text-base outline-none focus:outline-none border border-black rounded"
                            type="button" onclick="toggleModal('modal-id')">
                            Tidak
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop">
</div>

<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
    id="modal-id">

    <script>
        function toggleModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal.style.display === "none" || modal.style.display === "") {
                modal.style.display = "block";
            } else {
                modal.style.display = "none";
            }}
    </script>
    
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>