@include('partials.header')
    <!-- navbar section -->
    <x-navbar></x-navbar>   
    <!-- main content -->
    <div class="bg-gradient-to-l from-gray-200 to-gray-100/10 w-full mx-auto pt-[70px] px-4 pb-24"> 
        <!-- profile options and settings  -->
        <div class="fixed hidden px-4 py-3 top-18 md:w-3/12 md:block lg:w-3/12 align-top">
            <section class="border-l-4 border-purple-300 pl-2 mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current text-purple-500 inline" viewBox="0 -960 960 960"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>
                <a class="text-2xl text-gray-400 font-semibold mb-2 inline hover:text-purple-600 align-middle">Home</a>
            </section>
            <section class="border-l-4 border-purple-300 pl-2 mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current text-lightseagreen/70 inline" viewBox="0 -960 960 960"><path d="m260-260 300-140 140-300-300 140-140 300Zm220-180q-17 0-28.5-11.5T440-480q0-17 11.5-28.5T480-520q17 0 28.5 11.5T520-480q0 17-11.5 28.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                <a class="text-xl text-gray-400 font-semibold mb-2 inline hover:text-purple-600 align-middle">Explore</a>
            </section>
            <section class="border-l-4 border-purple-300 pl-2 mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current text-slate-400 inline" viewBox="0 -960 960 960"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/></svg>
                <a class="text-xl text-gray-400 font-semibold mb-2 inline hover:text-purple-600 align-middle">Settings</a>
            </section>
            <section class="border-l-4 border-purple-300 pl-2 mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current text-slate-400 inline" viewBox="0 -960 960 960"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
                <a class="text-xl text-gray-400 font-semibold mb-2 inline hover:text-purple-600 align-middle">Followings</a>
            </section>
            <section class="border-l-4 border-purple-300 pl-2 mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current text-slate-400 inline" viewBox="0 -960 960 960"><path d="M360-390q-21 0-35.5-14.5T310-440q0-21 14.5-35.5T360-490q21 0 35.5 14.5T410-440q0 21-14.5 35.5T360-390Zm240 0q-21 0-35.5-14.5T550-440q0-21 14.5-35.5T600-490q21 0 35.5 14.5T650-440q0 21-14.5 35.5T600-390ZM480-160q134 0 227-93t93-227q0-24-3-46.5T786-570q-21 5-42 7.5t-44 2.5q-91 0-172-39T390-708q-32 78-91.5 135.5T160-486v6q0 134 93 227t227 93Zm0 80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-54-715q42 70 114 112.5T700-640q14 0 27-1.5t27-3.5q-42-70-114-112.5T480-800q-14 0-27 1.5t-27 3.5ZM177-581q51-29 89-75t57-103q-51 29-89 75t-57 103Zm249-214Zm-103 36Z"/></svg>
                <a class="text-xl text-gray-400 font-semibold mb-2 inline hover:text-purple-600 align-middle">Profile</a>
            </section>
        </div>
        <!-- main contents scroll -->
        <main class=" w-full sm:w-8/12 md:w-5/12 lg:w-5/12 mx-auto">
            <!-- people section  -->
            <h1 class="mb-2 font-bold text-slate-500 text-xl">People</h1>
            <section class="bg-neutral-100 border-l-4 h-48 border-l-cyan-400 shadow-md drop-shadow-sm rounded-md mx-auto mb-2 py-5 px-2 overflow-y-auto small-scrollbar">
                @if($users != null)
                    @foreach ($users as $user)
                        <div class="flex justify-between items-center hover:bg-slate-200 p-2 rounded-md">
                            <section>
                                <figure class="inline-block align-middle">
                                    <img src="{{asset($user->profile_picture)}}" alt="{{$user->first_name}} {{$user->last_name}}" class="rounded-full inline w-10">
                                </figure>
                                <div class="inline-block align-middle">
                                    <p class="text-gray-600 font-semibold -mb-2">{{$user->first_name}} {{$user->last_name}}</p>
                                    <a href="/profile/{{$user->username}}" class="text-sm text-cyan-600">{{'@'.$user->username}}</a> <!-- in progress -->
                                </div>
                            </section> 
                            @livewire('follow',['liker_id' => $user->id, 'ifFollowed' => $user->ifFollowed])   
                        </div>
                
                    @endforeach
                    <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-12 mx-auto my-auto" alt="no comment picture">
                    <p class="text-xxs text-center text-gray-500">Wow that's all</p>
                @else
                    <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-12 mx-auto my-auto" alt="no comment picture">
                    <p class="text-xxs text-center text-gray-500">Wow such empty</p>
                @endif
            </section>
            <x-underline></x-underline>
            <!-- devilink posts loop divs -->
            <h2 class="mb-2 font-bold text-slate-500 text-xl">Relevant Posts</h2>
            @if($posts == null)
                <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-12 mx-auto my-auto" alt="no comment picture">
                <p class="text-xxs text-center text-gray-500">Wow such empty</p>
            @else
                @foreach ($posts as $post)
                    @if($post->id != null)
                        <div class="post bg-whitesmoke hover:bg-slate-100 hover:shadow-lg hover:shadow-slate-300 shadow-md drop-shadow-sm rounded-md mx-auto mb-2 pt-5 px-5 pb-3"
                            data-post-id="{{$post->id}}">
                            <!-- profile picture -->
                            <img src="{{ asset($post->profile_picture) }}" class="w-11 h-11 rounded-full border-2 shadow-md inline" alt="devilink logo">
                            <section class="inline-block align-top">
                                <p class="inline text-gray-600 font-medium">{{$post->first_name}} {{$post->last_name}}</p>
                                <a href="/profile/{{$post->username}}"class="inline  text-cyan-600 font-light text-sm">{{'@'.$post->username}}</a>
                                @if(!$post->skills->isEmpty())    
                                    @if(($post->is_global) == true)
                                        <svg xmlns="http://www.w3.org/2000/svg"  class="ml-1 fill-current w-4 h-4 inline text-purple-500" viewBox="0 -960 960 960" ><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-40-82v-78q-33 0-56.5-23.5T360-320v-40L168-552q-3 18-5.5 36t-2.5 36q0 121 79.5 212T440-162Zm276-102q20-22 36-47.5t26.5-53q10.5-27.5 16-56.5t5.5-59q0-98-54.5-179T600-776v16q0 33-23.5 56.5T520-680h-80v80q0 17-11.5 28.5T400-560h-80v80h240q17 0 28.5 11.5T600-440v120h40q26 0 47 15.5t29 40.5Z"/></svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg"  class="ml-1 fill-current w-4 h-4 inline text-green-500" viewBox="0 -960 960 960"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
                                    @endif
                                    <p class="inline text-gray-400 text-xs ml-1">{{$post->date_time}}</p>
                                    <!-- skill section -->
                                    <div class="-mt-2 w-full">
                                        @foreach ($post->skills as $skill)
                                            <figure class="inline-block">
                                                <p class="{{$skill->bg_color}} -mt-3 px-2 py-[1px] inline w-fit shadow-md drop-shadow-sm text-white text-center text-xxxs font-light rounded-full">
                                                    {{$skill->name}}
                                                </p>
                                            </figure>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="-mt-2 w-full">
                                        @if(($post->is_global) == true)
                                            <svg xmlns="http://www.w3.org/2000/svg"  class="ml-1 fill-current w-4 h-4 inline text-purple-500" viewBox="0 -960 960 960" ><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-40-82v-78q-33 0-56.5-23.5T360-320v-40L168-552q-3 18-5.5 36t-2.5 36q0 121 79.5 212T440-162Zm276-102q20-22 36-47.5t26.5-53q10.5-27.5 16-56.5t5.5-59q0-98-54.5-179T600-776v16q0 33-23.5 56.5T520-680h-80v80q0 17-11.5 28.5T400-560h-80v80h240q17 0 28.5 11.5T600-440v120h40q26 0 47 15.5t29 40.5Z"/></svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg"  class="ml-1 fill-current w-4 h-4 inline text-green-500" viewBox="0 -960 960 960"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
                                        @endif
                                        <p class="inline text-gray-400 text-xs">{{$post->date_time}}</p> 
                                    </div>          
                                @endif
                            </section>
                            <section class="mb-6">
                                <!-- content -->
                                <p class="ml-1 mt-2 mb-1 text-sm text-gray-800">{{$post->content}}</p>
                                <!-- image -->
                                @if ($post->image != null)
                                    <img src="{{ asset($post->image) }}" class="w-full border-2 rounded-md" alt="{{$post->first_name}}'s post">
                                @endif
                            </section>    
                            <x-underline></x-underline>
                            <div class="flex justify-between px-10">
                                <!-- like -->
                                <div class="livewire-component text-center">
                                    @livewire('like',['post_id' => $post->id, 'likes_post' => $post->likes, 'is_profile' => true, 'is_home' => true])
                                </div>
                                <!-- show comments -->
                                <div class="text-center pt-[4px]">
                                    <a href="/post/{{$post->id}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 fill-current text-gray-500 hover:text-yellow-600" viewBox="0 -960 960 960"><path d="M240-400h480v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM880-80 720-240H160q-33 0-56.5-23.5T80-320v-480q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v720ZM160-320h594l46 45v-525H160v480Zm0 0v-480 480Z"/></svg>
                                        <p class="text-cyan-600 text-xs -mt-[2.5px]">{{$post->comments}}</p>
                                    </a>
                                </div>
                                <!-- share or save -->
                                <div class="livewire-component text-center">
                                    @if(($post->is_global) == true)
                                        @livewire('share-post', ['post_id' => $post->id, 'shares' => $post->shares])
                                    @else
                                        @livewire('save-post',['post_id' => $post->id])
                                    @endif
                                </div>
                            </div>
                        </div>
                        <x-underline></x-underline>
                    @endif
                @endforeach
            @endif
           
            
        </main>
        <!-- People you might know section section -->
        <div class="z-5 fixed top-20 right-6 hidden md:w-3/12 md:block lg:w-3/12 align-top ">
            <div class="bg-gray-100 p-3 rounded-md shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-cyan-500 w-4 inline align-middle" viewBox="0 -960 960 960"><path d="M440-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T520-640q0-33-23.5-56.5T440-720q-33 0-56.5 23.5T360-640q0 33 23.5 56.5T440-560ZM884-20 756-148q-21 12-45 20t-51 8q-75 0-127.5-52.5T480-300q0-75 52.5-127.5T660-480q75 0 127.5 52.5T840-300q0 27-8 51t-20 45L940-76l-56 56ZM660-200q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Zm-540 40v-111q0-34 17-63t47-44q51-26 115-44t142-18q-12 18-20.5 38.5T407-359q-60 5-107 20.5T221-306q-10 5-15.5 14.5T200-271v31h207q5 22 13.5 42t20.5 38H120Zm320-480Zm-33 400Z"/></svg>
                <h2 class="text-sm text-gray-500 font-semibold mb-2 inline align-middle">People you might follow</h2>
                @if($suggest_users != null)
                    @foreach ($suggest_users as $user)
                        <section class="pl-1 mb-1 hover:bg-slate-200 p-1 rounded-lg flex group flex-col lg:flex-row items-center justify-between transition duration-300 ease-in-out">
                            <div class="flex items-start lg:items-center">
                                <img src="{{ asset($user->profile_picture) }}" class="w-9 h-9 rounded-full border-2 shadow-md inline-block align-middle transition duration-300 ease-in-out" alt="profile">
                                <div class="inline-block align-middle ml-2 transition duration-300 ease-in-out">
                                    <p class="text-gray-500 text-sm -mb-2 transition duration-300 ease-in-out">{{$user->first_name}} {{$user->last_name}}</p>
                                    <a href="/profile/{{$user->username}}" class="text-cyan-600 text-xs text-md font-light transition duration-300 ease-in-out">
                                        {{'@'.$user->username}}
                                    </a>           
                                </div>
                            </div>
                            @livewire('suggested-follow',['user_id' => $user->id, 'ifRequsted' => false])
                        </section>
                    @endforeach
                @else
                    <p class="text-xs text-gray-500 ml-2">No suggestions at the moment...</p>
                @endif
            </div>
            <div class="mt-4 border-l-4 border-purple-300 pl-2 -mb-2">
                    <h1 class="text-lg text-gray-500 font-semibold mb-2 inline align-middle">Trending Posts</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-400 w-6 inline align-middle"viewBox="0 -960 960 960"><path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/></svg>
            </div>
            <div class="pl-2 pr-12 py-3">
                @if ($trending_posts != null)
                    @foreach ($trending_posts as $post)
                        <section class="post w-full inline-block h-28 bg-cover rounded-lg shadow-sm mb-2" style="background-image: url('{{ asset($post->image) }}');"
                                 data-post-id="{{$post->id}}">
                            <article class="w-full h-full p-2 bg-black/80 text-white rounded-md">
                                <p class="font-semibold text-sm">{{$post->content}}</p>
                            </article>
                        </section>
                    @endforeach
                @else
                    <p class="text-xs text-gray-500 ml-2">No trending at the moment...</p>
                @endif

            </div>
        </div>
    </div>
    <x-colors_skills></x-colors_skills>

<!-- footer -->
@include('partials.footer')
