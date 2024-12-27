@extends('app.main')
@section('content')

<section class="hero-slider hero-style" id="hero-slider">
	<video playsinline autoplay muted loop width="100%" height="100%">
		<source src="video/banner.mp4" type="video/mp4">
	</video>
	<div class="hero-main-rp container main-ban hidden">
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-12 v-center" data-rellax-speed="-3">
				<div class="hero-heading-sec2 niwax" data-rellax-speed="3">
					<h1 class="wow fadeIn cd-headline clip">Your Leading
						<span class="cd-words-wrapper">
							<b class="is-visible">Designing</b>
							<b>Web Development</b>
							<b>Social Media Marketing</b>
							<b>SEO Management</b>
							<b>Email Marketing</b>
							<b>PPC Management Services</b>
							<b>E-Commerce Project</b>
						</span>
					Partner</h1>
					<p class="wow fadeIn">DigiTroopers offers top-notch digital marketing services tailored to drive results and elevate your business.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!--Start Hero-->
<!-- <section class="hero-slider hero-style">
	<div class="swiper-container">
		<div class="swiper-wrapper">

			@foreach($mainslider as $items)
			<div class="swiper-slide">
				<div class="slide-inner slide-bg-image" data-background="images/banner/slider.webp">
					<div class="container slider-container">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6 my-auto">
								<div data-swiper-parallax="300" class="slide-title">
									<h5>{{$items['content1']}}</h5>
								</div>
								<div data-swiper-parallax="400" class="slide-text">
									<h2>{{$items['content2']}}</h2>
									<h2>{{$items['content3']}}</h2>
									<p>{{$items['content4']}}</p>
								</div>
								<div class="clearfix"></div>
								<div data-swiper-parallax="500" class="slide-btns">
									<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get a Free Quote
										<i class="fas fa-chevron-right fa-icon"></i>
									</a>
								</div>
								<div data-swiper-parallax="400" class="slide-number">
									<p>{{$items['content5']}}</p>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6">
								<img src="uploads/{{$items['image']}}" class="slider-vector img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="swiper-pagination"></div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>
</section> -->
<!--End Hero-->

<!--Start Testinomial-->
<section class="testimonials-section-app pt100 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <div class="common-heading text-center">
					<h2 class="text-white">What <span> Our Clients</span> Say About <span>AppsNation</span></h2>
                    <h5 class="text-white">Over 1200+ Satisfied Clients and Growing</h5>
                </div> -->
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="javascript:void(0)">
									<img src="images/reviews/clutch.webp" class="img-fluid d-block mx-auto" alt="Clutch">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-dark">Recognized as Top in Digital Marketing by Clutch</p>
								</a>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-md-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="javascript:void(0)">
									<img src="images/reviews/bark.webp" class="img-fluid d-block mx-auto" alt="Bark">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-dark">Recognized as Top in Digital Marketing by Bark</p>
								</a>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="javascript:void(0)">
									<img src="images/reviews/designrush.webp" class="img-fluid d-block mx-auto" alt="DesignRush">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-dark">Recognized as Top in Digital Marketing by DesignRush</p>
								</a>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="javascript:void(0)">
									<img src="images/reviews/goodfirms.webp" class="img-fluid d-block mx-auto" alt="GoodFirms">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-dark">Recognized as Top in Digital Marketing by GoodFirms</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="javascript:void(0)">
									<img src="images/reviews/trustpilot.webp" class="img-fluid d-block mx-auto" alt="Trustpilot">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-dark">Recognized as Top in Digital Marketing by Trustpilot</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="javascript:void(0)">
									<img src="images/reviews/sortlist.webp" class="img-fluid d-block mx-auto" alt="Sortlist">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-dark">Recognized as Top in Digital Marketing by Sortlist</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="javascript:void(0)">
									<img src="images/reviews/upcity.webp" class="img-fluid d-block mx-auto" alt="UpCity">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-dark">Recognized as Top in Digital Marketing by UpCity</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="javascript:void(0)">
									<img src="images/reviews/sitejabber.webp" class="img-fluid d-block mx-auto" alt="SiteJabber">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star">
									<p class="text-center pt-2 text-dark">Recognized as Top in Digital Marketing by SiteJabber</p>
								</a>
							</div>
						</div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-12 fadeIn my-auto text-center">
                <div class="review-title-ref mt40">
                    <a href="{{url('/testimonials')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3">Read More Reviews <i class="fas fa-chevron-right fa-ani"></i></a>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!--End Testinomial-->

