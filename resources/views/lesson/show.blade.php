@extends('layouts.app')
@section('title')
    {{ $lesson->name }} | Students
@endsection
@section('content')
    <div class="container-xl py-3">
        <div class="row">
            <div class="col-7">
                <div class="h5">
                    {{ $lesson['student']->name }}
                </div>
            </div>
            <div class="col-5">
                <div class="pt-3">
                    {{ $lesson->name }}
                </div>
            </div>
        </div>
    </div>
@endsection