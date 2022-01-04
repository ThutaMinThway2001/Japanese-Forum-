@props(['randomOrderPost'])
<aside class="col-lg-4 tm-aside-col">
    <div class="tm-post-sidebar">
        <hr class="mb-3 tm-hr-primary">
        <h2 class="mb-4 tm-post-title tm-color-primary">Categories</h2>
        <ul class="tm-mb-75 pl-5 tm-category-list">
            <?php 
                foreach (App\Models\Category::all() as $category) {
            ?>
            <li><a href="/?category={{$category->slug}}" class="tm-color-primary">{{$category->name}}</a></li>
            <?php
                }
            ?>
        </ul>
        <hr class="mb-3 tm-hr-primary">
        <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related Posts</h2>
        @foreach ($randomOrderPost as $post)
        <a href="#" class="d-block tm-mb-10">
            <figure>
                <img src="{{asset('img/img-06.jpg')}}" alt="Image" class="mb-3 img-fluid">
                <a href="{{route('showDetail', $post->slug)}}">
                    <figcaption class="tm-color-primary">{{$post->title}}
                    </figcaption>
                </a>
            </figure>
        </a>
        @endforeach
    </div>
</aside>