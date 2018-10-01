<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
        @yield('meta')
		<!--begin::Web font -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
        @include('layouts/adminincludes/font')
		<!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
		@yield('style')
		<!--end::Base Styles -->
		@include('layouts/adminincludes/favicon')
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
            @include('layouts/adminincludes/header')
			<!-- END: Header -->		
		    <!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
                @include('layouts/adminincludes/sidemenubar')
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					@include('layouts/adminincludes/subheader')
					<!-- END: Subheader -->
					<div class="m-content">
						@yield('content')
					</div>
				</div>
			</div>
			<!-- end:: Body -->
            <!-- begin::Footer -->
			@include('layouts/adminincludes/footer')
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->
    	<!-- begin::Quick Sidebar -->
		@include('layouts/adminincludes/quicksidebar')
		<!-- end::Quick Sidebar -->		    
	    <!-- begin::Scroll Top -->
		@include('layouts/adminincludes/scrolltop')
        <!-- end::Scroll Top -->		    
        <!-- begin::Quick Nav -->
		@include('layouts/adminincludes/quicknav')
		<!-- begin::Quick Nav -->	
        @yield('script')
	</body>
	<!-- end::Body -->
</html>
