{{View::make('header', ['title'=>'Gallery'])}}
    @if($files->count()>0)
    <div class="row container d-flex justify-content-center">
        <h3 class="text-info d-flex justify-content-center container-flex">Videos</h3>
        @foreach($files as $file)
            <div class="card col-md-3 m-1" style="width: 24rem;">
                <iframe class="card-img-top" src="https://www.youtube.com/embed/{{$file->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title" style="text-transform:uppercase;">{{$file->title}}</h5>
                    <p class="card-text text-secondary"><i>Created on {{$file->date}}</i></p>
                </div>
            </div>
        @endforeach
    </div>
    @endif
    <h2>Gallery</h2>
    <div class="container row d-flex justify-content-center">
        @foreach($images as $image)
            <div class="col-3 m-1 card" style="width:18rem;">
                <a target="_blank" href="{{asset('storage/static/banner.jpg')}}">
                    <img src="{{asset('storage/static/$image->image')}}" class="card-img-top">
                </a>
                <button class="btn btn-success badge">{{$image->category}}</button>
                <div class="card-body">
                    <div class="card-title">{{$image->title}}</div>
                    <div class="card-text">Created on: <i>{{$image->date}}</i> </div>
                </div>
            </div>
        @endforeach
    </div>
{{View::make('footer')}}