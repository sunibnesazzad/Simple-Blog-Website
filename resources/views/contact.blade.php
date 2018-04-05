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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12386182.960956775!2d-74.08302114251626!3d40.71866701702417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1436524193425"  style="border:0" allowfullscreen></iframe>
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
                            <a href="singlepage.html"><img src="images/6.jpg" class="img-responsive" alt=""/></a>
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
<!-- technology -->
@endsection