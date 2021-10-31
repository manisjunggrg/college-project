<x-app-layout>
    @for($i=0; $i < 9; $i++)
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-6xl mt-10">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset('assets/img.jpg') }}"
                         alt="Man looking at item at a store">
                </div>
                <div class="p-5">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                        Product {{ $i + 1 }}</div>
                    <a href="#ready-for-bid"
                       class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Ready for
                        bid </a>
                    <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                        arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                </div>
                <div class="p-5 w-1/2">
                    <div class="flex">
                        <div class="text-black-50 font-bold mr-5">
                            Total Bids
                            <p class="text-gray-500 mt-2">{{ random_int(0, 10) }}</p>
                        </div>

                        @php
                        $status = Arr::random(\Kathford\Lib\Product\Status::$current);
                        @endphp
                        <div class="uppercase font-bold">
                            Status
                            <p class="text-{{ $status == 'Available' ? 'green' : 'red' }}-500 font-bold mt-2">
                                {{ $status }}
                            </p>
                        </div>
                    </div>

                    <p class="text-gray-600 mt-6">End Date and Time</p>
                    <p class="font-bold">{{ now() }}</p>

                </div>

                <div class="p-5 w-1/4">
                    <div class="text-black-50 font-bold text-xl mb-3">
                        ${{ random_int(10, 100) }}.00
                    </div>

                    <button class="bg-blue-600  text-sm uppercase py-2 px-4 rounded-md text-white transition-all duration-200 mb-3 w-25">View Detail</button>

                    <button class="bg-red-600  text-sm uppercase py-2 px-4 rounded-md text-white transition-all duration-200 w-25">Bid Now</button>
                </div>
            </div>
        </div>
    @endfor

    {{-- modal --}}
    <x-confirmation-modal hashName="ready-for-bid">

        <x-slot name="header">
            <h3>Are you sure ?</h3>
        </x-slot>

        <x-slot name="body">
            <p>You will loose your entire amount</p>
        </x-slot>

        <x-slot name="footer">
            <a href="#retry-modal"
               class="bg-red-400 hover:bg-red-500 text-sm uppercase py-2 px-4 rounded-md text-white transition-all duration-200">Retry</a>
            <x-button type="submit">Continue</x-button>
        </x-slot>

    </x-confirmation-modal>

    <x-confirmation-modal hashName="retry-modal">

        <x-slot name="header">
            <h3>You are another modal</h3>
        </x-slot>

        <x-slot name="body">
            <p>I am another modal</p>
        </x-slot>

        <x-slot name="footer">
            <a href="#"
               class="bg-red-400 hover:bg-red-500 text-sm uppercase py-2 px-4 rounded-md text-white transition-all duration-200">Cancel</a>
            <x-button type="submit">Continue</x-button>
        </x-slot>

    </x-confirmation-modal>

</x-app-layout>
