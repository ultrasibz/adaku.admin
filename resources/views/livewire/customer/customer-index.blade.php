<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <h3>Clients</h3>
        </div>
        <!--begin::Card title-->

    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                       id="kt_customers_table">
                    <!--begin::Table head-->
                    <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1"
                            colspan="1" aria-label="Customer Name: activate to sort column ascending"
                            style="width: 162.1px;">Firstname
                        </th>
                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1"
                            colspan="1" aria-label="Customer Name: activate to sort column ascending"
                            style="width: 162.1px;">Lastname
                        </th>
                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1"
                            colspan="1" aria-label="Email: activate to sort column ascending" style="width: 200.731px;">
                            Email
                        </th>
                        <th>Date Added</th>
                        <th></th>
                    </tr>
                    <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-semibold text-gray-600">
                    @foreach($customers as $customer)
                        <tr>
                            <td>
                                {{$customer->firstname}}
                            </td>
                            <td>
                                {{$customer->lastname}}
                            </td>
                            <td>
                                {{$customer->email}}
                            </td>
                            <td>{{$customer->created_at->toFormattedDateString()}}</td>
                            <!--end::Email=-->
                            <!--begin::Company=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"></path>
																</svg>
															</span>
                                    <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href={{route('customer.show',$customer)}}
                                           class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                           data-kt-customer-table-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                    @endforeach

                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>

        </div>
    </div>
    <!--end::Table-->
</div>
<!--end::Card body-->
</div>
