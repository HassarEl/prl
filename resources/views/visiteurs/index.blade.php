<!DOCTYPE HTML>
<!--
	Justice by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<title>Justice &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400, 900" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('assets/visiteur_assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('assets/visiteur_assets/css/icomoon.css')}}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{asset('assets/visiteur_assets/css/themify-icons.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('assets/visiteur_assets/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('assets/visiteur_assets/css/magnific-popup.css')}}">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('assets/visiteur_assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/visiteur_assets/css/owl.theme.default.min.css')}}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{asset('assets/visiteur_assets/css/flexslider.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('assets/visiteur_assets/css/style.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<!-- Modernizr JS -->
	<script src="{{ URL::asset('assets/visiteur_assets/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<div id="gtco-logo"><a href="{{url('/')}}">Roayome<em>Du</em>MAROC</a></div>
				</div>
				<div class="col-sm-10 text-right menu-1 main-nav">

                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" data-nav-section="about">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" data-nav-section="practice-areas">Practice</a>
                        </li>

                        @if(Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-nav-section="contact">Contact</a>
                            </li>

                            <li class="nav-item">
                                <form method="POST" action="{{route('logout')}}">
                                    @csrf
                                    <a class="btn btn-outline-light ml-lg-3" id="in" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit(); " role="button">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                            @else

                            <li class="nav-item">
                                <form method="GET" action="{{route('login')}}">
                                    @csrf
                                    <a class="btn btn-outline-light ml-lg-3" id="in" href="{{ route('login') }}" onclick="event.preventDefault();
                                        this.closest('form').submit(); " role="button">
                                        {{ __('Login') }}
                                    </a>
                                </form>
                            </li>
							<li class="nav-item">
								<form method="GET" action="{{route('register')}}">
                                    @csrf
                                    <a class="btn btn-outline-light ml-lg-3" id="in" href="{{ route('register') }}" onclick="event.preventDefault();
                                        this.closest('form').submit(); " role="button">
                                        {{ __('Register') }}
                                    </a>
                                </form>
							</li>

                            @endauth
                        @endif

                        
                    </ul>

				</div>
                
			</div>
			
		</div>
	</nav>

	<section id="gtco-hero" class="gtco-cover" style="background-image: url({{ URL::asset('assets/visiteur_assets/images/img_bg_4.jpg') }});"  data-section="home"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeIn">The Greatest Firm You Can Trust</h1>
							<p class="gtco-video-link animate-box" data-animate-effect="fadeIn"><a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-controller-play"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="gtco-about" data-section="about">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Welcome To Our Law Offices</h1>
					<p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">Welcome</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="{{ URL::asset('assets/visiteur_assets/images/img_1.jpg') }}" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="heading-colored">Excellence &amp; Honesty</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut praesentium nihil hic quam culpa magnam ducimus suscipit repellat quidem cumque, unde impedit, labore earum eligendi perspiciatis nemo molestiae sequi veritatis. Veritatis, reprehenderit, eaque! Rerum, libero ipsam enim, iusto adipisci quae repellendus officia consequatur ducimus cupiditate impedit, aliquam numquam excepturi.</p>
					<p><a href="#" class="read-more">Read more <i class="icon-chevron-right"></i></a></p>
				</div>
			</div>
		</div>
	</section>

	<section id="gtco-practice-areas" data-section="practice-areas">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Practice Areas</h1>
					<p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">Practice <span>Areas</span></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ URL::asset('assets/visiteur_assets/images/scale.png') }}" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Criminal Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ URL::asset('assets/visiteur_assets/images/scale.png') }}" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Industrial Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ URL::asset('assets/visiteur_assets/images/scale.png') }}" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Financial Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

				</div>
				<div class="col-md-6">
					
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ URL::asset('assets/visiteur_assets/images/scale.png') }}" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Divorce Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ URL::asset('assets/visiteur_assets/images/scale.png') }}" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Corporate Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ URL::asset('assets/visiteur_assets/images/scale.png') }}" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Accident Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section id="gtco-our-team" data-section="our-team">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Our Team</h1>
					<p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">Our Team</p>
				</div>
			</div>
			<div class="row team-item gtco-team-reverse">
				<div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<img src="{{ URL::asset('assets/visiteur_assets/images/img_team_1.jpg') }}" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
				</div>
				<div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
					<h2>Jeff Finley</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div>

			<div class="row team-item gtco-team">
				<div class="col-md-6 col-md-pull-1 animate-box"  data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="{{ URL::asset('assets/visiteur_assets/images/img_team_2.jpg') }}" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2>Craig Campbell</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div>

		</div>
	</section>
	
	@include('visiteurs.reservation_form')
	
	<footer id="gtco-footer" role="contentinfo">
		<div class="container">

            <div class="gtco-contact-info">
                <ul>
                    <li class="address">198 West 21th Street, Suite 721 New York NY 10016</li>
                    <li class="phone"><a href="tel://1235235598">+ 1235 2355 98</a></li>
                    <li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                    <li class="url"><a href="#">http://gettemplates.co</a></li>
                </ul>
            </div>
			
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ URL::asset('assets/visiteur_assets/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ URL::asset('assets/visiteur_assets/js/jquery.easing.1.3.j') }}s"></script>
	<!-- Bootstrap -->
	<script src="{{ URL::asset('assets/visiteur_assets/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ URL::asset('assets/visiteur_assets/js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar -->
	<script src="{{ URL::asset('assets/visiteur_assets/js/jquery.stellar.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ URL::asset('assets/visiteur_assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ URL::asset('assets/visiteur_assets/js/magnific-popup-options.js') }}"></script>
	<!-- Main -->
	<script src="{{ URL::asset('assets/visiteur_assets/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

	</body>
</html>

