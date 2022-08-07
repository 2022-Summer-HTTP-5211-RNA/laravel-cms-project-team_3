@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Employment</h2>

    <form method="post" action="/console/employment/edit/{{$employment->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="companyName">Company Name:</label>
            <input type="text" name="companyName" id="companyName" value="{{old('companyName', $employment->companyName)}}" required>
            
            @if ($errors->first('companyName'))
                <br>
                <span class="w3-text-red">{{$errors->first('companyName')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title', $employment->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="decription">Description:</label>
            <textarea name="decription" id="decription" required>{{old('decription', $employment->decription)}}</textarea>

            @if ($errors->first('decription'))
                <br>
                <span class="w3-text-red">{{$errors->first('decription')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="startDate">Start Date:</label>
            <input type="date" name="startDate" id="startDate" value="{{old('startDate', $employment->startDate)}}" required>
            
            @if ($errors->first('startDate'))
                <br>
                <span class="w3-text-red">{{$errors->first('startDate')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="endDate">End Date:</label>
            <input type="date" name="endDate" id="endDate" value="{{old('endDate', $employment->endDate)}}" required>
            
            @if ($errors->first('endDate'))
                <br>
                <span class="w3-text-red">{{$errors->first('endDate')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Employment</button>

    </form>

    <a href="/console/employment/list">Back to Employment List</a>

</section>

@endsection