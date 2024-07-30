    <form wire:submit.prevent="toggleLike" class="mt-1 -ml-1 pl-4">
        @csrf
        <input type="hidden" wire:model="reply_id">
        <button type="submit" class="mt-1 inline-block align-middle">
            @if($liked) 
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 text-sky-200 bg-purple-800 hover:bg-red-500 p-1 rounded-full" viewBox="0 -960 960 960">
                    <path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/>
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 text-white bg-sky-600 hover:bg-sky-400 p-1 rounded-full" viewBox="0 -960 960 960">
                    <path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/>
                </svg>
            @endif
        </button>
        @if($reply_likes > 1)
            <span class="inline align-bottom text-xxs -mt-1 text-blue-800">{{$reply_likes.' likes'}}</span>
        @else
            <span class="inline align-bottom text-xxs -mt-1 text-blue-800">{{$reply_likes.' like'}}</span>
        @endif
    </form>
