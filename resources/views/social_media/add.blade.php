@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Social Media</h2>

    <form method="post" action="/console/media/add" novalidate class="w3-margin-bottom" enctype="multipart/form-data">

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
            <label for="photo">Photo:</label>
            <input type="file" name="photo" id="photo" value="{{old('photo')}}" required>
            
            @if ($errors->first('photo'))
                <br>
                <span class="w3-text-red">{{$errors->first('photo')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="address">Link:</label>
            <input type="url" name="link" id="link" value="{{old('link')}}" >
            @if ($errors->first('link'))
                <br>
                <span class="w3-text-red">{{$errors->first('link')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Social Media</button>

    </form>

    <a href="/console/media/list">Back to Social Media List</a>

</section>

@endsection