<!--Start Badges-->
<!-- <section class="badges-section pad-tb bg-gradient2 py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8">
				<div class="common-heading w-tdxt">
					<span>WE MAKE RELATIONSHIPS</span>
					<h2>World Class Web & App Development Company</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
				<div class="badges-content">
					<img src="images/about/badges-a.webp" alt="budges" class="img-fluid">
					<p>ABC DEF Industry Leader</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
				<div class="badges-content">
					<img src="images/about/badges-b.webp" alt="budges" class="img-fluid">
					<p>Best eCommerce Development Company</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
				<div class="badges-content">
					<img src="images/about/badges-c.webp" alt="budges" class="img-fluid">
					<p>ABC DEF High Performer Winner</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
				<div class="badges-content">
					<img src="images/about/badges-d.webp" alt="budges" class="img-fluid">
					<p>Top App Developer 2019-20</p>
				</div>
			</div>
		</div>
		<div class="-cta-btn mt70 text-center">
			<div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
				<div class="col-12 col-sm-12 col-md-10">
					<p>WE <span>LISTEN</span> TO YOU. WE <span>LEARN</span> FROM YOU WE <span>ADAPT</span> WE <span>INNOVATE</span></p>
				</div>
				<div class="col-12 col-sm-12 col-md-2">
					<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Let's Work</a>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--End Badges-->

<!--Start About Us-->
<section class="about-sec-app py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading text-l">
					<h2 class="mb30"><span class="text-second text-bold">DigiTroopers</span> Leading Digital Marketing Specialists of your choice</h2>
					<p>DigiTroopers, is a versatile and dynamic digital marketing agency which helps you to develop an online marketing service to drive more proficient visitors to your site. Our main purpose is client satisfaction as we want our client partners to feel that our Digital Marketing Specialists and experts are an integrated part of their own team</p>
				</div>
				<div class="cta-card mt40">
					<h3 class="mb30">Let's Get Started With a New Project Together</h3>
					<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Request A Quote<i class="fas fa-chevron-right fa-icon"></i></a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="funfact">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 col-6">
							<div class="tilt-outer" data-tilt data-tilt-max="20" data-tilt-speed="1000">
								<div class="funfct tilt-inner">
									<img src="images/icons/startup.svg" alt="niwax app development template">
									<span class="services-cuntr counter">20</span><span class="services-cuntr">+</span>
									<p>Years Experience</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6">
							<div class="tilt-outer" data-tilt data-tilt-max="20" data-tilt-speed="1000">
								<div class="funfct tilt-inner">
									<img src="images/icons/team.svg" alt="niwax app development template">
									<span class="services-cuntr counter">250</span><span class="services-cuntr">+</span>
									<p>Talented Squad</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6">
							<div class="tilt-outer" data-tilt data-tilt-max="20" data-tilt-speed="1000">
								<div class="funfct tilt-inner">
									<img src="images/icons/mobile.svg" alt="niwax app development template">
									<span class="services-cuntr counter">1200</span><span class="services-cuntr">+</span>
									<p>Apps Developed</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6">
							<div class="tilt-outer" data-tilt data-tilt-max="20" data-tilt-speed="1000">
								<div class="funfct tilt-inner">
									<img src="images/icons/computers.svg" alt="niwax app development template">
									<span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
									<p>Projects Delivered</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6">
							<div class="tilt-outer" data-tilt data-tilt-max="20" data-tilt-speed="1000">
								<div class="funfct tilt-inner">
									<img src="images/icons/world.svg" alt="niwax app development template">
									<span class="services-cuntr counter">120</span><span class="services-cuntr">+</span>
									<p>Countries Served</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6">
							<div class="tilt-outer" data-tilt data-tilt-max="20" data-tilt-speed="1000">
								<div class="funfct tilt-inner">
									<img src="images/icons/deal.svg" alt="niwax app development template">
									<span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
									<p>Client Satisfaction</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About Us-->

