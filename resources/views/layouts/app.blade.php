<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@700&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 text-[16px] leading-[30px] bg-bg-main">
@include('includes.header')
@yield('main')
@include('includes.footer')
@vite('resources/js/mainPage/menuButton.js')
</body>
</html>