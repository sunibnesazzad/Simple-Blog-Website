
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>


    <link href="{{asset('login_theme/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('login_theme/css/jquery-ui.css')}}" type="text/css" media="all">

    <!-- online fonts -->
    <link href='http://fonts.googleapis.com/css?family=Della+Respira' rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel="stylesheet">
    <!-- //online fonts -->

    <!-- Default-JavaScript -->
    <script type="text/javascript" src="{{asset('login_theme/js/jquery-2.1.4.min.js')}}"></script>
    <!-- //Default-JavaScript -->

    <!-- Date-Picker-JavaScript -->
    <script src="{{asset('login_theme/js/jquery-ui.js')}}"></script>
    <script>
        $(function() {
            $( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
        });
    </script>
    <!-- //Date-Picker-JavaScript -->

</head>
<body>
<section class="header">
    <h1>Login Here</h1>
    <div class="top-border">
        <div class="header-left">
            <div class="heading-right">
                <h3>login</h3>
            </div>
            <form method="POST" action="/login">
                {{csrf_field()}}


                <div class="form-group w3">
                    <label class="header" for="email">E-mail Address :</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>

                </div>
                <div class="form-group w3">
                    <label class="header" for="password">Password :</label>
                    <input type="password" class="form-control" id="pswd2" name="password" placeholder="Password" required>
                </div>

                <div class="login">
                    <input type="submit" id="submit1" name="Login" value="Login" />
                </div>

            </form>
            @include('includes.errors')
            <br>
            <p>Don't have an anccount? -> <a href="/register"><i>Register Now</i></a></p>
        </div>
        <div class="clear"></div>
    </div>
    <!-- copyright -->
    <p class="agile-copyright">&copy; 2018 Simple Blog. All Rights Reserved | Design by <a href="https://www.facebook.com/sunibn.sazzad" target="_blank"><i>Sun Ibne Sazzad</i></a></p>
    <!-- //copyright -->
</section>


</body>
</html>