<section class="">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8">
				<div class="common-heading">
					<h2 class="mb0">THINGS WE ARE BEST IN</h2>
					<br>
					<p>We will be part of the growth of your brand identifying, planning, executing, and measuring all digital activities to achieve all your objectives. We carry out our strategies of Web Designing & Development, Graphic Designing, Search Engine Optimization (SEO), Social Media Marketing (SMM),Pay Per Click (PPC) / Paid marketing , Content Writing, E-Commerce Management and Email Marketing</p>

				</div>
			</div>
		</div>
</section>

<!--Start Service-->
<section class="service-section-full py-5">
	<div class="container-fluid">
		<div class="forfullcard upset">
			<div class="fullservicecards">
				<div class="service-sec-list srvc-bg-nx srcl1">
					<img src="images/icons/graphic-design.webp" alt="service">
					<a href="{{url('/graphic-design')}}">
						<h5 class="mb10">Designing</h5>
					</a>
					<ul class="-service-list">
						<li> <a href="{{url('/graphic-design')}}">Logo</a> </li>
						<li> <a href="{{url('/graphic-design')}}">Digital Banners</a> </li>
						<li> <a href="{{url('/graphic-design')}}">Web UI/UX</a> </li>
						<li> <a href="{{url('/graphic-design')}}">Business Card</a> </li>
					</ul>
					<p>We offer you a diversified range of graphic designing services with a passion to enhance brand visibility through our graphic designing agency</p>
				</div>
			</div>
			<div class="fullservicecards">
				<div class="service-sec-list srvc-bg-nx srcl2">
					<img src="images/icons/development.svg" alt="service">
					<a href="{{url('/website')}}">
						<h5 class="mb10">Web Development</h5>
					</a>
					<ul class="-service-list">
						<li> <a href="{{url('/website')}}">Front-End</a> </li>
						<li> <a href="{{url('/website')}}">Back-End</a> </li>
						<li> <a href="{{url('/website')}}">Full-Stack</a> </li>
					</ul>
					<p>If you are looking for a dedicated, thorough, and multi-disciplined web development company, here we are providing you with masterpiece websites</p>
				</div>
			</div>
			<div class="fullservicecards">
				<div class="service-sec-list srvc-bg-nx srcl3">
					<img src="images/icons/social-media-marketing.webp" alt="service">
					<a href="{{url('/social-media')}}">
						<h5 class="mb10">Social Media Marketing</h5>
					</a>
					<ul class="-service-list">
						<li> <a href="{{url('/social-media')}}">Social Networking</a> </li>
						<li> <a href="{{url('/social-media')}}">Photo/Video Sharing</a> </li>
						<li> <a href="{{url('/social-media')}}">Interactive Media</a> </li>
						<li> <a href="{{url('/social-media')}}">Blogging/Community Building</a> </li>
					</ul>
					<p>We build your brand presence to reach the larger targeted audience on different social media platforms relevant to your business</p>
				</div>
			</div>
			<div class="fullservicecards">
				<div class="service-sec-list srvc-bg-nx srcl4">
					<img src="images/icons/seo.webp" alt="service">
					<a href="{{url('/seo')}}">
						<h5 class="mb10">SEO Management</h5>
					</a>
					<ul class="-service-list">
						<li> <a href="{{url('/seo')}}">On-Page</a> </li>
						<li> <a href="{{url('/seo')}}">Off-Page</a> </li>
						<li> <a href="{{url('/seo')}}">Technical</a> </li>
					</ul>
					<p>We operate as an integrated SEO agency and generate higher keyword research on google, which results in more qualified website traffic, leads, and sales from the web</p>
				</div>
			</div>
			<div class="fullservicecards">
				<div class="service-sec-list srvc-bg-nx srcl6">
					<img src="images/icons/paid-marketing.webp" alt="service">
					<a href="{{url('/paid-marketing')}}">
						<h5 class="mb10">PPC Management Services</h5>
					</a>
					<ul class="-service-list">
						<li> <a href="{{url('/paid-marketing')}}">Search Ads</a> </li>
						<li> <a href="{{url('/paid-marketing')}}">Display Ads</a> </li>
						<li> <a href="{{url('/paid-marketing')}}">Video Ads</a></li>
						<li> <a href="{{url('/paid-marketing')}}">Shopping Ads</a></li>
					</ul>
					<p>We use an integrative approach to assist your business and help you find out the best premier selection for the marketing format of your brand</p>
				</div>
			</div>
			<div class="fullservicecards">
				<div class="service-sec-list srvc-bg-nx srcl7">
					<img src="images/icons/ecommerce.svg" alt="service">
					<a href="{{url('/ecommerce')}}">
						<h5 class="mb10">E-Commerce Project Management</h5>
					</a>
					<ul class="-service-list">
						<li> <a href="{{url('/ecommerce')}}">B2B</a> </li>
						<li> <a href="{{url('/ecommerce')}}">B2C</a> </li>
						<li> <a href="{{url('/ecommerce')}}">C2C</a></li>
						<li> <a href="{{url('/ecommerce')}}">C2B</a></li>
					</ul>
					<p>We provide our best services to grow your online business faster by efficiently maintaining your website and IT environment</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--why choose-->
