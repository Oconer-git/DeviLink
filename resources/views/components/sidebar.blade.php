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
    <section class="w-full flex justify-start border-purple-300 pl-2 mb-3 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current text-teal-800/70 group-hover:scale-110 group-hover:text-green-600 duration-200" viewBox="0 -960 960 960"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg>
        <a class="text-xl text-gray-500 font-semibold ml-3 hover:text-teal-700 hover:drop-shadow-xl p-1">Saved</a>
    </section>
    <!-- settings -->
    <section class="w-full flex justify-start border-purple-300 pl-2 mb-3 group">
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