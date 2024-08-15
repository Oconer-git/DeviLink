<div class="-mt-2 w-full md:w-[350px]">
    @if(!$user_skills->isEmpty())
        @foreach ($user_skills as $user_skill)
            <figure class="inline-block">
                <p class="{{$user_skill['bg_color']}} -mt-3 px-2 py-[1px] inline w-fit shadow-md drop-shadow-sm text-white text-center text-xxxs font-light rounded-full">
                    {{$user_skill['name']}}
                </p>
            </figure>
        @endforeach
    @else
        <figure class="inline-block">
            <p class="bg-gray-500 -mt-3 px-2 py-[1px] inline w-fit shadow-md drop-shadow-sm text-white text-center text-xxxs font-light rounded-full">
                noobie
            </p>
        </figure>
    @endif
</div>
