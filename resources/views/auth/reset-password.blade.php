@extends('auth.layout')
@section('content')
    <!--begin::Card-->
    <div class="card rounded-3 w-md-550px">
        <!--begin::Card body-->
        <div class="card-body p-10 p-lg-20">
            <!--begin::Form-->
            <form class="form w-100" method="POST" action="{{route('password.update')}}">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                               <!--begin::Heading-->
                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark fw-bolder mb-3">Setup New Password</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <div class="text-gray-500 fw-semibold fs-6">Have you already reset the password ?
                        <a href="{{route('login')}}" class="link-primary fw-bold">Sign in</a></div>
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->
                <div class="fv-row mb-8">
                    <!--begin::Repeat Password-->
                    <input type="email" placeholder="E-mail" name="email" autocomplete="on" value="{{old('email',$request->email)}}" class="form-control bg-transparent" readonly/>
                    <input type="hidden" name="token" value="{{$token}}">
                    <!--end::Repeat Password-->
                </div>
                <!--begin::Input group-->
                <div class="fv-row mb-8" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" autocomplete="off" />
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
                        </div>
                        <!--end::Input wrapper-->
                        <!--begin::Meter-->
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        <!--end::Meter-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Hint-->
                    <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                    <!--end::Hint-->
                </div>
                <!--end::Input group=-->
                <!--end::Input group=-->
                <div class="fv-row mb-8">
                    <!--begin::Repeat Password-->
                    <input type="password" placeholder="Repeat Password" name="password_confirmation" autocomplete="off" class="form-control bg-transparent" />
                    <!--end::Repeat Password-->
                </div>
                <!--end::Input group=-->
{{--                <!--begin::Input group=-->--}}
{{--                <div class="fv-row mb-8">--}}
{{--                    <label class="form-check form-check-inline">--}}
{{--                        <input class="form-check-input" type="checkbox" name="toc" value="1" />--}}
{{--                        <span class="form-check-label fw-semibold text-gray-700 fs-6 ms-1">I Agree &amp;--}}
{{--										<a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <!--end::Input group=-->--}}
                <!--begin::Action-->
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_new_password_submit" class="btn btn-primary">
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Submit</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                </div>
                <!--end::Action-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card body-->
@endsection
