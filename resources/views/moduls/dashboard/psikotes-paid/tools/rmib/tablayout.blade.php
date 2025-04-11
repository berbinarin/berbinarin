@php use Illuminate\Support\Str; @endphp

<div x-data="{ tab: 'subtest-a' }">
    <ul class="flex items-center flex-wrap gap-7 font-bold text-lg">
        @foreach ($testRmib->answerRmib as $answer)
        <li>
            <button :class="tab === 'subtest-{{ str::of($answer->questionRmib->subtest)->lower }}' ? 'pb-2 border-b-2 border-blue-300 text-primary-alt' : 'text-gray-700 pb-2'"
                @click="tab = 'subtest-{{ str::of($answer->questionRmib->subtest)->lower }}'">
                Subtes {{ $answer->questionRmib->subtest }}
            </button>
        </li>
        @endforeach
    </ul>
    @foreach ($testRmib->answerRmib as $answer)
    <div x-show="tab === 'subtest-{{ str::of($answer->questionRmib->subtest)->lower }}'" class="pt-2">
        @include('moduls.dashboard.psikotes-paid.tools.rmib.subtes')
    </div>
    @endforeach
</div>