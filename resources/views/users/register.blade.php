@include('partials.landing_page_header', ['title' => 'Register User- Tealbean'])    
        <!-- @if ($errors->any())
            <div class="w-38 xl:w-96 bg-red-100 border border-red-400 shadow-lg shadow-red-500 text-red-700 px-4 py-3 rounded fixed z-20 right-10 top-10" role="alert">
                <strong class="font-bold">Whoops!</strong>
                <span class="block sm:inline">There were some problems with your inputs. Try again</span>
            </div>
        @endif
        @if (session('error'))
            <div class="w-38 xl:w-96 bg-red-100 border border-red-400 shadow-lg shadow-red-500 text-red-700 px-4 py-3 rounded fixed z-20 right-10 top-10" role="alert">
                <strong class="font-bold">Whoops!</strong>
                <span class="block sm:inline">{{session('error')}}</span>
            </div>
        @endif -->
    <div class="p-4">
        <div class="bg-whitesmoke w-full lg:w-7/12 mx-auto my-auto shadow-md outline-2 rounded-md drop-shadow-sm box-border">
                <img src="{{asset('storage/images/registration_tealbean.gif')}}" alt="tealbean gif" class="hidden md:w-half md:inline-block md:rounded-r-none md:rounded-l-md">
                <form action="{{route('register.user')}}" method="POST" class="inline-block align-top px-4 py-6 w-full md:w-half">
                    @csrf
                    <img src="{{asset('storage/images/tealbean_logo.png')}}" class="w-8 -mx-2 mb-2 inline" alt="tealbean logo">
                    <h1 class="inline font-bold text-gray-700">User Registration</h1>
                    <!-- name -->
                    <section>
                        <fieldset class="inline-block w-half ">
                            <label for="first_name" class="text-sm text-gray-500 font-semibold">First name</label>
                            <input type="text" name="first_name" class="rounded-md text-xs w-full text-gray-600 bg-slate-200 p-1 shadow-sm" value="{{old('first_name')}}">
                            
                        </fieldset>
                        <fieldset class="inline-block w-half ">
                            <label for="last_name" class="text-sm text-gray-500 font-semibold">Last name</label>
                            <input type="text" name="last_name" class="rounded-md w-full text-xs text-gray-600 bg-slate-200 focus:outline-teal-700 p-1 shadow-sm" value="{{old('last_name')}}">
                        </fieldset>
                        @error('first_name')
                            <p class="text-red-900 text-xs inline -mb-2">{{$message}}</p>
                        @enderror
                        @error('last_name')
                            <p class="text-red-900 text-xs inline -mb-2">{{$message}}</p>
                        @enderror
                    </section>
                    <!-- email -->
                    <fieldset class="mt-2">
                        <label for="email" class="text-sm text-gray-500 font-semibold">Email</label>
                        <input type="email" name="email" class="rounded-md text-xs w-full text-gray-600 bg-slate-200 focus:outline-teal-700 p-1 shadow-sm" value="{{old('email')}}">
                        @error('email')
                            <p class="text-red-900 text-xs -mb-2">{{$message}}</p>
                        @enderror
                    </fieldset>
                    <!-- username -->
                    <fieldset class="mt-2">
                        <label for="username" class="text-sm text-gray-500 font-semibold">Username</label>
                        <input type="text" name="username" class="rounded-md text-xs w-full text-gray-600 bg-slate-200 focus:outline-teal-700 p-1 shadow-sm" value="{{old('username')}}">
                        @error('username')
                            <p class="text-red-900 text-xs -mb-2">{{$message}}</p>
                        @enderror
                    </fieldset>
                    <section class="mt-2">
                        <fieldset class="inline-block w-half">
                            <label for="dob" class="text-sm text-gray-500 font-semibold block">Date of birth</label>
                            <input type="text" id="datepicker" name="dob" class="rounded-md text-xs w-full text-gray-600 bg-slate-200 focus:outline-teal-700 p-1 shadow-sm">
                            
                        </fieldset>
                        <fieldset class="inline-block w-half">
                            <label for="gender" class="text-sm text-gray-500 font-semibold">Gender</label>
                            <select name="gender" id="gender" class="rounded-md text-xs w-full text-gray-600 bg-slate-200 focus:outline-teal-700 p-1 shadow-sm ">
                                <option class="text-cyan-600 font-semibold" value="Male">Male</option>
                                <option class="text-pink-600 font-semibold" value="Female">Female</option>
                            </select>
                      
                        </fieldset>
                        @error('dob')
                            <p class="text-red-900 text-xs -mb-2">{{$message}}</p>
                        @enderror
                        @error('gender')
                            <p class="text-red-900 text-xs -mb-2">{{$message}}</p>
                        @enderror
                    </section>
                    <fieldset class="mt-2">
                        <label for="password" class="text-sm text-gray-500 font-semibold block">Password</label>
                        <input type="password" name="password" class="rounded-md text-xs w-full text-gray-600 bg-slate-200 focus:outline-teal-700 p-1 shadow-sm">
                        @error('password')
                            <p class="text-red-900 text-xs">{{$message}}</p>
                        @enderror
                    </fieldset>
                    <fieldset class="mt-2">
                        <label for="password_confirmation" class="text-sm text-gray-500 font-semibold block">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="rounded-md text-xs w-full text-gray-600 bg-slate-200 focus:outline-teal-700 p-1 shadow-sm">
                    </fieldset>
                    <button type="submit" class="rounded-md w-full bg-teal-500 text-white font-bold mt-12 shadow-md p-2">
                        Submit
                    </button>
                    <button id="back_to_login" class="text-sm mt-4 font-bold text-teal-700 hover:text-cyan-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 inline-block align-middle fill-current -mr-1" viewBox="0 -960 960 960" ><path d="M280-200v-80h284q63 0 109.5-40T720-420q0-60-46.5-100T564-560H312l104 104-56 56-200-200 200-200 56 56-104 104h252q97 0 166.5 63T800-420q0 94-69.5 157T564-200H280Z"/></svg>
                        <p class="inline-block align-middle">back</p>
                    </button>
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
@include('partials.footer')
