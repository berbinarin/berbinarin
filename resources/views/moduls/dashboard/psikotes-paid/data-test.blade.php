@extends('moduls.dashboard.layouts.main', [
'title' => 'Pendaftaran Psikotes',
'active' => 'Dashboard',
'modul' => 'Psikotest Paid Data Test',
])

@section('content-dashboard')
<section class="flex w-full">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="py-4 md:pt-12 md:pb-7">
                <div class="">
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
                        Data Test</p>
                    <p class="text-disabled py-2">Fitur ini menampilkan informasi data test dari user yang telah
                        mengerjakan psikotes Berbinar.</p>
                </div>
            </div>
            <div class="w-[1300px] bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-[24px]">
                <div class="mt-4 overflow-x-auto">
                    <table id="example" class="display gap-3" style="overflow-x: scroll;">
                        <thead>
                            <tr>
                                <th style="text-align: center">Nama Alat Tes</th>
                                <th style="text-align: center">Test</th>
                                <th style="text-align: center">Token</th>
                                <th style="text-align: center"></th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($tools as $tool)
                            <tr id="" class="data-consume">
                                <td class="text-center">{{ $tool->name }}</td>
                                <td class="text-center">{{ $tool->id }}</td>
                                <td class="text-center">{{ $tool->token }}</td>
                                <td class="flex gap-5 justify-center">

                                    {{-- BUTTON UPDATE TOKEN  --}}
                                    <form action="{{ route('dashboard.psikotespaid.generate-token', $tool->id) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="focus:ring-2 focus:ring-offset-2 mt-4 sm:mt-0 inline-flex items-start text-white justify-start py-2 px-3 bg-primary-alt hover:bg-primary-alt focus:outline-none rounded-full"
                                            data-id="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"
                                                viewBox="0 0 24 24" class="mt-[5px]">
                                                <path fill="none" stroke="white" stroke-width="3"
                                                    d="M1.75 16.002C3.353 20.098 7.338 23 12 23c6.075 0 11-4.925 11-11m-.75-4.002C20.649 3.901 16.663 1 12 1C5.925 1 1 5.925 1 12m8 4H1v8M23 0v8h-8" />
                                            </svg>
                                            <p class="ml-2">Update</p>
                                        </button>
                                    </form>
                                    {{-- BUTTON DASHBOARD  --}}
                                    @if ( $tool->name == 'BAUM' || 'HTP' || 'DAP')
                                    <a href="{{ route('dashboard.psikotespaid.dashboardtes') }}"
                                        class="focus:ring-2 focus:ring-offset-2 mt-2 sm:mt-0 inline-flex items-start text-white justify-start py-2 px-3 bg-green-500 hover:bg-green-500 focus:outline-none rounded-full">
                                        <i class='bx bx-home-alt-2 text-white text-base'></i>
                                        <p class="ml-2">Dashboard</p>
                                    </a>
                                    @else
                                    @endif


                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
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

@endsection