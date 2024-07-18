<div class="inline-block mt-1  text-center">
    @if(!$if_shared)
    <form wire:submit.prevent ="toggleShare">
        <input type="hidden" wire:model="post_id">
        <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 fill-current text-gray-500 hover:text-orange-600" viewBox="0 -960 960 960"><path d="m600-200-56-57 143-143H300q-75 0-127.5-52.5T120-580q0-75 52.5-127.5T300-760h20v80h-20q-42 0-71 29t-29 71q0 42 29 71t71 29h387L544-624l56-56 240 240-240 240Z"/></svg>                         
        </button>
    </form>
        <p class="text-cyan-600 text-xs -mt-2">{{$shares}}</p>
    @else
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7  mx-auto fill-current text-orange-600" viewBox="0 -960 960 960"><path d="m600-200-56-57 143-143H300q-75 0-127.5-52.5T120-580q0-75 52.5-127.5T300-760h20v80h-20q-42 0-71 29t-29 71q0 42 29 71t71 29h387L544-624l56-56 240 240-240 240Z"/></svg>                         
            <p class="text-orange-600 text-xxs mx-auto ">shared</p>
        </div>
    @endif
</div>
