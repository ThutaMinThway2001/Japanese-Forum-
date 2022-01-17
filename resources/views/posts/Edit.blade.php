<x-MasterLayout>
    <main class="tm-main">
        <form action="{{route('updatePost', $post->id)}}" method="post">
            @csrf
            @method('PATCH')
            <!-- Title input -->
            <div class="form-outline mb-4">
                <input type="text" name="title" id="form4Example1" class="form-control" value="{{$post->title}}" />
                <label class="form-label" for="form4Example1">Title</label>
            </div>

            <!-- Slug input -->
            <div class="form-outline mb-4">
                <input type="text" name="slug" id="form4Example1" class="form-control" value="{{$post->slug}}" />
                <label class="form-label" for="form4Example1">slug</label>
            </div>

            <!-- Intro input -->
            <div class="form-outline mb-4">
                <input type="text" name="intro" id="form4Example1" class="form-control" value="{{$post->title}}" />
                <label class="form-label" for="form4Example1">intro</label>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" name="body" cols="30" rows="10" id="form4Example3"
                    rows="4">{{$post->title}}</textarea>
                <label class="form-label" for="form4Example3">Body</label>
            </div>

            {{-- Category --}}
            <select class="form-select mb-5" name="category_id" id="category_id">
                @foreach (\App\Models\Category::all() as $category)
                <option value="{{$post->category->id}}" {{ old('category_id', $post->category_id) == $category->id ?
                    'selected' : '' }}>
                    {{$category->name}}
                </option>
                @endforeach
            </select>

            <!-- Submit button -->
            <button type="submit" class="btn2 btn btn-warning float-end">Update</button>
        </form>
    </main>
</x-MasterLayout>