<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Page Icon -->
    <link rel="icon" href="{{asset('/image/ink.png')}}" type="image/gif" sizes="20x20">
    <!-- Meta tags -->
    <title>Log In</title>

    <script src="{{asset('https://code.jquery.com/jquery-1.8.0.min.js')}}"></script>
    <link href="{{asset('business_theme/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <script src="{{asset('business_theme/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css')}}">
    <!-- stylesheets -->
    <link rel="stylesheet" href="{{asset('reg_theme/css/style.css')}}" type="text/css" media="all">
    <!-- google fonts  -->
    <link href="//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- Modal scripts  -->
</head>
<body>
<div class="w3ls-banner">
    <div class="heading">
        <h1></h1>
    </div>
    <div class="container">
        <div class="heading">
            <h1>Log In</h1>
            <p></p>
        </div>
        <div class="agile-form">
            <form method="POST" action="/login">
                {{csrf_field()}}
                <ul class="field-list">
                    <li>
                        <label class="form-label"> E-Mail Address <span class="form-required"> * </span></label>
                        <div class="form-input">
                            <input type="email" name="email" placeholder="Mail@example.com" required>
                        </div>
                    </li>
                    <li>
                        <label class="form-label"> Password <span class="form-required"> * </span></label>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                    </li>
                </ul>
               {{-- <a data-toggle="modal" href="#myModal">Forgot your password?</a>--}}
                <div class="submit_btn">
                    <input type="submit" value="Log In">
                </div>
                <p class="text-center">Log in with Google  <a href="/auth/google"><strong><i>Google</i></strong></a></p>
            </form>
            <br>
        </div>
        <div class="heading">
            <p class="text-center">Don't have  account ?  <a href="/register"><strong><i>Register Now</i></strong></a></p>
            <p class="text-center" >Forget Your Password ?  <a href="/password/reset"><strong><i>Click Here</i></strong></a></p>
        </div>
    </div>
    <div class="copyright">
        <p class="agile-copyright">&copy; 2018 Simple Blog. All Rights Reserved | Design by <a href="https://www.facebook.com/sunibn.sazzad" target="_blank"><strong><i>Sun Ibne Sazzad</i></strong></a></p>
    </div>
</div>

@include('includes.alertjs')
</body>
</html>