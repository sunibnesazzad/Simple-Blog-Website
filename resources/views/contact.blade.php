@extends('layouts.master')

@section('content')

<div class="banner1">

</div>

<div class="technology-1">
    <div class="container">
        <div class="col-md-9 technology-left">
            <div class="business">
                <div id="contact" class="contact">
                    <h3>Contact</h3>
                    <div class="contact-grids">
                        <div class="contact-icons">
                            <div class="contact-grid">
                                <div class="contact-fig">
                                    <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                                </div>
                                <p>+8801684050758</p>
                            </div>
                            <div class="contact-grid">
                                <div class="contact-fig1">
                                    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                </div>
                                <p>Dhaka
                                    <span>Bangladesh</span></p>
                            </div>
                            <div class="contact-grid">
                                <div class="contact-fig2">
                                    <span class="glyphicon glyphicon-envelope2" aria-hidden="true"></span>
                                </div>
                                <p><a href="mailto:info@example.com">sunibne.sazzad@gmail.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <form>
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Website">
                            <textarea placeholder="Message..."></textarea>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                    <div class="map">
                       {{-- my location--}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14474.912037931448!2d91.82688232880915!3d24.907257644507997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750555998556eaf%3A0x0!2zMjTCsDU0JzI2LjEiTiA5McKwNTAnMDguMyJF!5e0!3m2!1sen!2sbd!4v1523907731993" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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

@endsection