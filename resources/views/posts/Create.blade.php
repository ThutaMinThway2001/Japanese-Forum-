<x-MasterLayout>
    <main class="tm-main">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Post</h1>
                <form action="{{route('createPost')}}" method="post">
                    @csrf
                    <!-- Title input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="title" id="form4Example1" class="form-control"
                            value="{{ old('title') }}" />
                        <label class="form-label" for="form4Example1">Title</label>
                    </div>
                    @error('title')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                    @enderror

                    <!-- Slug input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="slug" id="form4Example1" class="form-control"
                            value="{{ old('slug') }}" />
                        <label class="form-label" for="form4Example1">slug</label>
                    </div>
                    @error('slug')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                    @enderror
                    <!-- Intro input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="intro" id="form4Example1" class="form-control"
                            value="{{ old('intro') }}" />
                        <label class="form-label" for="form4Example1">intro</label>
                    </div>
                    @error('intro')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                    @enderror
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" name="body" cols="30" rows="10" id="form4Example3"
                            rows="4">{{old('body')}}</textarea>
                        <label class="form-label" for="form4Example3">Body</label>
                    </div>
                    @error('body')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                    @enderror

                    {{-- Category --}}
                    <select class="form-select mb-5" name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                        @endforeach
                    </select>

                    <!-- Submit button -->
                    <button type="submit" class="btn1 btn btn-primary float-end">Submit</button>

                </form>
            </div>
        </div>
    </main>
</x-MasterLayout>