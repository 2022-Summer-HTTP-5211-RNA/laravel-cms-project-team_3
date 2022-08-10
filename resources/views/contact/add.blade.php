@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Contact</h2>

    <form method="post" action="/console/contact/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{old('email')}}" required>
            
            @if ($errors->first('email'))
                <br>
                <span class="w3-text-red">{{$errors->first('email')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="website">Website:</label>
            <input type="url" name="website" id="website" value="{{old('website')}}" required>
            
            @if ($errors->first('website'))
                <br>
                <span class="w3-text-red">{{$errors->first('website')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="address">Address:</label>
            <textarea name="address" id="address" required>{{old('address')}}</textarea>
            @if ($errors->first('address'))
                <br>
                <span class="w3-text-red">{{$errors->first('address')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Contact</button>

    </form>

    <a href="/console/contact/list">Back to Contact List</a>

</section>

@endsection