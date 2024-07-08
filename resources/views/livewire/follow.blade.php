<form wire:submit.prevent="toggleFollow">
    @csrf
    <input type="hidden" wire:model="liker_id">
    @switch($ifFollowed)
        @case('following')
            <button type="submit" class="px-1 h-8 w-28 bg-green-500 group hover:bg-neutral-900 transition duration-500 ease-in-out rounded-md shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-current text-blue-300 group-hover:text-white inline" viewBox="0 -960 960 960"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
                <p class="inline text-sm text-white group-hover:hidden">Following</p>
                <p class="hidden text-sm text-white group-hover:inline">Unfollow</p>
            </button>
        @break

        @case('requested')
            <button type="submit" class="px-1 h-8 w-28 bg-violet-500 group hover:bg-red-900 transition duration-500 ease-in-out rounded-md shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-current text-blue-300 group-hover:text-white inline" viewBox="0 -960 960 960"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
                <p class="inline text-sm text-white group-hover:hidden">Requested</p>
                <p class="hidden text-sm text-white group-hover:inline">Cancel</p>
            </button>
        @break

        @case('not_following')
            <button type="submit" class="px-1 h-8  w-28 bg-sky-500 group hover:bg-blue-700 transition duration-500 ease-in-out rounded-md shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-current text-blue-300 group-hover:text-white inline" viewBox="0 -960 960 960"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
                <p class="inline text-sm text-white">Follow</p>
            </button>
        @break
    @endswitch
</form>