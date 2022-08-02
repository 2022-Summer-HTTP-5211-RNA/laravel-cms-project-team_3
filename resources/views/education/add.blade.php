@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Type</h2>

    <form method="post" action="/console/education/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="program">Program:</label>
            <input type="text" name="program" id="program" value="{{old('program')}}" required>
            
            @if ($errors->first('program'))
                <br>
                <span class="w3-text-red">{{$errors->first('program')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="startdate">Start Date:</label>
            <input type="date" name="startdate" id="startdate" value="{{old('startdate')}}" required>
            
            @if ($errors->first('startdate'))
                <br>
                <span class="w3-text-red">{{$errors->first('startdate')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="enddate">End Date:</label>
            <input type="date" name="enddate" id="enddate" value="{{old('enddate')}}" required>
            
            @if ($errors->first('enddate'))
                <br>
                <span class="w3-text-red">{{$errors->first('enddate')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Education</button>

    </form>

    <a href="/console/education/list">Back to Education List</a>

</section>

@endsection