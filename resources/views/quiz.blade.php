@extends('layouts.app')

@section('title', '防災クイズ')

@section('css')
    <link rel="stylesheet" href="{{ asset('storage/css/start.css') }}" />
@endsection

@section('content')
    <div class="header">
        <img class="logo" src="{{ asset('storage/images/logo.png') }}">
    </div>

    <div class="content">
        <div class="explainbox">
            @if(isset($first))
                <p>{{$first}}</p>
            @endif
            @if(isset($quiz))
                <p>{{$quiz->quiz_detail}}</p>
            @endif
        </div>
    </div>

@endsection
