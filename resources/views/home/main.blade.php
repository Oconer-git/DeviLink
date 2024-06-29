@include('partials.header', ['title' => 'Home'])
    <!-- navbar section -->
    <x-navbar></x-navbar>

    <!-- main content -->
    <div class="bg-gradient-to-l from-gray-200 to-gray-100/10 w-full mx-auto pt-[70px] px-4 pb-24"> 
        <!-- profile options and settings  -->
        <section class="bg-orange-500 fixed hidden mt-1 md:w-1/6 md:block align-top">
            <a href="">{{$first_name}}</a>
            <a href="">{{$last_name}}</a>
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
        </section>
        <!-- main contents scroll -->
        <main class=" w-full sm:w-8/12 md:w-6/12 lg:w-5/12 mx-auto">
            <!-- post section  -->
            <div class="bg-gray-100 group shadow-md drop-shadow-sm rounded-md h-24 mx-auto mt-1 mb-2 p-4 border-t-2 border-t-blue-300 hover:border-t-blue-400 hover:bg-stone-100 transition duration-500">
                <section class="p-2 ">
                    <img src="{{ asset($profile_picture) }}" class="w-12 h-12 border-2 rounded-full shadow-md inline" alt="devilink logo">
                    <!-- open modal when button is clicked -->
                    <button id="post_modal" class="bg-gray-300 w-9/12 md:w-10/12 h-10 shadow-sm text-gray-500 align-middle rounded-full text-left text-xs md:text-sm pl-3 group-hover:bg-slate-400 group-hover:text-whitesmoke transition duration-300">Hey coder, any stories for today? 💭</button>
                    <x-underline></x-underline>
                </section>
            </div>
            <x-underline></x-underline>
            <!-- devilink posts loop divs -->
            <div class="bg-white shadow-md drop-shadow-sm rounded-md mx-auto mb-2 p-6">
                <img src="{{ asset('storage/images/figure_about.png') }}" class="w-11 h-11 rounded-full border-2 shadow-md inline" alt="devilink logo">
                <section class="inline-block align-top">
                    <p class="inline text-gray-600 font-medium">Jacob Sartorius</p>
                    <a href="#"class="inline  text-cyan-600 font-light text-sm">@JynkZi</a>
                    <p class="inline text-gray-400 text-xs ml-1">9h ago</p>
                    <figure class="-mt-1">
                        <!-- skill section -->
                    </figure>
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
        </main>
        <!-- top post section -->
        <section class="bg-red-500 z-5 fixed top-20 right-10 hidden md:w-1/6 md:block align-top">
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
        </section>
    </div>
    <x-colors_skills></x-colors_skills>

<!-- modal for opening updating about section form -->
<div id="post_form" class="fixed hidden top-0 left-0 z-40 pt-20 bg-neutral-900/90 w-screen h-screen">
    <div class="bg-white h-[300px] w-10/12 md:w-5/12 rounded-md shadow-md mx-auto my-auto p-4 overflow-y-auto">
        <section class="flex justify-between -mb-3">
            <figure class="font-bold text-sm text-neutral-400 inline">
                <img src="{{ asset($profile_picture) }}" class="w-8 h-8 border-2 rounded-full shadow-md inline" alt="profile picture">
                <p class="inline align-middle">Share something interesting</p>
            </figure>
            <button id="close_post" class="inline-block align-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-800" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
        </section>
        <form action="{{route('update_about.user')}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <select name="publicity" id="publicity" class="text-xs text-gray-400 ml-8 foucs:none">
                <option value="true">
                    Anyone can share & comment
                </option>
                <option value="false">
                    Only friends can comment
                </option>
            </select>
            <x-underline></x-underline>
            <textarea name="about" rows="2" class="w-full p-3 focus:outline-none rounded-md text-sm text-gray-700" id="about" placeholder="share something here..."></textarea>
            <!-- picture post preview -->
            <img src="{{asset('storage/images/no_picture.jpg')}}"  alt="picture" class="picture_preview hidden w-full mt-2 rounded-md outline-4">
            <section class="mt-11">
                <figure id="upload_post_picture" class="inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-blue-500 w-6 h-6 " viewBox="0 -960 960 960"><path d="M440-440ZM120-120q-33 0-56.5-23.5T40-200v-480q0-33 23.5-56.5T120-760h126l74-80h240v80H355l-73 80H120v480h640v-360h80v360q0 33-23.5 56.5T760-120H120Zm640-560v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80ZM440-260q75 0 127.5-52.5T620-440q0-75-52.5-127.5T440-620q-75 0-127.5 52.5T260-440q0 75 52.5 127.5T440-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Z"/></svg>
                </figure>
                <input type="file" name="picture" id="post_picture" class="picture text-xs hidden inline-block align-top" accept="image/*">
            </section>
            <div class="border-t-2 border-sky-400 py-2">
                <button type="submit" class="bg-sky-500  w-full p-2 shadow-md drop-shadow-sm text-white font-semibold text-sm rounded-md hover:bg-sky-600">
                    Post
                </button>
            </div>
        </form>
    </div>
</div>

@include('partials.footer')

