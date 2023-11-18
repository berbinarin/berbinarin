@extends('layouts.main', [
    'title' => 'Artikel',
    'page' => 'Artikel',
    'active' => 'Artikel',
])

@section('content')
<section class="w-full md:mt-[15vh] mt-[5vh]" id="home">
    <div class="max-w-7xl mx-auto">
        <div class="home__data flex flex-col items-center">
            <div class="mb-12">
                <h1 class="about__title text-center">Artikel Insightful</h1>
                <div class="share__img flex-2 mx-auto w-full flex items-center justify-center">
                    <img src="{{ asset('assets/images/artikel.svg') }}" alt="" class="w-[20rem] py-8">
                </div>
            </div>
            
            <p class="home__description md:w-[70%] w-[92%] text-center -mt-10">
                Berbinar hadir tidak hanya untuk membawa kebaikan dalam hal kesehatan mental melalui produk - produknya, namun membawa ilmu serta wawasan yang lebih luas terkait kesehatan mental dan psikologi melalui artikel - artikel yang dibuat.
            </p>

            <a href="#articles" class="button">Baca Artikel Psikologi</a>
        </div>   
    </div>
</section>

<section class="" id="articles">
</section>

<section class="w-full mt-[10vh]">
	<div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
		<a rel="noopener noreferrer" href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 bg-white shadow-md rounded-xl">
			<img src="https://source.unsplash.com/random/480x360" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7">
			<div class="p-6 space-y-2 lg:col-span-5">
				<h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster tincidunt reprimique ad pro</h3>
				<span class="text-xs">February 19, 2021</span>
				<p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert putent doctus id.</p>
			</div>
		</a>
		<div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-white shadow-md rounded-xl">
				<img role="presentation" class="object-cover w-full rounded h-44" src="https://source.unsplash.com/random/480x360?1">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs">January 21, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-white shadow-md rounded-xl">
				<img role="presentation" class="object-cover w-full rounded h-44" src="https://source.unsplash.com/random/480x360?2">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs">January 22, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-white shadow-md rounded-xl">
				<img role="presentation" class="object-cover w-full rounded h-44" src="https://source.unsplash.com/random/480x360?3">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs">January 23, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-white shadow-md rounded-xl hidden sm:block">
				<img role="presentation" class="object-cover w-full rounded h-44" src="https://source.unsplash.com/random/480x360?4">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs">January 24, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-white shadow-md rounded-xl hidden sm:block">
				<img role="presentation" class="object-cover w-full rounded h-44" src="https://source.unsplash.com/random/480x360?5">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs">January 25, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-white shadow-md rounded-xl hidden sm:block">
				<img role="presentation" class="object-cover w-full rounded h-44" src="https://source.unsplash.com/random/480x360?6">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
					<span class="text-xs">January 26, 2021</span>
					<p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
				</div>
			</a>
		</div>
		<div class="flex justify-center">
			<button type="button" class="px-6 py-3 text-sm rounded-md hover:underline bg-white shadow-md rounded-xl">Load more posts...</button>
		</div>
	</div>
</section>
@endsection

