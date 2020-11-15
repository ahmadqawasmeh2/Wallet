<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Wallet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no,
     shrink-to-fit=no" />
    <link href="{{asset('style/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/theme.css')}}" rel="stylesheet">
</head>

<body>
    <main>
    @include('user.include.error')
        @yield('content')
    </main>
    <script src="{{asset('style/scripts/main.js')}}"></script>
    <script src="{{asset('style/scripts/main1.js')}}"></script>
</body>

</html>