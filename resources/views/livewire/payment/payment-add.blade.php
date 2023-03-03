<div class="modal-content rounded">
    <!--begin::Modal header-->
    <div class="modal-header pb-0 border-0 justify-content-end">
        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
            <span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
								</svg>
							</span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Close-->
    </div>
    <!--begin::Modal header-->
    <!--begin::Modal body-->
    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
        <!--begin:Form-->
        <form wire:submit.prevent="save">
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
            <div class="mb-13 text-center">
                <!--begin::Title-->
                <h1 class="mb-3">Add Payment</h1>
                <!--end::Title-->
                <!--begin::Description-->
{{--                <div class="text-muted fw-semibold fs-5">--}}
{{--                    Make a savings deposit for the month of <strong class="text-info">{{now()->monthName}}</strong>--}}
{{--                </div>--}}
                <!--end::Description-->
            </div>


            <div class="d-flex flex-column fv-row mb-5 fv-plugins-icon-container">
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required"> Amount</span>
                </label>

                <input type="number" class="form-control form-control-solid" wire:model.defer="payment.amount" placeholder="0">
                @error('payment.amount')<span class="text-danger">{{$message}}</span> @enderror
            </div>

                <div class="d-flex flex-column fv-row mb-5 fv-plugins-icon-container">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required"> Comments</span>
                    </label>

                    <textarea class="form-control form-control-solid" wire:model.defer="payment.comments" ></textarea>
                    @error('payment.comments')<span class="text-danger">{{$message}}</span> @enderror
                </div>

                <x-button type="submit" class="btn btn-primary w-100" wire:target="save">Declare</x-button>


        </form>
        <!--end:Form-->
    </div>
    <!--end::Modal body-->
</div>
