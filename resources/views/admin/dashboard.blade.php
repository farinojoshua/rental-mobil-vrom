<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-8">
                <div class="p-5 bg-red-400">
                        <h1 class="text-2xl font-bold">Total Brand</h1>
                        <p class="mt-4 text-6xl">{{ $brands }}</p>

                </div>
                <div class="p-5 bg-blue-400">
                        <h1 class="text-2xl font-bold">Total Type</h1>
                        <p class="mt-4 text-6xl">{{ $types }}</p>
                </div>
                <div class="p-5 bg-yellow-300">
                        <h1 class="text-2xl font-bold">Total Item</h1>
                        <p class="mt-4 text-6xl">{{ $items }}</p>
                </div>
                <div class="p-5 bg-green-300">
                        <h1 class="text-2xl font-bold">Total Booking</h1>
                        <p class="mt-4 text-6xl">{{ $bookings }}</p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
