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
<link href="{{ asset('admintheme/assets/vendors/base/vendors.bundle.css') }} " rel="stylesheet" type="text/css" />
<link href="{{ asset('admintheme/assets/demo/default/base/style.bundle.css') }} " rel="stylesheet" type="text/css" />

@endsection

@section('script')
	<script src="{{ asset('admintheme/assets/vendors/base/vendors.bundle.js') }} " type="text/javascript"></script>
	<script src="{{ asset('admintheme/assets/demo/default/base/scripts.bundle.js') }} " type="text/javascript"></script>
	<!-- <script src="{{ asset('admintheme/assets/vendors/custom/datatables/datatables.bundle.js') }} " type="text/javascript"></script> -->
	<!-- <script src="{{ asset('admintheme/assets/demo/default/custom/crud/datatables/extensions/responsive.js') }} " type="text/javascript"></script> -->
    <script src="{{ asset('admintheme/assets/demo/default/custom/crud/forms/widgets/bootstrap-maxlength.js') }} " type="text/javascript"></script>

    <script>
        $("#post_content").maxlength({alwaysShow:!0,threshold:5,placement:"top-right",warningClass:"m-badge m-badge--brand m-badge--rounded m-badge--wide",limitReachedClass:"m-badge m-badge--brand m-badge--rounded m-badge--wide"});
        $("#post_title").maxlength({alwaysShow:!0,threshold:5,placement:"top-right",warningClass:"m-badge m-badge--brand m-badge--rounded m-badge--wide",limitReachedClass:"m-badge m-badge--brand m-badge--rounded m-badge--wide"});
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
	</script>

@endsection

@section('content')
<div class="m-portlet">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    Create New Post
                </h3>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form action="/admin/posts" method="POST" class="m-form m-form--fit m-form--label-align-right">
        {{ csrf_field() }}    
        <div class="m-portlet__body">
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-md-3 col-sm-12">
                    Title
                </label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <input type='text' class="form-control" id="post_title" name="post[title]" maxlength="100" type="text"/>
                    <span class="m-form__help" style="display:none">
                        Please type the title of the new post
                    </span>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-md-3 col-sm-12">
                    Content
                </label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <textarea class="form-control" id="post_content" maxlength="1000"  name="post[content]" placeholder="" rows="10"></textarea>
                    <span class="m-form__help" style="display:none">
                        Bootstrap maxlength supports textarea as well as inputs
                    </span>
                </div>
            </div>
        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions m-form__actions">
                <div class="row">
                    <div class="col-lg-9 ml-lg-auto">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection
