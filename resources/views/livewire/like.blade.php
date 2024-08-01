<div class="inline-block relative">
    <!-- like form -->
    <form wire:submit.prevent="toggleLike" class="inline-block">
        @csrf
        <input type="hidden" wire:model="post_id">
        <button type="submit" class="group">
            @if($liked)
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-[23px] drop-shadow-lg shadow-blue-500 text-sky-500 group-hover:text-gray-400 group-hover:scale-95 duration-300" viewBox="0 -960 960 960"><path d="M715-130H315v-504l273-273 47 46q6.5 7.5 10.75 18.75T650-821v13l-43 174h228q29.5 0 52.25 22.75T910-559v78q0 7-1.25 14.75T905-452L787-177q-8.5 20-29.25 33.5T715-130ZM240-634v504H91v-504h149Z"/></svg> 
            @else
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-[23px] text-gray-900 group-hover:text-blue-600 group-hover:scale-110 duration-300" viewBox="0 -960 960 960"><path d="M715-130H285v-504l273-273 47 46q6.5 7.5 10.75 18.64Q620-831.21 620-821v13l-43 174h258q29.5 0 52.25 22.75T910-559v78.06q0 6.83-1.5 14.63Q907-458.5 905-452L787-177q-8.5 20-29.25 33.5T715-130Zm-355-75h357l118-274.5V-559H482l52.5-218L360-602.5V-205Zm0-397.5V-205v-397.5ZM285-634v75H166v354h119v75H91v-504h194Z"/></svg>
            @endif
        </button>
    </form>
    <!-- number of likes -->
     @if(!$is_view_post)
        <p class="text-cyan-600 text-xs inline align-middle">
            {{ $likes_post }}
        </p>
    @else
        <button id="show_likes" class="inline align-middle">
            <p class="text-gray-600 text-xxs md:text-sm hover:text-blue-600 hover:underline hover:underline-offset-1">
                {{ $likes_post }}
            </p>
        </button>
    @endif
</div>




