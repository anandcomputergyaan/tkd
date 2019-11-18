@extends('front.theme.master')
@section('body')

	<section id="slider" class="slider-area">	
		    <div class="slider-wrapper">
		        <div class="single-slide" style="background-image: url('{{asset('front/img/slider/slider1.jpg')}} ');">
                    <div class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-content-wrapper">
                                        <div class="text-content">
                                            <h2>Prepare Yourself. </h2>
                                            <p>Make yourself stronger. There Is difficult Way <br>
                                              in fornt you.</p>
                                            <a href="about.html" class="default-btn">about us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-img">
                        <div class="slider-img-three">
                            <img src="{{asset('front/img/slider/slider-img.png')}} " alt="slider">
                        </div>
                    </div>
		        </div>
		        <div class="single-slide" style="background-image: url('{{asset('fornt/img/slider/slider1.jpg')}}');">
                    <div class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-content-wrapper">
                                        <div class="text-content">
                                            <h2>Prepare Yourself. </h2>
                                            <p>Make yourself stronger. There Is difficult Way <br>
in fornt you.</p>
                                            <a class="default-btn">about us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-img">
                        <div class="slider-img-three">
                            <img src="{{asset('front/img/slider/slider-img.png')}}" alt="slider">
                        </div>
                    </div>
		        </div>
		    </div>
		</section>
		<!-- Background Area End -->
        <!-- Service Start -->
        <section class="service-area pt-70 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service">
                            <div class="service-head"> 
                                <h3><a href="#">Skilled Trainer</a></h3>
                            </div>
                            <div class="service-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service">
                            <div class="service-head"> 
                                <h3><a href="#">Qualified Training</a></h3>
                            </div>
                            <div class="service-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="single-service">
                            <div class="service-head"> 
                                <h3><a href="#">Extra Support</a></h3>
                            </div>
                            <div class="service-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div> 
               </div>
           </div>
        </section>
        <!-- Service End -->
        <!-- Features Start -->
        <section class="feature-area pb-100 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2>our class features</h2>
                            <img src="{{asset('front/img/icon/title-divider.png')}}" alt="divider">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text  </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-feature text-right">
                            <div class="feature-content">
                                <h4>best quality education</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                            </div>
                        </div>
                        <div class="single-feature text-right">
                            <div class="feature-content">
                                <h4>best quality education</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                            </div>
                        </div>
                        <div class="single-feature text-right hidden-sm">
                            <div class="feature-content">
                                <h4>best quality education</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-feature-img">
                            <img src="{{asset('front/img/feature/feature.png')}} " alt="features">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-feature text-left right">
                            <div class="feature-content">
                                <h4>best quality education</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                            </div>
                        </div>
                        <div class="single-feature text-left right">
                            <div class="feature-content">
                                <h4>best quality education</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                            </div>
                        </div>
                        <div class="single-feature text-left right hidden-sm">
                            <div class="feature-content">
                                <h4>best quality education</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </section>
        <!-- Features Area End -->
        <!-- Class Area Strat -->
        <section class="class-area bg-gray pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2>classes programs</h2>
                            <img src="{{asset('front/img/icon/title-divider.png')}}" alt="divider">
                            <p>Lorem Ipsum is simply dummy text of the printing and