<section class="why-choos-lg-nx py-5 bg-gradient10">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading text-l">
					<span>Who We Are</span>
					<h2 class="mb20"><span class="text-second text-bold">Top Ranked</span> Internet Marketing Company</h2>
					<p>Being a Top-Notch digital marketing agency we offer all types of digital marketing services. Our Digital Marketing Specialists consistently deliver outstanding results for our clients.DigiTroopers is a world-class Internet Marketing Company for the online marketing and e-commerce needs of well-established brands, small Enterprises, as well as early age startups.Through our services, you can make digital Technologies to deliver exceptional results</p>
					<div class="itm-media-object mt40 tilt-3d">
						<div class="media">
							<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="images/icons/computers.svg" alt="icon" class="layer"></div>
							<div class="media-body">
								<h4>Rationalized Project Management</h4>
								<p>Project planning and management will be as smooth as possible to service and satisfy clients, and their products will be delivered rationally</p>
							</div>
						</div>
						<div class="media mt40">
							<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="images/icons/worker.svg" alt="icon" class="layer"></div>
							<div class="media-body">
								<h4>A Dedicated Team of Experts</h4>
								<p>A well trained team of Digital Marketing Specialists and with proficient skills in digital marketing and graphic designing brought together to service the clients to serve them with our best</p>
							</div>
						</div>
						<div class="media mt40">
							<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img src="images/icons/deal.svg" alt="icon" class="layer"></div>
							<div class="media-body">
								<h4>Project Completion in Given Time</h4>
								<p>On-time projects will be delivered within a streamlined project schedule. The project deliverables will always be on time</p>
							</div>
						</div>
						<div class="media mt20">
							<a href="pdf/company-profile.pdf" class="btn-main bg-btn lnk" target="_blank">Download Company Profile <i class="fas fa-chevron-right fa-icon"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image wow fadeIn" data-wow-duration="2s"> <a href="#headerPopup" id="headerVideoLink" target="_blank" class=" popup-modal">
					<img src="images/about/about-company.webp" alt="image" class="w-100"><i class="playbtn fa fa-play-circle"></i></a>
				</div>
				<p class="text-center mt30">Want to digitize your product? So here you are with the best digital solutions to all your problems related to digital marketing to enhance the marketing of your product</p>
				<div class="cta-card mt60 text-center">

					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div id="headerPopup" class="mfp-hide embed-responsive embed-responsive-21by9">
									<iframe class="embed-responsive-item" preload="none" width="854" height="480" src="https://www.youtube.com/embed/PMUow6i-DLE?autoplay=1" frameborder="0"  encrypted-media allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>

					<h3 class="mb20">Let's Start a <span class="text-second text-bold">New Project</span> Together</h3>
					<p><b>Lets Get Started</b></p>
					<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk mt30">Request A Quote <i class="fas fa-chevron-right fa-icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End why choose-->

