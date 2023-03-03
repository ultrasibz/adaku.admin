<!--begin::User account menu-->
<div
    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
    data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
{{--            <div class="symbol symbol-50px me-5">--}}
{{--                <img alt="Logo" src="{{auth()->user()->getFirstMediaUrl('avatar')}}"/>--}}
{{--            </div>--}}
            <!--end::Avatar-->
            <!--begin::Username-->
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">{{auth()->user()->fullname}}
                    {{--                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>--}}
                </div>
                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{auth()->user()->email}}</a>
            </div>
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
{{--    <div class="menu-item px-5">--}}
{{--        <a href="{{route('my.edit')}}" class="menu-link px-5">My Profile</a>--}}
{{--    </div>--}}
    <!--end::Menu item-->
    <!--begin::Menu item-->
{{--    <div class="menu-item px-5">--}}
{{--        <a href="{{route('group.index')}}" class="menu-link px-5">--}}
{{--            <span class="menu-text">My Groups</span>--}}
{{--            <span class="menu-badge">--}}
{{--				<span--}}
{{--                    class="badge badge-light-primary badge-circle fw-bold fs-7">{{auth()->user()->myGroups->count()}}</span>--}}
{{--			</span>--}}
{{--        </a>--}}
{{--    </div>--}}
    <!--end::Menu item-->
    <!--begin::Menu item-->
{{--    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"--}}
{{--         data-kt-menu-placement="left-start">--}}
{{--        <a href="#" class="menu-link px-5">--}}
{{--            <span class="menu-title">My Accounts</span>--}}
{{--            <span class="menu-arrow"></span>--}}
{{--        </a>--}}
{{--        <!--begin::Menu sub-->--}}
{{--        <div class="menu-sub menu-sub-dropdown w-175px py-4">--}}
{{--            <!--begin::Menu item-->--}}
{{--            <div class="menu-item px-3">--}}
{{--                <a href="{{route('my.bank.accounts.index')}}" class="menu-link px-5">Bank</a>--}}
{{--            </div>--}}
{{--            <!--end::Menu item-->--}}
{{--            <!--begin::Menu item-->--}}
{{--            <div class="menu-item px-3">--}}
{{--                <a href="{{route('my.mobile-money.accounts.index')}}" class="menu-link px-5">Mobile Money</a>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <!--end::Menu sub-->--}}
{{--    </div>--}}
    <!--end::Menu item-->

    <!--begin::Menu separator-->
{{--    <div class="separator my-2"></div>--}}
    <!--end::Menu separator-->

    <!--begin::Menu item-->
{{--    <div class="menu-item px-5 my-1">--}}
{{--        <a href="{{route('my.password.change')}}" class="menu-link px-5">Change Password</a>--}}
{{--    </div>--}}
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="#" class="menu-link px-5" onclick="$('#logout-form').submit()">Sign Out</a>
        <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
            @csrf                          </form>
    </div>
    <!--end::Menu item-->
</div>
<!--end::User account menu-->
