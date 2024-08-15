<nav class="fixed z-20 flex flex-row  justify-between bg-gradient-to-l from-purple-100 to-white w-full px-0 md:px-2 pt-2 border-b-gray-500/25 drop-shadow-md">
    <!-- logo -->
    <section class="ml-4">
        <img src="{{ asset('storage/images/tealbean_logo_transparent.png') }}" class="home w-11 inline -mt-1 md:-mt-2" alt="tealbean logo">
        <a href="/" class="hidden md:inline font-extrabold text-2xl -ml-1 text-teal-500 hover:text-teal-600 my-auto">
            Fellowdevs
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
                <section class="settings hover:bg-slate-200 px-[12px] py-[2px] rounded-sm group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current w-4  group-hover:text-cyan-800 group-hover:scale-110 duration-300" viewBox="0 -960 960 960"><path d="M580-40q-25 0-42.5-17.5T520-100v-280q0-25 17.5-42.5T580-440h280q25 0 42.5 17.5T920-380v280q0 25-17.5 42.5T860-40H580Zm0-60h280v-32q-25-31-61-49.5T720-200q-43 0-79 18.5T580-132v32Zm140-140q25 0 42.5-17.5T780-300q0-25-17.5-42.5T720-360q-25 0-42.5 17.5T660-300q0 25 17.5 42.5T720-240ZM480-480Zm2-140q-58 0-99 41t-41 99q0 48 27 84t71 50v-90q-8-8-13-20.5t-5-23.5q0-25 17.5-42.5T482-540q14 0 25 5.5t19 14.5h90q-13-44-49.5-72T482-620ZM370-80l-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-85 65H696q-1-5-2-10.5t-3-10.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q24 25 54 42t65 22v184h-70Z"/></svg>
                    <p class="inline align-middle text-sm py-1">Settings</p>
                </section>
                <!-- log out -->
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="text-xs px-[12px] py-[2px] w-full flex justify-start rounded-sm hover:bg-slate-200 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-[7px] fill-current w-4 group-hover:text-red-800 group-hover:scale-110 duration-300" viewBox="0 -960 960 960"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
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
                            <a href="/profile/{{$request->user->username}}" class="text-xxs hidden md:inline text-cyan-600">{{'@'.$request->user->username}}</a> <!-- in progress -->
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

<!-- errors -->
@if ($errors->any())
    <div class="message hidden w-1/2 md:w-3/12 bg-red-100 border border-red-400/20 shadow-lg shadow-red-500 text-red-700 px-4 py-3 rounded fixed z-20 right-10 top-16" role="alert">
        <strong class="font-bold">Whoops!</strong>
        @foreach ($errors->all() as $error)
            <p class="text-red-900 text-sm">{{ $error }}</p>
        @endforeach
    </div>
@endif
@if(session('message'))
    <div class="message hidden w-1/2 md:w-3/12 bg-green-100 border border-red-400/20 shadow-lg shadow-green-500 text-green-700 px-4 py-3 rounded-md fixed z-20 right-10 top-16" role="alert">
        <span class="block sm:inline">{{session('message')}}</span>
    </div>
@endif