<!--Start Portfolio-->
<section class="portfolio-section-nx py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8">
				<div class="common-heading">
					<span>Our Work</span>
					<h2 class="mb0">Our Latest Creative Work</h2>
				</div>
			</div>
		</div>
		<div class="row mt60">
			<!-- <div class="col-lg-12 col-sm-12 wptbb">
				<div class="pbwide shadow bg-gradient3">
					<div class="portfolio-item-info-tt">
						<div class="logowide mb20">
							<img src="images/case-study/city.webp" alt="logo" class="img-fluid">
						</div>
						<h3 class="mt30 mb30">Real Estate</h3>
						<ul class="info-list-ul">
							<li>Product Strategy</li>
							<li>Product UI/UX Design</li>
							<li>Branding Design</li>
							<li>Design System</li>
						</ul>
						<a href="{{url('/real-state')}}" class="btn-main bg-btn lnk  mt30">View Case Study
							<i class="fas fa-chevron-right fa-icon"></i>

						</a>
					</div>
					<div class="portfolio-wide-image">
						<div class="img-wide-blocktt tilt-outer">
							<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
								<div class="desktopblock shadow1"><img src="images/portfolio/citi-associates-web.webp" alt="img" class="img-fluid"> </div>
								<div class="mobileblock shadow1"><img src="images/portfolio/citi-associates-app.webp" alt="img" class="img-fluid"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-sm-12 wptbb">
				<div class="pbwide shadow bg-gradient2">
					<div class="portfolio-item-info-tt">
						<div class="logowide mb20">
							<img src="images/client/homstore-logo.webp" alt="logo" class="img-fluid">
						</div>
						<h3 class="mt30 mb30">Home Store</h3>
						<ul class="info-list-ul">
							<li>Product Strategy</li>
							<li>Product UI/UX Design</li>
							<li>Branding Design</li>
							<li>Design System</li>
						</ul>
						<a href="{{url('/home-store')}}" class="btn-main bg-btn lnk  mt30">View Case Study
							<i class="fas fa-chevron-right fa-icon"></i>

						</a>
					</div>
					<div class="portfolio-wide-image">
						<div class="img-wide-blocktt tilt-outer">
							<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
								<div class="desktopblock shadow1"><img src="images/portfolio/hom-web.webp" alt="img" class="img-fluid"> </div>
								<div class="mobileblock shadow1"><img src="images/portfolio/hom-app.webp" alt="img" class="img-fluid"> </div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<div class="col-lg-12 col-sm-12 wptbb">
				<div class="pbwide shadow bg-gradient3">
					<div class="portfolio-item-info-tt">
						<div class="logowide mb20">
							<img src="images/case-study/vero.webp" alt="logo" class="img-fluid">
						</div>
						<h3 class="mt30 mb30">Ride Share</h3>
						<ul class="info-list-ul">
							<li>Product Strategy</li>
							<li>Product UI/UX Design</li>
							<li>Branding Design</li>
							<li>Design System</li>
						</ul>
						<a href="{{url('/case-studies/ride-share')}}" class="btn-main bg-btn lnk  mt30">View Case Study
							<i class="fas fa-chevron-right fa-icon"></i>
						</a>
					</div>
					<div class="portfolio-wide-image">
						<div class="img-wide-blocktt tilt-outer">
							<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
								<div class="desktopblock shadow1"><img src="images/portfolio/rideshare-web.webp" alt="img" class="img-fluid"> </div>
								<div class="mobileblock shadow1"><img src="images/portfolio/rideshare-app.webp" alt="img" class="img-fluid"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-sm-12 wptbb">
				<div class="pbwide shadow bg-gradient2">
					<div class="portfolio-item-info-tt">
						<div class="logowide mb20">
							<img src="images/case-study/soccer.webp" alt="logo" class="img-fluid">
						</div>
						<h3 class="mt30 mb30">Flick Soccer</h3>
						<ul class="info-list-ul">
							<li>Product Strategy</li>
							<li>Product UI/UX Design</li>
							<li>Branding Design</li>
							<li>Design System</li>
						</ul>
						<a href="{{url('/case-studies/flick-soccer')}}" class="btn-main bg-btn lnk  mt30">View Case Study
							<i class="fas fa-chevron-right fa-icon"></i>

						</a>
					</div>
					<div class="portfolio-wide-image">
						<div class="img-wide-blocktt tilt-outer">
							<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
								<div class="desktopblock shadow1"><img src="images/portfolio/soccer-web.webp" alt="img" class="img-fluid"> </div>
								<div class="mobileblock shadow1"><img src="images/portfolio/soccer-app.webp" alt="img" class="img-fluid"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Portfolio-->

