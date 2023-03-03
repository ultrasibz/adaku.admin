@extends('auth.layout')
@section('content')
    <div class="card rounded-3 w-md-800px">
        <!--begin::Card body-->
        <div class="card-body p-10 p-lg-20">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!--begin::Form-->
            <form class="form w-100" method="post" action="{{route('register')}}">
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-11">
                    <!--begin::Title-->
                    <h1 class="text-dark fw-bolder mb-3">Customer Sign Up</h1>
                    <!--end::Title-->
                    <!--begin::Subtitle-->
                    {{--                    <div class="text-gray-500 fw-semibold fs-6"></div>--}}
                    <!--end::Subtitle=-->
                </div>

                <div class="row mb-8">
                    <div class="col-lg-6">
                        <input type="text" placeholder="Nrc" name="nrc" value="{{old('nrc')}}"
                               class="form-control bg-transparent"/>

                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Firstname Name" name="firstname" value="{{old('firstname')}}"
                               class="form-control bg-transparent"/>

                    </div>
                </div>

                <div class="row mb-8">

                    <div class="col-lg-6">
                        <input type="text" placeholder="last Name" name="lastname" value="{{old('lastname')}}"
                               class="form-control bg-transparent"/>

                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Mobile" name="mobile" value="{{old('mobile')}}"
                               class="form-control bg-transparent"/>

                    </div>
                </div>

                <!--begin::Input group=-->
                <div class="row mb-8">
                  <div class="col-lg-6">
                      <input type="email" placeholder="Email" name="email" value="{{old('email')}}"
                             class="form-control bg-transparent"/>

                  </div>

                    <div class="col-lg-6">
                        <input type="text" placeholder="Place Of work" name="place_of_work" value="{{old('place_of_work')}}"
                               class="form-control bg-transparent"/>

                    </div>
                </div>
                <!--begin::Input group-->
                <div class="row mb-8" >
                    <div class="col-lg-6">
                        <input class="form-control bg-transparent" type="password" placeholder="Password"
                               name="password"/>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <input placeholder="Repeat Password" name="password_confirmation" type="password"
                               class="form-control bg-transparent"/>
                    </div>
                </div>

                <div class="row mb-8">
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="toc" value="1"/>
                        <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
										<a href="#" class="ms-1 link-primary">Terms</a></span>
                    </label>
                </div>
                <!--end::Accept-->
                <!--begin::Submit button-->
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Sign up</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                </div>
                <!--end::Submit button-->
                <!--begin::Sign up-->
                <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
                    <a href="{{route('login')}}"
                       class="link-primary fw-semibold">Sign in</a></div>
                <!--end::Sign up-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card body-->
    </div>
@endsection
