{{-- @dd($posts); --}}
<x-AdminPanel>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div x-data="{showPost: false, showUser: false, showAdmin: false}">
                <div class="row">
                    <div class="col-lg-3 col-md-6" ">
                        <div class=" panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="far fa-folder fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$posts->count()}}</div>
                                    <div>All Posts</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right" x-show="!showPost"
                                        @click="showPost =! showPost, showUser = false, showAdmin = false">
                                    </i>
                                    <i class=" fas fa-chevron-circle-up " x-show=" showPost"
                                        @click="showPost =! showPost"></i>

                                </span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fas fa-user-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$users_count}}</div>
                                    <div>All Users</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right" x-show="!showUser"
                                        @click="showUser =! showUser, showPost = false, showAdmin = false">
                                    </i>
                                    <i class="fas fa-chevron-circle-up  " x-show="showUser"
                                        @click="showUser =! showUser"></i>
                                </span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fas fa-user-secret fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$admin->count()}}</div>
                                    <div>All Admins</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right" x-show="!showAdmin"
                                        @click="showAdmin =! showAdmin, showUser = false, showPost=false">
                                    </i>
                                    <i class=" fas fa-chevron-circle-up " x-show=" showAdmin"
                                        @click="showAdmin =! showAdmin"></i>

                                </span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row" x-show="showPost">
                <div class="col-md-11">
                    <table class="table align-middle table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category_id</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Likes</th>
                                <th scope="col">Date</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <th scope="row"></th>
                                <td>{{$post->category_id}}</td>
                                <td>{{$post->user_id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->comments->count()}}</td>
                                <td>0</td>
                                <td>{{$post->created_at->diffForHumans()}}</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm px-3">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row" x-show="showUser">
                <div class="col-md-11">
                    <table class="table align-middle table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <th scope="row"></th>
                                <td>{{$post->author->name}}</td>
                                <td>{{$post->author->username}}</td>
                                <td>{{$post->author->email}}</td>
                                <td>{{$post->author->created_at->diffForHumans()}}</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm px-3">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row" x-show="showAdmin">
                <div class="col-md-11">
                    <table class="table align-middle table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin as $a)
                            <tr>
                                <th scope="row"></th>
                                <td>{{$a->name}}</td>
                                <td>{{$a->username}}</td>
                                <td>{{$a->email}}</td>
                                <td>{{$a->created_at->diffForHumans()}}</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm px-3">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</x-AdminPanel>