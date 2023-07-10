<x-front-layout>

  <!-- Popular Cars -->
  <section class="bg-darkGrey" id="popularCars">
    <div class="container relative py-[100px]">
      <header class="mb-[30px]">
        <h2 class="font-bold text-dark text-[26px] mb-1">
          Catalog
        </h2>
      </header>

      <!-- Cars -->
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-[29px] mb-5">
           <div class="card-popular">
            <div>
              <h5 class="text-lg text-dark font-bold mb-[2px]">
                All Type
              </h5>
              <a href="{{ route('front.catalog') }}" class="absolute inset-0"></a>
            </div>
          </div>
        @foreach ($types as $type)
          <!-- Card -->
          <div class="card-popular">
            <div>
              <h5 class="text-lg text-dark font-bold mb-[2px]">
                {{ $type->name }}
              </h5>
              <a href="{{ route('front.catalog.detail', $type->slug) }}" class="absolute inset-0"></a>
            </div>
          </div>
        @endforeach
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-[29px]">
        @foreach ($items as $item)
          <!-- Card -->
          <div class="card-popular">
            <div>
              <h5 class="text-lg text-dark font-bold mb-[2px]">
                {{ $item->name }}
              </h5>
              <p class="text-sm font-normal text-secondary">
                {{ $item->type ? $item->type->name : '-' }}
              </p>
              <a href="{{ route('front.detail', $item->slug) }}" class="absolute inset-0"></a>
            </div>
            <img src="{{ $item->thumbnail }}" class="rounded-[18px] min-w-[216px] w-full h-[150px]" alt="">
            <div class="flex items-center justify-between gap-1">
              <!-- Price -->
              <p class="text-sm font-normal text-secondary">
                <span class="text-base font-bold text-primary">Rp.{{ $item->price }}</span>/day
              </p>
              <!-- Rating -->
              <p class="text-dark text-xs font-semibold flex items-center gap-[2px]">
                ({{ $item->star }}/5)
                <img src="/svgs/ic-star.svg" alt="">
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="container relative py-[100px]">
    <header class="text-center mb-[50px]">
      <h2 class="font-bold text-dark text-[26px] mb-1">
        Frequently Asked Questions
      </h2>
      <p class="text-base text-secondary">Learn more about Vrom and get a success</p>
    </header>

    <!-- Questions -->
    <div class="grid md:grid-cols-2 gap-x-[50px] gap-y-6 max-w-[910px] w-full mx-auto">
      <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
         id="faq1">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            What if I crash the car?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden pt-4 max-w-[335px]" id="faq1-content">
          <p class="text-base text-dark leading-[26px]">
            Ipsum top talent busy making race that
            agreed both party. You can si amet lorem
            dolor get the rewards after winninng.
          </p>
        </div>
      </a>
      <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
         id="faq2">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            What if I crash the car?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden pt-4 max-w-[335px]" id="faq2-content">
          <p class="text-base text-dark leading-[26px]">
            Ipsum top talent busy making race that
            agreed both party. You can si amet lorem
            dolor get the rewards after winninng.
          </p>
        </div>
      </a>
      <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
         id="faq3">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            What if I crash the car?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden pt-4 max-w-[335px]" id="faq3-content">
          <p class="text-base text-dark leading-[26px]">
            Ipsum top talent busy making race that
            agreed both party. You can si amet lorem
            dolor get the rewards after winninng.
          </p>
        </div>
      </a>
      <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
         id="faq4">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            What if I crash the car?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden pt-4 max-w-[335px]" id="faq4-content">
          <p class="text-base text-dark leading-[26px]">
            Ipsum top talent busy making race that
            agreed both party. You can si amet lorem
            dolor get the rewards after winninng.
          </p>
        </div>
      </a>
      <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
         id="faq5">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            What if I crash the car?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden pt-4 max-w-[335px]" id="faq5-content">
          <p class="text-base text-dark leading-[26px]">
            Ipsum top talent busy making race that
            agreed both party. You can si amet lorem
            dolor get the rewards after winninng.
          </p>
        </div>
      </a>
      <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
         id="faq6">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            What if I crash the car?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden pt-4 max-w-[335px]" id="faq6-content">
          <p class="text-base text-dark leading-[26px]">
            Ipsum top talent busy making race that
            agreed both party. You can si amet lorem
            dolor get the rewards after winninng.
          </p>
        </div>
      </a>
    </div>
  </section>

  <footer class="py-10 md:pt-[100px] md:pb-[70px] container">
    <p class="text-base text-center text-secondary">
      All Rights Reserved. Copyright BuildWith Angga 2023.
    </p>
  </footer>
</x-front-layout>
