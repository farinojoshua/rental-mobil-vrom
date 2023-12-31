<x-front-layout>

  <!-- Popular Cars -->
    <section class="bg-darkGrey" id="popularCars">
    <div class="container relative py-[100px]">
      <header class="mb-[30px]">
        <h2 class="font-bold text-dark text-[26px] mb-1">
          Pesanan Saya
        </h2>
      </header>

     @if ($bookings->count() == 0)
         <p class="text-xl">Kamu belum memesan apa-apa</p>
        @else
         <!-- Cars -->
       <div class="grid  gap-[29px]">
        @foreach ($bookings as $booking)
          <!-- Card -->
          <div class="card-popular">
            <div class="flex items-center justify-around">
              <h5 class="text-lg text-dark font-bold mb-[2px]">
                {{ $booking->name }}
              </h5>
              <p class="text-sm font-normal text-secondary">
                {{ $booking->item->name }}
              </p>
              <p class="text-sm font-normal text-secondary">
                {{ $booking->start_date }}
              </p>
              <p class="text-sm font-normal text-secondary">
                {{ $booking->end_date }}
              </p>
              <p class="text-sm font-normal text-secondary">
                {{ $booking->payment_status }}
              </p>
            </div>
          </div>
        @endforeach
        </div>
     @endif
    </div>
     </section>


  <footer class="py-10 md:pt-[100px] md:pb-[70px] container">
    <p class="text-base text-center text-secondary">
     2023 Copyright SetiaAbadi | Created by Farino Joshua
    </p>
  </footer>


</x-front-layout>
