<div class="card pt-3 pb-3 mb-3">

    <x-card-body>

        <h2 class="h5">

            <a href="{{ route('blog.show', $post->id) }}">
                {{ $post->title }}
            </a>

        </h2>


        <div class="small text-muted">
{{--            {{ $post->published_at->format('d.m.Y H:i:s') }}--}}
            {{ $post->published_at->diffForHumans() }}
        </div>

        {{ $post->id }}

    </x-card-body>

</div>
