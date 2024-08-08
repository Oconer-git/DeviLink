<div>
    <form wire:submit.prevent="comment_post" class="w-full bg-white my-2 p-2 rounded-md shadow-sm text-sm border-2 border-cyan-800 text-gray-800" enctype="multipart/form-data">
        @csrf
        <input type="hidden" wire:model="post_id" value="{{$post_id}}">
        <img src="{{ asset($profile_picture) }}" class="w-7 inline-block rounded-full border-2 shadow-md mr-1 align-top" alt="profile">
        <textarea wire:model="comment" id="comment" class="w-10/12 md:w-9/12 lg:w-11/12 text-lg focus:outline-none overflow-y-hidden bg-transparent inline-block mt-1" placeholder="Leave a comment..." oninput="autoResize(this)"></textarea>
        <div class="flex flex-row justify-end">
            <!-- //upload picture button -->
            @error('comment')
                <p class="text-red-900 text-xs w-44 mt-1 break-all">{{$message}}</p>
            @enderror
            <div class="flex items-center">
                <input type="file" id="image" wire:model="image" class="picture hidden" accept="image/*">
                <label for="image">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-500 w-4 h-4 mr-1 hover:text-orange-800" viewBox="0 -960 960 960"><path d="M440-440ZM120-120q-33 0-56.5-23.5T40-200v-480q0-33 23.5-56.5T120-760h126l74-80h240v80H355l-73 80H120v480h640v-360h80v360q0 33-23.5 56.5T760-120H120Zm640-560v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80ZM440-260q75 0 127.5-52.5T620-440q0-75-52.5-127.5T440-620q-75 0-127.5 52.5T260-440q0 75 52.5 127.5T440-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Z"/></svg>
                </label>
            </div>
            <!-- submit comment button -->
            <button type="submit" class="w-6 h-6" id="comment">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-sky-600 hover:text-blue-900 hover:shadow-xl hover:scale-105 duration-200" viewBox="0 -960 960 960"><path d="M120-160v-640l760 320-760 320Zm80-120 474-200-474-200v140l240 60-240 60v140Zm0 0v-400 400Z"/></svg>
            </button>
        </div>
    </form>

    <!-- picture preview -->
    @if($image)
        <img src="{{ $image->temporaryUrl() }}" alt="picture preview" class="mb-4 w-1/2 rounded-md">
    @endif
    
    @foreach ($comments as $key => $comment)
        <section class="bg-white pt-1">
            <img src="{{ asset($profile_picture) }}" class="w-10 h-10 rounded-full border-2 shadow-md inline align-top" alt="profile">
            <div class="inline-block align-midde">
                <p class="inline text-gray-600 text-sm md:text-md font-medium">{{$first_name}} {{$last_name}}</p>
                <a href="/profile/{{$username}}"class="inline text-cyan-600 text-xs md:text-md font-light">{{'@'.$username}}</a>
                <p class="inline text-gray-500 text-xxs ml-1">Just now</p>
                @if(isset($skills))
                    @include('partials.comments_skills_load', ['skills' => $skills])
                @endif
            </div>      
            <!--comment-->
            @if(strlen($comment->comment) > 70)
                <p class="mt-1 text-gray-700 px-4 break-words">{{$comment->comment}}</p> 
            @else
                <p class="mt-1 text-gray-700 px-4 text-sm break-words">{{$comment->comment}}</p> 
            @endif
            <!-- image -->
            @if($comment->image != null)
                <img src="{{ asset($comment->image) }}" class="w-8/12 p-3 -mt-2 -mb-4 rounded-2xl" alt="image">
            @endif
            <!-- number of likes -->
            <livewire:like-comment 
                :comment_id="$comment->id" 
                :is_profilee="true" 
                :comment_likes="0" 
                :wire:key="'like-comment-'.$comment->id" 
            />

            <!-- reply show button -->
            <button wire:click="show_reply({{$key}})" class="inline-block align-middle text-xxs ml-2 mt-2 hover:bg-teal-400/30 p-[4px] group rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline group-hover:hidden w-[20px] fill-current text-teal-800" viewBox="0 -960 960 960"><path d="M80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="hidden group-hover:inline w-[20px] fill-current text-sky-500" viewBox="0 -960 960 960"><path d="M80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Z"/></svg>
                <p class="inline">Reply</p>
            </button>
        </section>
        <section class="pl-6 mb-2">
            <!-- reply form -->
            <!-- show livewire when true -->
             
            <livewire:reply-comment-live 
                :comment_id="$comment->id"                 
                :show="$comment->show_reply_form"
                :wire:key="'reply-comment-live-'.$comment->id"
            />
        </section>
        <x-underline></x-underline>

    @endforeach
</div>