typesetting industry.Lorem Ipsum has been the industry's standard dummy text  </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-class">
                            <div class="single-class-img">
                                <a href="#"><img src="{{asset('front/img/class/class6.jpg')}} " alt="class"></a>
                                <div class="single-class-hover">
                                    <div class="register">
                                        <a class="default-btn" href="#">register now</a>  
                                    </div>
                                    <div class="class-hover">
                                        <h3><a href="#">Classes for Self Defence </a></h3>
                                        <ul>
                                            <li>Sun-Tue</li>
                                            <li><span class="ti-time"></span>07:00 am - 06.00 pm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-class">
                            <div class="single-class-img">
                                <a href="#"><img src="{{asset('front/img/class/class6.jpg')}}" alt="class"></a>
                                <div class="single-class-hover">
                                    <div class="register">
                                        <a class="default-btn" href="#">register now</a>  
                                    </div>
                                    <div class="class-hover">
                                        <h3><a href="class.html">Classes for kids</a></h3>
                                        <ul>
                                            <li>Sun-Tue</li>
                                            <li><span class="ti-time"></span>07:00 am - 06.00 pm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-class">
                            <div class="single-class-img">
                                <a href="class.html"><img src="{{asset('front/img/class/class6.jpg')}} " alt="class"></a>
                                <div class="single-class-hover">
                                    <div class="register">
                                        <a class="default-btn" href="register.html">register now</a>  
                                    </div>
                                    <div class="class-hover">
                                        <h3><a href="class.html">Classes for Abc</a></h3>
                                        <ul>
                                            <li>Sun-Tue</li>
                                            <li><span class="ti-time"></span>07:00 am - 06.00 pm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-class">
                            <div class="single-class-img">
                                <a href="class.html"><img src="{{asset('front/img/class/class6.jpg')}}" alt="class"></a>
                                <div class="single-class-hover">
                                    <div class="register">
                                        <a class="default-btn" href="register.html">register now</a>  
                                    </div>
                                    <div class="class-hover">
                                        <h3><a href="class.html">Classes for Girls</a></h3>
                                        <ul>
                                            <li>Sun-Tue</li>
                                            <li><span class="ti-time"></span>07:00 am - 06.00 pm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="single-class">
                            <div class="single-class-img">
                                <a href="class.html"><img src="{{asset('front/img/class/class6.jpg')}} " alt="class"></a>
                                <div class="single-class-hover">
                                    <div class="register">
                                        <a class="default-btn" href="register.html">register now</a>  
                                    </div>
                                    <div class="class-hover">
                                        <h3><a href="class.html">Classes for Abc2</a></h3>
                                        <ul>
                                            <li>Sun-Tue</li>
                                            <li><span class="ti-time"></span>07:00 am - 06.00 pm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="single-class">
                            <div class="single-class-img">
                                <a href="class.html"><img src="{{asset('front/img/class/class6.jpg')}}" alt="class"></a>
                                <div class="single-class-hover">
                                    <div class="register">
                                        <a class="default-btn" href="register.html">register now</a>  
                                    </div>
                                    <div class="class-hover">
                                        <h3><a href="class.html">Classes for Girls</a></h3>
                                        <ul>
                                            <li>Sun-Tue</li>
                                            <li><span class="ti-time"></span>07:00 am - 06.00 pm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Class Area End -->
        <!-- Trainer Area Start -->
        <section class="trainer-area pt-96">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="trainer-content">
                            <h5>PROFESSIONAL TRAINER.</h5>
                            <h2>Make Yourself More Powerful.</h2>
                            <h4>I never dreamed for success,<br>I worked for it.</h4>
                            <p>It is a long established fact that a reader will be distracted by readable content of a page when layout. The point of using Lorem Ipsum is that it has more-or-less normal distribution of letters, as opposed. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <a href="#" class="default-btn">all trainer</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="trainer-img">
                            <img src=" {{asset('front/img/trainer/trainer.png')}}" alt="trainer">
                        </div>
                    </div>  
                </div>
            </div>
        </section>    
        <!-- Trainer Area End -->
        <!-- Fun Area Start -->
        <div class="fun-area bg-light pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-fun">
                            <div class="fun-content text-center">
                                <h3><span class="counter">20</span>+</h3>
                                <h5>Gold Medals</h5> 
                            </div> 
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-fun">
                            <div class="fun-content text-center">
                                <h3><span class="counter">40</span>+</h3>
                                <h5>Silver Medals</h5> 
                            </div> 
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-fun">
                            <div class="fun-content text-center">
                                <h3><span class="counter">90</span>+</h3>
                                <h5>Bronze Medals</h5> 
                            </div> 
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-fun">
                            <div class="fun-content text-center">
                                <h3><span class="counter">100</span>+</h3>
                                <h5>Champions</h5> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fun Area End -->
        <!-- Instructor Area Start -->
        <div class="instructor pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2>our instructor</h2>
                            <img src="{{asset('front/img/icon/title-divider.png')}}" alt="divider">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                              typesetting industry.Lorem Ipsum has been the industry's standard dummy text  </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-instructor single-class">
                            <a href="#"><img src="{{asset('front/img/trainer/trainer1.jpg')}}" alt="trainer"></a>
                            <div class="instructor-social">
                                <ul>
                                    <li><a href="https://vimeo.com/"><span class="ti-vimeo"></span></a></li>
                                    <li><a href="https://www.tumblr.com/"><span class="ti-tumblr"></span></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><span class="ti-twitter"></span></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><span class="ti-pinterest"></span></a></li>
                                </ul>
                            </div>
                            <div class="instructor-content">
                                <h3><a href="#">Thomas Davidson</a></h3>
                                <ul>
                                    <li>Physical exercise Trainar </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-instructor single-class">
                            <a href="instructor.html"><img src="{{asset('front/img/trainer/trainer1.jpg')}} " alt="trainer"></a>
                            <div class="instructor-social">
                                <ul>
                                    <li><a href="https://vimeo.com/"><span class="ti-vimeo"></span></a></li>
                                    <li><a href="https://www.tumblr.com/"><span class="ti-tumblr"></span></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><span class="ti-twitter"></span></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><span class="ti-pinterest"></span></a></li>
                                </ul>
                            </div>
                            <div class="instructor-content">
                                <h3><a href="class.html">Thomas Davidson</a></h3>
                                <ul>
                                    <li>Physical exercise Trainar </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-instructor single-class">
                            <a href="instructor.html"><img src="{{asset('front/img/trainer/trainer1.jpg')}}" alt="trainer"></a>
                            <div class="instructor-social">
                                <ul>
                                    <li><a href="https://vimeo.com/"><span class="ti-vimeo"></span></a></li>
                                    <li><a href="https://www.tumblr.com/"><span class="ti-tumblr"></span></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><span class="ti-twitter"></span></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><span class="ti-pinterest"></span></a></li>
                                </ul>
                            </div>
                            <div class="instructor-content">
                                <h3><a href="class.html">Thomas Davidson</a></h3>
                                <ul>
                                    <li>Physical exercise Trainar </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm col-xs-12">
                        <div class="single-instructor single-class">
                            <a href="#"><img src="{{asset('front/img/trainer/trainer1.jpg')}} " alt="trainer"></a>
                            <div class="instructor-social">
                                <ul>
                                    <li><a href="https://vimeo.com/"><span class="ti-vimeo"></span></a></li>
                                    <li><a href="https://www.tumblr.com/"><span class="ti-tumblr"></span></a></li>
                                    <li><a href="https://twitter.com/devitemsllc"><span class="ti-twitter"></span></a></li>
                                    <li><a href="https://www.pinterest.com/devitemsllc/"><span class="ti-pinterest"></span></a></li>
                                </ul>
                            </div>
                            <div class="instructor-content">
                                <h3><a href="class.html">Thomas Davidson</a></h3>
                                <ul>
                                    <li>Physical exercise Trainar </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instructor Area End -->
        <!-- Testimonial Area Start -->
        <div class="testimonial-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="testimonial-owl">
                        <div class="col-md-8 col-md-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                            <div class="testimonial-content text-center">
                                <h2>Kelly Reynolds</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                <h5>Mantis boxer</h5>
                                <h5>HasTech</h5>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                            <div class="testimonial-content text-center">
                                <h2>Kelly Reynolds</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                <h5>Mantis boxer</h5>
                                <h5>HasTech</h5>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                            <div class="testimonial-content text-center">
                                <h2>Kelly Reynolds</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                <h5>Mantis boxer</h5>
                                <h5>HasTech</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->
        <!-- Blog Area Strat -->
        <div class="blog-area pt-95 pb-96">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2>posts from blog</h2>
                            <img src="{{asset('front/img/icon/title-divider.png')}}" alt="divider">

                            
                            <p>Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.Lorem Ipsum has been the industry's standard dummy text  </p>
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="#"><img src=" {{asset('front/img/blog/blog2.jpg')}}" alt="blog"></a>
                                <div class="blog-hover"><a href="blog-details.html"><span class="ti-link"></span></a></div>
                            </div>
                            <div class="blog-content">
                                <ul>
                                    <li>By :  Momen Bhuiyan</li>
                                    <li>500 view</li>
                                </ul>
                                <h3><a href="#">Sed perspiciatis unde omnis iste natus  voluptatem accusantium.</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="#"><img src=" {{asset('front/img/blog/blog2.jpg')}}" alt="blog"></a>
                                <div class="blog-hover"><a href="blog-details.html"><span class="ti-link"></span></a></div>
                            </div>
                            <div class="blog-content">
                                <ul>
                                    <li>By :  Momen Bhuiyan</li>
                                    <li>500 view</li>
                                </ul>
                                <h3><a href="#">Sed perspiciatis unde omnis iste natus  voluptatem accusantium.</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="#"><img src=" {{asset('front/img/blog/blog2.jpg')}}" alt="blog"></a>
                                <div class="blog-hover"><a href="#"><span class="ti-link"></span></a></div>
                            </div>
                            <div class="blog-content">
                                <ul>
                                    <li>By :  Momen Bhuiyan</li>
                                    <li>500 view</li>
                                </ul>
                                <h3><a href="#">Sed perspiciatis unde omnis iste natus  voluptatem accusantium.</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Blog Area Strat -->
        <!-- Map Area Strat -->
<!--         <div class="google-map-area">
    Map Section
    <div id="contacts" class="map-area">
        <div id="googleMap" style="width:100%;height:420px;"></div>
        <div class="map-content">
            <div class="map-left">
                <img src=" {{asset('front/img/icon/map.png')}}" alt="map">
            </div>
            <div class="map-right">
                <h4>Taekwondo School</h4>
                <h5>Haryana .India</h5>
            </div>
        </div>
    </div>
</div> -->

@endsection