@extends('layouts.main')

@section('content')

<form action="{{action('PetController@show')}}" method="get">
    @csrf
    <label for="name">Patient name:
        <input type="text" name="pet_name">
    </label>

    <label for="name">Owner name:
        <input type="text" name="owner_name">
    </label>
<br>
<input type="submit" value="Submit">
</form>


@endsection