{{View::make('header', ['title' => 'Login'])}}
<div class="row container">
    <div class="col-md-5 my-5">
        <img class='d-flex justify-content-center'src="{{asset('storage/static/logo.png')}}" width="300">
    </div>

    <form action="login" method="POST" enctype="multipart/form-data" class="col-md-5 m-5 ">
        @csrf
        <h1 class="">Login</h1>
            @foreach($errors->all() as $error)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $error }}</strong>
                </span>
            @endforeach
        <div class="input-group mb-3">
            <span class="input-group-text" id="user"><i class="fa-solid fa-user fa-fw"></i></span>
            <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="user">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="password"><i class="fa-solid fa-key fa-fw"></i></span>
            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="Password">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-check fa-fw"></i>Login</button>
        <a href="" style="text-decoration:none; margin-left:15px; font-style:oblique; " data-bs-toggle="modal" data-bs-target="#sign">Signup instead</a>
    </form>
</div>
{{View::make('footer')}}