
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>


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
    <h1>Register Here</h1>
    <div class="top-border">
        <div class="header-left">
            <div class="heading-left">
                <h2>register</h2>
            </div>
            <form method="POST" action="/register" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="heading-bottom">
                    <div class="form-group w3">
                        <label class="header" for="name">Full Name :</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Name" required>

                    </div>

                    <div class="form-group w3">
                        <label class="header" for="email">E-mail Address :</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>

                    </div>

                    <div class="form-group w3">
                        <label class="header" for="password">Password :</label>
                        <input type="password" class="form-control" id="pswd2" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-group  w3">
                        <label class="header" for="password_confirmation">Password Confirmation <span>:</span></label>
                        <input type="password" class="form-control" id="pswd2" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                    <br>
                    <div class="form-group  w3">
                        <label class="header" for="file">Choose image to upload <span>:</span></label>
                        <input type="file" id="image" name="image" multiple>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="header" for="category">Select Role</label>
                        <select class="form-control" id="category" name="role">
                            @foreach($roles as $role)
                                <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    {{-- <button type="submit" class="btn btn-primary">Register</button>--}}
                    <br>
                </div>
                <div class="clear"></div>
                <div class="register">
                    <input type="submit" id="submit" name="Register" value="Register"/>
                </div>
                <div class="clear"></div>

            </form>
            @include('includes.errors')
        </div>

        <div class="clear"></div>
    </div>
    <!-- copyright -->
    <p class="agile-copyright">&copy; 2018 Simple Blog. All Rights Reserved | Design by <a href="https://www.facebook.com/sunibn.sazzad" target="_blank"><i>Sun Ibne Sazzad</i></a></p>
    <!-- //copyright -->
</section>


</body>
</html>