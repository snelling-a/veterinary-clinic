@extends('layouts.main')

@section('content')


<h1>Edit {{$pet->name}}</h1>
<img src="/images/pets/{{$pet->photo}}" alt="{{$pet->name}}-photo">

<form method="POST" action="{{action("PetController@update", $pet->id)}}" style="display:flex; flex-direction:column;">
    @csrf
    <label for="name">Name:
        <input type="text" name="name" value={{old('name', $pet->name)}}>
    </label>

    <label for="breed">Breed:
        <input type="text" name="breed" value={{old('breed', $pet->breed)}}>
    </label>

    <label for="weight">Weight:
        <input type="text" name="weight" value={{old('weight', $pet->weight)}}>
    </label>

    <label for="age">Age:
        <input type="text" name="age" value={{old('age', $pet->age)}}>
    </label>

    <label for="owner">Owner ID:
        <input type="text" name="owner" value={{old('owner', $pet->owner_id)}}>
    </label>

    <input type="submit" value="Save/Create">
</form>

@endsection
