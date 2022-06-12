{{View::make('header',['title'=>'Music'])}}
    <table class="table"> 
        <thead class="bg-warning">
            <th>Music</th>
            <th>Details</th>
        </thead>
        @foreach($files as $file)
        <tr style="overflow:scroll;">
            <td><audio src="{{asset('storage/music/'.$file->audio)}}" controls></audio></td>
            <td>
                <p>Title: {{$file->title}}</p>
                <p>Album: {{$file->topic}}</p>
                <p>Artist: {{$file->user_id}}</p>
            </td>
        </tr>
        @endforeach
    </table>
{{View::make('footer')}}