<nav class="fixed z-20 flex flex-row  justify-between bg-gradient-to-l from-purple-100 to-white w-full px-2 pt-2 border-b-gray-500/25 drop-shadow-md">
        <!-- logo -->
        <section class="">
            <img src="{{ asset('storage/images/devilink_logo.png') }}" class="w-14 inline -mt-3" alt="devilink logo">
            <h1 class="hidden md:inline font-extrabold text-2xl text-purple-700/10 hover:text-purple-300 my-auto">DEVILINK</h1>
        </section>
        <!-- search textbox -->
        <form action="" class="bg-gray-200 rounded-full shadow-md w-4/12 md:w-80 h-8 pt-1 px-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline" viewBox="0 -960 960 960"  fill="#5f6368"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
            <input type="text" class="inline w-2/4 md:w-3/4 outline-none text-xs text-gray-600 bg-gray-200">
        </form> 
        <!-- notifs and profile -->
        <section class="mr-4">
            <button class="align-middle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-2 fill-current text-yellow-500" viewBox="0 -960 960 960"><path d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"/></svg>
                <p class="text-xs h-5 w-5 pt-[2px] text-white relative -mt-4 ml-4 bg-orange-500/75 rounded-full">12</p>
            </button>
            <button id="profile_settings" class="w-8 h-8 mx-auto border-2 rounded-full inline align-middle my-1">
                <img src="{{ asset($profile_picture) }}" class="rounded-full border-2 border-gray-500" alt="devilink logo">
            </button>
            <p class="text-sm align-middle text-slate-500 inline">{{$first_name}}</p>
            <div id="profile_dropdown" class="hidden">
                <div class="absolute right-14 top-11 w-40 text-center z-20 flex flex-col bg-whitesmoke rounded-sm shadow-2xl">
                    <a href="/profile/{{$username}}" class="text-sm font-bold p-3 border-b-2 border-b-violet-300 text-gray-500 hover:bg-slate-200">Profile</a>
                    <a href="/settings" class="text-sm font-bold p-3 border-b-2 border-b-violet-300 text-gray-500 hover:bg-slate-200">Settings</a>
                    <form action="{{route('logout')}}" method="POST" class="font-bold p-3 border-b-2 border-b-violet-300 text-gray-500 hover:bg-slate-200">
                        @csrf
                        <input type="submit" class="text-sm " value="Log Out">
                    </form>
                </div>
            </div>
        </section>
    </nav>