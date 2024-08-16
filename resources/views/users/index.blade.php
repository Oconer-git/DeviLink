@include('partials.landing_page_header', ['title' => 'Welcome', 'background' => null])    
    <div class="w-full h-[800px] bg-gradient-to-r from-teal-300 to-blue-900 pt-12 px-10">
        <div class="flex flex-row">
            <section class="hidden -ml-12 mt-8 lg:block lg:w-8/12 text-center">
                <fieldset id="devilink_label" class="hidden -mb-8">
                    <h1 class="font-extrabold text-4xl text-orange-300/80 drop-shadow-lg inline">
                        #Socialize
                    </h1>
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
                <div class="w-full h-32 bg-cover rounded-lg shadow-sm mb-2" style="background-image: url('{{  asset('storage/images/cover.png') }}')"></div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="rounded w-full text-gray-700 text-sm p-1 shadow-sm drop-shadow-sm focus:outline-teal-500" name="email" type="email" placeholder="user@email.com" value="{{old('email')}}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password 
                    </label>
                    <input class="rounded w-full text-gray-700 text-sm p-1 shadow-sm drop-shadow-sm focus:outline-teal-500" name="password" type="password">
                    @if ($errors->any())
                        <p class="text-red-500 text-xs inline">Wrong credentials. Try again</p>
                    @endif
                </div>
                <button type="submit" class="bg-blue-600 hover:bg-gradient-to-br from-blue-600 to-teal-600/90 hover:text-teal-300 w-full text-white font-bold py-2 px-4 rounded-lg shadow-md drop-shadow-md hover:scale-105 duration-300">
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
                <div class="text-center mt-6 mx-auto">
                    <svg class="fill-current w-4 text-teal-300 inline align-middle" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z" transform="scale(64)" fill="#1B1F23"/>
                    </svg>
                    <p class="text-center mt-1 text-gray-500 text-sm inline align-middle">
                        Oconer-git
                    </p>
                </div>
                <p class="text-center text-gray-500 text-xxs">
                    &copy;2024 Fellowdevs.io
                </p>
              
            </form>
        </div>
    </div>  
@include('partials.landing_page_footer')
