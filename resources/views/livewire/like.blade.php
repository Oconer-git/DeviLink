<div class="inline-block">
    <!-- like form -->
    <form wire:submit.prevent="toggleLike" class="inline-block">
        @csrf
        <input type="hidden" wire:model="post_id">
        <button type="submit">
            @if ($liked)
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 bg-purple-700 rounded-full p-[2px] inline text-sky-100 hover:bg-red-700 fill-current" viewBox="0 -960 960 960" fill="#5f6368"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 rounded-full p-[2px] inline text-sky-600 hover:text-purple-700 fill-current" viewBox="0 -960 960 960" fill="#5f6368"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
            @endif
        </button>
    </form>

    <!-- number of likes -->
     @if($is_profile)
        <p class="ext-xs text-cyan-600 text-xs">
            {{ $likes_post }}
        </p>
    @else
    <button id="show_likes" class="inline align-bottom">
        <p class="text-gray-600 text-xxs md:text-sm hover:text-blue-600 hover:underline hover:underline-offset-1">
            {{ $likes_post }}
        </p>
    </button>
    @endif
</div>




