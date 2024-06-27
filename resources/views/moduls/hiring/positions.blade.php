@extends('layouts.main', [
'title' => 'Positions - Berbinar Insightful Indonesia',
'active' => 'Hiring',
'page' => 'Positions',
])

@section('content')
<div
    class="bg-blur-bg-2 rounded-[700px] blur-[85px] w-[300px] md:w-[600px] h-[250px] md:h-[600px] absolute top-56 md:-top-20">
</div>

{{-- POSITIONS SECTION --}}
<section class="max-w-6xl mx-auto flex flex-col gap-8 z-40 items-center justify-center mt-40 mb-20">
    <div class="flex flex-col gap-2">
        <h1 class="text-black fomt-semibold text-3xl px-5 md:px-0 text-center">
            Posisi Yang Tersedia
        </h1>
        <p class="text-disabled text-lg text-center px-5 md:px-0">
            Berikut adalah posisi yang sedang dibuka
        </p>
    </div>

    <div class="flex flex-row flex-wrap items-center justify-center gap-5 mx-5 md:mx-0">
        @forelse ($positions->chunk(ceil($positions->count() / 2)) as $chunk)
        @foreach ($chunk as $position)
        <div class="flex flex-col bg-white shadow-md rounded-md gap-5 px-5 py-5 w-full h-[270px] md:w-[250px]"
            data-aos="fade-right" data-aos-duration="1000">
            <div class="flex flex-col gap-1">
                <h5 class="text-black text-lg h-[60px]">{{ $position->name }}</h5>
                <div class="flex flex-row items-center gap-2 text-base">
                    <span class="text-primary bg-blur-bg px-2 py-1 rounded-md uppercase">{{ $position->type }}</span>
                    <span class="text-disabled">{{ $position->positions }}</span>
                </div>
            </div>
            <div class="flex flex-row gap-2">
                <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="Logo Berbinar Insightful Indonesia"
                    title="Logo Berbinar Insightful Indonesia" class="w-[50px] block">
                <div class="flex flex-col">
                    <h6 class="text-black text-base">Berbinar</h6>
                    <p class="text-disabled text-sm">{{ $position->location }}</p>
                </div>
            </div>
            <a href="{{ route('hiring.positions.detail', $position->id) }}"
                class="text-center text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 w-full">Lihat
                Selengkapnya</a>
        </div>
        @endforeach
        @empty
        <!-- Handle empty positions -->
        @endforelse
    </div>
</section>

{{-- POPUP SECTION --}}
<div id="modal" class="modal hidden">
    <div class="modal-content mt-10 mx-5 md:max-w-5xl flex flex-col gap-5">
        <div class="flex flex-col gap-1">
            <h5 class="text-black text-2xl" id="modal-name"></h5>
            <div class="flex flex-row items-center gap-2 text-base">
                <span id="modal-type" class="text-primary bg-blur-bg px-2 py-1 rounded-md uppercase"></span>
                <span class="text-disabled" id="modal-positions"></span>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3">
            <div class="flex flex-col gap-2 flex-1">
                <p class="text-disabled">Job Descriptions : </p>
                <div class="flex flex-col text-disabled gap-1" id="modal-jobDescriptions">
                </div>
            </div>
            <div class="flex flex-col gap-2 flex-1">
                <p class="text-disabled">Requirements : </p>
                <div class="flex flex-col text-disabled gap-1" id="modal-requirements"></div>
            </div>
        </div>

        <a href="{{ $position->link }}"
            class="text-center text-base text-white bg-primary-alt rounded-md hover:bg-primary duration-700 px-5 py-2 closeModal mt-5">Daftar</a>
        <button
            class="text-center text-base text-white bg-disabled rounded-md duration-700 px-5 py-2 closeModal">Close</button>
    </div>
</div>

{{-- FAQ SECTION --}}
<section class="max-w-6xl z-40 mx-5 md:mx-auto">
    <ul class="flex flex-col">
        @php
        $index = 0;
        @endphp
        @foreach ($faqs as $faq)
        <li class="border bg-white py-2 shadow-sm rounded-lg my-2" x-data="accordion({{ $index }})">
            <h2 @click="handleClick()"
                class="flex flex-row justify-between items-center font-medium p-3 cursor-pointer text-lg">
                <span>{{ $faq['question'] }}</span>
                <svg :class="handleRotate()"
                    class="fill-[#3986a3] text-[#3986a3] h-6 w-6 transform transition-transform duration-500"
                    viewBox="0 0 20 20">
                    <path
                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                    </path>
                </svg>
            </h2>
            <div x-ref="tab" :style="handleToggle()"
                class="border-l-2 border-[#3986a3] overflow-hidden max-h-0 duration-500 transition-all">
                <p class="p-3 text-gray-900">
                    {{ $faq['answer'] }}
                </p>
            </div>
        </li>
        @php
        $index++;
        @endphp
        @endforeach
    </ul>
</section>



<script>
const showModalButtons = document.querySelectorAll('.showModal');
const closeModalButtons = document.querySelectorAll('.closeModal');
const overlay = document.querySelector(".overlay");
//const modal = document.getElementById('modal');

showModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const name = button.getAttribute('data-name');
        const type = button.getAttribute('data-type');
        const positions = button.getAttribute('data-positions');
        const location = button.getAttribute('data-location');
        const jobDescription = button.getAttribute('data-jobDescription');
        const requirements = button.getAttribute('data-requirements');

        document.getElementById('modal-name').textContent = name;
        document.getElementById('modal-type').textContent = type;
        document.getElementById('modal-positions').textContent = positions;

        const jobDescriptionContainer = document.getElementById('modal-jobDescriptions');
        jobDescriptionContainer.innerHTML = '';
        if (jobDescription) {
            const parsedJobDescription = JSON.parse(jobDescription);
            parsedJobDescription.forEach((job, index) => {
                const jobElement = document.createElement('p');
                let number = index + 1;
                jobElement.innerHTML = job.replace(/\n/g, '<br>');
                jobDescriptionContainer.appendChild(jobElement);
            });
        }

        const requirementsContainer = document.getElementById('modal-requirements');
        requirementsContainer.innerHTML = '';
        if (requirements) {
            const parsedRequirements = JSON.parse(requirements);
            parsedRequirements.forEach((requirement, index) => {
                const requirementElement = document.createElement('p');
                let number = index + 1;
                requirementElement.innerHTML = requirement.replace(/\n/g, '<br>');
                requirementsContainer.appendChild(requirementElement);
            });
        }

        modal.style.display = 'flex';
    });
});

closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        modal.style.display = 'none';
        overlay.classList.add("hidden");
    });
});
overlay.addEventListener("click", closeModal);
</script>


<script>
document.addEventListener('alpine:init', () => {
    Alpine.store('accordion', {
        tab: 0
    });

    Alpine.data('accordion', (idx) => ({
        init() {
            this.idx = idx;
        },
        idx: -1,
        handleClick() {
            this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
        },
        handleRotate() {
            return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
        },
        handleToggle() {
            return this.$store.accordion.tab === this.idx ?
                `max-height: ${this.$refs.tab.scrollHeight}px` : '';
        }
    }));
})
</script>
@endsection