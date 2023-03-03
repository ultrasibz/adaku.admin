@unless ($breadcrumbs->isEmpty())
    <!--begin::Title-->
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last)
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="{{$breadcrumb->url}}" class="text-muted text-hover-primary">{{$breadcrumb->title}}</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet-dot bg-gray-400 w-5px h-2px"></span>
                </li>
            @else
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">{{$breadcrumb->title}}</li>
                <!--end::Item-->
            @endif
        @endforeach


    </ul>

@endunless
