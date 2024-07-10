@include('partials.header')
    <!-- navbar section -->
    <x-navbar></x-navbar>

    <!-- main content -->
    <div class="bg-white w-full pt-16 px-4 pb-24"> 
        <!-- devilink post-->
        <section class="flex lg:justify-end px-2 md:px-5">
            <a href="/" class="shadow-sm mb-2">        
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 md:w-10 text-gray-800 bg-neutral-200 rounded-md  hover:text-gray-800 hover:bg-slate-300 fill-current" viewBox="0 -960 960 960" ><path d="M280-200v-80h284q63 0 109.5-40T720-420q0-60-46.5-100T564-560H312l104 104-56 56-200-200 200-200 56 56-104 104h252q97 0 166.5 63T800-420q0 94-69.5 157T564-200H280Z"/></svg>
            </a>
        </section>
        <!-- user post -->
        @if ($errors->any())
            <div class="w-38 xl:w-96 bg-red-100 border border-red-400 shadow-lg shadow-red-500 text-red-700 px-4 py-3 rounded fixed z-20 right-10 top-10" role="alert">
                <strong class="font-bold">Whoops!</strong>
                <span class="block sm:inline">There were some problems with your inputs. Try again</span>
            </div>
        @endif
        @error('comment_id')
            <div class="w-38 xl:w-96 bg-red-100 border border-red-400 shadow-lg shadow-red-500 text-red-700 px-4 py-3 rounded fixed z-20 right-10 top-10" role="alert">
                <strong class="font-bold">Whoops!</strong>
                <span class="block sm:inline">{{$message}}</span>         
            </div>
        @enderror
        <main class="mb-2 px-2 md:px-6 py-1 w-full block sm:mx-auto sm:w-8/12 md:w-8/12 lg:w-1/2 lg:inline-block">
            <img src="{{ asset($poster->profile_picture) }}" class="w-12 rounded-full border-2 shadow-md inline-block" alt="profile">
            <section class="inline-block align-top">
                <p class="inline text-gray-600 font-medium">{{$poster->first_name}} {{$poster->last_name}}</p>
                <a href="/profile/{{$poster->username}}" class="inline text-blue-600 hover:text-blue-700 text-sm font-light hover:drop-shadow-xl">{{'@'.$poster->username}} </a>
                <figure class="inline text-purple-500 ">
                    @if(($post->is_global) == true)
                        <svg xmlns="http://www.w3.org/2000/svg"  class="ml-4 fill-current w-4 h-4 inline" viewBox="0 -960 960 960" ><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-40-82v-78q-33 0-56.5-23.5T360-320v-40L168-552q-3 18-5.5 36t-2.5 36q0 121 79.5 212T440-162Zm276-102q20-22 36-47.5t26.5-53q10.5-27.5 16-56.5t5.5-59q0-98-54.5-179T600-776v16q0 33-23.5 56.5T520-680h-80v80q0 17-11.5 28.5T400-560h-80v80h240q17 0 28.5 11.5T600-440v120h40q26 0 47 15.5t29 40.5Z"/></svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg"  class="ml-4 fill-current w-4 h-4 inline" viewBox="0 -960 960 960"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
                    @endif
                    <p class="inline text-gray-400 text-xxs ml-0">{{$date_posted}}</p>
                </figure>
                <!-- //skills -->
                @if(isset($skills))
                    @include('partials.skills_load', ['skills' => $skills])
                @endif
            </section>
            <section class="mb-6">
                 <!-- publicity of post -->
                <p class="ml-1 mt-2 mb-1 text-sm text-gray-600">{{$post->content}}</p>
                <!-- image post -->
                @if($post->image)
                    <img src="{{ asset($post->image) }}" class="w-full lg:w-11/12 border-2 rounded-md" alt="devilink post">
                @endif
            </section>    
        </main>
        <!-- comment sidebar-->
        <aside class="bg-whitesmoke w-full pb-96 sm:pb-12 rounded-md block mx-auto mt-2 align-top border-t-2 border-t-purple-500 lg:w-comments lg:inline-block lg:border-t-0 lg:border-l-4  lg:border-l-purple-500 ">
            <!-- likes comments shares -->
            <section class="bg-gray-50 drop-shadow-sm border-b-2 rounded-lg px-8 py-2">
                <!-- likes of post -->
                 @livewire('like',['post_id' => $post->id, 'likes_post' => $likes_post])
                <!-- number of comments -->
                <figure class="inline-block ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 md:w-7 inline fill-current text-gray-400" viewBox="0 -960 960 960"><path d="M240-400h480v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM880-80 720-240H160q-33 0-56.5-23.5T80-320v-480q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v720ZM160-320h594l46 45v-525H160v480Zm0 0v-480 480Z"/></svg>
                    <p class="text-gray-600 text-xxs md:text-sm inline align-bottom">325</p>
                </figure>
                <!-- share button -->
                <form class="inline-block text-gray-500 hover:text-orange-600 ml-2">
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 md:w-7 inline fill-current " viewBox="0 -960 960 960"><path d="m600-200-56-57 143-143H300q-75 0-127.5-52.5T120-580q0-75 52.5-127.5T300-760h20v80h-20q-42 0-71 29t-29 71q0 42 29 71t71 29h387L544-624l56-56 240 240-240 240Z"/></svg>                        
                    </button>
                </form>
                <!-- number of shares -->
                <p class="text-gray-600 text-xxs md:text-sm inline align-bottom ">325</p>
            </section>
            <!-- comments -->
            <div class="px-4 py-4 text-gray-800 lg:h-screen lg:overflow-y-auto medium-scrollbar">
                <!-- comment form textbox input -->
                <section class="flex flex-row align-middle mb-6">
                    <img src="{{ asset($profile_picture) }}" class="w-11 h-11 rounded-full border-2 shadow-md inline-block mr-1" alt="profile">
                    <form action="{{route('user.comment')}}" method="POST" class="flex justify-between w-10/12 md:w-full mt-2 h-8 p-1 rounded-xl shadow-sm text-sm bg-sky-200 text-gray-800" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <input type="text" name="comment" class="inline w-9/12 align-middle text-gray-600 pl-1 focus:outline-0 bg-sky-200" placeholder="Leave a comment...">
                        <div class="flex flex-row justify-center">
                            <!-- //upload picture button -->
                            @error('comment')
                                <p class="text-red-900 text-xs w-44 mt-1">{{$message}}</p>
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
                </section>
                <!-- picture preview -->
                <img src="{{asset('storage/images/no_picture.jpg')}}"  alt="picture" class="hidden -mt-4 ml-12 mb-4 w-5/12 rounded-md outline-4 picture_preview">
                <article class="mb-2">
                    <!-- comment section -->
                    <!-- if no comment show an image -->
                    @if($comments->isEmpty())
                        <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-24 mx-auto my-auto" alt="no comment picture">
                        <p class="text-sm text-center mt-4 text-gray-500">No comments yet</p>
                    @else
                        @foreach ($comments as $comment)
                            <section class= "bg-slate-200 hover:bg-slate-300 p-4 rounded-md">
                                <img src="{{ asset($comment->user->profile_picture) }}" class="w-10 h-10 rounded-full border-2 shadow-md inline align-top" alt="profile">
                                <div class="inline-block align-midde">
                                    <p class="inline text-gray-600 text-sm md:text-md font-medium">{{$comment->user->first_name}} {{$comment->user->last_name}}</p>
                                    <a href="/profile/{{$comment->user->username}}"class="inline text-cyan-600 text-xs md:text-md font-light">{{'@'.$comment->user->username}}</a>
                                    <p class="inline text-gray-500 text-xxs ml-1">{{$comment->date_time}}</p>
                                    @if(isset($skills))
                                        @include('partials.comments_skills_load', ['skills' => $comment->user->skills])
                                    @endif
                                </div>      
                                <!--comment-->
                                <p class="mt-1 text-sm text-gray-700 px-4">
                                    {{$comment->comment}}
                                </p> 
                                <!-- image -->
                                @if ($comment->image != null)
                                    <img src="{{ asset($comment->image) }}" class="w-full md:w-8/12 p-3 -mt-1 rounded-2xl" alt="image">
                                @endif
                                <!-- number of likes -->
                                @livewire('like-comment',['comment_id' => $comment->id, 'comment_likes' => $comment->likes])
                            </section>
                            <!-- replies -->
                            <section class="pl-6 py-2">
                                <!-- reply form -->
                                <section class="p-1 flex flex-row align-middle mb-2">
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
                                <div id="replies" class="">
                                    @if(!$comment->replies->isEmpty())
                                        @foreach ($comment->replies as $reply)
                                            <section class= "pl-1 mb-4 border-l-2 border-l-gray-100">
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
                                                <p class="mt-1 text-xs text-gray-700 px-4">
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
        </aside>
    </div>
    <!-- likers modal -->
    <div id="likers_modal" class="modal hidden fixed top-0 left-0 z-40 pt-24 bg-neutral-900/90 w-screen h-screen">
        <div class="bg-white w-11/12 md:w-5/12 max-width-6/12 rounded-md shadow-md mx-auto p-4 h-96 overflow-y-auto small-scrollbar">
            <section class="flex justify-end">
                <button class="close_modal inline-block align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-800" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                </button>
            </section>
            <x-underline></x-underline>
            @if($likers != null)
                @foreach ($likers as $liker)
                    <div class="flex justify-between items-center mb-1 rounded-md hover:bg-slate-100 p-2">
                        <section>
                            <figure class="inline-block">
                                <img src="{{asset($liker->profile_picture)}}" alt="{{$liker->first_name}} {{$liker->last_name}}" class="rounded-full inline w-10">
                            </figure>
                            <svg xmlns="http://www.w3.org/2000/svg"  class="w-6 h-6 inline relative right-5 top-4 rounded-full p-1 text-sky-700 fill-current" viewBox="0 -960 960 960"  fill="#5f6368"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
                            <p class="inline -ml-6 align-middle text-sm text-gray-700">{{$liker->first_name}} {{$liker->last_name}}</p>
                            <a href="/profile/{{$liker->username}}" class=" text-xxs text-cyan-600">{{'@'.$liker->username}}</a> <!-- in progress -->
                        </section> 
                        @livewire('follow',['liker_id' => $liker->id, 'ifFollowed' => $liker->ifFollowed])   
                    </div>
                    <div class="flex justify-between items-center mb-1 rounded-md hover:bg-slate-100 p-2">
                        <section>
                            <figure class="inline-block">
                                <img src="{{asset($liker->profile_picture)}}" alt="{{$liker->first_name}} {{$liker->last_name}}" class="rounded-full inline w-10">
                            </figure>
                            <svg xmlns="http://www.w3.org/2000/svg"  class="w-6 h-6 inline relative right-5 top-4 rounded-full p-1 text-sky-700 fill-current" viewBox="0 -960 960 960"  fill="#5f6368"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
                            <p class="inline -ml-6 align-middle text-sm text-gray-700">{{$liker->first_name}} {{$liker->last_name}}</p>
                            <a href="/profile/{{$liker->username}}" class=" text-xxs text-cyan-600">{{'@'.$liker->username}}</a> <!-- in progress -->
                        </section> 
                        @livewire('follow',['liker_id' => $liker->id, 'ifFollowed' => $liker->ifFollowed])   
                    </div>
                @endforeach
            @else
                <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-12 mx-auto my-auto" alt="no comment picture">
                <p class="text-xxs text-center text-gray-500">Wow such empty</p>
            @endif
        </div>
    </div>
@include('partials.footer')

