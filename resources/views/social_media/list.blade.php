@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Social Media</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Photo</th>
            <th>Link</th>
            <th></th>
            <th></th>
            
        </tr>
        @foreach ($medias as $media)
            <tr>
                <td>{{$media->title}}</td>
                <td><img src="{{asset('storage/'.$media->photo)}}"></td>
                <td>{{$media->link}}</td>
               
                <td><a href="/console/media/edit/{{$media->id}}">Edit</a></td>
                <td><a href="/console/media/delete/{{$media->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/media/add" class="w3-button w3-green">New Media</a>

</section>

@endsection
