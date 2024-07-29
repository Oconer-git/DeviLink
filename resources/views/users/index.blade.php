@include('partials.landing_page_header', ['title' => 'Welcome', 'background' => null])    
    <div class="w-full h-[700px] bg-gradient-to-r from-cyan-300 to-blue-900 pt-8 px-10">
        <div class="flex flex-row">
            <section class="hidden -ml-12 mt-8 lg:block lg:w-8/12 text-center">
                <fieldset id="devilink_label" class="hidden -mb-12">
                    <h1 class="font-extrabold text-4xl text-orange-300 drop-shadow-lg inline">
                        #tealbean
                    </h1>
                    <img src="{{asset('storage/images/tealbean_logo.png')}}" class="w-8 -ml-2 mb-2 inline"alt="">
                </fieldset>
                <fieldset id="main_field" class="hidden ml-3">
                    <h2 class="inline font-extrabold text-5xl text-white drop-shadow-lg -mr-12">Meet</h2>
                    <img src="{{ asset('storage/images/figure_landing.png')}}" class="w-7/12 mx-auto inline opacity-70" id="main_picture" alt="devilink logo">
                    <h3 class="inline font-extrabold text-5xl text-white drop-shadow-lg -ml-16">Coders</h3>
                </fieldset>
                <h4 id="online_label" class="hidden font-extrabold text-5xl text-blue-100 drop-shadow-lg -mt-8">Online</h4>
            </section>
            <form action="{{route('login.user')}}" method="POST" id="sign_in" class="sign_in bg-gray-100 mt-5 mb-6 py-6 px-8 w-full sm:mx-auto md:mx-auto md:w-1/2 lg:w-4/12 rounded-lg shadow-xl">
                @csrf
                <div class="w-full h-32 bg-cover rounded-lg shadow-sm mb-2" style="background-image: url('{{  asset('storage/images/cover.png') }}');"></div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="rounded w-full text-gray-700 text-sm p-1 shadow-sm drop-shadow-sm focus:outline-blue-500" name="email" type="email" placeholder="user@email.com" value="{{old('email')}}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password 
                    </label>
                    <input class="rounded w-full text-gray-700 text-sm p-1 shadow-sm drop-shadow-sm focus:outline-blue-500" name="password" type="password">
                    @if ($errors->any())
                        <p class="text-red-500 text-xs inline">Wrong credentials. Try again</p>
                    @endif
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 hover:text-teal-300 w-full text-white font-bold py-2 px-4 rounded-lg shadow-md drop-shadow-md hover:scale-105 duration-300">
                    Sign In
                </button>
                <p class="text-center text-gray-500 m-2">or</p>
                <button class="google_sign_in w-full bg-whitesmoke py-2 px-4 rounded-lg shadow-md drop-shadow-md hover:bg-neutral-100 hover:shadow-blue-300  hover:scale-105 duration-300">
                    <img src="{{asset('/storage/images/google_logo.webp')}}" class="w-6 inline" alt="Google logo">
                    <p class="inline text-sm text-gray-500">Sign in with Google</p>
                </button>
                
                <div class="flex justify-between mt-2">
                    <p class="text-cyan-800 text-sm ">Don't have an account? </p>
                    <a class="text-cyan-800 text-sm hover:text-cyan-500" href="/register_user">Register here</a>
                </div>

                <p class="text-center mt-8 text-gray-500 text-xs">
                    &copy;2024 Tealbean Corp. All rights reserved.
                </p>
            </form>
        </div>
    </div>  
@include('partials.landing_page_footer')
