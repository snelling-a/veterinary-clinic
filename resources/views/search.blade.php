@extends('layouts.main')

@section('content')

<form action="{{action('PetController@index')}}" method="get">
    <label for="name">Patient or Owner name:
        <input type="text" name="name" value="{{ old('name') }}">
    </label>
<br>
<input type="submit" value="Submit">
</form>


<div>
    <ul>
        @foreach ($owners as $owner)
            @foreach ($owner->pets as $pet)
                <li><a href="{{action("PetController@show", $pet->id)}}">{{$pet->name}}</a>| <a href="{{-- owner id --}}">{{$owner->surname}}, {{$owner->first_name}}</a></li>
            @endforeach
        @endforeach
    </ul>
</div>

@endsection