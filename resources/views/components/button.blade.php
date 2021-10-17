<button class="
@if($attributes['type'] == 'submit')
        bg-blue-400 hover:bg-blue-500
     @elseif($attributes['type'] == 'cancel')
        bg-gray-400 hover:bg-gray-500
     @else
        bg-green-400 hover:bg-green-500
@endif
        text-sm uppercase py-2 px-4 rounded-md text-white transition-all duration-200">

    {{ $slot }}
</button>
