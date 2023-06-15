<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
           <h3>Approved Loans</h3>
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
                            style="width: 162.1px;">Loan ID
                        </th>
                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1"
                            colspan="1" aria-label="Customer Name: activate to sort column ascending"
                            style="width: 162.1px;">Amount Requested
                        </th>
                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1"
                            colspan="1" aria-label="Email: activate to sort column ascending" style="width: 200.731px;">
                            Due Date
                        </th>
                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1"
                            colspan="1" aria-label="Company: activate to sort column ascending"
                            style="width: 178.25px;">Interest
                        </th>
                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1"
                            colspan="1" aria-label="Payment Method: activate to sort column ascending"
                            style="width: 162.1px;">status
                        </th>
                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1"
                            colspan="1" aria-label="Created Date: activate to sort column ascending"
                            style="width: 210.731px;"> Date Requested
                        </th>

                        <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions"
                            style="width: 126.887px;">Actions
                        </th>
                    </tr>
                    <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-semibold text-gray-600">
                    @foreach($loans as $loan)
                    @if ($loan->status = 2 )
                        <tr>
                            <td>
                                <a href="{{route('loan.show',$loan)}}"
                                   class="text-gray-800 text-hover-primary mb-1">LN{{sprintf('%04d', $loan->id)}}</a>
                            </td>
                            <td>
                                {{money($loan->principal)}}
                            </td>
                            <td>
                                {{$loan->date_due->toFormattedDateString()}}
                            </td>
                            <!--end::Email=-->
                            <!--begin::Company=-->
                            <td>{{$loan->interest? number_format($loan->interest) : '--'}}</td>
                            <!--end::Company=-->
                            <!--begin::Payment method=-->
                            <td >
                              {{$loan->status->description}}
                            </td>
                            <!--end::Payment method=-->
                            <!--begin::Date=-->
                            <td >{{$loan->created_at->toFormattedDateString()}}</td>
                            <!--end::Date=-->
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
                                        <a href="{{route('loan.show',$loan)}}"
                                           class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        @endif
                    @endforeach

                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <div class="row">
                </div>
            </div>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
