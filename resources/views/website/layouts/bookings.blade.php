<!DOCTYPE html>

<html lang="zxx">
<!--[endif]-->

<head>
	@include('website.partials.head')
</head>

<body>
	<!-- preloader Start -->
	<div id="preloader">
		<div id="status">
			<img src="{{asset('assets-website')}}/images/header/horoscope.gif" id="preloader_image" alt="loader">
		</div>
	</div>

	@include('website.partials.header')
	<!-- prs title wrapper Start -->
	<div class="prs_title_main_sec_wrapper">
		<div class="prs_title_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_title_heading_wrapper">
						<h2>Movie Category</h2>
						<ul>
							<li><a href="#">Home</a>
							</li>
							<li>&nbsp;&nbsp; >&nbsp;&nbsp; @yield('page-title')</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs title wrapper End -->
    @yield('page-content')

	@include('website.partials.footer')
	<!-- st login wrapper End -->
	@include('website.partials.script')
</body>


</html>