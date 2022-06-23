<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="rejuves,poetry,spokenword,jkusda,rejuvinators,events">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css" integrity="sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/js/bootstrap.bundle.min.js" integrity="sha512-ndrrR94PW3ckaAvvWrAzRi5JWjF71/Pw7TlSo6judANOFCmz0d+0YE+qIGamRRSnVzSvIyGs4BTtyFMm3MT/cg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        #myBtn {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: transparent; /* Set a background color */
            color: green; /* Text color */
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 10px; /* Some padding */
            border-radius: 50%; /* Rounded corners */
            font-size: 32px; /* Increase font size */
            }
    </style>
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-circle-up"></i></button>
    <div class="container-fluid" style="min-height:600px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light m-1" style="font-family:'Times New Roman', Times, serif;">
            <div class="container ">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('storage/static/logo.png')}}" width="50" height="50">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <b>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="poetry/1">Poetry</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/spokenword">Spoken Word</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/music">Music</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/gallery">Gallery</a>
                            </li>
                        </ul>
                    </b>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if(Session::has('user'))
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#sign">Signup</a></li>
                    <li class="nav-item"><a class="nav-link"href="" data-bs-toggle="modal" data-bs-target="#login">Login</a></li>
                @endif
                </ul>
                </div>
                @if(Session::has('user'))
                <h3>Welcome {{Session::get('user')['username']}}</h3>
                @else
                <h3>Welcome Guest</h3>
                @endif
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
<!--Sign up Modal-->
<div class="modal fade" id="sign" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sign" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sign">Signup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/signup" method="POST" class="container p-1" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="user"><i class="fa-solid fa-user fa-fw"></i></span>
                            <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="user">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="user"><i class="fa-solid fa-user fa-fw"></i></span>
                            <input type="month" name="username" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="email"><i class="fa-solid fa-envelope fa-fw"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="contact"><i class="fa-solid fa-phone fa-fw"></i></span>
                            <input type="tel" name="contact" class="form-control" placeholder="Contact" aria-label="contact" aria-describedby="contact">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="profile"><i class="fa-solid fa-image fa-fw"></i></span>
                            <input type="file" name="profile" class="form-control" aria-label="profile" aria-describedby="profile">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="password"><i class="fa-solid fa-key fa-fw"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="Password">
                        </div>
                        <p><a href="/login">Login</a> instead?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Login Modal-->
<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="login" aria-hidden="true">
    <div class="card modal-dialog ">
        <div class="modal-content ">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title" id="login">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex justify-content-center">
            <form action="/login" method="POST" class="w-75" style="text-align:center ;" enctype="multipart/form-data">
                    @csrf
                    <img class='card-img-top'src="{{asset('storage/static/logo.png')}}" width="300">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="user"><i class="fa-solid fa-user fa-fw"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="user">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="password"><i class="fa-solid fa-key fa-fw"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="Password">
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#sign">Join Instead</button>
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-check fa-fw"></i>Login</button>
                    
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>