    <form wire:submit.prevent="toggleLike" class="mt-1 -ml-1 pl-4 relative">
        @csrf
        <input type="hidden" wire:model="reply_id">
        <button type="submit" class="mt-1 inline-block align-middle">
            @if($liked)
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-[20px] text-blue-900 hover:text-gray-500 hover:scale-95 duration-300" viewBox="0 -960 960 960"><path d="M715-130H315v-504l273-273 47 46q6.5 7.5 10.75 18.75T650-821v13l-43 174h228q29.5 0 52.25 22.75T910-559v78q0 7-1.25 14.75T905-452L787-177q-8.5 20-29.25 33.5T715-130ZM240-634v504H91v-504h149Z"/></svg> 
            @else
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-[18px] text-gray-900 hover:text-blue-600 hover:scale-110 duration-300" viewBox="0 -960 960 960"><path d="M715-130H285v-504l273-273 47 46q6.5 7.5 10.75 18.64Q620-831.21 620-821v13l-43 174h258q29.5 0 52.25 22.75T910-559v78.06q0 6.83-1.5 14.63Q907-458.5 905-452L787-177q-8.5 20-29.25 33.5T715-130Zm-355-75h357l118-274.5V-559H482l52.5-218L360-602.5V-205Zm0-397.5V-205v-397.5ZM285-634v75H166v354h119v75H91v-504h194Z"/></svg>
            @endif
        </button>
        @if($reply_likes > 1)
            <span class="inline align-bottom text-xxs -mt-1 text-blue-800">{{$reply_likes.' likes'}}</span>
        @else
            <span class="inline align-bottom text-xxs -mt-1 text-blue-800">{{$reply_likes.' like'}}</span>
        @endif
    </form>
