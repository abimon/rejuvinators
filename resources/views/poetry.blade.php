{{View::make('header',['title' => 'Poetry'])}}
<div class="container-fluid row m-2">
    @foreach($poem as $item)
    <?php $ext="storage/images/";?>
    <div class="col-md-3" style="background-size:cover ; background-image: url('{{asset('storage/posts/'.$item['image'])}}');"></div>
    <div class="container-fluid col-md-6">
        <h3 style ="text-transform:capitalize;" class="d-flex justify-content-center"><b >{{$item->title}}</b></h3>
        <h5>{{$item->date}}</h5>
        <h5>{{$item->topic}}</h5>
        <?php $id=$item['id'];?>
        <div>
            <?php echo htmlspecialchars_decode($item['post']); ?>
            
        </div>
        <br>
        <figure>
            <figcaption class="blockquote-footer">
                <cite title="Source Title">{{$item->username}}</cite>
            </figcaption>
        </figure>
    </div>
    @endforeach
    <div class="col-md-3">
        <h3 class="d-flex justify-content-center bg-success text-light mt-1">Other Poems</h3>
        @foreach($poems as $item)
        
        <div class="row "><div class="col-md-6 mt-1" style="text-transform:uppercase ;">{{$item->date}}</div><div class="col-6 justify-content-end">{{$item->title}}</div></div>
        <div class="row text-secondary mb-1"><i class="col-6"></i><i class="col-6 justify-content-end"><a href="{{$item->item_id}}" style="text-decoration:none ;" class="text-secondary">Read more...</a></i></div>
        
        @endforeach
    </div>
</div>  
{{View::make('footer')}}