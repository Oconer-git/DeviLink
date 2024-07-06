@include('partials.header',['title' => 'profile'])
<x-navbar></x-navbar>
<div class="bg-white block w-full lg:w-6/12 lg:top-0 lg:right-0 lg:h-screen lg:fixed pt-20 pb-10 px-10 drop-shadow-md">
    <!-- profile -->
    <main class="inline-block w-full lg:rounded-full border-r-4 border-r-blue-300/80">
        <!-- profile picture -->
        <section class="mx-auto inline-block">
            <figure class="md:p-4 bg-white rounded-full border-2 border-blue-300  p-1 ">
                <img src="{{ asset($user->profile_picture) }}" class="w-24 h-24 md:w-44 md:h-44 rounded-full shadow-md" alt="profile">
            </figure>
            <!-- update profile picture -->
            <button id="update_profile" class="group md:absolute md:mt-0 md:left-48 md:top-64 hover:drop-shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 p-2 fill-current rounded-full shadow-sm border-b-4 bg-slate-100 text-slate-400 group-hover:text-blue-500" viewBox="0 -960 960 960"><path d="M480-260q75 0 127.5-52.5T660-440q0-75-52.5-127.5T480-620q-75 0-127.5 52.5T300-440q0 75 52.5 127.5T480-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM160-120q-33 0-56.5-23.5T80-200v-480q0-33 23.5-56.5T160-760h126l74-80h240l74 80h126q33 0 56.5 23.5T880-680v480q0 33-23.5 56.5T800-120H160Zm0-80h640v-480H638l-73-80H395l-73 80H160v480Zm320-240Z"/></svg>
            </button>
        </section>    
        <!-- name and followers -->
        <figure class="inline-block align-top pt-1 ml-2 md:pt-9">
            <h1 class="inline text-gray-600 font-lightbold text-xl md:text-3xl">{{$user->first_name}} {{$user->last_name}}</h1>
            <a href="/profile/{{$user->username}}"class="block text-cyan-600 font-light text-md md:text-xl">{{'@'.$user->username}}</a>
            <form action="" class="mt-1 mb-4 md:mt-3">
                <input type="submit" value="Add post" class="bg-blue-400 hover:bg-blue-600 hover:shadow-md hover:shadow-blue-500 text-white shadow-md rounded-full px-4 py-1 text-md md:text-lg md:py-2 md:px-6">
            </form>
            <p class="inline text-xs md:text-sm mr-1"><span class="font-semibold text-base">300</span> following</p>
            <p class="inline text-xs md:text-sm mr-1"><span class="font-semibold text-base">300</span> followers</p>
            <p class="inline text-xs md:text-sm"><span class="font-semibold text-base">300</span> likes</p>
        </figure>
    </main>
    <!-- skills section-->
    <section class="ml-0 lg:ml-52 p-1 w-42 mt-2">
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
<!-- posts and shared -->
<div class="w-full py-2 mx-auto lg:pl-32 px-10 bg-gradient-to-b from-slate-600 to-slate-600">
    <x-underline></x-underline>
    <h4 class="font-semibold mb-1 mt-12 text-xl text-slate-100/25">Posts</h4>
    
    <!-- devilink posts loop divs -->
    <div class="bg-whitesmoke border shadow-md drop-shadow-sm rounded-md mb-2 p-6 w-full md:w-1/2 lg:w-1/3">
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
<!-- modal for opening updating profile form -->
<div id="profile_form" class="modal fixed hidden top-0 left-0 z-40 pt-32 bg-neutral-900/90 w-screen h-screen">
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
<div id="about_form" class="modal fixed hidden top-0 left-0 z-40 pt-32 bg-neutral-900/90 w-screen h-screen">
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
<div id="skills_form" class="modal fixed hidden top-0 left-0 z-40 pt-32 bg-neutral-900/90 w-screen h-screen">
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
<x-colors_skills></x-colors_skills>
@include('partials.footer')
