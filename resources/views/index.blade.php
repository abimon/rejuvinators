{{View::make('header',['title'=>'Home'])}}
        <div class="container d-flex justify-content-center">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{asset('storage/static/poetry.jpeg')}}" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Poetry</h5>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('storage/static/music.jpeg')}}" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Music</h5>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('storage/static/spoken.jpeg')}}" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Spoken Word</h5>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container d-flex justify-content-center ">
            <div class="row mt-2">
                <div class="col-md-6">
                    <h3 class="d-flex justify-content-center m-1 shadow-lg bg-info">About Us</h3>
                    <div class="shadow-lg p-2" style="font-family:Arial, Helvetica, sans-serif">
                        <p>
                            The Rejuves is a group of poets and singers dedicated to bring an elevated renewing experience of poetry and Music to the world. 
                            The name "Rejuve" is a derived short form of the action word Rejuvenation which paints clearly what the Rejuves are living to bring to the society. 
                            So to say, Rejuvination is the act of giving new vigor to someone or something, or an act of restoring to an original or new state.
                            <br>
                            <a href="" class="text-secondary" style="text-decoration:none;"data-bs-toggle="modal" data-bs-target="#sign">
                                <i>Join Us!</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{View::make('footer')}}