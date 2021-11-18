<a wire:click="popupBidForm"
   class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border-b-4 border-red-400 hover:border-red-500 rounded md:max-w-6xl">
    {{ $status == 'Available' ? 'Bid Now' : 'See History' }}
</a>
