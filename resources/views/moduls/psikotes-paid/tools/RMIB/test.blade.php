@extends('moduls.psikotes.layouts.mainn', [
    'title' => 'Soal RMIB',
    'active' => 'one psikotest',
])

@section('content')
<div class="relative h-11/12 md:min-h-screen flex flex-col items-center bg-gray-100 justify-center">
    <!-- Mulai form/div -->
    <form
        method="post"
        action="{{ route('psikotest-paid.tool.RMIB.submitAnswer', $testRmib) }}">
        @csrf
       

        <input type="hidden" name="timeout" id="timeout" value="false">
        <input type="hidden" name="current_question_number" id="timeout" value="{{ session('current_question_number') }}">

        <!-- Background Image -->
        <img src="{{ asset('assets/images/psikotes/paid/psikotest-soal-bg.png') }}" alt="Latar Belakang Berbinar"
            class="absolute inset-0 hidden md:block md:w-full md:h-full object-cover z-0">

        <!-- Container for Icons above Card -->
        <div class="absolute top-0 left-0 right-0 flex items-center justify-center mt-8 z-10">
            <div class="bg-white h-[50px] rounded-full px-4 py-2 flex items-center">
                <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar.png') }}" alt="Ikon"
                    class="w-8 h-8 rounded-full">
                <img src="{{ asset('assets/images/psikotes/paid/logo-berbinar-psikotest.png') }}" alt="Ikon"
                    class="w-8 h-8 rounded-full ml-2">
            </div>
        </div>

        <!-- Ini akan muncul -->
        {{-- <h1 class="text-2xl font-bold mt-4 text-center">
            Test 24
        </h1> --}}

        
        <!-- Main Content Area -->
        <div class="relative z-10 w-3xl mx-auto  p-6" style="width: 1100px;">
            <div class="bg-white bg-opacity-50 shadow-lg rounded-lg px-6 py-10">
                <h1 class="text-red-500 text-center font-bold text-lg">INSTRUKSI {{ $questions[session('current_question_number') - 1]->subtest }}</h1>
                <p class="mt-5">{!! $questions[session('current_question_number') - 1]->instruction !!}</p>

                <div class="grid grid-cols-2 gap-2 mt-4" style="max-height: 200px; overflow:auto; padding:8px; grid-template-columns: 5% 90%;">
                    <!-- Kolom kiri: Nomor statis -->
                    <div class="flex flex-col gap-3">
                        @for ($i = 1; $i <= count($questions[session('current_question_number') - 1]->statements); $i++)
                            <div class="h-10 flex items-center justify-center border bg-gray-200 rounded-md text-blue-400">
                                {{ $i }}
                            </div>
                        @endfor
                    </div>
                    <!-- Kolom kanan: Daftar tugas yang bisa di-drag -->
                    <div id="sortable-list" class="flex flex-col gap-3">
                        @foreach ($questions[session('current_question_number') - 1]->statements as $statement)
                        <div id="statement-{{ $statement->id }}" class="h-10 flex items-center px-2 drag-item cursor-move bg-white rounded-md"
                             data-id="{{ $statement->category->name }}">
                            {{ $user->gender == 'laki-laki' ? $statement->male_statement : $statement->female_statement }}
                        </div>
                    @endforeach                    
                    </div>
                </div>
                <input type="hidden" name="ordered_statements" id="ordered_statements">
                <input type="hidden" name="question_rmib_id" value="{{ $questions[session('current_question_number') - 1]->id }}">


                <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const el = document.getElementById('sortable-list');
                        const orderedStatements = document.getElementById('ordered_statements');

                        const sortable = Sortable.create(el, {
                            animation: 150,
                            handle: '.drag-item',
                            dataIdAttr: 'data-id',
                            onEnd: function () {
                                const order = sortable.toArray();
                                orderedStatements.value = JSON.stringify(order);
                            }
                        });

                        const initialOrder = sortable.toArray();
                        orderedStatements.value = JSON.stringify(initialOrder);

                        const form = el.closest('form');
                        form.addEventListener('submit', function () {
                            if (!orderedStatements.value || orderedStatements.value === '[]') {
                                const currentOrder = sortable.toArray();
                                orderedStatements.value = JSON.stringify(currentOrder);
                            }
                        });
                    });
                </script>

            </div>
            <div class="flex bg-white rounded-md items-center justify-between mt-10"
                style="height: 40px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="flex items-center ml-6" style="height: 3px; width: 860px; position: relative;">
                    <!-- Black background line -->
                    <div class="bg-black rounded-full" style="height: 3px; width: 100%;"></div>
                    <!-- Blue percentage line -->
                    <div class="bg-blue-500 rounded-full" style="height: 3px; position: absolute; top: 0; left: 0;">
                    </div>
                    <!-- Small circle at the end of the blue line -->
                    <div class="bg-blue-500 rounded-full"
                        style="height: 10px; width: 10px; position: absolute; top: -4px; transform: translateX(-50%);">
                    </div>
                    <!-- Percentage text -->
                    <span class="text-sm text-black"
                        style="position: absolute; top: 1px; transform: translateX(-50%); font-size: 8px;">1%</span>
                </div>
                    <button type="submit" type="button"
                        class="px-4 py-1 bg-blue-500 text-sm mr-2 text-white rounded-lg hover:bg-blue-600">
                        {{ session('current_question_number') >= 8 ? 'Selesai' : 'Soal Berikutnya'  }}
                    </button>
            </div>

            <!-- Konten utama di sini -->
        </div>
        <!-- Percentage Line and Next Button -->
    </form>
</div>
@endsection