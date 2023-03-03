@extends('auth.layout')
@section('content')
    <div class="card rounded-3 w-md-550px">
        <!--begin::Card body-->
        <div class="card-body p-10 p-lg-20">
            <!--begin::Form-->
            <form class="form w-100" action="{{route('login')}}" method="POST">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-11">
                    <!--begin::Title-->
                    <h1 class="text-dark fw-bolder mb-3">Member Sign In</h1>
                    <!--end::Title-->
                    <!--begin::Subtitle-->
                    {{--                            <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>--}}
                    <!--end::Subtitle=-->
                </div>
                <!--begin::Heading-->
                <!--begin::Login options-->
                {{--                        <div class="row g-3 mb-9">--}}
                {{--                            <!--begin::Col-->--}}
                {{--                            <div class="col-md-6">--}}
                {{--                                <!--begin::Google link=-->--}}
                {{--                                <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">--}}
                {{--                                    <img alt="Logo" src="{{asset('')}}/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Sign in with Google</a>--}}
                {{--                                <!--end::Google link=-->--}}
                {{--                            </div>--}}
                {{--                            <!--end::Col-->--}}
                {{--                            <!--begin::Col-->--}}
                {{--                            <div class="col-md-6">--}}
                {{--                                <!--begin::Google link=-->--}}
                {{--                                <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">--}}
                {{--                                    <img alt="Logo" src="{{asset('')}}/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3" />--}}
                {{--                                    <img alt="Logo" src="{{asset('')}}/media/svg/brand-logos/apple-black-dark.svg" class="theme-light-show h-15px me-3" />Sign in with Apple</a>--}}
                {{--                                <!--end::Google link=-->--}}
                {{--                            </div>--}}
                {{--                            <!--end::Col-->--}}
                {{--                        </div>--}}
                {{--                        <!--end::Login options-->--}}
                {{--                        <!--begin::Separator-->--}}
                {{--                        <div class="separator separator-content my-14">--}}
                {{--                            <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>--}}
                {{--                        </div>--}}
                <!--end::Separator-->
                <!--begin::Input group=-->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="fv-row mb-8">
                    <!--begin::Email-->
                    <input type="text" placeholder="Email" name="email" autocomplete="off"
                           class="form-control bg-transparent"/>
                    <!--end::Email-->
                </div>
                <!--end::Input group=-->
                <div class="fv-row mb-3">
                    <!--begin::Password-->
                    <input type="password" placeholder="Password" name="password" autocomplete="off"
                           class="form-control bg-transparent"/>
                    <!--end::Password-->
                </div>
                <!--end::Input group=-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                    <div>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" name="remember"/>
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!--begin::Link-->
                    <a href="{{route('password.request')}}" class="link-primary">Forgot Password ?</a>

                    <!--end::Link-->
                </div>

                              <!--end::Wrapper-->
                <!--begin::Submit button-->
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Sign In</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                </div>
                <!--end::Submit button-->
                <!--begin::Sign up-->
                <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
                    <a href="{{route('register')}}" class="link-primary">Sign
                        up</a></div>
                <!--end::Sign up-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card body-->
    </div>
@endsection
