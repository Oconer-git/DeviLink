@include('partials.header', ['title' => 'Content'])
    <!-- navbar section -->
    <x-navbar></x-navbar>

    <!-- main content -->
    <div class="bg-white w-full pt-16 px-4 pb-24"> 
        <!-- devilink post-->
        <section class="flex lg:justify-end px-5">
            <a href="/" class="shadow-sm mb-2">        
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-800 bg-gray-200/50 rounded-md  hover:text-gray-800 hover:bg-gray-100 fill-current" viewBox="0 -960 960 960" ><path d="M280-200v-80h284q63 0 109.5-40T720-420q0-60-46.5-100T564-560H312l104 104-56 56-200-200 200-200 56 56-104 104h252q97 0 166.5 63T800-420q0 94-69.5 157T564-200H280Z"/></svg>
            </a>
        </section>
        <main class="mb-2 px-6 py-1 w-full block sm:mx-auto sm:w-8/12 md:w-8/12 lg:w-5/12 lg:inline-block">
            <img src="{{ asset('storage/images/figure_about.png') }}" class="w-12 h-12 rounded-full border-2 shadow-md inline" alt="profile">
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
                <p class="ml-1 mt-2 mb-1 text-gray-800">Nah I'd win Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde at provident iste ad beatae ullam tenetur culpa reprehenderit corporis illum explicabo blanditiis consequatur quasi fugiat voluptatibus temporibus, ex laborum autem.</p>
                <img src="{{ asset('storage/images/figure_landing.png') }}" class="w-full border-2 rounded-md" alt="devilink post">
            </section>    
        </main>
        <!-- comment sidebar-->
        <aside class="bg-whitesmoke mb-2 w-full block mx-auto mt-2  align-top border-t-2 border-t-purple-500 lg:w-comments lg:inline-block lg:border-t-0 lg:border-l-4  lg:border-l-purple-500">
            <!-- likes comments shares -->
            <section class="bg-white drop-shadow-sm border-b-2 px-8 py-2">
                <figure class="inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="w-8 h-8 inline fill-current text-blue-600" viewBox="0 -960 960 960"  fill="#5f6368"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
                    <p class="text-gray-600 text-xs inline align-bottom ">325</p>
                </figure>
                <figure class="inline-block ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 inline fill-current text-green-600" viewBox="0 -960 960 960"><path d="M240-400h480v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM880-80 720-240H160q-33 0-56.5-23.5T80-320v-480q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v720ZM160-320h594l46 45v-525H160v480Zm0 0v-480 480Z"/></svg>
                    <p class="text-gray-600 text-xs inline align-bottom">325</p>
                </figure>
                <figure class="inline-block ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 inline fill-current text-yellow-600" viewBox="0 -960 960 960"><path d="m600-200-56-57 143-143H300q-75 0-127.5-52.5T120-580q0-75 52.5-127.5T300-760h20v80h-20q-42 0-71 29t-29 71q0 42 29 71t71 29h387L544-624l56-56 240 240-240 240Z"/></svg>                        
                    <p class="text-gray-600 text-xs inline align-bottom">325</p>
                </figure>
            </section>
            <!-- comments -->
            <section class="px-8 py-6 text-gray-800 h-screen lg:overflow-y-auto">
                <form action="" method="POST" class="">
                    <img src="{{ asset('storage/images/profile_pic.jpg') }}" class="w-10 h-10 rounded-full border-2 shadow-md inline" alt="profile">
                    <input type="text" name="comment" class="align-middle w-10/12 md:w-10/12 rounded-lg shadow-sm p-1 text-sm bg-slate-200 text-gray-800 focus:outline-1 outline-blue-400" placeholder="Leave a comment...">
                    <button type="submit" class="align-middle hover:bg-zinc-300 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 fill-current text-white-700 hover:text-cyan-700" viewBox="0 -960 960 960"><path d="M120-160v-640l760 320-760 320Zm80-120 474-200-474-200v140l240 60-240 60v140Zm0 0v-400 400Z"/></svg>
                    </button>
                </form>
                <figure class="mt-6">
                    <img src="{{ asset('storage/images/profile_pic.jpg') }}" class="w-10 h-10 rounded-full border-2 shadow-md inline" alt="profile">

                </figure>
            </section>
        </aside>
    </div>
@include('partials.footer')
