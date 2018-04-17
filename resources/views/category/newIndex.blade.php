@extends('layouts.master')
@section('content')

    <div class="banner1">
        <div class="container">
            <br><br><br><br>
            <h1 class="text-center" style="color: white"><strong><i>Blog Categories </i></strong></h1>
        </div>
    </div>
    <br>

    <div class="technology-1">
        <div class="container">
            <div class="col-md-9 technology-left">
                <div class="row">


                        @foreach($categorys as $category)
                            @include('category.category')
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

                        @if(!empty($posts->count()))
                            <!--Start of Blog Item -->
                                @foreach($posts as $post)
                        <div class="blog-grids">
                            <div class="blog-grid-left">
                                <a href="/posts/{{$post->id}}"><img src="{{asset('upload/images/'.$post->image)}}" class="img-responsive" alt=""/></a>
                            </div>
                            <div class="blog-grid-right">

                                <h5><a href="/posts/{{$post->id}}">{{$post->title}}</a> </h5>
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
        {!! $categorys->links() !!}
    </div>


    {{--<div class="container">
        <div class="row">
            <div class="">
                <div class="col-md-12">
                    @foreach($categorys as $category)
                        @include('category.category')
                    @endforeach
                </div>
            </div>
        </div>
        <div class="text-center">
            {!! $categorys->links() !!}
        </div>
    </div>--}}
@endsection

<style>
    .banner1{
        background: url(../images/banner.jpg) no-repeat 0px 0px;
        background-size:cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        -moz-background-size: cover;
        min-height: 300px;
    }
</style>