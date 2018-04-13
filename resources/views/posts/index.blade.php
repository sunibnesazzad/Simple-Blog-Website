@extends('layouts.master')

@section('content')

    <!-- banner -->
<br>
    <!--End banner -->

    <!-- Content -->

    <div class="technology-1">
        <div class="container">
            <div >
                @include('includes.errors')
                <div class="col-md-9 technology-left">
                    <div class="tech-no">

                        @foreach($posts as $post)
                            @include('posts.post')
                        @endforeach


                    </div>
                </div>
                <!-- technology-right -->
                <div class="col-md-3 technology-right-1">
                    <div class="blo-top">
                        <div class="tech-btm">
                            <img src="{{asset('business_theme/images/banner1.jpg')}}" class="img-responsive" alt=""/>
                        </div>
                    </div>
                    <div class="blo-top">
                        <div class="tech-btm">
                            <h4>Sign up to our newsletter</h4>
                            <p>Pellentesque dui, non felis. Maecenas male</p>
                            <div class="name">
                                <form>
                                    <input type="text" placeholder="Email" required="">
                                </form>
                            </div>
                            <div class="button">
                                <form>
                                    <input type="submit" value="Subscribe">
                                </form>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="blo-top1">
                        <div class="tech-btm">
                            <h4>Top stories of the week </h4>
                            <div class="blog-grids">
                                <div class="blog-grid-left">
                                    <a href="{{asset('business_theme/singlepage.html')}}"><img src="{{asset('business_theme/images/6.jpg')}}images/6.jpg" class="img-responsive" alt=""/></a>
                                </div>
                                <div class="blog-grid-right">

                                    <h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="blog-grids">
                                <div class="blog-grid-left">
                                    <a href="singlepage.html"><img src="images/7.jpg" class="img-responsive" alt=""/></a>
                                </div>
                                <div class="blog-grid-right">

                                    <h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="blog-grids">
                                <div class="blog-grid-left">
                                    <a href="singlepage.html"><img src="images/11.jpg" class="img-responsive" alt=""/></a>
                                </div>
                                <div class="blog-grid-right">

                                    <h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="blog-grids">
                                <div class="blog-grid-left">
                                    <a href="singlepage.html"><img src="images/9.jpg" class="img-responsive" alt=""/></a>
                                </div>
                                <div class="blog-grid-right">

                                    <h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="blog-grids">
                                <div class="blog-grid-left">
                                    <a href="singlepage.html"><img src="images/10.jpg" class="img-responsive" alt=""/></a>
                                </div>
                                <div class="blog-grid-right">

                                    <h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
                <!-- technology-right -->
            </div>
        </div>
    </div>
    <div class="text-center">
        {!! $posts->links() !!}
    </div>


@endsection






