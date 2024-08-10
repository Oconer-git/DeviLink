<div class="inline-block">
    @if(!$if_saved)
    <form wire:submit.prevent ="toggleSave" class="inline-block group">
        @csrf   
        <input type="hidden" wire:model="post_id">
        <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[23px] fill-current text-gray-500 drop-shadow-sm group-hover:text-green-600 group-hover:scale-110" viewBox="0 -960 960 960" ><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg>
        </button>
    </form>
    @else
        <div class="inline-block">
            <p class="text-green-400 text-sm drop-shadow-sm font-semibold my-auto">pinned</p>
        </div>
    @endif
</div>

