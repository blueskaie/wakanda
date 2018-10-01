@extends('layouts.admin')

@section('meta')
<meta charset="utf-8" />
<title>
	Metronic | Ajax Client Side Examples
</title>
<meta name="description" content="Ajax sourced data examples">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--begin::Web font -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
	WebFont.load({
	google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
	active: function() {
		sessionStorage.fonts = true;
	}
	});
</script>
<!--end::Web font -->
@endsection

@section('style')
<link href="{{ asset('maintheme/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('admintheme/assets/vendors/custom/datatables/datatables.bundle.css') }} " rel="stylesheet" type="text/css" />
<link href="{{ asset('admintheme/assets/vendors/base/vendors.bundle.css') }} " rel="stylesheet" type="text/css" />
<link href="{{ asset('admintheme/assets/demo/default/base/style.bundle.css') }} " rel="stylesheet" type="text/css" />

@endsection

@section('script')
	<script src="{{ asset('admintheme/assets/vendors/base/vendors.bundle.js') }} " type="text/javascript"></script>
	<script src="{{ asset('admintheme/assets/demo/default/base/scripts.bundle.js') }} " type="text/javascript"></script>
	<script src="{{ asset('admintheme/assets/vendors/custom/datatables/datatables.bundle.js') }} " type="text/javascript"></script>
	<!-- <script src="{{ asset('admintheme/assets/demo/default/custom/crud/datatables/extensions/responsive.js') }} " type="text/javascript"></script> -->
	<script>
		$(window).on('hashchange', function() {
			if (window.location.hash) {
				var page = window.location.hash.replace('#', '');
				if (page == Number.NaN || page <= 0) {
					return false;
				}else{
					getData(page);
				}
			}
		});
		$(document).ready(function()
		{
			$(document).on('click', '.pagination a',function(event)
			{
				event.preventDefault();
	
				$('li').removeClass('active');
				$(this).parent('li').addClass('active');
	
				var myurl = $(this).attr('href');
				var page=$(this).attr('href').split('page=')[1];
	
				getData(page);
			});
	
		});
		function getData(page){
			$("#loading").css("display", "block");
			$.ajax(
			{
				url: '/admin/posts?page=' + page,
				type: "get",
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				datatype: "html"
			}).done(function(data){
				$("#loading").css("display", "none");
				$("#postlist").empty().html(data);
				location.hash = page;
			}).fail(function(jqXHR, ajaxOptions, thrownError){
				alert('No response from server');
			});
		}
		function deletePost($post_id){
			// alert($post_id);
			$("#loading").css("display", "block");
			$.ajax(
			{
				url: '/admin/posts/'+$post_id,
				type: "DELETE",
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				datatype: "html"
			}).done(function(data){
				$("#loading").css("display", "none");
				alert("Removed successfully");
				$("#post-"+$post_id).remove();
			}).fail(function(jqXHR, ajaxOptions, thrownError){
				alert('No response from server');
			});
		}
		// jQuery(document).ready(function(){
		// 	$("#loading").css("display", "block");
		// 	$.ajax({
		// 		type: "GET", 
		// 		url: "/admin/posts",
		// 		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		// 		success: function(result){
		// 			$("#postslist").html(result);
		// 			$("#loading").css("display", "none");
		// 			// $("#pagination").html(result->links());
		// 		}
		// 	});
		// });
	</script>

@endsection

@section('content')
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Posts Management
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<a href="/admin/posts/create" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-newspaper-o"></i>
							<span>
								New Post
							</span>
						</span>
					</a>
				</li>
				<li class="m-portlet__nav-item"></li>
				<li class="m-portlet__nav-item">
					<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
						<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
							<i class="la la-ellipsis-h m--font-brand"></i>
						</a>
						<div class="m-dropdown__wrapper">
							<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
							<div class="m-dropdown__inner">
								<div class="m-dropdown__body">
									<div class="m-dropdown__content">
										<ul class="m-nav">
											<li class="m-nav__section m-nav__section--first">
												<span class="m-nav__section-text">
													Quick Actions
												</span>
											</li>
											<li class="m-nav__item">
												<a href="/admin/posts/create" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-share"></i>
													<span class="m-nav__link-text">
														Create Post
													</span>
												</a>
											</li>
											<li class="m-nav__item">
												<a href="" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-chat-1"></i>
													<span class="m-nav__link-text">
														Send Messages
													</span>
												</a>
											</li>
											<li class="m-nav__item">
												<a href="" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-multimedia-2"></i>
													<span class="m-nav__link-text">
														Upload File
													</span>
												</a>
											</li>
											<li class="m-nav__section">
												<span class="m-nav__section-text">
													Useful Links
												</span>
											</li>
											<li class="m-nav__item">
												<a href="" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-info"></i>
													<span class="m-nav__link-text">
														FAQ
													</span>
												</a>
											</li>
											<li class="m-nav__item">
												<a href="" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-lifebuoy"></i>
													<span class="m-nav__link-text">
														Support
													</span>
												</a>
											</li>
											<li class="m-nav__separator m-nav__separator--fit m--hide"></li>
											<li class="m-nav__item m--hide">
												<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
													Submit
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<!--begin: Datatable -->
		<div id="postlist">
			@include('admin/postsboard/ajaxpostlist')
		</div>
		<!-- <div id="pagination"></div> -->
		<div id="loading" style="vertical-align:middle;text-align:center;display:none">
			<div class="m-spinner m-spinner--brand m-spinner--lg"></div>
			<div class="m-spinner m-spinner--primary m-spinner--lg"></div>
			<div class="m-spinner m-spinner--success m-spinner--lg"></div>
			<div class="m-spinner m-spinner--info m-spinner--lg"></div>
			<div class="m-spinner m-spinner--warning m-spinner--lg"></div>
			<div class="m-spinner m-spinner--danger m-spinner--lg"></div>
		</div>
	</div>
</div>
@endsection
