@extends(
  "layouts.main-new",
  [
    "title" => "Berbinar Insightful Indonesia",
    "active" => "Arteri",
    "page" => "Arteri Detail",
  ]
)

@section("content")
  {{-- @dump($article) --}}
  <section class="relative mb-12 h-full w-full overflow-hidden px-4 pt-24 lg:px-14">
    {{-- heading --}}
    <div class="flex h-full w-full flex-col items-center justify-center">
      <div class="mb-4 flex w-full flex-wrap items-center justify-center gap-4">
        @php
          $background = ["#FD9399D9", "#7F72D4", "#B17F59", "#C7D9DD", "#5C7285"];
        @endphp

        @foreach ($article->category as $category)
          {{-- color for category ? --}}
          <span
            class="rounded-xl px-3 py-1 text-sm text-white lg:text-lg"
            style="background-color: {{ $background[$loop->iteration - 1] }}"
          >
            {{ $category }}
          </span>
        @endforeach
      </div>
      <h1 class="mb-4 text-center text-xl font-bold text-slate-900 md:text-2xl lg:text-4xl">
        {{ $article->title }}
      </h1>
      <div class="mb-8 hidden w-full items-center justify-center gap-2 lg:flex">
        <img
          src="{{ asset("assets/images/landing/karir/profile-dummy.jpeg") }}"
          alt="profile dummy"
          class="size-6 rounded-full object-cover"
        />
        <span class="text-slate-700">Talitha Dwi Arini</span>
        <span class="text-slate-700">&bull;</span>
        <span class="text-slate-700">14 Februari 2025</span>
      </div>
      <img
        src="{{ asset("assets/images/landing/arteri/arteribannerDummy.png") }}"
        alt="dummy image cover"
        class="mb-4 aspect-video rounded-xl object-cover"
      />
      {{-- [MOBILE] published_at and author --}}
      <div class="mb-8 flex w-full items-center justify-between lg:hidden">
        <span class="text-sm text-slate-700">{{ $article->published_at }}</span>
        <span class="flex items-center justify-start gap-2">
          <img
            src="{{ asset("assets/images/landing/karir/profile-dummy.jpeg") }}"
            alt="profile dummy"
            class="size-5 rounded-full object-cover"
          />
          <span class="text-sm text-slate-700">{{ $article->author }}</span>
        </span>
      </div>
    </div>

    <div class="mb-4 flex w-full flex-col items-center justify-center">
      <article class="prose prose-sm md:prose-base lg:prose-lg max-w-none">
        {!! $article->body !!}
      </article>
    </div>
  </section>
@endsection
