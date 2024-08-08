<nav class="fixed z-20 flex flex-row  justify-between bg-gradient-to-l from-purple-100 to-white w-full px-0 md:px-2 pt-2 border-b-gray-500/25 drop-shadow-md">
    <!-- logo -->
    <section class="ml-4">
        <img src="{{ asset('storage/images/tealbean_logo_transparent.png') }}" class="home w-11 inline -mt-1 md:-mt-2" alt="tealbean logo">
        <a href="/" class="hidden md:inline font-extrabold text-2xl -ml-1 text-teal-400 hover:text-teal-600 my-auto">
            Tealbean
            <span class="text-red-600 font-semibold text-xs -ml-1">beta</span>
        </a>
    </section>
    <!-- search textbox -->
    <form action="{{route('search')}}" class="bg-gray-200 rounded-full shadow-md w-4/12 md:w-80 h-8 pt-1 px-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline" viewBox="0 -960 960 960"  fill="#5f6368"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
        <input type="text" name="search" class="inline w-2/4 md:w-3/4 focus:outline-none text-xs text-gray-600 bg-gray-200" >
    </form> 
    <!-- notifs and profile -->
    <section class="mr-4">
        <button id="requests_notif" class="align-middle w-8 mr-3 rounded-full bg-slate-200 p-1 group hover:bg-blue-300 ease-in delay-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-current inline text-cyan-600" viewBox="0 -960 960 960"><path d="M500-482q29-32 44.5-73t15.5-85q0-44-15.5-85T500-798q60 8 100 53t40 105q0 60-40 105t-100 53Zm220 322v-120q0-36-16-68.5T662-406q51 18 94.5 46.5T800-280v120h-80Zm80-280v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Zm-480-40q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM0-160v-112q0-34 17.5-62.5T64-378q62-31 126-46.5T320-440q66 0 130 15.5T576-378q29 15 46.5 43.5T640-272v112H0Z"/></svg>
            <!-- <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 -960 960 960"><path d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"/></svg> -->
        </button>
        <div class="text-xxs absolute font-bold right-[77px] top-9 text-teal-600">
            <p>{{$requests->count()}}</p>
        </div>
        <!-- <p class=" group-hover:bg-yellow-400 ease-in delay-300 text-white font-bold w-6 px-[5px] py-[2px] z-20 text-red ml-3 inline align-middle rounded-full">
        </p> -->
        <button id="profile_settings" class="w-9 h-9 border-2 rounded-full inline align-middle my-1">
            <img src="{{ asset($profile_picture) }}" class="rounded-full border-2 border-gray-500" alt="tealbean logo">
        </button>
        <!-- settings dropdown -->
        <div id="profile_dropdown" class="hidden">
            <div class="absolute right-4 top-14 w-52 z-20 flex py-2 flex-col bg-whitesmoke text-gray-500 rounded-md shadow-2xl">
                <!-- username section -->
                <section class="px-4 py-2 border-b-2 border-b-teal-400/50">
                    <img src="{{ asset($profile_picture) }}" class="rounded-full w-12 border-2 inline-block align-middle border-teal-500" alt="tealbean logo">
                    <p class="inline text-sm align-middle text-teal-700">{{$first_name}} {{$last_name}}</p>
                </section>
                <!-- profile section -->
                <section class="profile hover:bg-slate-200 px-[12px] py-[2px] rounded-sm group"
                    data-username="{{$username}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current w-4 group-hover:text-teal-700 group-hover:scale-110 duration-300" viewBox="0 -960 960 960"><path d="M200-246q54-53 125.5-83.5T480-360q83 0 154.5 30.5T760-246v-514H200v514Zm280-194q58 0 99-41t41-99q0-58-41-99t-99-41q-58 0-99 41t-41 99q0 58 41 99t99 41ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm80-80h400v-10q-42-35-93-52.5T480-280q-56 0-107 17.5T280-210v10Zm200-320q-25 0-42.5-17.5T420-580q0-25 17.5-42.5T480-640q25 0 42.5 17.5T540-580q0 25-17.5 42.5T480-520Zm0 17Z"/></svg>
                    <p class="inline align-middle text-sm py-1">Profile</p>
                </section>
                <!-- settings section -->
                <section class="hover:bg-slate-200 px-[12px] py-[2px] rounded-sm group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current w-4  group-hover:text-cyan-800 group-hover:scale-110 duration-300" viewBox="0 -960 960 960"><path d="M580-40q-25 0-42.5-17.5T520-100v-280q0-25 17.5-42.5T580-440h280q25 0 42.5 17.5T920-380v280q0 25-17.5 42.5T860-40H580Zm0-60h280v-32q-25-31-61-49.5T720-200q-43 0-79 18.5T580-132v32Zm140-140q25 0 42.5-17.5T780-300q0-25-17.5-42.5T720-360q-25 0-42.5 17.5T660-300q0 25 17.5 42.5T720-240ZM480-480Zm2-140q-58 0-99 41t-41 99q0 48 27 84t71 50v-90q-8-8-13-20.5t-5-23.5q0-25 17.5-42.5T482-540q14 0 25 5.5t19 14.5h90q-13-44-49.5-72T482-620ZM370-80l-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-85 65H696q-1-5-2-10.5t-3-10.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q24 25 54 42t65 22v184h-70Z"/></svg>
                    <a href="/settings" class="inline align-middle text-sm py-1">Settings</a>
                </section>
                <!-- log out -->
                <form action="{{route('logout')}}" method="POST" class="text-xs px-[12px] py-[2px] rounded-sm hover:bg-slate-200 group">
                    @csrf
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current w-4 group-hover:text-red-800 group-hover:scale-110 duration-300" viewBox="0 -960 960 960"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
                        <p class="text-sm inline align-middle py-1">Log Out</p>
                    </button>
                </form>
            </div>
        </div>
        <!-- requests -->
        <div id="requests_dropdown" class="absolute hidden right-4 top-14 w-1/2 md:max-w-[450px] h-80 md:h-96 p-4 overflow-y-auto small-scrollbar pb-14 text-center z-20 bg-whitesmoke rounded-md shadow-2xl">
            <p class="font-bold text-left text-teal-900 -mb-2 ml-1">Follower requests</p>
            <x-underline></x-underline>
            @if(!$requests->isEmpty())
                @foreach ($requests as $request)
                <div class="flex justify-between flex-col sm:flex-row items-center rounded-sm mb-1 border-t-2 md:border-t-0 hover:bg-slate-100 p-1">
                    <section class="">
                        <figure class="inline-block">
                            <img class="rounded-full inline w-8 md:w-10" src="{{ asset($request->user->profile_picture) }}" alt="{{$request->user->first_name}} {{$request->user->last_name}}">
                        </figure>
                        <figure class="inline-block">
                            <p class="md:inline text-sm ml-1 align-middle text-gray-700">{{$request->user->first_name}} {{$request->user->last_name}}</p>
                            <a href="/profile/{{$username}}" class="text-xxs hidden md:inline text-cyan-600">{{'@'.$request->user->username}}</a> <!-- in progress -->
                        </figure>
                    </section> 
                    @livewire('accept-follower',['follower_id' => $request->user->id, 'accepted' => $request->accepted])
                </div>
                @endforeach
            @else
                <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-12 mx-auto my-auto" alt="no comment picture">
                <p class="text-xxs text-center text-gray-500">Wow such empty</p>
            @endif
        </div>
    </section>
</nav>