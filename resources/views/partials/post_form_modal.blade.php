<div id="post_form" class="modal hidden fixed top-0 left-0 z-40 pt-20 bg-neutral-900/90 w-screen h-screen">
    <div class="bg-white max-h-[500px] w-10/12 md:w-5/12 rounded-md shadow-md mx-auto my-auto p-4 overflow-y-auto scrollbar-small">
        <section class="flex justify-between -mb-3">
            <figure class="font-bold text-sm text-neutral-400 inline align-">
                <img src="{{ asset($profile_picture) }}" class="w-8 h-8 border-2 rounded-full shadow-md inline" alt="profile picture">
                <p class="inline align-middle">Share something interesting</p>
            </figure>
            <button class="close_modal inline-block align-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-800" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
        </section>
        <form action="{{route('user.post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <select name="is_global" id="publicity" class="text-xs text-gray-400 ml-8 focus:outline-none">
                <option value="0">
                    Only friends can see this
                </option>
                <option value="1">
                    Anyone can share & comment
                </option>
            </select>
            <x-underline></x-underline>
            <textarea name="content" rows="3" class="w-full p-3 focus:outline-none rounded-md text-gray-900" id="about" placeholder="share something here..."></textarea>
            <!-- picture post preview -->
            <img src="{{asset('storage/images/no_picture.jpg')}}"  alt="picture" class="picture_preview hidden w-full mt-2 rounded-md outline-4">
            <section>
                <figure id="upload_post_picture" class="inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-blue-500 w-6 h-6 " viewBox="0 -960 960 960"><path d="M440-440ZM120-120q-33 0-56.5-23.5T40-200v-480q0-33 23.5-56.5T120-760h126l74-80h240v80H355l-73 80H120v480h640v-360h80v360q0 33-23.5 56.5T760-120H120Zm640-560v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80ZM440-260q75 0 127.5-52.5T620-440q0-75-52.5-127.5T440-620q-75 0-127.5 52.5T260-440q0 75 52.5 127.5T440-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Z"/></svg>
                </figure>
                <input type="file" name="picture" id="post_picture" class="picture text-xs hidden inline-block align-top" accept="image/*">
            </section>
            <div class="border-t-2 border-sky-400 py-2">
                <button type="submit" class="bg-sky-500  w-full p-2 shadow-md drop-shadow-sm text-white font-semibold text-sm rounded-md hover:bg-sky-600">
                    Post
                </button>
            </div>
        </form>
    </div>
</div>