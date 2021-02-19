@extends('layouts.main')

@section('content')


{{-- @dd($pet->owner) --}}

<h1>{{$pet->name}}</h1>
<h2>{{$pet->breed}}</h2>
<p>Weight: {{$pet->weight}}</p>
<p>Age: {{$pet->age}}</p>
<img src="/images/pets/{{$pet->photo}}" alt="{{$pet->name}}-photo">

<p>Owner: <a href="{{action('OwnerController@show', $pet->owner->id)}}">{{$pet->owner->surname}}, {{$pet->owner->first_name}}</a></p>

<a href="{{action('PetController@edit', $pet->id)}}"><button>Edit</button></a>




@endsection