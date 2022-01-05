<x-MasterLayout>
    <main class="tm-main">
        <h3>Total Posts ({{$posts->count()}})</h3>
        <div class="border border-primary">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">user_id</th>
                        <th scope="col">post_id</th>
                        <th scope="col">category_id</th>
                        <th scope="col">post_title</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row"></th>
                        <td>{{$post->author->id}}</td>
                        <td>{{$post->id}}</td>
                        <td>{{$post->category->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>
                            <form action="{{route('deleteAdminPost', $post->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm px-3">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>
</x-MasterLayout>