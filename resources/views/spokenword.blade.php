{{View::make('header',['title'=>'Spoken Word'])}}
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
                <p>Artist: {{$file->username}}</p>
            </td>
        </tr>
        @endforeach
    </table>
{{View::make('footer')}}