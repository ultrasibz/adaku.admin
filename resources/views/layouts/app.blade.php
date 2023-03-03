<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head>
    <base href="">
{{--    <title>{{env('APP_NAME')}}--}}
{{--        - {{ ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->header ?? $breadcrumb->title : '' }}</title>--}}
    <meta charset="utf-8"/>
    <meta name="description"
          content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask &amp; Laravel versions. Grab your copy now and get life-time updates for free."/>
    <meta name="keywords"
          content="Metronic, Bootstrap, Bootstrap 5, Angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask &amp; Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title"
          content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask &amp; Laravel Admin Dashboard Theme"/>
    <meta property="og:url" content="https://keenthemes.com/metronic"/>
    <meta property="og:site_name" content="Keenthemes | Metronic"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{--    <link rel="canonical" href="{{env('APP_URL')}}"/>--}}

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used by this page)-->
    <link href="{{asset('')}}/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('')}}/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('')}}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('')}}/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/plugins/intlTelInput.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('')}}/css/app.css" rel="stylesheet" type="text/css"/>

    <livewire:styles/>
    <!--end::Global Stylesheets Bundle-->
    <!--end::Head-->
    <!--begin::Body-->
<body data-kt-name="metronic" id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-sidebar-enabled="true"
      data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
      data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
<!--layout-partial:partials/theme-mode/_init.html-->
@include('layouts.partials.theme-mode._init')
<!--layout-partial:layout/_default.html-->
@include('layouts._default')
<!--layout-partial:partials/_scrolltop.html-->
@include('layouts.partials._scrolltop')
<!--begin::Modals-->
<!--layout-partial:partials/modals/_upgrade-plan.html-->
<!--layout-partial:partials/modals/_view-users.html-->
<!--layout-partial:partials/modals/users-search/_main.html-->
<!--layout-partial:partials/modals/_invite-friends.html-->
{{--@include('layouts.partials.modals._upgrade-plan')--}}
{{--@include('layouts.partials.modals._view-users')--}}
{{--@include('layouts.partials.modals.users-search._main')--}}
{{--@include('layouts.partials.modals._invite-friends')--}}

<!--end::Modals-->
<!--begin::Javascript-->
<script>var hostUrl = "{{asset('')}}/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('')}}/js/scripts.bundle.js"></script>

<script src="{{asset('')}}/plugins/global/plugins.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used by this page)-->
<script src="{{asset('')}}/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="{{asset('')}}/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used by this page)-->
<script src="{{asset('')}}/js/widgets.bundle.js"></script>
<script src="{{asset('')}}/js/custom/widgets.js"></script>
<script src="{{asset('')}}/js/custom/apps/chat/chat.js"></script>
<script src="{{asset('')}}/js/custom/intro.js"></script>
<script src="{{asset('')}}/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="{{asset('')}}/js/custom/utilities/modals/users-search.js"></script>
<script src="{{asset('js/app.js')}}"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
{{--<script src="https://js.pusher.com/7.2/pusher.min.js"></script>--}}

<livewire:scripts/>
<!--end::Custom Javascript-->
<!--end::Javascript-->
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toastr-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        Livewire.on('success', message => {
            toastr.success(message);
        });

        Livewire.on('error', message => {
            toastr.error(message);
        });

        window.addEventListener('alert',(message)=>{
            Swal.fire({
                text: message.detail.text,
                icon: message.detail.type,
                buttonsStyling: false,
                confirmButtonText: "Close",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        });

        window.addEventListener('modal-close',()=>{
            $('.modal').modal('hide');
        });


        beamsClient.start()
            .then(() => beamsClient.addDeviceInterest('member.{{auth()->id()}}'))
            .then(() => console.log('Successfully registered and subscribed!'))
            .catch(console.error);

    })

</script>
@stack('scripts')

</body>
<!--end::Body-->
</base>
</head>
</html>
