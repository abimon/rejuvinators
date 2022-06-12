{{View::make('header',['title'=>'Dashboard'])}}
    <div class="container-fluid m-1">
        <div class="row accordion accordion-flush" id="accordionFlushExample" >
            <div class="col-3 bg-light" style="min-height:450px;font-family:cursive;">
                <div class="d-flex justify-content-center">
                    <img style="border-radius:50%; "src="{{asset('storage/profile_images/'.Session::get('user')['profile'])}}"   class="card-img-top w-50 p-2">
                </div>
                <div class="accordion-item bg-light">
                    <p class="bg-light mb-1 collapsed text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#Users" aria-expanded="false" aria-controls="Users">
                        Users
                    </p>
                </div>
                <div class="accordion-item bg-light">
                    <p class="bg-light mb-1 collapsed text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#Posts" aria-expanded="false" aria-controls="Posts">
                        Posts
                    </p>
                </div>
                <div class="accordion-item bg-light">
                    <p class="bg-light mb-1 collapsed text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#Writepoem" aria-expanded="false" aria-controls="Writepoem">
                        Write Poem
                    </p>
                </div>
                <div class="accordion-item bg-light">
                    <p class="bg-light mb-1 collapsed text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#repo" aria-expanded="false" aria-controls="repo">
                        Repository
                    </p>
                </div>
                
            </div>
            <div class="col-9">
                <div id="Users" class="accordion-collapse collapse" aria-labelledby="Users" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" style="overflow: scroll !important;">
                        <table class="table" >
                            <thead>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Role</th>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->contact}}</td>
                                        <td>{{$user->role}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="Posts" class="accordion-collapse collapse" aria-labelledby="Posts" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" style="overflow: scroll !important;">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
                <div id="Writepoem" class="accordion-collapse collapse" aria-labelledby="Writepoem" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <h1 class="d-flex justify-content-center">Write a Poem</h1>
                        <form action="writePoem" method="post" enctype="multipart/form-data" action="createDev" >
                            @csrf
                            <input type="hidden" name="userId" value="{{Session::get('user')['id']}}">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Schedule Date</span>
                                <input type="date" name="date" id="" value="{{date('Y-m-d')}}" class="form-control ">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Title</span>
                                <input type="text" name="title" class="form-control " >
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Topic</span>
                                <input type="text" name="topic" id="" class="form-control ">
                            </div>
                            <h5 class="d-flex justify-content-center">Poem</h5>
                            <textarea name="body" class="form-control mb-1" id="body" cols="30" rows="10"></textarea>	
                            <div class="input-group mb-3">
                                <span class="input-group-text">Image</span>
                                <input type="File" name="image" class="form-control" accept="image/*" >
                            </div>
                            <button class="btn btn-success m-2"><i class="fa fa-paper-plane fa-fw"></i>Post</button>
                        </form>
                    </div>
                </div>
                <div id="repo" class="accordion-collapse collapse" aria-labelledby="repo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <button class="btn btn-danger mb-1" data-bs-toggle="modal" data-bs-target="#audio" aria-expanded="false" aria-controls="audio"><i class="fa-solid fa-circle-up fa-fw"></i> Upload Audio</button>
                        <button class="btn btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#video" aria-expanded="false" aria-controls="video"><i class="fa-solid fa-circle-up fa-fw"></i> Upload Video</button>
                        <button class="btn btn-success mb-1" data-bs-toggle="modal" data-bs-target="#image" aria-expanded="false" aria-controls="image"><i class="fa-solid fa-circle-up fa-fw"></i> Upload Photos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- audio Modal -->
        <div class="modal fade" id="audio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="audio" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="audio">Upload Audio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/upload_audio" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="user_id" value="{{Session::get('user')['id']}}">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-solid fa-music"></i></span>
                                <input type="file" name="audio" class="form-control" accept="audio/*">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-solid fa-file"></i></span>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-solid fa-folder"></i></span>
                                <input type="text" name="topic" class="form-control" placeholder="Album">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-solid fa-calendar fa-fw"></i></span>
                                <input type="date" name="date" class="form-control" value="{{date('Y-m-d')}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="d-flex btn btn-primary mt-1 justify-content-center">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="video" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="video" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="video">Upload Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/upload_video" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="user_id" value="{{Session::get('user')['id']}}">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-solid fa-link"></i></span>
                                <input type="text" name="url" class="form-control" placeholder="Video URL">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-solid fa-file"></i></span>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-solid fa-folder"></i></span>
                                <input type="text" name="topic" class="form-control" placeholder="Album">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-solid fa-calendar fa-fw"></i></span>
                                <input type="date" name="date" class="form-control" value="{{date('Y-m-d')}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="d-flex btn btn-primary mt-1 justify-content-center">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Images Modal -->
        <div class="modal fade" id="image" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="image" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="audio">Upload Images</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/upload_image" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="user_id" value="{{Session::get('user')['id']}}">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-solid fa-image"></i></span>
                                <input type="file" name="image" class="form-control" accept="image/*" multiple>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-solid fa-file"></i></span>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-solid fa-folder"></i></span>
                                <input type="text" name="event" class="form-control" placeholder="Event">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="user"><i class="fa-solid fa-calendar fa-fw"></i></span>
                                <input type="date" name="date" class="form-control" value="{{date('Y-m-d')}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="d-flex btn btn-primary mt-1 justify-content-center">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
{{View::make('footer')}}
        