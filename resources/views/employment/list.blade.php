@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Employment</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Company Name</th>
            <th>Title</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($employment as $employment)
            <tr>
                <td>{{$employment->companyName}}</td>
                <td>{{$employment->title}}</td>
                <td>{{$employment->description}}</td>
                <td>{{$employment->startDate}}</td>
                <td>{{$employment->endDate}}</td>
                <td><a href="/console/employment/edit/{{$employment->id}}">Edit</a></td>
                <td><a href="/console/employment/delete/{{$employment->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/employment/add" class="w3-button w3-green">New Employment</a>

</section>

@endsection
