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
    <button wire:click="show_reply" class="inline-block align-middle text-xxs ml-2 mt-2 hover:bg-teal-400/30 p-[4px] group rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="inline group-hover:hidden w-[20px] fill-current text-teal-800" viewBox="0 -960 960 960"><path d="M80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="hidden group-hover:inline w-[20px] fill-current text-sky-500" viewBox="0 -960 960 960"><path d="M80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Z"/></svg>
        <p class="inline">Reply</p>
    </button>
    <section class="pl-6 mb-2">
        <!-- reply form -->
        <div class="mb-2">
            <!-- show livewire when true -->
            @if($show)
            <div class="reply_form">
            @else
            <div class="hidden reply_form">
            @endif
                 <!-- reply form -->
                <section class=" px-2 flex flex-row">
                    <img src="{{ asset($profile_picture) }}" class="w-9 h-9 mt-1 rounded-full border-2 shadow-md inline-block mr-1" alt="profile">
                    <!-- form -->
                    <form wire:submit.prevent="submit_reply" class="w-full mt-2 px-3 py-2 rounded-md text-sm bg-teal-100 text-gray-800">
                        @csrf
                        <input type="hidden" wire:model="comment_id" value="{{$comment_id}}">
                        <textarea wire:model="reply_content" class="w-full align-middle text-gray-600 overfl    ow-y-hidden focus:outline-0 bg-transparent" placeholder="Leave a reply..."></textarea>          
                        <button type="submit" class="w-6 h-6 float-end">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-sky-400 hover:text-blue-900 hover:shadow-xl hover:scale-105 duration-200" viewBox="0 -960 960 960"><path d="M120-160v-640l760 320-760 320Zm80-120 474-200-474-200v140l240 60-240 60v140Zm0 0v-400 400Z"/></svg>
                        </button>
                    </form>

                </section>
                @error('reply')
                    <p class="text-red-900 text-xs mt-1 float-end">{{$message}}</p>
                @enderror
            </div>
            <div>
                @foreach($replies as $reply)
                    <section class= "pl-2 mt-2 mb-4 border-l-2 border-l-gray-300">
                        <img src="{{ asset($profile_picture) }}" class="w-9 h-9 rounded-full border-2 shadow-md inline align-top" alt="profile">
                        <div class="inline-block align-midde">
                            <p class="inline text-gray-600 text-xs md:text-md font-medium">{{$first_name}} {{$last_name}}</p>
                            <a href="/profile/{{$username}}"class="inline text-cyan-600 text-xs md:text-md font-light">{{'@'.$username}}</a>
                            <p class="inline text-gray-500 text-xxs ml-1">Just now</p>
                            @if(isset($skills))
                                @include('partials.comments_skills_load', ['skills' => $skills])
                            @endif
                        </div>      
                        <!--reply-->
                        <p class="mt-1 text-sm text-gray-700 px-4">
                            {{$reply->reply}}
                        </p> 
                        <!-- likes number of reply -->
                        @livewire('like-reply', ['reply_id' => $reply->id, 'reply_likes' => 0], key($reply->id))               
                    </section>
                @endforeach
            </div>
        </div>
    </section>
</section>
