@include('partials.header')
    <x-navbar></x-navbar>
    <div class="bg-neutral-100 block w-full lg:w-5/12 lg:top-0 lg:right-0 lg:h-screen lg:fixed pt-20 pb-10 px-10 drop-shadow-md">
        <!-- profile -->
        <main class="inline-block w-full lg:rounded-full border-r-4 border-r-blue-400">
            <!-- profile picture -->
            <section class="mx-auto inline-block">
                <figure class="md:p-4 bg-white rounded-full border-2 border-blue-500  p-1 ">
                    <img src="{{ asset($user->profile_picture) }}" class="w-24 h-24 md:w-34 md:h-34 rounded-full shadow-md" alt="profile">
                </figure>
                <!-- update profile picture -->
                <button id="update_profile" class="absolute -mt-6 md:mt-5 md:left-32 md:top-40 hover:drop-shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 p-2 fill-current rounded-full shadow-sm border-b-4  bg-blue-100 text-slate-600 hover:text-blue-500" viewBox="0 -960 960 960"><path d="M480-260q75 0 127.5-52.5T660-440q0-75-52.5-127.5T480-620q-75 0-127.5 52.5T300-440q0 75 52.5 127.5T480-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM160-120q-33 0-56.5-23.5T80-200v-480q0-33 23.5-56.5T160-760h126l74-80h240l74 80h126q33 0 56.5 23.5T880-680v480q0 33-23.5 56.5T800-120H160Zm0-80h640v-480H638l-73-80H395l-73 80H160v480Zm320-240Z"/></svg>
                </button>
            </section>    
            <!-- name and followers -->
            <figure class="inline-block align-top pt-1 ml-2 mt-2">
                <h1 class="inline text-gray-600 font-lightbold text-xl md:text-3xl">{{$user->first_name}} {{$user->last_name}}</h1>
                <a href="/profile/{{$user->username}}"class="block text-cyan-600 font-light text-md md:text-xl">{{'@'.$user->username}}</a>
                <div class="group">
                    <button id="post_modal" class="inline mt-1 text-sm mb-4 px-3 md:mt-3 md:text-lg md:py-2 md:px-6 bg-blue-400 group-hover:bg-blue-500 group-hover:shadow-md group-hover:shadow-purple-300 transition duration-500 ease-in-out hover:ease-in text-white rounded-full py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-6 inline text-white" viewBox="0 -960 960 960"><path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                        <p class="inline text-white align-middle">Add post</p>
                    </button>
                </div>
                <button id="show_followings" class="inline text-xs md:text-sm mr-1">
                    <span class="font-semibold text-base hover:underline hover:underline-offset-2 hover:text-cyan-700">{{$followings->count()}}</span>
                    followings
                </button>
                <button id="show_followers" class="inline text-xs md:text-sm mr-1">
                    <span class="font-semibold text-base hover:underline hover:underline-offset-2 hover:text-cyan-700">{{$followers->count()}}</span>
                    followers
                </button>
                <p class="inline text-xs md:text-sm"><span class="font-semibold text-base">{{$likes}}</span> likes</p>
            </figure>
        </main>
        <!-- skills section-->
        <section class="ml-0 p-1 w-42 mt-2">
            <button id="update_skills" class="bg-gray-200 rounded-full p-1 align-bottom hover:bg-slate-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"viewBox="0 -960 960 960" fill="#5f6368"><path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/></svg>
            </button>
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
                <button id="update_about" class="inline-block align-middle group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline fill-current text-yellow-600 group-hover:text-yellow-500" viewBox="0 -960 960 960"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                    <p class="text-sm text-gray-500 inline -ml-1 align-bottom group-hover:text-yellow-500">Edit</pc>
                </button>
                @if($user->about)
                    <p class="text-gray-800 text-sm">{{$user->about}}</p>
                @else
                    <p class="text-gray-500">Wow, such an empty space... Tell me about yourself!</p>
                @endif
            </article>
        </section>
    </div>
    <div class="-mb-2">
        <button class="show_posts font-semibold mb-1 mt-20 ml-16 inline text-purple-500 hover:text-purple-600">
            <p id="post_label" class="text-slate-500 inline">Posts</p>
            <span class="text-sm text-slate-400">{{'('.$posts->count().')'}}</span> 
        </button>
        <button class="show_shared font-semibold ml-3 mb-1 inline text-slate-400 hover:text-orange-600">
            <p id="shared_label" class="text-slate-500 inline">Shares</p>
            <span class="text-sm text-slate-400">{{'('.$shared_posts->count().')'}}</span> 
        </button>
    </div>
    <!-- user posts -->
    <div class="user_posts w-full py-2 lg:pl-16 mx-auto px-10">
        @if (!$posts->isEmpty())
            <!-- load all the posts of user here -->
            @include('partials.posts_profile',['posts' => $posts, 
                                                'user' => $user, 
                                                'user_skills' => $user_skills
                                                ])
        @else
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700/40 w-1/2 md:text-left md:w-80 md:mt-24 mx-auto md:mx-0 md:ml-24" viewBox="0 -960 960 960"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm40-80h480L570-480 450-320l-90-120-120 160Zm-40 80v-560 560Z"/></svg>
            <p class="text-center -mt-4 md:text-left md:ml-48 mb-28 font-extrabold text-gray-700/30">No posts yet</p>
        @endif
    </div>
    <!-- use shared posts-->
    <div class="user_shared w-full hidden py-2 lg:pl-16 mx-auto px-10">
        @if (!$shared_posts->isEmpty())
            <!-- load all of the shared post of the user here -->
            @include('partials.shared_posts_profile',['shared_posts' => $shared_posts])
        @else
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700/40 w-1/2 md:text-left md:w-80 md:mt-24 mx-auto md:mx-0 md:ml-24" viewBox="0 -960 960 960"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm40-80h480L570-480 450-320l-90-120-120 160Zm-40 80v-560 560Z"/></svg>
            <p class="text-center -mt-4 md:text-left md:ml-48 mb-28 font-extrabold text-gray-700/30">No shared posts yet</p>
        @endif
    </div>
    <!-- modal for opening updating profile form -->
    <div id="profile_form" class="modal fixed hidden top-0 left-0 z-40 pt-20 bg-neutral-900/90 w-screen h-screen">
        <div class="bg-white  w-9/12 md:w-1/3 rounded-sm shadow-md mx-auto my-auto p-4">
        <section class="flex justify-between">
            <p class="font-bold text-gray-600 inline">Choose profile picture</p>
            <button class="close_modal inline-block align-middle">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-800" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
        </section>
            <x-underline></x-underline>
            <form action="{{route('update_pfp.user')}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <section>
                    <input type="file" name="profile_picture" class="picture" accept="image/*">
                    <img src="{{asset('storage/images/no_picture.jpg')}}"  alt="uploaded profile" class="picture_preview w-52 mt-2 border-2 rounded-md border-gray-500">
                </section>
                <div class="flex justify-end border-t-4 border-cyan-500 mt-6 pt-4">
                    <button type="submit" class="bg-cyan-500 p-2 shadow-md drop-shadow-sm text-white font-semibold text-sm rounded-sm mr-2 hover:bg-cyan-600">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- modal for opening updating about section form -->
    <div id="about_form" class="modal fixed hidden top-0 left-0 z-40 pt-20 bg-neutral-900/90 w-screen h-screen">
        <div class="bg-white w-10/12 md:w-5/12 rounded-md shadow-md mx-auto my-auto p-4">
            <section class="flex justify-between">
                <p class="font-bold text-lg text-neutral-600 inline">Personalize Your About Section</p>
                <button class="close_modal inline-block align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-800" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                </button>
            </section>
            <x-underline></x-underline>
            <form action="{{route('update_about.user')}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <section>
                    <textarea name="about" id="about" rows="8" class="textarea p-2 w-full outline outline-2 outline-gray-300 p-3rounded-md rounded-md text-sm text-gray-700">
                        {{$user->about}}
                    </textarea>
                </section>
                <div class="flex justify-end border-t-4 border-yellow-400 mt-6 pt-4">
                    <button type="submit" class="bg-yellow-500 p-2 shadow-md drop-shadow-sm text-white font-semibold text-sm rounded-sm mr-2 hover:bg-yellow-600">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- modal for adding skills form -->
    <div id="skills_form" class="modal fixed hidden top-0 left-0 z-40 pt-20 bg-neutral-900/90 w-screen h-screen">
        <div class="bg-white w-8/12 lg:w-5/12 rounded-md shadow-md mx-auto my-auto p-4">
            <section class="flex justify-between">
                <p class="font-bold text-lg text-neutral-600 inline">Update and choose your skills</p>
                <button class="close_modal inline-block align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-800" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                </button>
            </section>
            <x-underline></x-underline>
            <form action="{{route('update_skills.user')}}" method="POST">
                @csrf
                <!-- select skills section -->
                <section>
                    <p class="text-neutral-600 text-sm font-semibold">Current skills</p>
                    @if (isset($user_skills))
                        @foreach ($user_skills as $id => $user_skill)
                            <fieldset class="mr-2 inline-block">
                            <p class="{{$user_skill['bg_color']}} px-2 py-[2px] inline w-fit shadow-md drop-shadow-sm text-white text-center text-xs font-light rounded-full">{{$user_skill['name']}}</p>
                            <input class="ml-[.5px]" type="checkbox" id="{{$id}}" name="{{$user_skill['name']}}" value="{{$id}}" checked>
                        </fieldset>
                        @endforeach
                    @else
                        <p class="text-gray-900 text-xs">none</p>
                    @endif
                    <p class="text-neutral-600 text-sm font-semibold mt-4">Available skills</p>
                    @if ($other_skills != null)
                        @foreach ($other_skills as $id => $other_skill)
                        <fieldset class="mr-2 inline-block">
                            <p class="{{$other_skill['bg_color']}} px-2 py-[2px] inline w-fit shadow-md drop-shadow-sm text-white text-center text-xs font-light rounded-full">{{$other_skill['name']}} </p>
                            <input class="ml-[.5px]" type="checkbox" id="{{$id}}" name="{{$other_skill['name']}}" value="{{$id}}">
                        </fieldset>
                        @endforeach
                    @endif
                </section>
                <div class="flex justify-end border-t-4 border-purple-400 mt-6 pt-4">
                    <button type="submit" class="bg-purple-500 p-2 shadow-md drop-shadow-sm text-white font-semibold text-sm rounded-sm mr-2 hover:bg-purple-600">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- modal for showing followers -->
    @include('partials.followers_modal', ['followers' => $followers])

    <!-- modal for showing followers -->
    @include('partials.followings_modal', ['followings' => $followings])

    <!-- modal posting form -->
    @include('partials.post_form_modal')

    <x-colors_skills></x-colors_skills>
@include('partials.footer')
