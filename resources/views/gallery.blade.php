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
    
{{View::make('footer')}}