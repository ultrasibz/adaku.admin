<html lang="en" data-theme="light">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-sheet"></style><!--begin::Head-->
<head>
    <title>{{env('APP_NAME')}}</title>
    <meta charset="utf-8">
{{--    <meta name="description"--}}
{{--          content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask &amp; Laravel versions. Grab your copy now and get life-time updates for free.">--}}
{{--    <meta name="keywords"--}}
{{--          content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask &amp; Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <meta property="og:locale" content="en_US">--}}
{{--    <meta property="og:type" content="article">--}}
{{--    <meta property="og:title"--}}
{{--          content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme &amp; Template">--}}
{{--    <meta property="og:url" content="https://keenthemes.com/metronic">--}}
{{--    <meta property="og:site_name" content="Keenthemes | Metronic">--}}
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8">
    <link rel="shortcut icon" href="/metronic8/demo1/assets/media/logos/favicon.ico">
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/landing.css')}}" rel="stylesheet" type="text/css">
    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->


</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative app-blank">
<div class="d-lg-block p-5 p-lg-0 drawer drawer-start" data-kt-drawer="true" data-kt-drawer-name="landing-menu"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px"
     data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
     data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}"
     style="width: 200px !important;">
    <!--begin::Menu-->
    <div
        class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
        id="kt_landing_menu">
        <!--begin::Menu item-->
        <div class="menu-item">
            <!--begin::Menu link-->
            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true"
               data-kt-drawer-dismiss="true">Home</a>
            <!--end::Menu link-->
        </div>

    </div>
    <!--end::Menu-->
</div>
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-theme-mode");
        } else {
            if (localStorage.getItem("data-theme") !== null) {
                themeMode = localStorage.getItem("data-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-theme", themeMode);
    }</script>
<!--end::Theme mode setup on page load-->
<!--Begin::Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!--End::Google Tag Manager (noscript) -->
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Header Section-->
    <div class="mb-0" id="home">
        <!--begin::Wrapper-->
        <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
             style="background-image: url({{asset('')}}media/svg/illustrations/landing.svg)">
            <!--begin::Header-->
            <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                 data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="animation-duration: 0.3s;">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center justify-content-between">
                        <!--begin::Logo-->
                        <div class="d-flex align-items-center flex-equal">
                            <!--begin::Mobile menu toggle-->
                            <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-2hx">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
												<path
                                                    d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                    fill="currentColor"></path>
												<path opacity="0.3"
                                                      d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                      fill="currentColor"></path>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--end::Mobile menu toggle-->
                            <!--begin::Logo image-->
                            <a href="{{route('landing')}}">
                                <img alt="Logo" src="{{asset('images/logo.png')}}"
                                     class="logo-default h-25px h-lg-30px">
                                <img alt="Logo" src="{{asset('images/logo.png')}}"
                                     class="logo-sticky h-20px h-lg-25px">
                            </a>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Logo-->
                        <!--begin::Menu wrapper-->
                        <div class="d-lg-block" id="kt_header_nav_wrapper">

                        </div>
                        <!--end::Menu wrapper-->
                        <!--begin::Toolbar-->
                        <div class="flex-equal text-end ms-1">
                            <a href="{{route('login')}}"
                               class="btn btn-success">Customer Signin</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Landing hero-->
            <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                <!--begin::Heading-->
                <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                    <!--begin::Title-->
                    <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">
                        Digital Finance, <br/>Access to Money anywhere
                    </h1>
                    <!--end::Title-->
{{--                    <!--begin::Action-->--}}
                    <a href="{{route('login')}}" class="btn btn-primary btn-lg">Get A Loan Now</a>
{{--                    <!--end::Action-->--}}
                </div>
                <!--end::Heading-->
                <!--begin::Clients-->
                <div class="d-flex flex-center flex-wrap position-relative px-5">
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="Fujifilm"
                         data-bs-original-title="Fujifilm" data-kt-initialized="1">
                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/fujifilm.svg" class="mh-30px mh-lg-40px"
                             alt="">
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="Vodafone"
                         data-bs-original-title="Vodafone" data-kt-initialized="1">
                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/vodafone.svg" class="mh-30px mh-lg-40px"
                             alt="">
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="KPMG International"
                         data-bs-original-title="KPMG International" data-kt-initialized="1">
                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/kpmg.svg" class="mh-30px mh-lg-40px"
                             alt="">
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="Nasa"
                         data-bs-original-title="Nasa" data-kt-initialized="1">
                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/nasa.svg" class="mh-30px mh-lg-40px"
                             alt="">
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="Aspnetzero"
                         data-bs-original-title="Aspnetzero" data-kt-initialized="1">
                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/aspnetzero.svg"
                             class="mh-30px mh-lg-40px" alt="">
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
                         aria-label="AON - Empower Results" data-bs-original-title="AON - Empower Results"
                         data-kt-initialized="1">
                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/aon.svg" class="mh-30px mh-lg-40px"
                             alt="">
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="Hewlett-Packard"
                         data-bs-original-title="Hewlett-Packard" data-kt-initialized="1">
                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/hp-3.svg" class="mh-30px mh-lg-40px"
                             alt="">
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="Truman"
                         data-bs-original-title="Truman" data-kt-initialized="1">
                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/truman.svg" class="mh-30px mh-lg-40px"
                             alt="">
                    </div>
                    <!--end::Client-->
                </div>
                <!--end::Clients-->
            </div>
            <!--end::Landing hero-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>


    <!--begin::Footer Section-->
    <div class="mb-0">
        <!--begin::Curve top-->
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve top-->
        <!--begin::Wrapper-->
        <div class="landing-dark-bg pt-20">
            <!--begin::Container-->
            <div class="container">

            </div>
            <!--end::Container-->
            <!--begin::Separator-->
            <div class="landing-dark-separator"></div>
            <!--end::Separator-->
            <!--begin::Container-->
            <div class="container">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                    <!--begin::Copyright-->
                    <div class="d-flex align-items-center order-2 order-md-1">
                        <!--begin::Logo-->

                        <!--end::Logo image-->
                        <!--begin::Logo image-->
                        <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="https://keenthemes.com">© {{date('Y')}} {{env('APP_NAME')}}</span>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                        <li class="menu-item">
                            <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">Contact Us</a>
                        </li>
                        <li class="menu-item mx-5">
                            <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Terms & Conditions</a>
                        </li>

                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Footer Section-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                              fill="currentColor"></rect>
						<path
                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                            fill="currentColor"></path>
					</svg>
				</span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
</div>
<!--end::Root-->
<!--begin::Engage-->
<!--end::Engage-->
<!--begin::Engage modals-->
<!--begin::Modal - Sitemap-->
<!--end::Modal - Sitemap-->
<!--end::Engage modals-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                          fill="currentColor"></rect>
					<path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="currentColor"></path>
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--begin::Javascript-->
<script>var hostUrl = "/metronic8/demo1/assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('')}}plugins/global/plugins.bundle.js"></script>
<script src="{{asset('')}}js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('')}}plugins/custom/fslightbox/fslightbox.bundle.js"></script>
<script src="/metronic8/demo1/assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('')}}js/custom/landing.js"></script>
<script src="{{asset('')}}js/custom/pages/pricing/general.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
     style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004" d="M0 0 "></path>
</svg>
<script type="text/javascript" id="">!function (b, e, f, g, a, c, d) {
        b.fbq || (a = b.fbq = function () {
            a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
        }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
    }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
    fbq("init", "738802870177541");
    fbq("track", "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=738802870177541&amp;ev=PageView&amp;noscript=1"></noscript>
<script type="text/javascript" id="">try {
        (function () {
            var a = google_tag_manager["GTM-5FS8GGP"].macro(6);
            a = "undefined" == typeof a ? google_tag_manager["GTM-5FS8GGP"].macro(7) : a;
            var b = new Date;
            b.setTime(b.getTime() + 18E5);
            var c = "gtm-session-start";
            b = b.toGMTString();
            var d = "/", e = ".keenthemes.com";
            document.cookie = c + "\x3d" + a + "; Expires\x3d" + b + "; domain\x3d" + e + "; Path\x3d" + d
        })()
    } catch (a) {
    }
    ;</script>
<script type="text/javascript" id="">(function () {
        var a = google_tag_manager["GTM-5FS8GGP"].macro(8) - 0 + 1, b = ".keenthemes.com";
        document.cookie = "damlPageCount\x3d" + a + ";domain\x3d" + b + ";path\x3d/;"
    })();</script>
<scribe-shadow id="shadow-root-scribe-elem"
               style="position: fixed; width: 0px; height: 0px; top: 0px; left: 0px; z-index: 2147483647; overflow: visible;"></scribe-shadow>
</body><!--end::Body--></html>
