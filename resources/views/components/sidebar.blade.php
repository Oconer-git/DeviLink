<div class="fixed hidden px-4 py-3 top-18 left-8 md:w-3/12 md:block lg:left-2 align-top">
    <!-- home -->
    <section class="home w-full flex justify-start border-purple-300 pl-2 mb-3 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current  text-cyan-700/70 group-hover:scale-110 duration-200" viewBox="0 -960 960 960"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>
        <a class="text-xl text-gray-500 font-semibold ml-3 hover:text-teal-700 hover:drop-shadow-xl p-1">Home</a>
    </section>
    <!-- explore -->
    <section class="w-full flex justify-start border-purple-300 pl-2 mb-3 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current text-teal-800/70 group-hover:scale-110 duration-200" viewBox="0 -960 960 960"><path d="m260-260 300-140 140-300-300 140-140 300Zm220-180q-17 0-28.5-11.5T440-480q0-17 11.5-28.5T480-520q17 0 28.5 11.5T520-480q0 17-11.5 28.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
        <a class="text-xl text-gray-500 font-semibold ml-3 hover:text-teal-700 hover:drop-shadow-xl p-1">Explore</a>
    </section>
    <!-- saved -->
    <section class="w-full flex justify-start border-purple-300 pl-2 mb-3 group" id="saves">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current text-teal-800/70 group-hover:scale-110 group-hover:text-green-600 duration-200" viewBox="0 -960 960 960"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg>
        <a class="text-xl text-gray-500 font-semibold ml-3 hover:text-teal-700 hover:drop-shadow-xl p-1">Saved</a>
    </section>
    <!-- settings -->
    <section class="settings w-full flex justify-start border-purple-300 pl-2 mb-3 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current text-slate-400  group-hover:text-neutral-600 group-hover:scale-105 duration-200" viewBox="0 -960 960 960"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/></svg>
        <a class="text-xl text-gray-500 font-semibold ml-3 hover:text-teal-700 hover:drop-shadow-xl p-1">Settings</a>
    </section>
    <!-- profile section-->
    <section class="profile w-full flex justify-start border-purple-300 pl-2 mb-3 group"
        data-username="{{$username}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current text-slate-400 group-hover:text-cyan-600 group-hover:scale-105 duration-200" viewBox="0 -960 960 960"><path d="M360-390q-21 0-35.5-14.5T310-440q0-21 14.5-35.5T360-490q21 0 35.5 14.5T410-440q0 21-14.5 35.5T360-390Zm240 0q-21 0-35.5-14.5T550-440q0-21 14.5-35.5T600-490q21 0 35.5 14.5T650-440q0 21-14.5 35.5T600-390ZM480-160q134 0 227-93t93-227q0-24-3-46.5T786-570q-21 5-42 7.5t-44 2.5q-91 0-172-39T390-708q-32 78-91.5 135.5T160-486v6q0 134 93 227t227 93Zm0 80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-54-715q42 70 114 112.5T700-640q14 0 27-1.5t27-3.5q-42-70-114-112.5T480-800q-14 0-27 1.5t-27 3.5ZM177-581q51-29 89-75t57-103q-51 29-89 75t-57 103Zm249-214Zm-103 36Z"/></svg>
        <a class="text-xl text-gray-500 font-semibold ml-3 hover:text-teal-700 hover:drop-shadow-xl p-1">Profile</a>
    </section>
</div>

<!-- settings modal -->
<div id="settings_modal" class="modal fixed top-0 left-0 z-40 pt-20 bg-neutral-900/90 w-screen h-screen">
    <div class="bg-white max-h-[500px] h-96 w-10/12 md:w-5/12 rounded-md shadow-md mx-auto my-auto p-4 overflow-y-auto scrollbar-small">
        <section class="flex justify-between border-b pb-2 mb-2">
            <figure class="font-bold text-sm text-neutral-600 inline align-bottom   ">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-6 inline align-middle" viewBox="0 -960 960 960"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm112-260q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Z"/></svg>
                <p class="inline align-middle">Settings</p>
            </figure>
            <button class="close_modal inline-block align-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-800" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
        </section>
        @if(!$username_changed)
            <section id="username_settings" class="p-4 mb-1 rounded-md bg-slate-100 flex justify-between">
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
                <form action="{{route('update_username.user')}}" method="POST" class="p-4  rounded-md bg-slate-200 mb-2 flex justify-between">
                    @method('PUT')
                    @csrf
                    <label for="username" class="mr-2 text-sm font-semibold text-gray-600 w-4/12">Change username:</label>
                    <fieldset class="inline w-half">
                        <input type="text" name="username" class="bg-slate-300 rounded-md h-6 w-8/12 md:w-10/12 focus:outline-teal-800 text-sm p-1" placeholder="{{$username}}">
                        <input type="submit" class="bg-teal-600 shadow-sm text-white text-xs p-1 h-6 rounded-md hover:bg-green-600" value="save">
                        <label class="text-xxs block text-orange-800">You can only change your usename once</label>
                        @error('username')
                            <label class="text-xxs block text-orange-800">{{$message}}</label>
                        @enderror
                        
                    </fieldset>
                </form>        
            </section>
        @endif
        <section id="name_settings" class="p-4 flex justify-between mb-1 rounded-md bg-slate-100">
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
        @error('first_name')
            <p class="text-xxs text-orange-800 inline">{{$message}}</p>
        @enderror
        @error('last_name')
            <p class="text-xxs text-orange-800 inline">{{$message}}</p>
        @enderror
        <section id="name_form" class="hidden">
            <form action="{{route('update_name.user')}}" method="POST" class="p-4  rounded-md bg-slate-200 mb-2">
                @method('PUT')
                @csrf
                <label class="mr-2 font-semibold text-gray-600 w-full inline-block">Change name</label>
                <fieldset class="inline-block w-half">
                    <label for="first_name" class="mr-2 text-sm text-gray-600 inline-block">First name:</label>
                    <input type="text" name="first_name" class="bg-slate-300 rounded-md h-6 w-full focus:outline-teal-800 text-sm p-1" placeholder="{{$username}}">
                </fieldset>
                <fieldset class="inline-block w-half">
                    <label for="last_name" class="mr-2 text-sm text-gray-600 inline-block">Last name:</label>
                    <input type="text" name="last_name" class="bg-slate-300 rounded-md h-6 w-full focus:outline-teal-800 text-sm p-1" placeholder="{{$username}}">
                </fieldset>
                <fieldset class="flex justify-end mt-2">
                    <input type="submit" class="bg-teal-600 shadow-sm text-white text-xs p-1 h-6 rounded-md hover:bg-green-600" value="save">
                </fieldset>
            </form>        
        </section>
    </div>
</div>