@include('partials.landing_page_header', ['title' => 'Register User- Tealbean', 'background' => asset('storage/images/landing_cover.jpg')])    
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
@include('partials.footer')
