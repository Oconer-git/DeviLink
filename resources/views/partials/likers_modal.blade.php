<div id="likers_modal" class="modal hidden fixed top-0 left-0 z-40 pt-24 bg-neutral-900/90 w-screen h-screen">
    <div class="bg-white w-11/12 md:w-5/12 max-width-6/12 rounded-md shadow-md mx-auto p-3">
        <section class="flex justify-end">
            <button class="close_modal inline-block align-middle">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-gray-800" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
        </section>
        <x-underline></x-underline>
        <div class="h-96 overflow-y-auto small-scrollbar p-2">
            @if($likers != null)
                @foreach ($likers as $liker)
                    <div class="flex justify-between items-center mb-1 rounded-md hover:bg-slate-100 p-2">
                        <section>
                            <figure class="inline-block">
                                <img src="{{asset($liker->profile_picture)}}" alt="{{$liker->first_name}} {{$liker->last_name}}" class="rounded-full inline w-10">
                            </figure>
                            <svg xmlns="http://www.w3.org/2000/svg"  class="w-6 h-6 inline relative right-5 top-4 rounded-full p-1 text-sky-700 fill-current" viewBox="0 -960 960 960"  fill="#5f6368"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
                            <p class="inline -ml-6 align-middle text-sm text-gray-700">{{$liker->first_name}} {{$liker->last_name}}</p>
                            <a href="/profile/{{$liker->username}}" class=" text-xxs text-cyan-600">{{'@'.$liker->username}}</a> <!-- in progress -->
                        </section> 
                        @livewire('follow',['liker_id' => $liker->id, 'ifFollowed' => $liker->ifFollowed])   
                    </div>
                @endforeach
            @else
                <img src="{{asset('storage/images/comments/no_comment.png')}}" class="w-12 mx-auto my-auto" alt="no comment picture">
                <p class="text-xxs text-center text-gray-500">Wow such empty</p>
            @endif
        </div>
        
    </div>
</div>