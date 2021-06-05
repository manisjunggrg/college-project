<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.partials.head')

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">

        @include('admin.layouts.partials.sidebar')

        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            @include('admin.layouts.partials.header')

            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                @yield('content')
            </div>

            @include('admin.layouts.partials.footer')
        </div>
    </div>
</div>

<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
    <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>

<script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('admin/js/custom/widgets.js') }}"></script>
<script src="{{ asset('admin/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('admin/js/custom/modals/create-app.js') }}"></script>
<script src="{{ asset('admin/js/custom/modals/upgrade-plan.js') }}"></script>
@stack('js')

</body>



</html>