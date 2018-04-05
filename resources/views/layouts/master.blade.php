<!DOCTYPE html>
<html>

<head>

    <link rel="icon" href="{{asset('/image/ink.png')}}" type="image/gif" sizes="20x20">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Simple Blog</title>

    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('business_theme/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="{{asset('business_theme/css/style.css')}}" rel='stylesheet' type='text/css' />
    <script src="{{asset('business_theme/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('business_theme/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                  containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
             };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>


</head>
<body>
@include('includes.navbar')

<div class="container">
    @yield('content')
</div>

<div class="modal-footer">
    @include('includes.footer')
</div>

<!-- Latest compiled and minified JavaScript -->
<!-- here stars scrolling icon -->

<!-- //here ends scrolling icon -->

</body>
</html>