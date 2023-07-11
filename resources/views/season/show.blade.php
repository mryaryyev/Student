@extends('layouts.app')
@section('title')
    {{ $season->name }} | Seasons
@endsection
@section('content')
    <div class="container-xl py-3">
        <div class="h2 text-center">
            {{ $season->name }}
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
            @foreach($season['lessons'] as $lesson)
                <div class="col py-3">
                    @include('app.lesson')
                </div>
            @endforeach
        </div>
    </div>
@endsection