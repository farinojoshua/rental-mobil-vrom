<x-front-layout>

  <!-- Popular Cars -->
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-[29px]">
        @foreach ($bookings as $booking)
          <!-- Card -->
          <div class="card-popular">
            <div>
              <h5 class="text-lg text-dark font-bold mb-[2px]">
                {{ $booking->name }}
              </h5>
              <p class="text-sm font-normal text-secondary">
                {{ $booking->start_date }}
              </p>
              <p class="text-sm font-normal text-secondary">
                {{ $booking->end_date }}
              </p>
              <p class="text-sm font-normal text-secondary">
                {{ $booking->payment_status }}
              </p>
              <p class="text-sm font-normal text-secondary">
                {{ $booking->payment_method }}
              </p>
            </div>
          </div>
        @endforeach
    </div>

  <footer class="py-10 md:pt-[100px] md:pb-[70px] container">
    <p class="text-base text-center text-secondary">
      All Rights Reserved. Copyright BuildWith Angga 2023.
    </p>
  </footer>
</x-front-layout>
