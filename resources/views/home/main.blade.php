@include('partials.header', ['title' => 'Home'])
    <!-- navbar section -->
    <x-navbar></x-navbar>

    <!-- main content -->
    <div class="bg-gradient-to-l from-gray-200 to-gray-100/10 w-full mx-auto pt-[70px] px-4 pb-24"> 
        <!-- profile options and settings  -->
        <section class="bg-orange-500 fixed hidden mt-1 md:w-1/6 md:block align-top">
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
        </section>
        <!-- main contents scroll -->
        <main class=" w-full sm:w-8/12 md:w-6/12 lg:w-5/12 mx-auto">
            <!-- post section  -->
            <div class="bg-gray-100 shadow-md drop-shadow-sm rounded-md h-24 mx-auto mt-1 mb-2 p-4 border-t-2 border-t-blue-300">
                <section class="p-2">
                    <img src="{{ asset('storage/images/profile_pic.jpg') }}" class="w-12 h-12 border-2 rounded-full shadow-md inline" alt="devilink logo">
                    <!-- open modal when button is clicked -->
                    <button class="bg-gray-300 w-9/12 md:w-10/12 h-10 shadow-sm text-gray-500 align-middle rounded-full text-left text-xs md:text-sm pl-3">Hey coder, any stories for today? 💭</button>
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
                        <p class="bg-purple-600 px-2 py-[1px] inline w-fit shadow-md drop-shadow-sm text-white text-center text-xs font-light rounded-full">C#</p>
                        <p class="bg-red-600 px-2 py-[1px] inline w-fit shadow-md drop-shadow-sm text-white text-center text-xs font-light rounded-full">Ruby</p>
                        <p class="bg-blue-600 px-2 py-[1px] inline w-fit shadow-md drop-shadow-sm text-white text-center text-xs font-light rounded-full">PHP</p>
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
        <section class="bg-red-500 z-20 fixed top-20 right-10 hidden md:w-1/6 md:block align-top">
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
            <a href="">dfajldasjdfldkasjf</a>
        </section>
    </div>
@include('partials.footer')
