@extends('layouts.main')

@section('content')

<h1 class="home-header">St. Hector's Veterinary Clinic</h1>

<p>Welcome to our clinic</p>

<a href="#">Make an appointment</a>
<a href="{{action('PetController@index')}}">Search</a>


@endsection