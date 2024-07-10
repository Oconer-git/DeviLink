<form wire:submit.prevent="toggleFollow" class="mt-1 mb-4 md:mt-3">
    @csrf
    <input type="hidden" wire:model="user_id">
    @switch($ifFollowed)
        @case('following')
        <button type="submit" class="bg-green-600 group hover:bg-gray-600 hover:shadow-sm hover:shadow-purple-500 ease-in-out transition duration-700 text-white shadow-md rounded-full px-4 py-1 text-md md:text-lg md:py-2 md:px-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white w-5 inline align-middle" viewBox="0 -960 960 960"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
            <p class="inline group-hover:hidden align-middle">Following</p>
            <p class="hidden group-hover:inline align-middle">Unfollow</p>
        </button>
        @break
        @case('requested')
        <button type="submit" class="bg-gray-600 group hover:bg-red-800 hover:shadow-sm hover:shadow-purple-500 ease-in-out transition duration-700 text-white shadow-md rounded-full px-4 py-1 text-md md:text-lg md:py-2 md:px-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white w-5 inline align-middle" viewBox="0 -960 960 960"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
            <p class="inline group-hover:hidden align-middle">Requested</p>
            <p class="hidden group-hover:inline align-middle">Cancel</p>
        </button>
        @break
        @case('not_following')
        <button type="submit" class="bg-purple-400 hover:bg-purple-600 hover:shadow-sm hover:shadow-purple-500 text-white shadow-md rounded-full px-4 py-1 text-md md:text-lg md:py-2 md:px-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white w-5 inline align-middle" viewBox="0 -960 960 960"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
            <p class="inline align-middle">Follow</p>
        </button>
    @endswitch
</form>