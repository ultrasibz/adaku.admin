<div class="row">
    <div class="col-lg-6">
        <div class="card-body pt-0" >
            <!--begin::Card header-->
            <div class="card-header cursor-pointer">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Customer Details</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9">
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted"
                        >Full Name</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span
                            class="fw-bold fs-6 text-gray-800"
                            >{{$customer->full_name}}</span
                        >
                    </div>
                    <!--end::Col-->
                </div>

                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted"
                        >Mobile</label
                    >
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span
                            class="fw-bold fs-6 text-gray-800"
                            >{{$customer->mobile}}</span
                        >
                    </div>
                    <!--end::Col-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">NRC</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                       <iframe src="{{$customer->getFirstMediaUrl('nrc')}}"></iframe>
                        
                    </div>
                    <!--end::Col-->
                </div>
                
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Payslip / ZRA Return</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <iframe src={{$customer->getFirstMediaUrl('payslip')}}</iframe>
                        
                    </div>
                    <!--end::Col-->
                </div>
                
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Collateral</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <iframe src={{$customer->getFirstMedia('collateral')}}</iframe>
                    </div>
                    <!--end::Col-->
                </div>
                
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Proof Of Residence</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <iframe src={{$customer->getFirstMediaUrl('proof_of_residence')}}</iframe>
                        
                    </div>
                    <!--end::Col-->
                </div>
                
                </div>
            </div>
            <!--end::Card body-->
        </div>
    </div>

    
</div>
