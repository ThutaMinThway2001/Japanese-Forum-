<x-CommentLayout>
    @auth
    <form action="{{route('storeComment', $post->slug)}}" method="post">
        @csrf
        <div class="d-flex justify-content-center pt-3 pb-2">
            <input type="text" name="commentBox" placeholder="+ Add a comment" class="form-control addtxt">
        </div>
    </form>
    @else
    <label for="">Want To Paticipate? </label>
    <a href="/login">Login Here!</a>
    @endauth

    @foreach ($post->comments as $comment)
    <x-Comment :comment="$comment" />
    @endforeach

</x-CommentLayout>