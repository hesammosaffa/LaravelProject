<table>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Length</th>
        <th>Description</th>
        <th>URL</th>
        <th>Created at</th>
        @foreach ($videos as $video)
    </tr>
    <tr>
        <td>{{$video->id}}</td>
        <td>{{$video->name}}</td>
        <td>{{$video->length}}</td>
        <td>{{$video->description}}</td>
        <td>{{$video->url}}</td>
        <td>{{$video->created_at}}</td>
    </tr> 
        @endforeach

</table>

@foreach ($videos as $video)
    
@endforeach