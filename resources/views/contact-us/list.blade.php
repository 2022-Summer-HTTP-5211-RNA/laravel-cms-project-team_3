@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage ContactUs Requests</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->message}}</td>
            </tr>
        @endforeach
    </table>

    

</section>

@endsection
