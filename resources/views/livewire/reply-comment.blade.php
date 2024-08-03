<div class="mb-2">
    <div class="reply_form hidden" data-comment-id="{{$comment_id}}">
        <section class=" px-2 flex flex-row">
            <img src="{{ asset($profile_picture) }}" class="w-9 h-9 mt-1 rounded-full border-2 shadow-md inline-block mr-1" alt="profile">
            
            <!-- form -->
            <form wire:submit.prevent="submit_reply" class="w-full mt-2 px-3 py-2 rounded-md text-sm bg-teal-100 text-gray-800">
                @csrf
                <input type="hidden" wire:model="comment_id" value="{{$comment_id}}">
                <textarea wire:model="reply_content" class="w-full align-middleav text-gray-600 overflpow-y-hidden focus:outline-0 bg-transparent" placeholder="Leave a reply..."></textarea>          
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
</div>


