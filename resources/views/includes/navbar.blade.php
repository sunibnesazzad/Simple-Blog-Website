<!-- header -->
<!--start-main-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="logo">
                <a href="/"><h1>SIMPLE BLOG</h1></a>
            </div>
            <div class="search">
                <form method="POST" action="/queries">
                    {{csrf_field()}}
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" name="search">
                    <input type="submit" value="">
                </form>
            </div>

            {{--@if (count($posts) === 0)
                <p>no posts found</p>
            @elseif (count($posts) >= 1)
                ... print out results
                @foreach($posts as $post)
                    {{$post->title}}
                @endforeach
            @endif--}}

            <div class="social">
                {{--<ul>
                    <li><a href="#" class="facebook"> </a></li>
                    <li><a href="#" class="facebook twitter"> </a></li>
                    <li><a href="#" class="facebook chrome"> </a></li>
                    <li><a href="#" class="facebook in"> </a></li>
                    <li><a href="#" class="facebook beh"> </a></li>
                    <li><a href="#" class="facebook vem"> </a></li>
                    <li><a href="#" class="facebook yout"> </a></li>
                </ul>--}}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!--head-bottom-->
    <div class="head-bottom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{Request:: is ('/') ? 'active' : ''}}"><a href="/"><strong>Home</strong></a></li>
                    {{--<li class="{{Request:: is ('create') ? 'active' : ''}}"><a href="/post/create"><strong>Create</strong></a></li>--}}
                    <li class="{{Request:: is ('category') ? 'active' : ''}}"><a href="/category"><strong>Category</strong></a></li>
                    <li class="{{Request:: is ('register') ? 'active' : ''}}"><a href="/contact"><strong>Contact</strong></a></li>
                    @if(!Auth::check())
                        <li class="{{Request:: is ('register') ? 'active' : ''}}"><a href="/register"><strong>Sign up</strong></a></li>
                        <li class="{{Request:: is ('login') ? 'active' : ''}}"><a href="/login"><strong>Log in</strong></a></li>
                    @endif
                    <!-- signed in user -->

                    @if(Auth::check())
                        <li class="{{Request:: is ('dash') ? 'active' : ''}}"><a href="/dash/{{Auth::user()->id}}"><strong>Dash</strong></a></li>
                        <li class="dropdown is-open">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>{{Auth::user()->name}} </strong><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/profile">Profile</a></li>
                                <li><a href="#">Notifications</a></li>
                                <li><a href="#">Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </li>

                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
        </nav>
    </div>
    <!--head-bottom-->
</div>






{{--
<style>
    .navbar {
        margin-bottom: 0;
        background-color: #2d2d30;
        z-index: 9999;
        border: 0;
        font-size: 12px !important;

        letter-spacing: 4px;
        border-radius: 0;


    }
</style>

<nav class="navbar navbar-inverse" style="overflow: visible">
    <div class="container-fluid" style="overflow: visible">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button"  data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toogle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Simple Blog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse" style="overflow: visible">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{Request:: is ('/') ? 'active' : ''}}"><a href="/"><strong>Home</strong></a></li>
                <li class="{{Request:: is ('create') ? 'active' : ''}}"><a href="/posts/create"><strong>Create</strong></a></li>
                <li class="{{Request:: is ('category') ? 'active' : ''}}"><a href="/category"><strong>Category</strong></a></li>
                <li class="{{Request:: is ('register') ? 'active' : ''}}"><a href="/register"><strong>Register</strong></a></li>
                <li class="{{Request:: is ('login') ? 'active' : ''}}"><a href="/login"><strong>Log in</strong></a></li>

                <!-- signed in user -->

                @if(Auth::check())

                    <li class="dropdown is-open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>{{Auth::user()->name}} </strong><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Notifications</a></li>
                            <li><a href="#">Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>

                @endif

            </ul>
        </div>
    </div>
</nav>--}}
