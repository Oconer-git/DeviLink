    <div>
        @if($accepted != null)
            @if($accepted == 'accepted')
                <div class="rounded-full bg-green-600 w-24 h-8 p-1 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-white inline" viewBox="0 -960 960 960"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                    <p class="text-xs text-green-200 inline">Accepted</p>
                </div>
            @else
                <div class="rounded-full bg-gray-600 w-24 h-8 p-1 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-white inline" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                    <p class="text-xs text-white inline">Rejected</p>
                </div>
            @endif
        @else
        <form wire:submit.prevent="submit" class="p-1 -mt-1">
            @csrf
            <input type="hidden" wire:model="follower_id">
            <p>{{$accepted}}</p>
            <label for="action" class="align-middle text-gray-500 text-xs">Accept?</label>
            <button wire:click.prevent="submit('accept')" class="inline-block align-middle p-1 bg-green-400 rounded-full group hover:bg-emerald-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-green-900 group-hover:text-white" viewBox="0 -960 960 960"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
            </button>
            <button wire:click.prevent="submit('reject')" class="inline-block align-middle p-1 bg-red-700 rounded-full group hover:bg-red-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-red-400 group-hover:text-gray-200" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
        </form>
        @endif
    </div>
