@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <ul id="dashboard">
        <li><a href="/console/projects/list">Manage Projects</a></li>
        <li><a href="/console/types/list">Manage Types</a></li>
        <li><a href="/console/users/list">Manage Users</a></li>
        <li><a href="/console/skills/list">Manage Skills</a></li>
        <li><a href="/console/education/list">Manage Educations</a></li>
        <li><a href="/console/employment/list">Manage Employments</a></li>
        <li><a href="/console/contact/list">Manage Contacts</a></li>
        <li><a href="/console/media/list">Manage Social Media</a></li>
        <li><a href="/console/contact-us/list">Manage Contact Requests</a></li>
        <li><a href="/console/logout">Log Out</a></li>
    </ul>

</section>

@endsection
