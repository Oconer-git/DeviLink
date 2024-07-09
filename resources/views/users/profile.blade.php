@include('partials.header',['title' => 'profile'])
<x-navbar></x-navbar>
<div class="bg-whitesmoke block w-full lg:w-6/12 lg:top-0 lg:right-0 lg:h-screen lg:fixed pt-20 pb-10 px-10 drop-shadow-md">
    <!-- profile -->
    <main class="inline-block w-full lg:rounded-full border-r-4 border-r-violet-300/80">
        <!-- profile picture -->
        <section class="mx-auto inline-block">
            <figure class="md:p-4 bg-white rounded-full border-2 border-purple-300  p-1 ">
                <img src="{{ asset($user->profile_picture) }}" class="w-24 h-24 md:w-44 md:h-44 rounded-full shadow-md" alt="profile">
            </figure>
        </section>    
        <!-- name and followers -->
        <figure class="inline-block align-top pt-1 ml-2 md:pt-9">
            <h1 class="inline text-gray-600 font-lightbold text-xl md:text-3xl">{{$user->first_name}} {{$user->last_name}}</h1>
            <a href="/profile/{{$user->username}}"class="block text-cyan-600 font-light text-md md:text-xl">{{'@'.$user->username}}</a>
            <form action="" class="mt-1 mb-4 md:mt-3">
                <button type="submit" class="bg-sky-400 hover:bg-blue-600 hover:shadow-md hover:shadow-blue-500 text-white shadow-md rounded-full px-4 py-1 text-md md:text-lg md:py-2 md:px-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white w-5 inline align-middle" viewBox="0 -960 960 960"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
                    <p class="inline align-middle">Follow</p>
                </button>
            </form>
            <button id="show_following" class="inline text-xs md:text-sm mr-1">
                <span class="font-semibold text-base hover:underline hover:underline-offset-2 hover:text-cyan-700">300</span>
                following
            </button>
            <button id="show_followers" class="inline text-xs md:text-sm mr-1">
                <span class="font-semibold text-base hover:underline hover:underline-offset-2 hover:text-cyan-700">{{$followers->count()}}</span>
                followers
            </button>
            <p class="inline text-xs md:text-sm"><span class="font-semibold text-base">300</span> likes</p>
        </figure>
    </main>
    <!-- skills section-->
    <section class="ml-0 lg:ml-52 p-1 w-42 mt-2">
        <h3 class="text-gray-500 inline">Skills:</h3>
        @if ($user_skills != null)
            @foreach ($user_skills as $user_skill)
                <p class="{{$user_skill['bg_color']}} px-2 py-[1px] inline w-fit shadow-md drop-shadow-sm text-white text-center text-xs font-light rounded-full">{{$user_skill['name']}}</p>
            @endforeach
        @endif
    </section>
        <!-- about modal -->
    <section class="block w-full align-top p-2">
        <article>
            <h2 class="text-cyan-600 font-semibold text-xl inline-block align-middle">About</h2>
            @if($user->about)
                <p class="text-gray-800 text-md">{{$user->about}}</p>
            @else
                <div class="mt-2">
                    <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-8 inline" alt="no comment picture">
                    <p class="inline align-bottom text-sm mt-4 text-gray-500">Wow such empty</p>
                </div>
            @endif
        </article>
    </section>
