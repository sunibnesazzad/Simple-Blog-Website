<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="{{asset('/image/ink.png')}}" type="image/gif" sizes="20x20">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Simple Blog</title>
    @include('includes.style')
</head>
<body>
@include('includes.navbar')

<div class="container">
    @yield('content')
</div>
<br>
<br>
@include('includes.footer')
@include('includes.alertjs')
</body>
</html>