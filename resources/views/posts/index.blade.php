@extends('layouts.master')

@section('content')

    <!-- banner -->
<br>
    <!--End banner -->

    <!-- Content -->

    <div >
        <div class="technology">
            @include('includes.errors')
            <div >
                <div class="col-md-9 technology-left">
                    <div class="tech-no">

                        @foreach($posts as $post)
                            @include('posts.post')
                        @endforeach


                    </div>
                </div>
                <!-- technology-right -->

                <!-- technology-right -->
            </div>
        </div>
    </div>


    {{--<div class="banner">
        <div class="container">
            <h2>Welcome To Our Simple Blog</h2>
            <p>Let Your Thinking Known To The World.</p>
            <a href="#">READ ARTICLE</a>
        </div>
    </div>
    <!-- Message part -->
    @include('includes.errors')
    <!--Blog part -->
    <div class="row">
        <div class="col-md-12">
            @foreach($posts as $post)
                <div class="col-md-4">
                    @include('posts.post')
                </div>
            @endforeach
        </div>
    <!--End of blog part -->
    </div>--}}
@endsection