<!--Start Work Category-->
<section class="work-category py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8">
				<div class="common-heading ptag">
					<h2>Companies we have worked for</h2>
				</div>
			</div>
		</div>
		<div class="row mt30">
			<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.1s">
				<div class="industry-workfor hoshd"> <img src="images/icons/house.webp" alt="img">
					<h6>Real estate</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.3s">
				<div class="industry-workfor hoshd"> <img src="images/icons/travel-case.webp" alt="img">
					<h6>Tour &amp; Travels</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.5s">
				<div class="industry-workfor hoshd"> <img src="images/icons/education.webp" alt="img">
					<h6>Education</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.7s">
				<div class="industry-workfor hoshd"> <img src="images/icons/transport.webp" alt="img">
					<h6>Transport</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="industry-workfor hoshd"> <img src="images/icons/10.webp" alt="img">
					<h6>Event</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.1s">
				<div class="industry-workfor hoshd"> <img src="images/icons/ecommerce.webp" alt="img">
					<h6>eCommerce</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.3s">
				<div class="industry-workfor hoshd"> <img src="images/icons/games.webp" alt="img">
					<h6>Game</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.5s">
				<div class="industry-workfor hoshd"> <img src="images/icons/11.webp" alt="img">
					<h6>Healthcare</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.7s">
				<div class="industry-workfor hoshd"> <img src="images/icons/finance.webp" alt="img">
					<h6>Finance</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.9s">
				<div class="industry-workfor hoshd"> <img src="images/icons/restaurant.webp" alt="img">
					<h6>Restaurant</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.1s">
				<div class="industry-workfor hoshd"> <img src="images/icons/12.webp" alt="img">
					<h6>On-Demand</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.3s">
				<div class="industry-workfor hoshd"> <img src="images/icons/4.webp" alt="img">
					<h6>Grocery</h6>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Work Category-->

<!--Start Testinomial-->
<section class="testinomial-section-nx bg-gradient6 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="common-heading text-l">
					<h2 class="mb0">What our clients say about our services</h2>
				</div>
				<div class="owl-carousel testimonial-card-b mt60">
					@foreach($testimonial as $items)
					<div class="testimonial-card">
						<p>{{$items['title']}}</p>
						<div class="-client-details- mt20"> <i class="fas fa-quote-left posiqut"></i>
							<div class="reviewer-text">
								<h4>{{$items['name']}}</h4>
								<p>{{$items['location']}}</p>
								<div class="star-rate mt10">
									<ul>
										<li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
										<li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
										<li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
										<li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
										<li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Testinomial-->

<!--Start Blogs-->
<section class="blogs-section py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8">
				<div class="common-heading"> <span class="text-effect">what's going on</span>
					<h2 class="mb30">Latest Stories</h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-4">
				<div class="single-blog-post- up-hor shdo blogs">
					<div class="single-blog-img-">
						<a href="{{url('/common-ppc-goal')}}">
							<img src="images/blog/common-ppc-campaign-goals-and-objectives.webp" alt="blog" class="img-fluid" />
						</a>
						<div class="entry-blog-post dg-bg2">
							<span class="bypost-">
								<a href="#">
									<i class="fas fa-tag"></i> Google Ads or PPC
								</a>
							</span>
							<span class="posted-on-">
								<a href="#">
									<i class="fas fa-clock"></i> Mar 3, 2021
								</a>
							</span>
						</div>
					</div>
					<div class="blog-content-tt">
						<div class="single-blog-info-">
							<h4><a href="{{url('/common-ppc-goal')}}">Common PPC Campaign Goals and Objectives That Work</a></h4>
							<p class="text">I have already touched upon why it is absolutely necessary for every business to set at least one SMART PPC campaign goal in line with its business model.</p>
						</div>
						<div class="post-social"> <a class="lnk btn-main bg-btn d-block mx-auto" href="{{url('/common-ppc-goal')}}">Read More</a> </div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 blog2">
				<div class="single-blog-post- up-hor shdo blogs">
					<div class="single-blog-img-">
						<a href="{{url('/smart-ppc-goal')}}">
							<img src="images/blog/ppc.webp" alt="girl" class="img-fluid" />
						</a>
						<div class="entry-blog-post dg-bg2">
							<span class="bypost-">
								<a href="#">
									<i class="fas fa-tag"></i> Google Ads or PPC
								</a>
							</span>
							<span class="posted-on-">
								<a href="#"><i class="fas fa-clock"></i> Mar 1, 2021</a>
							</span>
						</div>
					</div>
					<div class="blog-content-tt">
						<div class="single-blog-info-">
							<h4><a href="{{url('/smart-ppc-goal')}}">How to Set Goals For Your PPC Campaign Smartly & Easily</a></h4>
							<p class="text">Running PPC campaigns and in particular, running them well can be quite complicated.</p>
						</div>
						<div class="post-social"> <a class="lnk btn-main bg-btn d-block mx-auto" href="{{url('/smart-ppc-goal')}}">Read More</a> </div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 blog3">
				<div class="single-blog-post- up-hor shdo blogs">
					<div class="single-blog-img-">
						<a href="{{url('/type-of-ppc')}}">
							<img src="images/blog/seo.webp" alt="girl" class="img-fluid" />
						</a>
						<div class="entry-blog-post dg-bg2">
							<span class="bypost-">
								<a href="#">
									<i class="fas fa-tag"></i> Google Ads or PPC
								</a>
							</span>
							<span class="posted-on-">
								<a href="#">
									<i class="fas fa-clock"></i> Feb 24, 2021
								</a>
							</span>
						</div>
					</div>
					<div class="blog-content-tt">
						<div class="single-blog-info-">
							<h4><a href="{{url('/type-of-ppc')}}">What Types of PPC Ads Are There For Advertising On Google</a></h4>
							<p class="text">There are various PPC Ad formats that can be deployed to tap into a defined audience.</p>
						</div>
						<div class="post-social"> <a class="lnk btn-main bg-btn d-block mx-auto" href="{{url('/type-of-ppc')}}">Read More</a> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Blogs-->

