@extends('layouts.app')
@section('content')
        <h1>{{$title}}</h1>
        @if (count($services)> 0)
            <ol class="list-group">
            @foreach ($services as $service )
                <li class="list-group-item"><a class="btn btn-primary" href="/">{{$service}}</a></li>
            @endforeach
            </ol>
        @endif
@endsection