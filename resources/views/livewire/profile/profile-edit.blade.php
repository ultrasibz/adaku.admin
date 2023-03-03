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



                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                     style="background-image: url('{{$customer->getFirstMediaUrl('avatar')}}')">
                                    <!--begin::Preview existing avatar-->

                                    <div class="image-input-wrapper w-125px h-125px img-center"
                                         style="background-image: url({{$customer->getFirstMediaUrl('avatar')}})"
                                         wire:ignore></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        data-kt-initialized="1">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" wire:model.defer="photo">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        data-kt-initialized="1">
																	<i class="bi bi-x fs-2"></i>
																</span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    @if($photo)
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                            data-kt-initialized="1">
																	<i class="bi bi-x fs-2"></i>
																</span>
                                        <!--end::Remove-->
                                    @endif
                                </div>
                                <!--end::Image input-->
                                <!--begin::Hint-->
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">NRC</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <input type="text"
                                               class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                               placeholder="NRC" wire:model.defer="customer.nrc">
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
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <input type="text"
                                               class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                               placeholder="First name" wire:model.defer="customer.firstname">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <input type="text" wire:model.defer="customer.lastname"
                                               class="form-control form-control-lg form-control-solid"
                                               placeholder="Last name">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">E-mail / Mobile</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   aria-label="Phone number must be active" data-kt-initialized="1"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-5 fv-row fv-plugins-icon-container">
                                        <input type="text"
                                               class="form-control-lg form-control-solid mb-3 mb-lg-0 form-control"
                                               placeholder="E-mail" wire:model.defer="customer.email"  >
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-7 fv-row fv-plugins-icon-container">
                                        <div class="input-group mb-5" wire:ignore>
                                            <input id="mobile" type="text" value="{{$customer->mobile}}"
                                                   class="form-control form-control-lg form-control-solid"
                                                   placeholder="Mobile" >
                                        </div>

                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label for="place_of_work" class="col-lg-4 col-form-label  fw-semibold fs-6 required">
                                Address</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container ">
                                <textarea wire:model.defer="customer.address"
                                          class="form-control form-control-lg form-control-solid"
                                          placeholder="Address"></textarea>
                            </div>
                            <!--end::Col-->
                        </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Area / Town</span>

                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                            <input type="text"
                                                   class="form-control-lg form-control-solid mb-3 mb-lg-0 form-control"
                                                   placeholder="Area" wire:model.defer="customer.area" >
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                            <div class="input-group mb-5" >
                                                <input id="mobile" type="text" wire:model.defer="customer.town"
                                                       class="form-control form-control-lg form-control-solid"
                                                       placeholder="Town" />
                                            </div>

                                        </div>

                                        <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                            <div class="input-group mb-5" >
                                                <input id="mobile" type="text" wire:model.defer="customer.province"
                                                       class="form-control form-control-lg form-control-solid"
                                                       placeholder="Province" />
                                            </div>

                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Country / Nationality</span>

                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            <input type="text"
                                                   class="form-control-lg form-control-solid mb-3 mb-lg-0 form-control"
                                                   placeholder="Country" wire:model.defer="customer.country" >
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            <div class="input-group mb-5" >
                                                <input id="mobile" type="text" wire:model.defer="customer.nationality"
                                                       class="form-control form-control-lg form-control-solid"
                                                       placeholder="Nationality" />
                                            </div>

                                        </div>


                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Place Of Work / Occupation</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            <input type="text"
                                                   class="form-control-lg form-control-solid mb-3 mb-lg-0 form-control"
                                                   placeholder="Place Of Work" wire:model.defer="customer.place_of_work"  >
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            <div class="input-group mb-5" >
                                                <input id="mobile" type="text" wire:model.defer="customer.occupation"
                                                       class="form-control form-control-lg form-control-solid"
                                                       placeholder="Occupation" >
                                            </div>

                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>


                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Documents</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-5">
                                            <label for="formFile" class="form-label">NRC</label>
                                            <input class="form-control" type="file" wire:model.defer="nrc">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-5">
                                            <label for="formFile" class="form-label">Payslip / ZRA Return</label>
                                            <input class="form-control" type="file" wire:model.defer="nrc">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-5">
                                            <label for="formFile" class="form-label">Collateral(multiple)</label>
                                            <input class="form-control" type="file" wire:model.defer="payslip" multiple>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-5">
                                            <label for="formFile" class="form-label">Proof Of Residence</label>
                                            <input class="form-control" type="file" wire:model.defer="nrc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->


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

@push('scripts')

@endpush
