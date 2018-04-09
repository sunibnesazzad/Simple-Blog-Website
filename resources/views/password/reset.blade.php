
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <title>Reset Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- stylesheets -->
    <link rel="stylesheet" href="{{asset('reg_theme/css/style.css')}}" type="text/css" media="all">

    <!-- google fonts  -->
    <link href="//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

</head>
<body>
<div class="w3ls-banner">
    <div class="heading">
        <h1></h1>
    </div>
    <div class="container">
        <div class="heading">
            <h1>Reset Password</h1>
            <p></p>
        </div>
        <div class="agile-form">
            <form method="POST" action="/password/reset">
                {{csrf_field()}}
                <ul class="field-list">
                    <input id="token" name="token" type="hidden" value="{{$token}}">
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
                    <input type="submit" value="Send">
                </div>
            </form>
            <br>
        </div>
    </div>
    <div class="copyright">
        <p class="agile-copyright">&copy; 2018 Simple Blog. All Rights Reserved | Design by <a href="https://www.facebook.com/sunibn.sazzad" target="_blank"><strong><i>Sun Ibne Sazzad</i></strong></a></p>
    </div>
</div>
</body>
</html>