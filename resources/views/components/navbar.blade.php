<nav class="fixed z-20 flex flex-row  justify-between bg-gradient-to-l from-purple-100 to-white w-full px-2 pt-2 border-b-gray-500/25 drop-shadow-md">
        <!-- logo -->
        <section class="">
            <img src="{{ asset('storage/images/devilink_logo.png') }}" class="w-14 inline -mt-3" alt="devilink logo">
            <a href="/" class="hidden md:inline font-extrabold text-2xl text-purple-700/10 hover:text-purple-300 my-auto">DEVILINK</a>
        </section>
        <!-- search textbox -->
        <form action="" class="bg-gray-200 rounded-full shadow-md w-4/12 md:w-80 h-8 pt-1 px-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline" viewBox="0 -960 960 960"  fill="#5f6368"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
            <input type="text" class="inline w-2/4 md:w-3/4 outline-none text-xs text-gray-600 bg-gray-200">
        </form> 
        <!-- notifs and profile -->
        <section class="mr-4">
            <button id="requests_notif" class="align-middle h-8 w-8 rounded-full bg-slate-500/70 p-1 group hover:bg-blue-300 ease-in delay-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-current inline text-white" viewBox="0 -960 960 960"><path d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"/></svg>
                <p class="text-xxs relative bg-yellow-500/50 group-hover:bg-yellow-400 ease-in delay-300 text-white font-bold w-6 px-[4px] py-[2px] z-20 bottom-3 text-red ml-3 inline align-middle rounded-full">12</p>
            </button>
            <button id="profile_settings" class="w-9 h-9 mx-auto border-2 rounded-full inline align-middle my-1">
                <img src="{{ asset($profile_picture) }}" class="rounded-full border-2 border-gray-500" alt="devilink logo">
            </button>
            <p class="text-sm align-middle text-slate-500 inline">{{$first_name}}</p>
            <!-- settings dropdown -->
            <div id="profile_dropdown" class="">
                <div class="absolute right-4 top-14 w-44 p-2 z-20 flex flex-col bg-white/90 text-gray-500 rounded-md shadow-2xl">
                    <section class="hover:bg-slate-200 px-[5px] py-[2px] rounded-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current w-5" viewBox="0 -960 960 960"><path d="M200-246q54-53 125.5-83.5T480-360q83 0 154.5 30.5T760-246v-514H200v514Zm280-194q58 0 99-41t41-99q0-58-41-99t-99-41q-58 0-99 41t-41 99q0 58 41 99t99 41ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm80-80h400v-10q-42-35-93-52.5T480-280q-56 0-107 17.5T280-210v10Zm200-320q-25 0-42.5-17.5T420-580q0-25 17.5-42.5T480-640q25 0 42.5 17.5T540-580q0 25-17.5 42.5T480-520Zm0 17Z"/></svg>
                        <a href="/profile/{{$username}}" class="text-sm py-1">Profile</a>
                    </section>
                    <section class="hover:bg-slate-200 px-[5px] py-[2px] rounded-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current w-5" viewBox="0 -960 960 960"><path d="M580-40q-25 0-42.5-17.5T520-100v-280q0-25 17.5-42.5T580-440h280q25 0 42.5 17.5T920-380v280q0 25-17.5 42.5T860-40H580Zm0-60h280v-32q-25-31-61-49.5T720-200q-43 0-79 18.5T580-132v32Zm140-140q25 0 42.5-17.5T780-300q0-25-17.5-42.5T720-360q-25 0-42.5 17.5T660-300q0 25 17.5 42.5T720-240ZM480-480Zm2-140q-58 0-99 41t-41 99q0 48 27 84t71 50v-90q-8-8-13-20.5t-5-23.5q0-25 17.5-42.5T482-540q14 0 25 5.5t19 14.5h90q-13-44-49.5-72T482-620ZM370-80l-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-85 65H696q-1-5-2-10.5t-3-10.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q24 25 54 42t65 22v184h-70Z"/></svg>
                        <a href="/settings" class="text-sm  py-1">Settings</a>
                    </section>
                    <form action="{{route('logout')}}" method="POST" class="text-xs px-[5px] py-[2px] rounded-sm hover:bg-slate-200">
                        @csrf
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current w-5" viewBox="0 -960 960 960"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
                        </button>
                        <input type="submit" class="text-sm py-1" value="Log Out">
                    </form>
                </div>
            </div>
            <div id="requests_dropdown" class="absolute right-4 top-14 w-96 h-96 p-4 overflow-y-auto small-scrollbar pb-14 text-center z-20 bg-whitesmoke rounded-sm shadow-xl">
                <p class="font-bold text-left text-gray-600/90 -mb-2 ml-1">Follower requests</p>
                <x-underline></x-underline>
                <div class="flex justify-between items-center rounded-md mb-1 hover:bg-slate-100 p-1">
                    <section>
                        <figure class="inline-block">
                            <img src="{{asset($profile_picture)}}" alt="{{$first_name}} {{$last_name}}" class="rounded-full inline w-10">
                        </figure>
                        <p class="inline ml-1 align-middle text-sm text-gray-700">{{$first_name}} {{$last_name}}</p>
                        <a href="/profile/{{$username}}" class=" text-xxs text-cyan-600">{{'@'.$username}}</a> <!-- in progress -->
                    </section> 
                    <form action="" class=" p-1 -mt-1">
                        <label for="action" class="align-middle text-gray-900 text-xs">Accept?</label>
                        <button type="submit" class="inline-block align-middle p-1 bg-green-400 rounded-full group hover:bg-emerald-500" name="action" value="accept">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-green-900 group-hover:text-white" viewBox="0 -960 960 960"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                        </button>
                        <button type="submit" class="inline-block align-middle p-1 bg-red-700 rounded-full group hover:bg-red-900" name="action" value="reject">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-red-400 group-hover:text-gray-200" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                        </button>
                    </form>
                </div>
                <div class="flex justify-between items-center rounded-md mb-1 hover:bg-slate-100 p-1">
                    <section>
                        <figure class="inline-block">
                            <img src="{{asset($profile_picture)}}" alt="{{$first_name}} {{$last_name}}" class="rounded-full inline w-10">
                        </figure>
                        <p class="inline ml-1 align-middle text-sm text-gray-700">{{$first_name}} {{$last_name}}</p>
                        <a href="/profile/{{$username}}" class=" text-xxs text-cyan-600">{{'@'.$username}}</a> <!-- in progress -->
                    </section> 
                    <form action="" class=" p-1 -mt-1">
                        <label for="action" class="align-middle text-gray-900 text-xs">Accept?</label>
                        <button type="submit" class="inline-block align-middle p-1 bg-green-400 rounded-full group hover:bg-emerald-500" name="action" value="accept">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-green-900 group-hover:text-white" viewBox="0 -960 960 960"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                        </button>
                        <button type="submit" class="inline-block align-middle p-1 bg-red-700 rounded-full group hover:bg-red-900" name="action" value="reject">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-red-400 group-hover:text-gray-200" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                        </button>
                    </form>
                </div>
                <div class="flex justify-between items-center rounded-md mb-1 hover:bg-slate-100 p-1">
                    <section>
                        <figure class="inline-block">
                            <img src="{{asset($profile_picture)}}" alt="{{$first_name}} {{$last_name}}" class="rounded-full inline w-10">
                        </figure>
                        <p class="inline ml-1 align-middle text-sm text-gray-700">{{$first_name}} {{$last_name}}</p>
                        <a href="/profile/{{$username}}" class=" text-xxs text-cyan-600">{{'@'.$username}}</a> <!-- in progress -->
                    </section> 
                    <form action="" class=" p-1 -mt-1">
                        <label for="action" class="align-middle text-gray-900 text-xs">Accept?</label>
                        <button type="submit" class="inline-block align-middle p-1 bg-green-400 rounded-full group hover:bg-emerald-500" name="action" value="accept">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-green-900 group-hover:text-white" viewBox="0 -960 960 960"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                        </button>
                        <button type="submit" class="inline-block align-middle p-1 bg-red-700 rounded-full group hover:bg-red-900" name="action" value="reject">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-red-400 group-hover:text-gray-200" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                        </button>
                    </form>
                </div>
                <div class="flex justify-between items-center rounded-md mb-1 hover:bg-slate-100 p-1">
                    <section>
                        <figure class="inline-block">
                            <img src="{{asset($profile_picture)}}" alt="{{$first_name}} {{$last_name}}" class="rounded-full inline w-10">
                        </figure>
                        <p class="inline ml-1 align-middle text-sm text-gray-700">{{$first_name}} {{$last_name}}</p>
                        <a href="/profile/{{$username}}" class=" text-xxs text-cyan-600">{{'@'.$username}}</a> <!-- in progress -->
                    </section> 
                    <form action="" class=" p-1 -mt-1">
                        <label for="action" class="align-middle text-gray-900 text-xs">Accept?</label>
                        <button type="submit" class="inline-block align-middle p-1 bg-green-400 rounded-full group hover:bg-emerald-500" name="action" value="accept">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-green-900 group-hover:text-white" viewBox="0 -960 960 960"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                        </button>
                        <button type="submit" class="inline-block align-middle p-1 bg-red-700 rounded-full group hover:bg-red-900" name="action" value="reject">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-red-400 group-hover:text-gray-200" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                        </button>
                    </form>
                </div>
                <div class="flex justify-between items-center rounded-md mb-1 hover:bg-slate-100 p-1">
                    <section>
                        <figure class="inline-block">
                            <img src="{{asset($profile_picture)}}" alt="{{$first_name}} {{$last_name}}" class="rounded-full inline w-10">
                        </figure>
                        <p class="inline ml-1 align-middle text-sm text-gray-700">{{$first_name}} {{$last_name}}</p>
                        <a href="/profile/{{$username}}" class=" text-xxs text-cyan-600">{{'@'.$username}}</a> <!-- in progress -->
                    </section> 
                    <form action="" class=" p-1 -mt-1">
                        <label for="action" class="align-middle text-gray-900 text-xs">Accept?</label>
                        <button type="submit" class="inline-block align-middle p-1 bg-green-400 rounded-full group hover:bg-emerald-500" name="action" value="accept">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-green-900 group-hover:text-white" viewBox="0 -960 960 960"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                        </button>
                        <button type="submit" class="inline-block align-middle p-1 bg-red-700 rounded-full group hover:bg-red-900" name="action" value="reject">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-red-400 group-hover:text-gray-200" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                        </button>
                    </form>
                </div>
                <div class="flex justify-between items-center rounded-md mb-1 hover:bg-slate-100 p-1">
                    <section>
                        <figure class="inline-block">
                            <img src="{{asset($profile_picture)}}" alt="{{$first_name}} {{$last_name}}" class="rounded-full inline w-10">
                        </figure>
                        <p class="inline ml-1 align-middle text-sm text-gray-700">{{$first_name}} {{$last_name}}</p>
                        <a href="/profile/{{$username}}" class=" text-xxs text-cyan-600">{{'@'.$username}}</a> <!-- in progress -->
                    </section> 
                    <form action="" class=" p-1 -mt-1">
                        <label for="action" class="align-middle text-gray-900 text-xs">Accept?</label>
                        <button type="submit" class="inline-block align-middle p-1 bg-green-400 rounded-full group hover:bg-emerald-500" name="action" value="accept">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-green-900 group-hover:text-white" viewBox="0 -960 960 960"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                        </button>
                        <button type="submit" class="inline-block align-middle p-1 bg-red-700 rounded-full group hover:bg-red-900" name="action" value="reject">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-red-400 group-hover:text-gray-200" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                        </button>
                    </form>
                </div>
                <div class="flex justify-between items-center rounded-md mb-1 hover:bg-slate-100 p-1">
                    <section>
                        <figure class="inline-block">
                            <img src="{{asset($profile_picture)}}" alt="{{$first_name}} {{$last_name}}" class="rounded-full inline w-10">
                        </figure>
                        <p class="inline ml-1 align-middle text-sm text-gray-700">{{$first_name}} {{$last_name}}</p>
                        <a href="/profile/{{$username}}" class=" text-xxs text-cyan-600">{{'@'.$username}}</a> <!-- in progress -->
                    </section> 
                    <form action="" class=" p-1 -mt-1">
                        <label for="action" class="align-middle text-gray-900 text-xs">Accept?</label>
                        <button type="submit" class="inline-block align-middle p-1 bg-green-400 rounded-full group hover:bg-emerald-500" name="action" value="accept">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-green-900 group-hover:text-white" viewBox="0 -960 960 960"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                        </button>
                        <button type="submit" class="inline-block align-middle p-1 bg-red-700 rounded-full group hover:bg-red-900" name="action" value="reject">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-red-400 group-hover:text-gray-200" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                        </button>
                    </form>
                </div>
                <div class="flex justify-between items-center rounded-md mb-1 hover:bg-slate-100 p-1">
                    <section>
                        <figure class="inline-block">
                            <img src="{{asset($profile_picture)}}" alt="{{$first_name}} {{$last_name}}" class="rounded-full inline w-10">
                        </figure>
                        <p class="inline ml-1 align-middle text-sm text-gray-700">{{$first_name}} {{$last_name}}</p>
                        <a href="/profile/{{$username}}" class=" text-xxs text-cyan-600">{{'@'.$username}}</a> <!-- in progress -->
                    </section> 
                    <form action="" class=" p-1 -mt-1">
                        <label for="action" class="align-middle text-gray-900 text-xs">Accept?</label>
                        <button type="submit" class="inline-block align-middle p-1 bg-green-400 rounded-full group hover:bg-emerald-500" name="action" value="accept">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-green-900 group-hover:text-white" viewBox="0 -960 960 960"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                        </button>
                        <button type="submit" class="inline-block align-middle p-1 bg-red-700 rounded-full group hover:bg-red-900" name="action" value="reject">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-red-400 group-hover:text-gray-200" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                        </button>
                    </form>
                </div>
                <div class="flex justify-between items-center rounded-md mb-1 hover:bg-slate-100 p-1">
                    <section>
                        <figure class="inline-block">
                            <img src="{{asset($profile_picture)}}" alt="{{$first_name}} {{$last_name}}" class="rounded-full inline w-10">
                        </figure>
                        <p class="inline ml-1 align-middle text-sm text-gray-700">{{$first_name}} {{$last_name}}</p>
                        <a href="/profile/{{$username}}" class=" text-xxs text-cyan-600">{{'@'.$username}}</a> <!-- in progress -->
                    </section> 
                    <form action="" class=" p-1 -mt-1">
                        <label for="action" class="align-middle text-gray-900 text-xs">Accept?</label>
                        <button type="submit" class="inline-block align-middle p-1 bg-green-400 rounded-full group hover:bg-emerald-500" name="action" value="accept">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-green-900 group-hover:text-white" viewBox="0 -960 960 960"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                        </button>
                        <button type="submit" class="inline-block align-middle p-1 bg-red-700 rounded-full group hover:bg-red-900" name="action" value="reject">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-red-400 group-hover:text-gray-200" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </nav>