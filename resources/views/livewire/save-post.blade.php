<div class="inline-block mt-1  text-center">
    @if(!$if_saved)
    <form wire:submit.prevent="toggleSave">
        <input type="hidden" wire:model="post_id">
        <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7  mx-auto fill-current text-gray-500" viewBox="0 -960 960 960" ><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg>
        </button>
    </form>
    @else
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7  mx-auto fill-current text-green-700 drop-shadow-md" viewBox="0 -960 960 960" ><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg>
            <p class="text-green-600 text-xxs mx-auto ">pinned</p>
        </div>
    @endif
</div>

