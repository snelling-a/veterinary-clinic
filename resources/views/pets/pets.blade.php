@extends('layouts.main')

@section('content')

    <h1>Patients:</h1>

    <div class="pets">

    @foreach ($pets as $pet)
        <div class="pets__pet">
            <a
                href="{{action("PetController@show", $pet->id)}}">
                <img src="/images/pets/{{$pet->photo}}" alt="{{$pet->name}}-photo">
                <a
                    href="{{action("PetController@show", $pet->id)}}">
                    {{$pet->name}}
                </a>

        </div>

    @endforeach

    </div>


    <nav class="pagination">
        <a href="{{$pets->previousPageUrl()}}">Previous Page</a>
        <span>Page {{$pets->currentPage()}}</span>
        <a href="{{$pets->nextPageUrl()}}">Next Page</a>


    </nav>


@endsection