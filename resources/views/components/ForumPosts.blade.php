@props(['posts'])
<div class="row tm-row">
    @forelse ($posts as $post)
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="{{route('showDetail', $post->slug)}}" class="effect-lily tm-post-link tm-pt-60">
            <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$post->title}}</h2>
        </a>
        <p class="tm-pt-30">
            {{$post->title}}
        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <a href="/?category={{$post->category->slug}}">
                <span class="tm-color-primary">{{$post->category->name}}</span>
            </a>
            <span class="tm-color-primary">{{$post->created_at->diffForHumans()}}</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between mt-3">
            {{-- <form action="{{route('like', $post->id)}}" method="post">
                @csrf
                <button>
                    <i class="fas fa-heart text-danger"><small class="ms-3">{{$post->likes->count()}}</small></i>
                </button>
            </form> --}}

            <span>{{$post->comments->count()}} {{$post->comments->count() <= 1? 'comment' : 'comments' }}</span>
                    <a href="/?author={{$post->author->username}}">
                        <span>{{$post->author->name}}</span>
                    </a>
        </div>
    </article>
    @empty

    <p>
        No Posts Yet!
    </p>
    @endforelse ($posts as $post)

</div>