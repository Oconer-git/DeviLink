@include('partials.header',['background' => 'bg-white'])
    <!-- navbar section -->
    <x-navbar></x-navbar>
    <!-- main content -->
    <div class="bg-white w-full mx-auto pt-[70px] px-4 pb-24"> 
        <!-- profile options and settings  -->
        <x-sidebar></x-sidebar>
        <!-- main contents scroll -->
        <main class="w-full py-2 sm:w-8/12 md:w-5/12 lg:w-7/12 lg:ml-56 mx-auto pr-0 lg:pl-4 lg:pr-20 lg:border-l-2 border-l-gray-400/20">
            <!-- people section  -->
            <h1 class="mb-2 font-bold text-slate-500 text-xl">People</h1>
            @if($users != null)
                <section class="bg-neutral-100 border-l-4 max-h-48 border-l-teal-400 rounded-md mx-auto mb-2 py-5 px-2 overflow-y-auto small-scrollbar">
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
            @if($posts->isEmpty())
                <div class="full h-96">
                    <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-12 mx-auto" alt="no comment picture">
                    <p class="text-xxs text-center text-gray-500">Wow such empty</p>
                </div>
            @else
                @foreach ($posts as $post)
                    @if($post->id != null)
                    <div class="post hover:bg-slate-100 hover:shadow-md rounded-md mx-auto mb-2 pt-5 px-5 pb-3"
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
                        <section class="mb-2">
                            <!-- content -->
                            <p class="ml-1 mt-2 mb-1 text-sm text-gray-800 break-words">{{$post->content}}</p>
                            <!-- image -->
                            @if ($post->image != null)
                                <img src="{{ asset($post->image) }}" class="w-full border-2 rounded-md" alt="{{$post->first_name}}'s post">
                            @endif
                        </section>    
                        <div class="flex justify-between w-5/12 lg:px-2 md:w-3/12">
                            <!-- like -->
                            <div class="livewire-component text-center">
                                @livewire('like',['post_id' => $post->id, 'likes_post' => $post->likes])
                            </div>
                            <!-- show comments -->
                            <div class="text-center">
                                <a href="/post/{{$post->id}}" class="inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[23px] pt-[1px] fill-current text-gray-500 hover:text-yellow-600" viewBox="0 -960 960 960"><path d="M240-400h480v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM880-80 720-240H160q-33 0-56.5-23.5T80-320v-480q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v720ZM160-320h594l46 45v-525H160v480Zm0 0v-480 480Z"/></svg>
                                </a>
                                <p class="text-gray-400 text-xs inline align-middle">{{$post->comments}}</p>
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
            @include('partials.suggest_users',['suggest_users' => $suggest_users])
            <div class="mt-4 border-l-4 border-purple-300 pl-2 -mb-2">
                <h3 class="text-lg text-gray-500 font-semibold mb-2 inline align-middle">Trending Posts</h3>
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-400 w-6 inline align-middle"viewBox="0 -960 960 960"><path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/></svg>
            </div>
            <div class="pl-2 pr-12 py-3">
                @include('partials.trending_posts', ['trending_posts' => $trending_posts])
            </div>
        </div>
    </div>
    <x-colors_skills></x-colors_skills>

<!-- footer -->
@include('partials.footer')

