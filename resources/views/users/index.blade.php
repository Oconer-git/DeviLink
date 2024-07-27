@include('partials.landing_page_header', ['title' => 'Welcome'])    
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
                    <img src="{{ asset('storage/images/figure_landing.png')}}" class="w-7/12 mx-auto inline opacity-90" id="main_picture" alt="devilink logo">
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
    <!-- Main modal -->
    <!-- <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <form action="{{route('register.user')}}" method="POST" class="relative bg-white rounded-lg shadow dark:bg-gray-700 w-full md:w-3/5 mx-auto">
                @csrf 
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-bold text-cyan-800">
                        Register Account
                    </h3>
                    <img src="{{ asset('storage/images/devilink_logo.png') }}" class="w-8 h-8 ml-1" alt="devilink logo">

                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="px-10 py-4 md:p-5 space-y-4">
                    <div class="mb-2">
                        @error('first_name')
                            <p class="text-red-900 text-sm">{{$message}}</p>
                        @enderror
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="first_name">
                            First name:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="first_name" type="text" placeholder="John" value="{{old('first_name')}}">
                    </div>
                    <div class="mb-2">
                        @error('last_name')
                            <p class="text-red-900 text-sm">{{$message}}</p>
                        @enderror
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="last_name">
                            Last name:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="last_name" type="text" placeholder="Doe" value="{{old('last_name')}}">
                    </div>
                    <div class="mb-2">
                        @error('email')
                            <p class="text-red-900 text-sm">{{$message}}</p>
                        @enderror
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="email">
                            Email
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="email" placeholder="user@email.com" value="{{old('email')}}">
                    </div>
                    <div class="mb-2">
                        @error('username')
                            <p class="text-red-900 text-sm">{{$message}}</p>
                        @enderror
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="username">
                            Username
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" type="text" placeholder="JohnDoe123" value="{{old('username')}}">
                    </div>
                    <div class="mb-2">
                        @error('password')
                            <p class="text-red-900 text-sm">{{$message}}</p>
                        @enderror
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="password">
                            Password
                        </label>
                        <input class="shadow appearance-none borde rounded w-full py-1 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password">
                    </div>
                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="confirmed_password">
                            Repeat Password
                        </label>
                        <input class="shadow appearance-none borde rounded w-full py-1 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" type="password" >
                    </div>
                </div>
                <div class="flex items-center p-5 md:p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="default-modal" type="submit" class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign up</button>
                    <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Back</button>
                </div>
            </form>
        </div>
    </div> -->
@include('partials.landing_page_footer')
