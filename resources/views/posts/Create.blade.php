<x-MasterLayout>
    <main class="tm-main">
        <form action="{{route('createPost')}}" method="post">
            @csrf
            <!-- Title input -->
            <div class="form-outline mb-4">
                <input type="text" name="title" id="form4Example1" class="form-control" />
                <label class="form-label" for="form4Example1">Title</label>
            </div>

            <!-- Slug input -->
            <div class="form-outline mb-4">
                <input type="text" name="slug" id="form4Example1" class="form-control" />
                <label class="form-label" for="form4Example1">slug</label>
            </div>

            <!-- Intro input -->
            <div class="form-outline mb-4">
                <input type="text" name="intro" id="form4Example1" class="form-control" />
                <label class="form-label" for="form4Example1">intro</label>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" name="body" cols="30" rows="10" id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3">Body</label>
            </div>

            {{-- Category --}}
            <select class="form-select mb-5" name="category_id" id="category_id">
                @foreach (\App\Models\Category::all() as $category)
                <option value="{{$category->id}}">
                    {{$category->name}}
                </option>
                @endforeach
            </select>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary float-end">Submit</button>
        </form>
    </main>
</x-MasterLayout>