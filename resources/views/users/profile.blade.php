@include('partials.header',['title' => 'profile'])
<x-navbar></x-navbar>
<div class="bg-neutral-100 block w-full lg:w-5/12 lg:top-0 lg:right-0 lg:h-screen lg:fixed pt-20 pb-10 px-10 drop-shadow-md">
    <!-- profile -->
    <main class="inline-block w-full border-r-4 mt-1 border-r-violet-300/80">
        <!-- profile picture -->
        <section class="mx-auto inline-block">
            <figure class="md:p-4 bg-white rounded-full border-2 border-purple-800  p-1 ">
                <img src="{{ asset($user->profile_picture) }}" class="w-24 h-24 md:w-34 md:h-34 rounded-full shadow-md" alt="profile">
            </figure>
        </section>    
        <!-- name and followers -->
        <figure class="inline-block align-top pt-1 ml-2 mt-2">
            <h1 class="inline text-gray-600 font-lightbold text-xl md:text-3xl">{{$user->first_name}} {{$user->last_name}}</h1>
            <a href="/profile/{{$user->username}}"class="block text-cyan-600 font-light text-md md:text-xl">{{'@'.$user->username}}</a>
            <form action="" class="mt-1 mb-4 md:mt-3">
                <button type="submit" class="bg-purple-400 hover:bg-purple-600 hover:shadow-sm hover:shadow-purple-500 text-white shadow-md rounded-full px-4 py-1 text-md md:text-lg md:py-2 md:px-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white w-5 inline align-middle" viewBox="0 -960 960 960"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
                    <p class="inline align-middle">Follow</p>
                </button>
            </form>
            <button id="show_followings" class="inline text-xs md:text-sm mr-1">
                <span class="font-semibold text-base hover:underline hover:underline-offset-2 hover:text-cyan-700">{{$followings->count()}}</span>
                followings
            </button>
            <button id="show_followers" class="inline text-xs md:text-sm mr-1">
                <span class="font-semibold text-base hover:underline hover:underline-offset-2 hover:text-cyan-700">{{$followers->count()}}</span>
                followers
            </button>
            <p class="inline text-xs md:text-sm">
                <span class="font-semibold text-base">
                    {{$likes}}
                </span> 
                likes
            </p>
        </figure>
    </main>
    <!-- skills section-->
    <section class="ml-0 p-1 w-42 mt-2">
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
@if (!$posts->isEmpty())
    <!-- load all the posts of user here -->
   @include('partials.posts_profile',['posts' => $posts, 
                                      'user' => $user, 
                                      'user_skills' => $user_skills
                                    ])
@else
    <div class="w-full py-24 md:py-2 lg:pl-16 mx-auto px-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700/40 w-1/2 md:text-left md:w-80 md:mt-24 mx-auto md:mx-0 md:ml-24" viewBox="0 -960 960 960"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm40-80h480L570-480 450-320l-90-120-120 160Zm-40 80v-560 560Z"/></svg>
        <p class="text-center -mt-4 md:text-left md:ml-52 font-extrabold text-gray-700/30">No posts yet</p>
    </div>
@endif
<!-- modal for showing followers -->
@include('partials.followers_modal', ['followers' => $followers])
<!-- modal for showing followers -->
@include('partials.followings_modal', ['followings' => $followings])
<x-colors_skills></x-colors_skills>
@include('partials.footer')
