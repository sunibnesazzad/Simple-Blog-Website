<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Responsive Profile Tabs Widget Flat Responsive Widget Template :: w3layouts</title>
     <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <script type='text/javascript' src="{{asset('profile_theme/js/jquery-1.11.2.min.js')}}"></script>
    <link href="{{asset('profile_theme/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

</head>
<body>
<!-- main -->
<h1>Responsive Profile Tabs Widget</h1>
<div class="main">
    <div class="sap_tabs">
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
            <ul class="resp-tabs-list">
                <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>About <i>Author</i></span></li>
                <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Previous <i>Posts</i></span></li>
                <li class="resp-tab-item grid3" aria-controls="tab_item-2" role="tab"><a href="/"><span>Return <i>Home</i></span></a></li>
                <div class="clear"></div>
            </ul>

            <div class="row">
                <div class="col-md-6 col-lg-6">
                    @if(session('info'))
                        <div class="alert alert-success">
                            {{session('info')}}
                        </div>
                    @endif
                </div>
            </div>

            <div class="resp-tabs-container">
                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                    <div class="facts">
                        <div class="facts_left">
                            <img src="{{asset('upload/default/'.$profile->image)}}" alt=" " class="img-responsive" />
                        </div>
                        <div class="facts_right">
                            <div class="facts_right1">
                                <h2>{{$user->name}}</h2>
                            </div>
                            @if($profile->user_id == auth()->user()->id)
                            <div class="facts_right2">
                                <button class="btn btn-primary" type="submit" ><a href="/update_profile">Edit Profile</a></button>
                                {{--<ul>
                                    <li><a href="#" class="facebook"> </a></li>
                                    <li><a href="#" class="twitter"> </a></li>
                                    <li><a href="#" class="p"> </a></li>
                                    <li><a href="#" class="g-plus"> </a></li>
                                </ul>--}}
                            </div>
                            @endif
                            <div class="clear"> </div>

                            <!--showing profile information -->
                            <p>Full Name <strong> : </strong>{{$user->name}}</p>
                            <p>Email <strong> : </strong>{{$user->email}}</p>
                            <p>Role <strong> : </strong>{{$user->role_name}}</p>
                            <p>Phone <strong> : </strong>{{$profile->phone}}</p>
                            <p>Position <strong> : </strong>{{$profile->position}}</p>
                            <p>Platform <strong> : </strong>{{$profile->platform}}</p>
                            <p>About <strong> : </strong>{{$profile->about_me}}</p>

                        </div>
                        <div class="clear"> </div>
                    </div>
                </div>
                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">

                    @foreach($posts as $post)
                        <div class="facts">
                            <div class="facts_left">
                                <img src="{{asset('upload/images/'.$post->image)}}" alt=" " class="img-responsive" />
                            </div>
                            <div class="facts_right">
                                <div class="facts_right1">
                                    <h2>{{$user->name}}</h2>
                                </div>
                                <div class="facts_right2">
                                    <ul>
                                        <li><a href="#" class="facebook"> </a></li>
                                        <li><a href="#" class="twitter"> </a></li>
                                        <li><a href="#" class="p"> </a></li>
                                        <li><a href="#" class="g-plus"> </a></li>
                                    </ul>
                                </div>
                                <div class="clear"> </div>
                                <p><i>{{$post->created_at->toFormattedDateString()}}</i></p>
                                <p>{{$post->body}}}</p>

                                <div class="comment-top">
                                    <h2>Comment</h2>
                                    <div class="media-left">

                                        @foreach($post->comments as $comment)
                                            <li class="list-group-item">
                                                {{--<i>{{$comment->created_at->diffForHumans()}} : &nbsp;</i>--}}
                                                <div class="media">
                                                    <div class="media-left">
                                                        {{--<a href="#">
                                                            <img src="{{asset('business_theme/images/si.png')}}" alt="">
                                                        </a>--}}
                                                        <div class="media-body">
                                                            <h5 class="media-heading">{{ $post->user->name }}</h5>
                                                            <p><i>{{$comment->created_at->diffForHumans()}}<strong> : </strong> {{$comment->body}} </i></p>

                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                        @endforeach

                                    </div>
                                </div>

                            </div>
                            <div class="clear"> </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('profile_theme/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>

<div class="footer">
    <p>&copy 2016 Responsive Profile Tabs Widget. All rights reserved | Template by <a href="http://w3layouts.com">W3layouts.</a></p>
</div>
<!-- //main -->
</body>
</html>