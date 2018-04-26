<nav class="user-menu">
    <a href="javascript:;" class="main-menu-access">
        <i class="icon-proton-logo"></i>
        <i class="icon-reorder"></i>
    </a>
</nav>
<section class="title-bar">
    <div class="logo">
        <h1><a href="/">{{--<img src="/image/logo.jpg" alt="" class="thumb-sm2" />--}}Simple Blog</a></h1>
    </div>
    <div class="full-screen">
        <section class="full-top">
            <button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
        </section>
    </div>
    <div class="header-right">
        <div class="profile_details_left">
            <div class="header-right-left">
                <!--notifications of menu start -->
                <ul class="nofitications-dropdown">
                    <li class="dropdown head-dpdn">

                    </li>
                    <li class="dropdown head-dpdn">

                    </li>
                    <li class="dropdown head-dpdn">

                    </li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="profile_details">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <div class="profile_img">
                                {{--<span class="profil-img"><i class="fa fa-user" aria-hidden="true"></i></span>--}}
                                <img alt="" src="{{asset('upload/default/'.$user->profile->image)}}" class="img-circle  thumb-sm">
                                <span class="username">{{ $user->name }}<i class="fa fa-angle-down"></i> </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <ul class="dropdown-menu drp-mnu">
                            <li> <a href="/dash/{{Auth::user()->id}}"><i class="fa fa-cog"></i> Profile</a> </li>
                            <li> <a href="#"><i class="fa fa-user"></i> Settings</a> </li>
                            <li> <a href="/logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</section>