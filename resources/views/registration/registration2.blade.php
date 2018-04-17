
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Page Icon -->
    <link rel="icon" href="{{asset('/image/ink.png')}}" type="image/gif" sizes="20x20">
    <!-- Meta tags -->
    <title>Registration Page</title>


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
            <h1>Registration</h1>
            <p></p>
        </div>
        <div class="agile-form">
            <form method="POST" action="/register">
                {{csrf_field()}}
                <ul class="field-list">
                    <li>
                        <label class="form-label"> Full Name <span class="form-required"> * </span></label>
                        <div class="form-input">
                            <input type="text" name="name" placeholder="Name" required>

                        </div>
                    </li>
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
                    <li>
                        <label class="form-label"> Confirm Password <span class="form-required"> * </span></label>
                        <div class="form-input">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

                        </div>
                    </li>
                </ul>
                <div class="submit_btn">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
        <div class="heading">
            <p >Or</p>
            <a href="/login"><h3>Log in with your account</h3></a>
        </div>
    </div>
    <div class="copyright">
        <p class="agile-copyright">&copy; 2018 Simple Blog. All Rights Reserved | Design by <a href="https://www.facebook.com/sunibn.sazzad" target="_blank"><strong><i>Sun Ibne Sazzad</i></strong></a></p>
    </div>
</div>
@include('includes.alertjs')
</body>
</html>