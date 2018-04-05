
<!DOCTYPE HTML>
<html>
<head>
    <title>Dashbord</title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('admin_dash_theme/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{asset('admin_dash_theme/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="{{asset('admin_dash_theme/css/font-awesome.css')}}" rel="stylesheet">
    <!-- jQuery -->
    <!-- lined-icons -->
    <link rel="stylesheet" href="{{asset('admin_dash_theme/css/icon-font.min.css')}}" type='text/css' />
    <!-- //lined-icons -->
    <!-- chart -->
    <script src="{{asset('admin_dash_theme/js/Chart.js')}}"></script>
    <!-- //chart -->
    <!--animate-->
    <link href="{{asset('admin_dash_theme/css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
    <script src="{{asset('admin_dash_theme/js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!----webfonts--->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Meters graphs -->
    <script src="{{asset('admin_dash_theme/js/jquery-1.10.2.min.js')}}"></script>


</head>

<body class="sticky-header left-side-collapsed"  onload="initMap()">
<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <h1><a href="index.html">Easy <span>Admin</span></a></h1>
        </div>
        <div class="logo-icon text-center">
            <a href="index.html"><i class="lnr lnr-home"></i> </a>
        </div>

        <!--logo and iconic logo end-->
        <div class="left-side-inner">

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="index.html"><i class="lnr lnr-spell-check"></i><span>Dashboard</span></a></li>
                {{--<li class="menu-list">
                    <a href="#"><i class="lnr lnr-cog"></i>
                        <span>Components</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="grids.html">Grids</a> </li>
                        <li><a href="widgets.html">Widgets</a></li>
                    </ul>
                </li>
                <li><a href="forms.html"><i class="lnr lnr-spell-check"></i> <span>Forms</span></a></li>
                <li><a href="tables.html"><i class="lnr lnr-menu"></i> <span>Tables</span></a></li>
                <li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>MailBox</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="inbox.html">Inbox</a> </li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i> <span>Menu Levels</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="charts.html">Basic Charts</a> </li>
                    </ul>
                </li>
                <li><a href="codes.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
                <li><a href="media.html"><i class="lnr lnr-select"></i> <span>Media Css</span></a></li>--}}
                <li class="menu-list act"><a href="#"><i class="lnr lnr-book"></i>  <span>Blog</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="sign-in.html">Sign In</a> </li>
                        <li><a href="sign-up.html">Sign Up</a></li>
                        <li><a href="blank_page.html">Blank Page</a></li>
                    </ul>
                </li>
            </ul>
            <!--sidebar nav end-->
        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content main-content2 main-content2copy">
        <!-- header-starts -->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--notification menu start -->
            <div class="menu-right">
                <div class="user-panel-top">
                    <div class="profile_details_left">
                        <ul class="nofitications-dropdown">
                            <li class="{{Request:: is ('/') ? 'active' : ''}}"><a href="/"><strong>Home</strong></a></li>

                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <div class="profile_details">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span style="background:url(images/1.jpg) no-repeat center"> </span>
                                        <div class="user-name">
                                            <p>Michael<span>Administrator</span></p>
                                        </div>
                                        <i class="lnr lnr-chevron-down"></i>
                                        <i class="lnr lnr-chevron-up"></i>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                    <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li>
                                    <li> <a href="sign-up.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                    {{--<div class="social_icons">
                        <div class="col-md-4 social_icons-left">
                            <a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
                        </div>
                        <div class="col-md-4 social_icons-left pinterest">
                            <a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
                        </div>
                        <div class="col-md-4 social_icons-left twi">
                            <a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>--}}
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--notification menu end -->
        </div>
        <!-- //header-ends -->

        <!-- //Blog Body part start -->
        <div>

        </div>


        <!--footer section start-->
        <footer>
            <p class="agile-copyright">&copy; 2018 Simple Blog. All Rights Reserved | Design by <a href="https://www.facebook.com/sunibn.sazzad" target="_blank"><strong><i>Sun Ibne Sazzad</i></strong></a></p>
        </footer>
        <!--footer section end-->
    </div>
</section>
<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{asset('admin_dash_theme/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('admin_dash_theme/js/scripts.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('admin_dash_theme/js/bootstrap.min.js')}}"></script>

</body>
</html>