<!--Start contact-->
<section class="contact--block bg-gradient1 py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="common-heading text-l text-wt">
					<h2 class="mb0">Interested in working with us?</h2>
					<p>LET’S TALK AND GET STARTED</p>
				</div>
				<div class="contact-fields">
					<div class="connect-block mt40">
						<a href="mailto:info@abcd.com" tabindex="-1">
							<div class="icon-fld-nx v-center">
								<i class="fas fa-envelope"></i>
							</div>
							<div class="text-fld-nx v-center">
								<span class="small-text rows">mail to us</span>
								<span class="large-text rows">info@digitroopers.com</span>
							</div>
						</a>
					</div>
					<div class="connect-block mt30">
						<a href="tel:+12535284057" class="transition" tabindex="-1">
							<div class="icon-fld-nx v-center">
								<i class="fas fa-phone-alt"></i>
							</div>
							<div class="text-fld-nx v-center">
								<span class="small-text rows">Our contact Number</span>
								<span class="large-text rows"> +1 (253) 528-4057</span>
							</div>
						</a>
					</div>
					<div class="text-fieds- mt40">
						<h4>& What's you will get :</h4>
						<ul class="list-style- mt10">
							<li>Excellent Customer Support</li>
							<li>Project Consulting by Experts</li>
							<li>On-Time Project Delivery</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- form -->
			<div class="col-lg-6">
				<div class="contact-form-card-pr contact-block-btm">
					<div class="form-block">
					{!! NoCaptcha::renderJs() !!}
						<form action="{{route('leads')}}" method="post" id="contactForm" data-toggle="validator" class="shake">
							@csrf
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" name="name" id="name" placeholder="Enter name" required data-error="Please fill Out">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-6">
									<input type="email" name="email" id="email" placeholder="Enter email" required>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" name="mobile" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-6">
									<select name="service" id="Dtype" required>
										<option value="">Select Service</option>
										<option value="designing">Designing</option>
										<option value="development">Development</option>
										<option value="social-media">Social Media</option>
										<option value="seo">SEO</option>
										<option value="email-marketing">Email Marketing</option>
										<option value="paind-marketing">Paid Marketing</option>
										<option value="ecommerce-managment">E-Commerce Management</option>
									</select>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" name="company" id="company" placeholder="Enter company name (optional)" required data-error="">
								</div>
								<div class="form-group col-sm-6">
									<input type="text" name="subject" id="subject" placeholder="Enter subject" required data-error="Please fill Out">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="form-group">
								<textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group mb-2 captchaContainer1" id="captchaContainer" style="display: none;">
								{!! NoCaptcha::display() !!}
							</div>
							<button type="submit" name="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <i class="fas fa-chevron-right fa-icon"></i></button>
							<div id="msgSubmit" class="h3 text-center hidden"></div>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection