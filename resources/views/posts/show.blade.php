@extends('layouts.master')

@section('content')

    <!-- banner -->
    <br>

    <div class="technology-1">
        <div class="container">
            <div class="col-md-9 technology-left">
                <div class="business">
                    <div class=" blog-grid2">
                        <img src="{{asset('upload/images/'.$post->image)}}" class="img-responsive" alt="">
                        <div class="blog-text">
                            <h5>{{$post->title}}</h5>
                            <p><strong>Author : </strong><i>{{ $post->user->name }}</i></p>
                            <p><i>{{$post->created_at->toFormattedDateString()}}</i></p>
                            <strong>Category :</strong>   {{$post->category->name}} <br>
                            <p>{!! $post->body !!}</p>
                        </div>
                    </div>
                    <div class="comment-top">
                        <h2>Comment</h2>
                        <div class="media-left">

                            @foreach($post->comments as $comment)
                                <li class="list-group-item">
                                    {{--<i>{{$comment->created_at->diffForHumans()}} : &nbsp;</i>--}}
                                  <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="{{asset('business_theme/images/si.png')}}" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">{{ $comment->user->name }}</h4>
                                            <p><i>{{$comment->created_at->diffForHumans()}}<strong> : </strong> {{$comment->body}} </i></p>

                                        </div>
                                    </div>
                                  </div>

                                </li>
                            @endforeach

                        </div>
                    </div>
                    <div class="comment">
                        <h3>Leave a Comment</h3>
                        <div class=" comment-bottom">
                            <form method="POST" action="/posts/{{$post->id}}/comments">

                                {{csrf_field()}}
                                <textarea class="form-control" name="body" placeholder="comment here" required></textarea>
                                <input type="submit" value="Send">
                            </form>
                        </div>
                    </div>
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






{{--    <div class="banner1">
    </div>

    <div class="row">
        <div >
            <div class="well">
                <div class="container text-center">

                    <h1><i>{{$post->title}}</i></h1>

                </div>
                <p><strong>Author : </strong><i>{{ $post->user->name }}</i></p>
                <p><strong>Category :</strong>{{$post->category->name}}</p>
                <p>{{$post->created_at->toFormattedDateString()}}</p>
                {{$post->body}}
                <hr>


                 @if(auth()->user()->id == $post->user_id)
                <!--update delete buttons  -->
                  <div class="row">
                    <a href="/update/{{$post->id}}" class="label label-success">Update</a>
                    <a href="/delete/{{$post->id}}" class="label label-danger">Delete</a>
                  </div>
                  @endif
                   <hr>
                  <!--Adding comment -->
                <div class="card">
                    <div class="well">
                        <div class="card-block">
                            <form method="POST" action="/posts/{{$post->id}}/comments">

                                {{csrf_field()}}

                                <div class="form-group">
                                    <textarea class="form-control" name="body" placeholder="comment here" required></textarea>

                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add Comment</button>
                                </div>

                            </form>
                        </div>

                        <!--showing comment -->
                        <ul class="list-group">
                            @foreach($post->comments as $comment)
                                <li class="list-group-item">
                                    {{ $post->user->name }}
                                    <i>{{$comment->created_at->diffForHumans()}} : &nbsp;</i>
                                    {{$comment->body}}
                                </li>

                            @endforeach
                        </ul>
                        <!-- End of showing comment part-->

                    </div>
                </div>

            </div>
        </div>

        <!--End of blog part -->

        <!-- Sidebar part -->
        --}}{{--<div class="col-md-3 col-md-offset-1">--}}{{--
            --}}{{--<h2>Sidebar part</h2>--}}{{--

        --}}{{--</div>--}}{{--



    </div>
    <!--showing comment -->--}}






@endsection