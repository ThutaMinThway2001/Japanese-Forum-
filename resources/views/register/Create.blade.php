<x-LoginRegister>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Register Form</h2>
                <div class="card my-5">
                    <form class="card-body cardbody-color p-lg-5" action="{{route('storeRegister')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="text-center">
                            <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png"
                                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px"
                                alt="profile">
                        </div>
                        {{-- Name --}}
                        <div class="mb-3">
                            <label for="">Enter Your Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                value="{{ old('name') }}">
                        </div>
                        @error('name')
                        <p class="text-danger">
                            {{$message}}
                        </p>
                        @enderror
                        {{-- Username --}}
                        <div class="mb-3">
                            <label for="">Enter Your Nickname</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                                value="{{ old('name') }}">
                        </div>
                        @error('username')
                        <p class="text-danger">
                            {{$message}}
                        </p>
                        @enderror
                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="">Enter Your Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                value="{{ old('email') }}">
                        </div>
                        @error('email')
                        <p class="text-danger">
                            {{$message}}
                        </p>
                        @enderror
                        {{-- Image --}}
                        <div class="mb-3">
                            <label for="">Set Your Profile Picture</label>
                            <input type="file" class="form-control" id="file" name="profile">
                        </div>
                        {{-- Password --}}
                        <div class="mb-3">
                            <label for="">Enter Your Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                name="password" value="{{ old('password') }}">
                        </div>
                        @error('password')
                        <p class="text-danger">
                            {{$message}}
                        </p>
                        @enderror
                        <div class="text-center">
                            <button type="submit" class="btn btn-color px-5 mb-5 w-100">
                                Register
                            </button>
                        </div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">
                            Already Login?
                            <a href="{{route('login')}}" class="text-dark fw-bold">
                                Login Here
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-LoginRegister>