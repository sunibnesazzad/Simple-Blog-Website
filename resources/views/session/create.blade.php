
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Page Icon -->
    <link rel="icon" href="{{asset('/image/ink.png')}}" type="image/gif" sizes="20x20">
    <!-- Meta tags -->
    <title>Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- stylesheets -->
    <link rel="stylesheet" href="{{asset('reg_theme/css/style.css')}}" type="text/css" media="all">

    <!-- google fonts  -->
    <link href="//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- Modal scripts  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

            @include('includes.errors')

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
{{--    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>--}}

</body>
</html>