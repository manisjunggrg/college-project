<x-app-layout>
    @for($i=1; $i < 8; $i++)
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-6xl mt-10">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48"
                         src="{{ asset('storage/products/men'.random_int(1, 7).'.jpg') }}"
                         alt="Man looking at item at a store">
                </div>

                <div class="p-5">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                        Product {{ $i + 1 }}</div>
                    <a
                            class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Ready for
                        bid </a>
                    <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet, consecrated advising elite. Curator
                        arc erat, accompany id imperiled et, portico at sem.</p>
                </div>

                <div class="p-5 w-1/2">
                    <div class="flex">
                        <div class="text-black-50 font-bold mr-5">
                            Total Bids
                            <p class="text-gray-500 mt-2">{{ random_int(0, 10) }}</p>
                        </div>

                        @php
                            $status = Arr::random(\Kathford\Lib\Product\Status::$current);
                            $initialBidPrice = random_int(10, 100);

                        @endphp

                        <div class="uppercase font-bold">
                            Status
                            <p class="text-{{ $status == 'Available' ? 'green' : 'red' }}-500 hover:bg-{{ $status == 'Available' ? 'green' : 'red' }}-500 text-white font-bold px-1 border-b-4  hover:text-white rounded mt-2">
                                {{ $status }}
                            </p>
                        </div>
                    </div>

                    <p class="text-gray-600 mt-6">End Date and Time</p>
                    <p class="font-bold">{{ now() }}</p>

                </div>

                <div class="p-5 w-1/4">
                    <div class="text-black-50 font-bold text-xl mb-3">
                        ${{ $initialBidPrice }}.00
                    </div>

                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border-b-4 border-blue-400 hover:border-blue-500 rounded mb-3 sm:text-center">
                        View Detail
                    </button>

                   @livewire('create-bid', ['status' => $status])

                </div>
            </div>
        </div>
    @endfor


    <x-confirmation-modal>

        <form wire:submit.prevent="submit">

            <x-slot name="header">
                <h3>Bid Confirmation</h3>
            </x-slot>

            <x-slot name="body">
                <div class="mb-4">
                    {!! Form::number('bid_amount', null, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder' => 'Bid Amount', 'wire:modal' => 'bidAmount']) !!}
                    <p class="text-red-500 text-lg italic mt-1">Enter More than starting Bid amount</p>
                </div>
            </x-slot>

            <x-slot name="footer">
                <a href="#"
                   class="bg-red-400 hover:bg-red-500 text-sm uppercase py-2 px-4 rounded-md text-white transition-all duration-200">Cancel</a>
                <x-button type="submit">Continue</x-button>
            </x-slot>

        </form>
    </x-confirmation-modal>

</x-app-layout>
