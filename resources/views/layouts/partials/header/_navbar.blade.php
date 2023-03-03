<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">

	<!--begin::User menu-->
	<div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
		<!--begin::Menu wrapper-->
		<div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
{{--			<img src="{{auth()->user()->getFirstMediaUrl('avatar')}}" alt="user" />--}}
            <span>{{auth()->user()->fullname}}</span>
		</div>
		<!--layout-partial:partials/menus/_user-account-menu.html-->
        @include('layouts.partials.menus._user-account-menu')
		<!--end::Menu wrapper-->
	</div>
	<!--end::User menu-->

</div>
<!--end::Navbar-->
