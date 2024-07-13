<div class="w-full py-2 lg:pl-16 mx-auto px-10">
    <h3 class="font-semibold mb-1 mt-14 text-xl text-slate-400">Posts</h3>
<!-- devilink posts loop divs -->
    @foreach ($posts as $post)
        <div class="post bg-white hover:bg-slate-50 shadow-md drop-shadow-md rounded-md mb-6 px-6 pt-6 pb-3 w-full md:w-6/12"
            data-post-id="{{$post->id}}">
            <img src="{{ asset($user->profile_picture) }}" class="w-11 h-11 rounded-full border-2 shadow-md inline" alt="devilink logo">
            <section class="inline-block align-middle">
                <p class="inline text-gray-600 font-medium">{{$user->first_name}} {{$user->last_name}}</p>
                <a href="/profile/{{$user->username}}"class="inline  text-cyan-600 font-light text-sm">{{'@'.$user->username}}</a>
                @if(($post->is_global) == true)
                    <svg xmlns="http://www.w3.org/2000/svg"  class="ml-1 fill-current w-4 h-4 inline text-purple-500" viewBox="0 -960 960 960" ><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-40-82v-78q-33 0-56.5-23.5T360-320v-40L168-552q-3 18-5.5 36t-2.5 36q0 121 79.5 212T440-162Zm276-102q20-22 36-47.5t26.5-53q10.5-27.5 16-56.5t5.5-59q0-98-54.5-179T600-776v16q0 33-23.5 56.5T520-680h-80v80q0 17-11.5 28.5T400-560h-80v80h240q17 0 28.5 11.5T600-440v120h40q26 0 47 15.5t29 40.5Z"/></svg>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg"  class="ml-1 fill-current w-4 h-4 inline text-green-500" viewBox="0 -960 960 960"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
                @endif
                <p class="inline text-gray-400 text-xs">{{$post->date_time}}</p>
                @include('partials.comments_skills_load',['skills' => $user_skills])
            </section>
            <section class="mb-6">
                <!-- post text -->
                <p class="ml-1 mt-2 mb-1 text-sm text-gray-900">{{$post->content}}</p>
                @if($post->image != null)
                    <img src="{{ asset($post->image) }}" class="w-full md:w-5/12 border-2 rounded-md" alt="{{$user->fist_name}}'s post">
                @endif
            </section>    
            <x-underline></x-underline>
            <div class="flex justify-between px-12 md:px-2 md:justify-start ">
                <div class="text-center">
                    @livewire('like',['post_id' => $post->id, 'likes_post' => $post->likes, 'is_profile' => true])
                </div>
                <div class="text-center ml-0 md:ml-8 mt-[2.5px]">
                    <a href="/post/{{$post->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current text-gray-500 hover:text-yellow-600" viewBox="0 -960 960 960"><path d="M240-400h480v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM880-80 720-240H160q-33 0-56.5-23.5T80-320v-480q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v720ZM160-320h594l46 45v-525H160v480Zm0 0v-480 480Z"/></svg>
                    </a>
                    <!-- //total ammount of comments -->
                    <p class="text-cyan-600 text-xs">{{$post->comments}}</p> 
                </div>
                <button type="submit" class="text-center ml-0 md:ml-8 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current text-gray-500 hover:text-orange-600" viewBox="0 -960 960 960"><path d="m600-200-56-57 143-143H300q-75 0-127.5-52.5T120-580q0-75 52.5-127.5T300-760h20v80h-20q-42 0-71 29t-29 71q0 42 29 71t71 29h387L544-624l56-56 240 240-240 240Z"/></svg>                        
                    <p class="text-cyan-600 text-xs">325</p>
                </button>
            </div>
        </div>
    @endforeach
</div>