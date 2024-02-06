@extends('layouts.app')

@section('title', '防災クイズ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/start.css') }}" />
@endsection

@section('content')
    <div class="header">
        <img class="logo" src="{{ asset('img/logo.png') }}">
    </div>

    <div class="content">
        <div class="explainbox">
            <p>今から防災に関するクイズが１０問出題されます。
                正解数に応じてプレゼントが変わるので全問正解目指して頑張ってください</p>
        </div>
    </div>
    <div class="botton">
        <button type="button" class="startbutton" onclick=" location.href='question.html'">START</button>
    </div>
@endsection
