@extends('layouts.master')

@section('content')
    <!-- For sizing change in style.css line 398 make min-height: 118em; -->
    @include('includes.errors')
    <!-- technology -->
    <div class="technology-1">
        <div class="container">
            <div class="col-md-9 technology-left">
                <div class="">
                    <!-- technology-top -->
                    @foreach($posts as $post)
                        @include('posts.post')
                    @endforeach
                    <!-- technology-top -->
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

                    @if(!empty($newposts->count()))
                        <!--Start of Blog Item -->
                            @foreach($newposts as $newpost)
                                <div class="blog-grids">
                                    <div class="blog-grid-left">
                                        <a href="/posts/{{$newpost->id}}"><img src="{{asset('upload/images/'.$newpost->image)}}" class="img-responsive" alt=""/></a>
                                    </div>
                                    <div class="blog-grid-right">

                                        <h5><a href="/posts/{{$newpost->id}}">{{$newpost->title}}</a> </h5>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
            <!-- technology-right -->
        </div>
    </div>
    <!-- technology -->
    <div class="text-center">
        {!! $posts->links() !!}
    </div>



@endsection