<!-- settings modal -->
<div id="settings_modal" class="modal hidden fixed top-0 left-0 z-40 pt-20 bg-neutral-900/90 w-screen h-screen">
    <div class="bg-white max-h-[500px] h-96 w-10/12 md:w-5/12 rounded-md shadow-md mx-auto my-auto p-4 overflow-y-auto small-scrollbar">
        <section class="flex justify-between border-b pb-2 mb-2">
            <figure class="font-bold text-sm text-neutral-600 inline align-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-6 inline align-middle" viewBox="0 -960 960 960"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm112-260q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Z"/></svg>
                <p class="inline align-middle">Settings</p>
            </figure>
            <button class="close_modal inline-block align-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-800" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
        </section>
        @if(!$username_changed)
        <!-- username settings -->
            <section id="username_settings" class="p-4 rounded-md bg-slate-100 flex justify-between">
                <fieldset>
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-slate-800 w-4 inline align-middle" viewBox="0 -960 960 960"><path d="M160-80q-33 0-56.5-23.5T80-160v-440q0-33 23.5-56.5T160-680h200v-120q0-33 23.5-56.5T440-880h80q33 0 56.5 23.5T600-800v120h200q33 0 56.5 23.5T880-600v440q0 33-23.5 56.5T800-80H160Zm0-80h640v-440H600q0 33-23.5 56.5T520-520h-80q-33 0-56.5-23.5T360-600H160v440Zm80-80h240v-18q0-17-9.5-31.5T444-312q-20-9-40.5-13.5T360-330q-23 0-43.5 4.5T276-312q-17 8-26.5 22.5T240-258v18Zm320-60h160v-60H560v60Zm-200-60q25 0 42.5-17.5T420-420q0-25-17.5-42.5T360-480q-25 0-42.5 17.5T300-420q0 25 17.5 42.5T360-360Zm200-60h160v-60H560v60ZM440-600h80v-200h-80v200Zm40 220Z"/></svg>
                    <p class="inline align-middle text-gray-800 text-sm">Username:</p>
                    <p class="inline align-middle text-blue-800 text-sm">tealbean/profile/{{$username}}</p>
                </fieldset>
                <button id="show_username_settings" class="bg-slate-400 px-2 h-6 text-xs text-white rounded-md shadow-sm">
                    edit
                </button>
            </section>
            <section class="hidden" id="username_form">
                <label class="text-xxs block text-orange-800">You can only change your usename once</label>
                <form action="{{route('update_username.user')}}" method="POST" class="p-4  rounded-md bg-slate-200 mb-2 flex justify-between">
                    @method('PUT')
                    @csrf
                    <label for="username" class="mr-2 text-sm font-semibold text-gray-600 w-4/12">Change username:</label>
                    <fieldset class="flex justify-end">
                        <input type="text" name="username" class="bg-slate-300 rounded-md h-6 mr-1 focus:outline-teal-800 text-sm p-1" placeholder="{{$username}}">
                        <input type="submit" class="bg-teal-600 shadow-sm text-white text-xs p-1 h-6 rounded-md hover:bg-green-600" value="save">
                    </fieldset>
                </form>      
            </section>
            @error('username')
                <label class="text-xxs block text-orange-800 mb-2">{{$message}}</label>
            @enderror  
        @endif
        <!-- name settings -->
        <section id="name_settings" class="p-4 flex justify-between mt-1 rounded-md bg-slate-100">
            <fieldset>
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-slate-800 w-4 inline align-middle" viewBox="0 -960 960 960"><path d="M360-390q-21 0-35.5-14.5T310-440q0-21 14.5-35.5T360-490q21 0 35.5 14.5T410-440q0 21-14.5 35.5T360-390Zm240 0q-21 0-35.5-14.5T550-440q0-21 14.5-35.5T600-490q21 0 35.5 14.5T650-440q0 21-14.5 35.5T600-390ZM480-160q134 0 227-93t93-227q0-24-3-46.5T786-570q-21 5-42 7.5t-44 2.5q-91 0-172-39T390-708q-32 78-91.5 135.5T160-486v6q0 134 93 227t227 93Zm0 80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-54-715q42 70 114 112.5T700-640q14 0 27-1.5t27-3.5q-42-70-114-112.5T480-800q-14 0-27 1.5t-27 3.5ZM177-581q51-29 89-75t57-103q-51 29-89 75t-57 103Zm249-214Zm-103 36Z"/></svg>
                <p class="inline text-gray-800 text-sm">First name:</p>
                <p class="inline text-slate-800 font-semibold text-sm">{{$first_name}}</p>
                <p class="inline text-gray-800 text-sm ml-2">Last name:</p>
                <p class="inline text-slate-800 font-semibold text-sm">{{$last_name}}</p>
            </fieldset>
            <button id="show_name_settings" class="bg-slate-400 px-2 h-6 text-xs text-white rounded-md shadow-sm">
                edit
            </button>         
        </section>
        <section id="name_form" class="hidden">
            <form action="{{route('update_name.user')}}" method="POST" class="p-4 rounded-md bg-slate-200 mt-1">
                @method('PUT')
                @csrf
                <fieldset class="w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-slate-800 w-5 inline align-middle" viewBox="0 -960 960 960"><path d="M360-390q-21 0-35.5-14.5T310-440q0-21 14.5-35.5T360-490q21 0 35.5 14.5T410-440q0 21-14.5 35.5T360-390Zm240 0q-21 0-35.5-14.5T550-440q0-21 14.5-35.5T600-490q21 0 35.5 14.5T650-440q0 21-14.5 35.5T600-390ZM480-160q134 0 227-93t93-227q0-24-3-46.5T786-570q-21 5-42 7.5t-44 2.5q-91 0-172-39T390-708q-32 78-91.5 135.5T160-486v6q0 134 93 227t227 93Zm0 80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-54-715q42 70 114 112.5T700-640q14 0 27-1.5t27-3.5q-42-70-114-112.5T480-800q-14 0-27 1.5t-27 3.5ZM177-581q51-29 89-75t57-103q-51 29-89 75t-57 103Zm249-214Zm-103 36Z"/></svg>
                    <label class="mr-2 font-semibold text-gray-600 inline align-middle">Update name</label>
                </fieldset>
                <fieldset class="inline-block w-half">
                    <label for="first_name" class="mr-2 text-sm text-gray-600 inline-block">First name:</label>
                    <input type="text" name="first_name" class="bg-slate-300 rounded-md h-6 w-full focus:outline-teal-800 text-sm p-1" placeholder="{{$first_name}}">
                </fieldset>
                <fieldset class="inline-block w-half">
                    <label for="last_name" class="mr-2 text-sm text-gray-600 inline-block">Last name:</label>
                    <input type="text" name="last_name" class="bg-slate-300 rounded-md h-6 w-full focus:outline-teal-800 text-sm p-1" placeholder="{{$last_name}}">
                </fieldset>
                <fieldset class="flex justify-end mt-2">
                    <input type="submit" class="bg-teal-600 shadow-sm text-white text-xs p-1 h-6 rounded-md hover:bg-green-600" value="save">
                </fieldset>
            </form>        
        </section>
        @if ($errors->any())
            <section class="-mt-1">
                @error('first_name')
                    <p class="text-xxs text-orange-800 inline">{{$message}}</p>
                @enderror
                @error('last_name')
                    <p class="text-xxs text-orange-800 inline">{{$message}}</p>
                @enderror
            </section>
        @endif
        <!-- date of birth settings -->
        <section id="dob_settings" class="p-4 mt-1 rounded-md bg-slate-100 flex justify-between">
            <fieldset>
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-slate-800 w-4 inline align-middle" viewBox="0 -960 960 960"><path d="M160-80q-17 0-28.5-11.5T120-120v-200q0-33 23.5-56.5T200-400v-160q0-33 23.5-56.5T280-640h160v-58q-18-12-29-29t-11-41q0-15 6-29.5t18-26.5l56-56 56 56q12 12 18 26.5t6 29.5q0 24-11 41t-29 29v58h160q33 0 56.5 23.5T760-560v160q33 0 56.5 23.5T840-320v200q0 17-11.5 28.5T800-80H160Zm120-320h400v-160H280v160Zm-80 240h560v-160H200v160Zm80-240h400-400Zm-80 240h560-560Zm560-240H200h560Z"/></svg>
                <p class="inline align-middle text-gray-800 text-sm">Date of birth:</p>
                <p class="inline align-middle text-blue-800 text-sm">{{$dob}}</p>
            </fieldset>
            <button id="show_dob_settings" class="bg-slate-400 px-2 h-6 text-xs text-white rounded-md shadow-sm">
                edit
            </button>
        </section>
        <section class="hidden" id="dob_form">
            <form action="{{route('update_dob.user')}}" method="POST" class="p-4  rounded-md bg-slate-200 mt-2 flex justify-between">
                @method('PUT')
                @csrf
                <fieldset>
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-slate-800 w-4 inline align-middle" viewBox="0 -960 960 960"><path d="M160-80q-17 0-28.5-11.5T120-120v-200q0-33 23.5-56.5T200-400v-160q0-33 23.5-56.5T280-640h160v-58q-18-12-29-29t-11-41q0-15 6-29.5t18-26.5l56-56 56 56q12 12 18 26.5t6 29.5q0 24-11 41t-29 29v58h160q33 0 56.5 23.5T760-560v160q33 0 56.5 23.5T840-320v200q0 17-11.5 28.5T800-80H160Zm120-320h400v-160H280v160Zm-80 240h560v-160H200v160Zm80-240h400-400Zm-80 240h560-560Zm560-240H200h560Z"/></svg>
                    <label for="dob" class="mr-2 text-sm font-semibold text-gray-600 w-4/12">Edit Date of Birth:</label>
                </fieldset>
                <fieldset class="flex justify-end">
                    <input type="text" id="datepicker" name="dob" class="bg-slate-300 rounded-md h-6 w-full mr-1 text-sm p-1">
                    <input type="submit" class="bg-teal-600 shadow-sm text-white text-xs p-1 h-6 rounded-md hover:bg-green-600" value="save">
                </fieldset>
            </form>        
        </section>
        @error('dob')
            <label class="text-xxs block text-orange-800 mb-2">{{$message}}</label>
        @enderror
        <!-- change password settings -->
        <section id="password_settings" class="p-4 mt-1 rounded-md bg-slate-100 flex justify-between">
            <fieldset>
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-slate-800 w-4 inline align-middle" viewBox="0 -960 960 960"><path d="M240-640h360v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85h-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640Zm0 480h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM240-160v-400 400Z"/></svg>
                <p class="inline align-middle text-gray-800 text-sm">Change password</p>
                <p class="inline align-middle text-red-800 text-sm">••••••••••</p>
            </fieldset>
            <button id="show_password_settings" class="bg-slate-400 px-2 h-6 text-xs text-white rounded-md shadow-sm">
                edit
            </button>
        </section>
        <section class="hidden" id="password_form">
            <form action="{{ route('update_password.user') }}" method="POST" class="p-4 rounded-md bg-slate-200 mt-1">
                @method('PUT')
                @csrf
                <fieldset class="w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-slate-800 w-4 inline align-middle" viewBox="0 -960 960 960"><path d="M240-640h360v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85h-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640Zm0 480h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM240-160v-400 400Z"/></svg>
                    <label class="mr-2 font-semibold text-gray-600 inline align-middle">Password settings</label>
                </fieldset>
                <fieldset class="inline-block w-half align-top">
                    <label for="old_password" class="mr-2 text-sm text-gray-600 inline-block">Old password:</label>
                    <input type="password" name="old_password" id="old_password" class="bg-slate-300 rounded-md h-6 w-full focus:outline-teal-800 text-sm p-1" placeholder="••••••••••">
                </fieldset>
                <fieldset class="inline-block w-half">
                    <div>
                        <label for="password" class="mr-2 text-sm text-gray-600 inline-block">New Password:</label>
                        <input type="password" name="password" id="password" class="bg-slate-300 rounded-md h-6 w-full focus:outline-teal-800 text-sm p-1" placeholder="••••••••••">
                    </div>
                    <div class="mt-2">
                        <label for="password_confirmation" class="mr-2 text-sm text-gray-600 inline-block">Password confirmation:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="bg-slate-300 rounded-md h-6 w-full focus:outline-teal-800 text-sm p-1" placeholder="••••••••••">
                    </div>
                </fieldset>
                <fieldset class="flex justify-end mt-2">
                    <input type="submit" class="bg-teal-600 shadow-sm text-white text-xs p-1 h-6 rounded-md hover:bg-green-600" value="Save">
                </fieldset>
            </form>   
        </section>
        @if ($errors->any())
            <section class="-mt-1">
                @foreach ($errors->all() as $error)
                    <p class="text-xxs text-orange-800 inline">{{$error}}</p>
                @endforeach  
            </section>
        @endif 
    </div>
</div>