<div class="-mt-1 w-[300px] md:w-[370px]">
    @foreach ($skills as $user_skill)
        <figure class="inline-block">
            <p class="{{$user_skill['bg_color']}} -mt-5 px-2 py-[2px] inline w-fit shadow-md drop-shadow-sm text-white text-center text-xxs font-light rounded-full">
                {{$user_skill['name']}}
            </p>
        </figure>
    @endforeach
</div>

