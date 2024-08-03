@if (!$trending_posts->isEmpty())
    @foreach ($trending_posts as $post)
        <section class="post w-full inline-block h-28 bg-cover rounded-lg shadow-sm mb-2" style="background-image: url('{{ asset($post->image) }}');"
                    data-post-id="{{$post->id}}">
            <article class="w-full h-full p-2 bg-black/60 text-white rounded-md">
                <p class="font-semibold text-sm">{{$post->content}}</p>
            </article>
        </section>
    @endforeach
@else
    <p class="text-xs text-gray-500 ml-2">There are no trending topics at the moment...</p>
@endif