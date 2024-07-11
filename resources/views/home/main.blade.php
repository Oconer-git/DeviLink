@include('partials.header')
    <!-- navbar section -->
    <x-navbar></x-navbar>
    <!-- errors -->
    @if ($errors->any())
            <div class="w-38 xl:w-96 bg-red-100 border border-red-400 shadow-lg shadow-red-500 text-red-700 px-4 py-3 rounded fixed z-20 right-10 top-10" role="alert">
                <strong class="font-bold">Whoops!</strong>
                <span class="block sm:inline">There were some problems with your inputs. Try again</span>
                @error('content')
                    <p class="text-red-900 text-sm">{{$message}}</p>
                @enderror
                @error('is_global')
                    <p class="text-red-900 text-sm">{{$message}}</p>
                @enderror
                @error('picture')
                    <p class="text-red-900 text-sm">{{$message}}</p>
                @enderror
            </div>
    @endif
    <!-- main content -->
    <div class="bg-gradient-to-l from-gray-200 to-gray-100/10 w-full mx-auto pt-[70px] px-4 pb-24"> 
        <!-- profile options and settings  -->
        <div class="bg-gray-100 fixed hidden rounded-md shadow-md p-3 ml-1 top-20 md:w-3/12 md:block lg:w-3/12 align-top">
            <section class="border-l-4 border-purple-300 pl-2">
                <h1 class="text-lg text-gray-500 font-semibold mb-2 inline align-middle">Trending Posts</h1>
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-400 w-6 inline align-middle"viewBox="0 -960 960 960"><path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/></svg>
            </section>
        </div>
        <!-- main contents scroll -->
        <main class=" w-full sm:w-8/12 md:w-5/12 lg:w-5/12 mx-auto">
            <!-- post section  -->
            <div class="bg-gray-100 group shadow-md drop-shadow-sm rounded-md h-24 mx-auto mt-1 mb-2 p-4 border-t-2 border-t-slate-100 hover:border-t-blue-400 hover:bg-stone-100 transition duration-500">
                <section class="p-2 ">
                    <img src="{{ asset($profile_picture) }}" class="w-12 h-12 border-2 group-hover:shadow-xl group-hover:shadow-blue-400 transition duration-500 rounded-full shadow-md inline" alt="devilink logo">
                    <!-- open modal when button is clicked -->
                    <button id="post_modal" class="bg-gray-300 w-10/12 text-xs md:w-9/12 lg:text-sm lg:w-10/12 h-10 shadow-sm text-gray-500 align-middle rounded-full text-left pl-3 group-hover:bg-slate-400 group-hover:text-whitesmoke transition duration-300">
                        Hey coder, any stories for today? 💭
                    </button>
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
        <!-- People you might know section section -->
        <section class="bg-neutral-100 z-5 fixed top-20 rounded-md shadow-md right-6 p-3 hidden md:w-3/12 md:block lg:w-3/12 align-top ">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-cyan-500 w-4 inline align-middle" viewBox="0 -960 960 960"><path d="M440-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T520-640q0-33-23.5-56.5T440-720q-33 0-56.5 23.5T360-640q0 33 23.5 56.5T440-560ZM884-20 756-148q-21 12-45 20t-51 8q-75 0-127.5-52.5T480-300q0-75 52.5-127.5T660-480q75 0 127.5 52.5T840-300q0 27-8 51t-20 45L940-76l-56 56ZM660-200q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Zm-540 40v-111q0-34 17-63t47-44q51-26 115-44t142-18q-12 18-20.5 38.5T407-359q-60 5-107 20.5T221-306q-10 5-15.5 14.5T200-271v31h207q5 22 13.5 42t20.5 38H120Zm320-480Zm-33 400Z"/></svg>
            <h2 class="text-sm text-gray-500 font-semibold mb-2 inline align-middle">People you might follow</h2>

 
            <section class="pl-1 mb-1 hover:bg-slate-200 p-1 rounded-lg flex group flex-col lg:flex-row items-center justify-between transition duration-300 ease-in-out">
                <div class="flex items-start lg:items-center">
                    <img src="{{ asset($profile_picture) }}" class="w-9 h-9 rounded-full border-2 shadow-md inline-block align-middle transition duration-300 ease-in-out" alt="profile">
                    <div class="inline-block align-middle ml-2 transition duration-300 ease-in-out">
                        <p class="text-gray-500 text-sm -mb-2 transition duration-300 ease-in-out">{{$first_name}} {{$last_name}}</p>
                        <a href="/profile/{{$username}}" class="text-cyan-600 text-xs md:text-md font-light transition duration-300 ease-in-out">{{'@'.$username}}</a>           
                    </div>
                </div>
                <form action="" class="align-middle hidden group-hover:block ml-2 transition duration-300 ease-in-out">
                    <button type="submit" class="px-1 h-8 w-18 bg-sky-400 group hover:bg-blue-700 rounded-md shadow-md transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current text-blue-100 group-hover:text-white inline align-middle transition duration-300 ease-in-out" viewBox="0 -960 960 960">
                            <path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/>
                        </svg>
                        <p class="inline text-xxs text-white align-middle">Follow</p>
                    </button>
                </form>
            </section>
            <section class="pl-1 mb-1 hover:bg-slate-200 p-1 rounded-lg flex group flex-col lg:flex-row items-center justify-between transition duration-300 ease-in-out">
                <div class="flex items-start lg:items-center">
                    <img src="{{ asset($profile_picture) }}" class="w-9 h-9 rounded-full border-2 shadow-md inline-block align-middle transition duration-300 ease-in-out" alt="profile">
                    <div class="inline-block align-middle ml-2 transition duration-300 ease-in-out">
                        <p class="text-gray-500 text-sm -mb-2 transition duration-300 ease-in-out">{{$first_name}} {{$last_name}}</p>
                        <a href="/profile/{{$username}}" class="text-cyan-600 text-xs md:text-md font-light transition duration-300 ease-in-out">{{'@'.$username}}</a>           
                    </div>
                </div>
                <form action="" class="align-middle hidden group-hover:block ml-2 transition duration-300 ease-in-out">
                    <button type="submit" class="px-1 h-8 w-18 bg-sky-400 group hover:bg-blue-700 rounded-md shadow-md transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current text-blue-100 group-hover:text-white inline align-middle transition duration-300 ease-in-out" viewBox="0 -960 960 960">
                            <path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/>
                        </svg>
                        <p class="inline text-xxs text-white align-middle">Follow</p>
                    </button>
                </form>
            </section>
            <section class="pl-1 mb-1 hover:bg-slate-200 p-1 rounded-lg flex group flex-col lg:flex-row items-center justify-between transition duration-300 ease-in-out">
                <div class="flex items-start lg:items-center">
                    <img src="{{ asset($profile_picture) }}" class="w-9 h-9 rounded-full border-2 shadow-md inline-block align-middle transition duration-300 ease-in-out" alt="profile">
                    <div class="inline-block align-middle ml-2 transition duration-300 ease-in-out">
                        <p class="text-gray-500 text-sm -mb-2 transition duration-300 ease-in-out">{{$first_name}} {{$last_name}}</p>
                        <a href="/profile/{{$username}}" class="text-cyan-600 text-xs md:text-md font-light transition duration-300 ease-in-out">{{'@'.$username}}</a>           
                    </div>
                </div>
                <form action="" class="align-middle hidden group-hover:block ml-2 transition duration-300 ease-in-out">
                    <button type="submit" class="px-1 h-8 w-18 bg-sky-400 group hover:bg-blue-700 rounded-md shadow-md transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current text-blue-100 group-hover:text-white inline align-middle transition duration-300 ease-in-out" viewBox="0 -960 960 960">
                            <path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/>
                        </svg>
                        <p class="inline text-xxs text-white align-middle">Follow</p>
                    </button>
                </form>
            </section>
        </section>
    </div>
    <x-colors_skills></x-colors_skills>

<!-- modal posting form -->
@include('partials.post_form_modal')
<!-- footer -->
@include('partials.footer')

