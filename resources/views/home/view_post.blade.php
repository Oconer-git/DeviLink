@include('partials.header',['background' => 'bg-white'])
    <!-- navbar section -->
    <x-navbar></x-navbar>   
    <!-- main content -->
    <div class="bg-white w-full mx-auto pt-[70px] px-4 pb-24"> 
        <!-- profile options and settings  -->
        <x-sidebar></x-sidebar>
        <!-- main contents scroll -->
        <main class="w-full sm:w-8/12 md:w-5/12 lg:w-7/12 lg:ml-56 mx-auto pr-0 lg:pl-4 lg:pr-20 lg:border-l-2 border-l-gray-400/20">
            <!-- people section  -->
            <!-- <button class="back mb-2 inline-block align-middle rounded-full hover:bg-slate-900 p-1 hover:scale-105 duration-300"> 
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 text-yellow-600 hover:text-gray-80 fill-current" viewBox="0 -960 960 960"><path d="M280-200v-80h284q63 0 109.5-40T720-420q0-60-46.5-100T564-560H312l104 104-56 56-200-200 200-200 56 56-104 104h252q97 0 166.5 63T800-420q0 94-69.5 157T564-200H280Z"/></svg>
            </button> -->
            <button id="back" class=" mb-2 text-gray-700 hover:bg-neutral-200 rounded-full relative inline-block align-middle p-1">        
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 fill-current" viewBox="0 -960 960 960" ><path d="M280-200v-80h284q63 0 109.5-40T720-420q0-60-46.5-100T564-560H312l104 104-56 56-200-200 200-200 56 56-104 104h252q97 0 166.5 63T800-420q0 94-69.5 157T564-200H280Z"/></svg>
            </button>
            <h1 class="mb-2 inline-block align-middle font-semibold text-slate-600 text-lg">Post</h1>
            @if($post->id != null)
                <div class="post bg-slate-100 rounded-md drop-shadow-sm mx-auto mb-2 pt-5 px-5 pb-3"
                    data-post-id="{{$post->id}}">
                    <!-- profile picture -->
                    <img src="{{ asset($post->profile_picture) }}" class="w-11 h-11 rounded-full border-2 shadow-md inline" alt="devilink logo">
                    <section class="inline-block align-top">
                        <p class="inline text-gray-600 font-medium">{{$post->first_name}} {{$post->last_name}}</p>
                        <a href="profile/{{$post->username}}"class="inline  text-cyan-600 font-light text-sm">{{'@'.$post->username}}</a>
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
                        @if(strlen($post->content) <= 78)
                            <p class="ml-1 mt-2 mb-1 text-lg text-gray-800 break-words">{{$post->content}}</p>
                        @else
                            <p class="ml-1 mt-2 mb-1 text-sm text-gray-800 break-words">{{$post->content}}</p>
                        @endif
                        <!-- image -->
                        @if ($post->image != null)
                            <img src="{{ asset($post->image) }}" class="w-full border-2 rounded-md" alt="{{$post->first_name}}'s post">
                        @endif
                    </section>    
                    <div class="flex justify-between w-5/12 lg:px-2 md:w-3/12">
                        <!-- like -->
                        <div class="livewire-component text-center">
                            @livewire('like',['post_id' => $post->id, 'likes_post' => $post->likes, 'is_profile' => true, 'is_home' => true])
                        </div>
                        <!-- show comments -->
                        <div class="text-center pt-[4px]">
                            <a href="/post/{{$post->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current text-gray-500 hover:text-yellow-600" viewBox="0 -960 960 960"><path d="M240-400h480v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM880-80 720-240H160q-33 0-56.5-23.5T80-320v-480q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v720ZM160-320h594l46 45v-525H160v480Zm0 0v-480 480Z"/></svg>
                                <p class="text-gray-400 text-xs -mt-[2.5px]">{{$post->comments}}</p>
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
                <!-- comments -->
                @if($comments->isEmpty())
                <div class="px-4 py-4 text-gray-800 lg:h-[350px] lg:overflow-y-auto small-scrollbar">
                @else
                <div class="px-4 text-gray-800 lg:h-screen lg:overflow-y-auto small-scrollbar">
                @endif
                    <!-- comment form textbox input -->
                    <form action="{{route('user.comment')}}" method="POST" class="w-full my-2 p-2 rounded-md shadow-sm text-sm border-2 text-gray-800" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <img src="{{ asset($profile_picture) }}" class="w-8 rounded-full border-2 inline-block shadow-md mr-1 align-top" alt="profile">
                        <input type="text" name="comment" id="comment" class="w-11/12 focus:outline-none inline-block bg-transparent mt-2" placeholder="Leave a comment..." oninput="autoResize(this)"></input>
                        <div class="flex flex-row justify-end">
                            <!-- //upload picture button -->
                            @error('comment')
                                <p class="text-red-900 text-xs w-44 mt-1 break-all">{{$message}}</p>
                            @enderror
                            <div class="flex items-center">
                                <input type="file" id="image" name="image" class="picture hidden" accept="image/*">
                                <label for="image">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-500 w-4 h-4 mr-1 hover:text-orange-800" viewBox="0 -960 960 960"><path d="M440-440ZM120-120q-33 0-56.5-23.5T40-200v-480q0-33 23.5-56.5T120-760h126l74-80h240v80H355l-73 80H120v480h640v-360h80v360q0 33-23.5 56.5T760-120H120Zm640-560v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80ZM440-260q75 0 127.5-52.5T620-440q0-75-52.5-127.5T440-620q-75 0-127.5 52.5T260-440q0 75 52.5 127.5T440-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Z"/></svg>
                                </label>
                            </div>
                            <!-- submit comment button -->
                            <button type="submit" class="w-6 h-6 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-sky-600 hover:text-blue-900 hover:shadow-xl" viewBox="0 -960 960 960"><path d="M120-160v-640l760 320-760 320Zm80-120 474-200-474-200v140l240 60-240 60v140Zm0 0v-400 400Z"/></svg>
                            </button>
                        </div>
                    </form>
                    <!-- picture preview -->
                    <img src="{{asset('storage/images/no_picture.jpg')}}"  alt="picture" class="hidden -mt-4 ml-12 mb-4 w-5/12 rounded-md outline-4 picture_preview">
                    
                    <article class="mb-2">
                        <!-- comment section -->
                        <!-- if no comment show an image -->
                        @if($comments->isEmpty())
                            <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-24 mx-auto my-auto" alt="no comment picture">
                            <p class="text-sm text-center mt-4 text-gray-500">No comments yet</p>
                        @else
                            @foreach($comments as $comment)
                            <section class="bg-gray-100 p-4 rounded-md">
                                    <img src="{{ asset($comment->user->profile_picture) }}" class="w-10 h-10 rounded-full border-2 shadow-md inline align-top" alt="profile">
                                    <div class="inline-block align-midde">
                                        <p class="inline text-gray-600 text-sm md:text-md font-medium">{{$comment->user->first_name}} {{$comment->user->last_name}}</p>
                                        <a href="/profile/{{$comment->user->username}}"class="inline text-cyan-600 text-xs md:text-md font-light">{{'@'.$comment->user->username}}</a>
                                        <p class="inline text-gray-500 text-xxs ml-1">{{$comment->date_time}}</p>
                                        @if(isset($comment->user->skills))
                                            @include('partials.comments_skills_load', ['skills' => $comment->user->skills])
                                        @endif
                                    </div>      
                                    <!--comment-->
                                    @if(strlen($comment->comment) > 70)
                                        <p class="mt-1 text-gray-700 text-sm px-4 break-words">{{$comment->comment}}</p> 
                                    @else
                                        <p class="mt-1 text-gray-700 px-4 break-words">{{$comment->comment}}</p> 
                                    @endif
                                    <!-- image -->
                                    @if($comment->image != null)
                                        <img src="{{ asset($comment->image) }}" class="w-full md:w-7/12 p-3 -mt-2 -mb-4 rounded-2xl" alt="image">
                                    @endif
                                    <!-- number of likes -->
                                    @livewire('like-comment',['comment_id' => $comment->id, 'comment_likes' => $comment->likes])
                                    <p class="inline-block align-middle text-sm mt-2">Reply</p>
                                </section>
                                <!-- replies -->
                                <section class="pl-6 pb-2">
                                    <!-- reply form -->
                                    <section class="px-2 flex flex-row align-middle mb-2">
                                        <img src="{{ asset($profile_picture) }}" class="w-9 h-9 mt-1 rounded-full border-2 shadow-md inline-block mr-1" alt="profile">
                                        <form action="{{route('user.reply')}}" method="POST" class="flex justify-between w-10/12 md:w-full mt-2 h-7 p-1 rounded-xl shadow-sm text-sm bg-sky-100 text-gray-800">
                                            @csrf
                                            <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                            <input type="text" name="reply" class="inline w-9/12 align-middle text-xs text-gray-600 pl-1 focus:outline-0 bg-sky-100" placeholder="Leave a reply...">
                                            <div class="flex flex-row justify-center">
                                                <!-- //upload picture button -->
                                                @error('reply')
                                                    <p class="text-red-900 text-xs w-44 mt-1">{{$message}}</p>
                                                @enderror
                                                <!-- submit comment button -->
                                                <button type="submit" class="w-6 h-6 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-sky-400 hover:text-blue-800 hover:shadow-xl" viewBox="0 -960 960 960"><path d="M120-160v-640l760 320-760 320Zm80-120 474-200-474-200v140l240 60-240 60v140Zm0 0v-400 400Z"/></svg>
                                                </button>
                                            </div>
                                        </form>
                                    </section>
                                    <!-- replies -->
                                    <div id="replies">
                                        @if(!$comment->replies->isEmpty())
                                            @foreach ($comment->replies as $reply)
                                                <section class= "pl-2 mb-4 border-l-2 border-l-gray-300">
                                                    <img src="{{ asset($reply->user->profile_picture) }}" class="w-9 h-9 rounded-full border-2 shadow-md inline align-top" alt="profile">
                                                    <div class="inline-block align-midde">
                                                        <p class="inline text-gray-600 text-xs md:text-md font-medium">{{$reply->user->first_name}} {{$reply->user->last_name}}</p>
                                                        <a href="/profile/{{$reply->user->username}}"class="inline text-cyan-600 text-xs md:text-md font-light">{{'@'.$reply->user->username}}</a>
                                                        <p class="inline text-gray-500 text-xxs ml-1">{{$reply->date_time}}</p>
                                                        @if(isset($reply->user->skills))
                                                            @include('partials.comments_skills_load', ['skills' => $reply->user->skills])
                                                        @endif
                                                    </div>      
                                                    <!--reply-->
                                                    <p class="mt-1 text-sm text-gray-700 px-4">
                                                        {{$reply->reply}}
                                                    </p> 
                                                    <!-- likes number of reply -->
                                                    @livewire('like-reply',['reply_id' => $reply->id, 'reply_likes' => $reply->likes])
                                                </section>
                                            @endforeach
                                        @endif
                                    </div>
                                </section>
                                <x-underline></x-underline>
                            @endforeach
                        @endif
                    </article>
                </div>
                @endif
        </main>
        <!-- People you might know section section -->
        <div class="z-5 fixed top-20 right-6 hidden md:w-3/12 md:block lg:w-3/12 align-top ">
            <div class="bg-gray-100 p-3 rounded-md">
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

