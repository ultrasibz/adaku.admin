<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Payments</h3>
        </div>
        <div class="card-toolbar">
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-payment-add">Add Payment</button>
        </div>
        <!--end::Card title-->

    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
    <div class="card-body p-9">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                   id="kt_customers_table">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1"
                        colspan="1" aria-label="Customer Name: activate to sort column ascending"
                        >Amount
                    </th>
                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1"
                        colspan="1" aria-label="Customer Name: activate to sort column ascending"
                       >Date Paid
                    </th>
                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1"
                        colspan="1" aria-label="Email: activate to sort column ascending" >
                        Comments
                    </th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-semibold text-gray-600">
                @foreach($payments as $payment)
                    <tr>
                        <td>
                            {{$payment->amount}}
                        </td>
                        <td>{{$payment->created_at->toFormattedDateString()}}</td>

                        <td>
                            {{$payment->comments}}
                        </td>
                    </tr>
                @endforeach

                </tbody>
                <!--end::Table body-->
            </table>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="modal-payment-add" wire:ignore>
        <div class="modal-dialog">
            <livewire:payment.payment-add :loan="$loan"/>
        </div>
    </div>
    <!--end::Card body-->
</div>
