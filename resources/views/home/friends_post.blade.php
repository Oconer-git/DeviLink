@include('partials.header',['background' => 'bg-white'])
    <!-- navbar section -->
    <x-navbar></x-navbar>
    <!-- main content -->
    <div class="bg-white w-full mx-auto pt-[70px] px-4 pb-24"> 
        <!-- profile options and settings  -->
        <x-sidebar></x-sidebar>
        <!-- main contents scroll -->
        <main class="w-full sm:w-8/12 md:w-5/12 lg:w-7/12 lg:ml-56 mx-auto pr-0 lg:pl-4 lg:pr-20 lg:border-l-2 border-l-gray-400/20">
            <article class="px-2 md:px-0 py-2">
                <h1 class="font-bold text-teal-600 text-xl inline">Posts today</h1>
                <p class="font-light text-cyan-600 text-sm inline">See what is happening</p>
            </article> 
            <!-- post section  -->  
            <div class="group mx-auto mb-2 py-4 px-auto px-4 bg-slate-200 rounded-md md:rounded-b-none md:bg-white md:px-0 md:pr-4 border-b-2 border-b-cyan-600/80">
                <img src="{{ asset($profile_picture) }}" class="w-12 h-12 border-2 border-white group-hover:shadow-xl group-hover:shadow-teal-400 transition duration-500 rounded-full shadow-md inline" alt="devilink logo">
                <!-- open modal when button is clicked -->
                <button id="post_modal" class="bg-slate-300 w-8/12 text-xs lg:text-sm lg:w-7/12 h-10 shadow-sm text-gray-500 align-middle rounded-full text-left pl-3 group-hover:bg-slate-400 group-hover:text-whitesmoke transition duration-300">
                    <p>Hey coder, any stories for today? 💭</p>
                </button>
                <img src="{{ asset('storage/images/giphy.webp') }}" class="w-8 inline group-hover:scale-110 cursor-move duration-300" alt="devilink logo">
            </div>
            <!-- posts loop divs livewire infinite scrolling-->
            @livewire('friends-post')
            <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-24 mx-auto my-auto" alt="no comment picture">
            <p class="text-xs text-center text-gray-500 mt-1">
                Wow that's all for today. You've been scrolling too far.<br>
                Click refresh to reload contents
            </p>
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

<!-- modal posting form -->
@include('partials.post_form_modal')
<!-- footer -->
@include('partials.footer')

