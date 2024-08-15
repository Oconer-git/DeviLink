<div id="followings_modal" class="modal fixed hidden top-0 left-0 z-40 pt-20 bg-neutral-900/90 w-screen h-screen">
    <div class="bg-white w-11/12 md:w-5/12 max-width-6/12 rounded-md shadow-md my-auto mx-auto p-4">
        <section class="flex justify-between">
            <figure class="pl-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current w-5 text-cyan-400" viewBox="0 -960 960 960"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
                <p class="text-sm font-bold inline text-gray-400">Followings</p>
            </figure>
            <button class="close_modal inline-block align-middle">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-800" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
        </section>
        <x-underline></x-underline>
        <div class="overflow-y-auto small-scrollbar h-96 mx-auto p-1">
            @if(!$followings->isEmpty())
                @foreach ($followings as $following)
                    <div class="flex justify-between items-center mb-1 rounded-md hover:bg-slate-100 p-2">
                        <section>
                            <figure class="inline-block">
                                <img src="{{asset($following->user_info->profile_picture)}}" alt="{{$following->user_info->first_name}} {{$following->user_info->last_name}}" class="rounded-full inline w-10">
                            </figure>
                            <p class="inline align-middle text-sm text-gray-700">{{$following->user_info->first_name}} {{$following->user_info->last_name}}</p>
                            <a href="/profile/{{$following->user_info->username}}" class=" text-xxs text-cyan-600">{{'@'.$following->user_info->username}}</a> <!-- in progress -->
                        </section> 
                        @livewire('follow',['liker_id' => $following->user_info->id, 'ifFollowed' => $following->user_info->ifFollowed])   
                    </div>
                @endforeach
            @else
                <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-16 mx-auto my-auto" alt="no comment picture">
                <p class="text-xxs text-center text-gray-500 mt-1">Wow such empty... pfftt..</p>
            @endif
        </div>
    </div>
</div>