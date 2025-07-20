<!-- Backdrop -->
<div id="modal-id-backdrop" class="hidden fixed inset-0 z-40 bg-black opacity-50"></div>

<!-- Modal -->
<div id="modal-id"
     class="hidden fixed inset-0 z-50 items-center justify-center">
    <div class="w-full max-w-md mx-auto bg-white rounded-lg shadow-lg p-6">
        <div class="flex flex-col items-center gap-1">
            <img class="w-16" src="{{ asset('assets/images/dashboard/arteri/warning.png') }}" alt="Warning" />
            <p class="pt-5 text-center">Apakah Anda yakin ingin menghapus item ini?</p>

            <!-- Form -->
            <form id="delete-form" method="POST" class="flex items-center justify-center pt-7 gap-5">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="inline-flex px-6 py-2 bg-primary hover:bg-primary-dark focus:outline-none rounded text-white">
                    Ya
                </button>
                <button type="button"
                        class="px-6 py-2 border border-black rounded font-bold"
                        onclick="toggleModal('modal-id')">
                    Tidak
                </button>
            </form>

        </div>
    </div>
</div>
<script>
    function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        const backdrop = document.getElementById(modalId + '-backdrop');
        
        modal.classList.toggle('hidden');
        modal.classList.toggle('flex');

        if (backdrop) {
            backdrop.classList.toggle('hidden');
        }
    }

    function setDeleteAction(url) {
        const form = document.getElementById('delete-form');
        form.action = url;
        toggleModal('modal-id');
    }
</script>
