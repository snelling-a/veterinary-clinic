@extends('layouts.main')

@section('content')


{{-- @dd($pet->owner) --}}
{{-- @dd($owner) --}}
<h1>{{$owner->first_name}} {{$owner->surname}}</h1>
<p>Address: {{$owner->address}}</p>
<p>Email: {{$owner->email}}</p>
<p>Phone: {{$owner->phone}}</p>



<h3>Pets:</h3>
<ul>
    @foreach ($owner->pets as $pet)
            <li><a href="{{action("PetController@show", $pet->id)}}">{{$pet->name}}</a></li>
    @endforeach
</ul>


<a href="{{action('PetController@create', $pet->id)}}"><button>New Pet</button></a>






@endsection