@extends('layouts.app')
@section('title')
    Students
@endsection
@section('content')
    <div class="container-xl py-3">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
            @foreach($lessons as $lesson)
                <div class="col py-3">
                    @include('app.lesson')
                </div>
            @endforeach
        </div>
        <div class="py-3">
            {{ $lessons->links() }}
        </div>
    </div>
@endsection