<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <!-- 共通のヘッダー内容はここに記述 -->
        @include('layouts.header')
    </header>

    <main>
        <!-- メインコンテンツはここに表示されます -->
        @yield('content')
    </main>

    <footer>
        <!-- 共通のフッター内容はここに記述 -->
        @include('layouts.footer')
    </footer>
</body>
	
</html>
