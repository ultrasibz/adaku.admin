<div class="row">
    <div class="col-lg-12">
        <div class="card mb-5 mb-xl-10">

            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" wire:submit.prevent="save">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Amount Requested</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <input type="text"
                                               class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                               placeholder="Amount" wire:model.defer="loan.principal">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <input type="date"
                                               class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                               placeholder="Amount" wire:model.defer="loan.date_due">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->

                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Collateral</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-5">
                                            <label for="formFile" class="form-label">Select Collateral Images</label>
                                            <input class="form-control" type="file" wire:model.defer="collaterals" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Col-->
                        <!--end::Input group-->

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Terms & Conditions</label>

                            <div class="col-lg-8">
                               <div class="form-check form-check-custom mb-3 form-check-solid">
                                   <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"/>
                                   <label class="form-check-label" for="flexCheckDefault">
                                       The borrower will declare collateral which shall be forfeited to Adaku Money Solution in an event that the borrower defaults.
                                   </label>
                               </div>

                                <div class="form-check form-check-custom mb-3 form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"/>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        	The borrower shall pay back the principal and interest as stipulated in the model above.
                                    </label>
                                </div>

                                <div class="form-check form-check-custom mb-3 form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"/>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        When the borrower intends to restructure the loan facility, he/she will inform Adaku Money Solutions one week before the deadline of the already running facility.
                                    </label>
                                </div>
                                <div class="form-check form-check-custom mb-3 form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"/>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        The loan installments will be due on Pay Day of the Borrower of every month in respect to the date this document is signed
                                    </label>
                                </div>
                           </div>
                        </div>

                    </div>

                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <x-button type="submit" class="btn btn-primary" wire:target="save">Save</x-button>
                    </div>
                    <!--end::Actions-->
                    <input type="hidden">
                    <div></div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
    </div>
</div>