</div>
<!-- posts and shared -->
<div class="w-full py-2 mx-auto lg:pl-28 px-10 bg-gradient-to-b from-sky-300 to-neutral-500">
    <h4 class="font-semibold mb-1 mt-16 text-xl text-slate-100/80">Posts</h4>
    
    <!-- devilink posts loop divs -->
    <div class="bg-whitesmoke border shadow-md drop-shadow-sm rounded-md mb-2 p-6 w-full md:w-1/3">
        <img src="{{ asset('storage/images/figure_about.png') }}" class="w-11 h-11 rounded-full border-2 shadow-md inline" alt="devilink logo">
        <section class="inline-block align-middle">
            <p class="inline text-gray-600 font-medium">Jacob Sartorius</p>
            <a href="#"class="inline  text-cyan-600 font-light text-sm">@JynkZi</a>
            <p class="inline text-gray-400 text-xs ml-1">9h ago</p>
        </section>
        <section class="mb-6">
            <p class="ml-1 mt-2 text-gray-500">Nah I'd win</p>
            <img src="{{ asset('storage/images/post1.jpeg') }}" class="w-full border-2 rounded-md" alt="devilink post">
        </section>    
        <x-underline></x-underline>
        <form action="" class="flex justify-between px-10">
            <button type="submit" class="mr-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg"  class="w-6 fill-current text-gray-500 hover:text-cyan-600" viewBox="0 -960 960 960"  fill="#5f6368"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
                <p class="text-cyan-600 text-xs">325</p>
            </button>
            <button type="submit" class="mr-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current text-gray-500 hover:text-yellow-600" viewBox="0 -960 960 960"><path d="M240-400h480v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM880-80 720-240H160q-33 0-56.5-23.5T80-320v-480q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v720ZM160-320h594l46 45v-525H160v480Zm0 0v-480 480Z"/></svg>
                <p class="text-cyan-600 text-xs">325</p>
            </button>
            <button type="submit" class="mr-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current text-gray-500 hover:text-orange-600" viewBox="0 -960 960 960"><path d="m600-200-56-57 143-143H300q-75 0-127.5-52.5T120-580q0-75 52.5-127.5T300-760h20v80h-20q-42 0-71 29t-29 71q0 42 29 71t71 29h387L544-624l56-56 240 240-240 240Z"/></svg>                        
                <p class="text-cyan-600 text-xs">325</p>
            </button>
        </form>
    </div>
    <x-underline></x-underline>
    <div class="bg-whitesmoke border shadow-md drop-shadow-sm rounded-md mb-2 p-6 w-full md:w-1/2 lg:w-1/3">
        <img src="{{ asset('storage/images/figure_about.png') }}" class="w-11 h-11 rounded-full border-2 shadow-md inline" alt="devilink logo">
        <section class="inline-block align-top">
            <p class="inline text-gray-600 font-medium">Jacob Sartorius</p>
            <a href="#"class="inline  text-cyan-600 font-light text-sm">@JynkZi</a>
            <p class="inline text-gray-400 text-xs ml-1">9h ago</p>
            <p class=" text-purple-500 text-xs font-semibold ml-1">Shared</p>

        </section>
        <section class="mb-6">
            <p class="ml-1 mt-2 text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim corporis alias molestias in ratione dolor iure nobis deleniti voluptatum animi autem voluptas, excepturi sunt? Illum sunt odit eum eos harum.
            Possimus velit mollitia quo ut quas excepturi atque? Reiciendis, dolorem similique libero inventore maxime dolore hic blanditiis quas nisi fuga dolorum tempora nulla praesentium natus, deleniti culpa. Temporibus, ut aut.
            Nemo dolore illo, vel numquam consectetur magni ut aperiam possimus ratione ea placeat natus dolorem, delectus assumenda hic cum, reiciendis rem provident? Quibusdam iure rem dolores mollitia atque culpa beatae?</p>
        </section>    
        <x-underline></x-underline>
        <form action="" class="flex justify-between px-10">
            <button type="submit" class="mr-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg"  class="w-6 fill-current text-gray-500 hover:text-cyan-600" viewBox="0 -960 960 960"  fill="#5f6368"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
                <p class="text-cyan-600 text-xs">325</p>
            </button>
            <button type="submit" class="mr-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current text-gray-500 hover:text-yellow-600" viewBox="0 -960 960 960"><path d="M240-400h480v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM880-80 720-240H160q-33 0-56.5-23.5T80-320v-480q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v720ZM160-320h594l46 45v-525H160v480Zm0 0v-480 480Z"/></svg>
                <p class="text-cyan-600 text-xs">325</p>
            </button>
            <button type="submit" class="mr-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current text-gray-500 hover:text-orange-600" viewBox="0 -960 960 960"><path d="m600-200-56-57 143-143H300q-75 0-127.5-52.5T120-580q0-75 52.5-127.5T300-760h20v80h-20q-42 0-71 29t-29 71q0 42 29 71t71 29h387L544-624l56-56 240 240-240 240Z"/></svg>                        
                <p class="text-cyan-600 text-xs">325</p>
            </button>
        </form>
    </div>
</div>
<!-- modal for showing followers -->
<div id="followers_modal" class="modal fixed hidden top-0 left-0 z-40 pt-20 bg-neutral-900/90 w-screen h-screen">
    <div class="bg-white w-11/12 md:w-5/12 max-width-6/12 h-96 rounded-md shadow-md my-auto overflow-y-auto small-scrollbar mx-auto p-4">
        <section class="flex justify-between">
            <figure class="pl-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current w-5 text-purple-400" viewBox="0 -960 960 960"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
                <p class="text-sm font-bold inline text-gray-400">Followers</p>
            </figure>
            <button class="close_modal inline-block align-middle">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-800" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
        </section>
        <x-underline></x-underline>
        @if(!$followers->isEmpty())
            @foreach ($followers as $follower)
                <div class="flex justify-between items-center mb-1 rounded-md hover:bg-slate-100 p-2">
                    <section>
                        <figure class="inline-block">
                            <img src="{{asset($follower->user_info->profile_picture)}}" alt="{{$follower->user_info->first_name}} {{$follower->user_info->last_name}}" class="rounded-full inline w-10">
                        </figure>
                        <p class="inline align-middle text-sm text-gray-700">{{$follower->user_info->first_name}} {{$follower->user_info->last_name}}</p>
                        <a href="/profile/{{$follower->user_info->username}}" class=" text-xxs text-cyan-600">{{'@'.$follower->user_info->username}}</a> <!-- in progress -->
                    </section> 
                    @livewire('follow',['liker_id' => $follower->user_info->id, 'ifFollowed' => $follower->user_info->ifFollowed])   
                </div>
            @endforeach
        @else
            <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-16 mx-auto my-auto" alt="no comment picture">
            <p class="text-xxs text-center text-gray-500 mt-1">Wow no followers such as a loser.. pfftt..</p>
        @endif
    </div>
</div>
<x-colors_skills></x-colors_skills>
@include('partials.footer')
