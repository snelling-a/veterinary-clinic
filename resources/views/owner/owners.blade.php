@extends('layouts.main')

@section('content')

    <h1>Users:</h1>

    <ul>

    @foreach ($owners as $owner)
        <li>
            {{$owner->id}}:
            <a
                href="{{action("OwnerController@show", $owner->id)}}">
                {{$owner->surname}}, {{$owner->first_name}}
            </a>
        </li>
    @endforeach

    </ul>


    <nav class="pagination">
        <a href="{{$owners->previousPageUrl()}}">Previous Page</a>
        <span>Page {{$owners->currentPage()}}</span>
        <a href="{{$owners->nextPageUrl()}}">Next Page</a>


    </nav>


@endsection