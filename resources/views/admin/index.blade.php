@extends('admin.layouts.master')

@section('title', 'Homepage')

@section('content')

    @include('admin.layouts.partials.breadcrumb', ['panel' => 'Homepage'])

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container">
            <div class="row gy-5 g-xl-8">
                <div class="col-xxl-4">
                    <!--begin::Mixed Widget 2-->
                    <div class="card card-xxl-stretch">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-danger py-5">
                            <h3 class="card-title fw-bolder text-white">Sales Statistics</h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                        class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-flip="top-end">
                                    <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                    <span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                 height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
                                                                          fill="#000000"/>
																	<rect x="14" y="5" width="5" height="5" rx="1"
                                                                          fill="#000000" opacity="0.3"/>
																	<rect x="5" y="14" width="5" height="5" rx="1"
                                                                          fill="#000000" opacity="0.3"/>
																	<rect x="14" y="14" width="5" height="5" rx="1"
                                                                          fill="#000000" opacity="0.3"/>
																</g>
															</svg>
														</span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                     data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                            Payments
                                        </div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="Specify a target name for future usage and reference"></i></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                         data-kt-menu-placement="left-start"
                                         data-kt-menu-flip="center, top">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px"
                                                               type="checkbox" value="1" checked="checked"
                                                               name="notifications"/>
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Chart-->
                            <div class="mixed-widget-2-chart card-rounded-bottom bg-danger"
                                 data-kt-color="danger" style="height: 200px"></div>
                            <!--end::Chart-->
                            <!--begin::Stats-->
                            <div class="card-p mt-n20 position-relative">
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                        <!--begin::Svg Icon | path: icons/duotone/Media/Equalizer.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
																	<g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<rect fill="#000000" opacity="0.3" x="13" y="4"
                                                                              width="3" height="16" rx="1.5"/>
																		<rect fill="#000000" x="8" y="9" width="3"
                                                                              height="11" rx="1.5"/>
																		<rect fill="#000000" x="18" y="11" width="3"
                                                                              height="9" rx="1.5"/>
																		<rect fill="#000000" x="3" y="13" width="3"
                                                                              height="7" rx="1.5"/>
																	</g>
																</svg>
															</span>
                                        <!--end::Svg Icon-->
                                        <a href="#" class="text-warning fw-bold fs-6">Weekly Sales</a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                        <!--begin::Svg Icon | path: icons/duotone/Communication/Add-user.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                     height="24px" viewBox="0 0 24 24" version="1.1">
																	<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                          fill="#000000" fill-rule="nonzero"
                                                                          opacity="0.3"/>
																	<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                          fill="#000000" fill-rule="nonzero"/>
																</svg>
															</span>
                                        <!--end::Svg Icon-->
                                        <a href="#" class="text-primary fw-bold fs-6">New Users</a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                        <!--begin::Svg Icon | path: icons/duotone/Design/Layers.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                     height="24px" viewBox="0 0 24 24" version="1.1">
																	<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                                          fill="#000000" fill-rule="nonzero"/>
																	<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                                          fill="#000000" opacity="0.3"/>
																</svg>
															</span>
                                        <!--end::Svg Icon-->
                                        <a href="#" class="text-danger fw-bold fs-6 mt-2">Item Orders</a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col bg-light-success px-6 py-8 rounded-2">
                                        <!--begin::Svg Icon | path: icons/duotone/Communication/Urgent-mail.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                     height="24px" viewBox="0 0 24 24" version="1.1">
																	<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                                          fill="#000000" opacity="0.3"/>
																	<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                                          fill="#000000"/>
																</svg>
															</span>
                                        <!--end::Svg Icon-->
                                        <a href="#" class="text-success fw-bold fs-6 mt-2">Bug Reports</a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>

                </div>
                <div class="col-xl-8">
                    <!--begin::Tables Widget 9-->
                    <div class="card card-xxl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
                                <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span>
                            </h3>
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                 data-bs-trigger="hover" title="Click to add a user">
                                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                   data-bs-target="#kt_modal_invite_friends">
                                    <!--begin::Svg Icon | path: icons/duotone/Communication/Add-user.svg-->
                                    <span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                             height="24px" viewBox="0 0 24 24" version="1.1">
															<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                  fill="#000000" fill-rule="nonzero" opacity="0.3"/>
															<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                  fill="#000000" fill-rule="nonzero"/>
														</svg>
													</span>
                                    <!--end::Svg Icon-->New Member</a>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="w-25px">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       data-kt-check="true"
                                                       data-kt-check-target=".widget-9-check"/>
                                            </div>
                                        </th>
                                        <th class="min-w-150px">Authors</th>
                                        <th class="min-w-140px">Company</th>
                                        <th class="min-w-120px">Progress</th>
                                        <th class="min-w-100px text-end">Actions</th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input widget-9-check"
                                                       type="checkbox" value="1"/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-45px me-5">
                                                    <img src="assets/media/avatars/150-11.jpg" alt=""/>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary fs-6">Ana
                                                        Simmons</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"
                                               class="text-dark fw-bolder text-hover-primary d-block fs-6">Intertico</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                </div>
                                                <div class="progress h-6px w-100">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                         style="width: 50%" aria-valuenow="50"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"/>
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                          fill="#000000"/>
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                          fill="#000000" opacity="0.3"/>
																				</g>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                      fill="#000000" fill-rule="nonzero"
                                                                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"/>
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                      fill="#000000" fill-rule="nonzero"
                                                                                      opacity="0.3"/>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"/>
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                          fill="#000000"
                                                                                          fill-rule="nonzero"/>
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                          fill="#000000" opacity="0.3"/>
																				</g>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input widget-9-check"
                                                       type="checkbox" value="1"/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-45px me-5">
                                                    <img src="assets/media/avatars/150-3.jpg" alt=""/>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary fs-6">Jessie
                                                        Clarcson</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">C#, ASP.NET, MS SQL</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"
                                               class="text-dark fw-bolder text-hover-primary d-block fs-6">Agoda</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Houses &amp; Hotels</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <span class="text-muted me-2 fs-7 fw-bold">70%</span>
                                                </div>
                                                <div class="progress h-6px w-100">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                         style="width: 70%" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"/>
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                          fill="#000000"/>
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                          fill="#000000" opacity="0.3"/>
																				</g>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                      fill="#000000" fill-rule="nonzero"
                                                                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"/>
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                      fill="#000000" fill-rule="nonzero"
                                                                                      opacity="0.3"/>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"/>
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                          fill="#000000"
                                                                                          fill-rule="nonzero"/>
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                          fill="#000000" opacity="0.3"/>
																				</g>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input widget-9-check"
                                                       type="checkbox" value="1"/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-45px me-5">
                                                    <img src="assets/media/avatars/150-4.jpg" alt=""/>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary fs-6">Lebron
                                                        Wayde</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">PHP, Laravel, VueJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"
                                               class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Transportation</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <span class="text-muted me-2 fs-7 fw-bold">60%</span>
                                                </div>
                                                <div class="progress h-6px w-100">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                         style="width: 60%" aria-valuenow="60"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"/>
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                          fill="#000000"/>
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                          fill="#000000" opacity="0.3"/>
																				</g>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                      fill="#000000" fill-rule="nonzero"
                                                                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"/>
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                      fill="#000000" fill-rule="nonzero"
                                                                                      opacity="0.3"/>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"/>
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                          fill="#000000"
                                                                                          fill-rule="nonzero"/>
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                          fill="#000000" opacity="0.3"/>
																				</g>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input widget-9-check"
                                                       type="checkbox" value="1"/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-45px me-5">
                                                    <img src="assets/media/avatars/150-5.jpg" alt=""/>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary fs-6">Natali
                                                        Goodwin</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">Python, PostgreSQL, ReactJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"
                                               class="text-dark fw-bolder text-hover-primary d-block fs-6">The
                                                Hill</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                </div>
                                                <div class="progress h-6px w-100">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                         style="width: 50%" aria-valuenow="50"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"/>
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                          fill="#000000"/>
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                          fill="#000000" opacity="0.3"/>
																				</g>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                      fill="#000000" fill-rule="nonzero"
                                                                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"/>
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                      fill="#000000" fill-rule="nonzero"
                                                                                      opacity="0.3"/>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"/>
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                          fill="#000000"
                                                                                          fill-rule="nonzero"/>
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                          fill="#000000" opacity="0.3"/>
																				</g>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input widget-9-check"
                                                       type="checkbox" value="1"/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-45px me-5">
                                                    <img src="assets/media/avatars/150-6.jpg" alt=""/>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary fs-6">Kevin
                                                        Leonard</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"
                                               class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Art Director</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <span class="text-muted me-2 fs-7 fw-bold">90%</span>
                                                </div>
                                                <div class="progress h-6px w-100">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                         style="width: 90%" aria-valuenow="90"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"/>
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                          fill="#000000"/>
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                          fill="#000000" opacity="0.3"/>
																				</g>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                      fill="#000000" fill-rule="nonzero"
                                                                                      transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"/>
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                      fill="#000000" fill-rule="nonzero"
                                                                                      opacity="0.3"/>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                               class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"/>
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                          fill="#000000"
                                                                                          fill-rule="nonzero"/>
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                          fill="#000000" opacity="0.3"/>
																				</g>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                    <!--end::Tables Widget 9-->
                </div>
            </div>

            <div class="row gy-5 g-xl-8">
                <div class="col-xl-4">
                    <!--begin::List Widget 2-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title fw-bolder text-dark">Authors</h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-flip="top-end">
                                    <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                    <span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                 height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
                                                                          fill="#000000"/>
																	<rect x="14" y="5" width="5" height="5" rx="1"
                                                                          fill="#000000" opacity="0.3"/>
																	<rect x="5" y="14" width="5" height="5" rx="1"
                                                                          fill="#000000" opacity="0.3"/>
																	<rect x="14" y="14" width="5" height="5" rx="1"
                                                                          fill="#000000" opacity="0.3"/>
																</g>
															</svg>
														</span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
                                     data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                            Actions
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                         data-kt-menu-placement="right-start"
                                         data-kt-menu-flip="left-start, top">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img src="assets/media/avatars/150-1.jpg" class="" alt=""/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Text-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Emma
                                        Smith</a>
                                    <span class="text-muted d-block fw-bold">Project Manager</span>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img src="assets/media/avatars/150-4.jpg" class="" alt=""/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Text-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Sean
                                        Bean</a>
                                    <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img src="assets/media/avatars/150-12.jpg" class="" alt=""/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Text-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Brian
                                        Cox</a>
                                    <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img src="assets/media/avatars/150-8.jpg" class="" alt=""/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Text-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Francis
                                        Mitcham</a>
                                    <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img src="assets/media/avatars/150-6.jpg" class="" alt=""/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Text-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Dan
                                        Wilson</a>
                                    <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 2-->
                </div>
                <div class="col-xxl-8">
                    <!--begin::Tables Widget 5-->
                    <div class="card card-xxl-stretch mb-5 mb-xxl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
                                <span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bolder px-4 me-1"
                                           data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1"
                                           data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4"
                                           data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/plurk.svg"
                                                                                         class="h-50 align-self-center"
                                                                                         alt=""/>
																				</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                        Simmons</a>
                                                    <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">React, HTML</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                         width="24px" height="24px"
                                                                                         viewBox="0 0 24 24"
                                                                                         version="1.1">
																						<g stroke="none"
                                                                                           stroke-width="1" fill="none"
                                                                                           fill-rule="evenodd">
																							<polygon
                                                                                                    points="0 0 24 0 24 24 0 24"/>
																							<rect fill="#000000"
                                                                                                  opacity="0.5"
                                                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                  x="11" y="5" width="2"
                                                                                                  height="14" rx="1"/>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                  fill="#000000"
                                                                                                  fill-rule="nonzero"
                                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																						</g>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/telegram.svg"
                                                                                         class="h-50 align-self-center"
                                                                                         alt=""/>
																				</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                        Authors</a>
                                                    <span class="text-muted fw-bold d-block">Most Successful</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                         width="24px" height="24px"
                                                                                         viewBox="0 0 24 24"
                                                                                         version="1.1">
																						<g stroke="none"
                                                                                           stroke-width="1" fill="none"
                                                                                           fill-rule="evenodd">
																							<polygon
                                                                                                    points="0 0 24 0 24 24 0 24"/>
																							<rect fill="#000000"
                                                                                                  opacity="0.5"
                                                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                  x="11" y="5" width="2"
                                                                                                  height="14" rx="1"/>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                  fill="#000000"
                                                                                                  fill-rule="nonzero"
                                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																						</g>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/vimeo.svg"
                                                                                         class="h-50 align-self-center"
                                                                                         alt=""/>
																				</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                        Users</a>
                                                    <span class="text-muted fw-bold d-block">Awesome Users</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Laravel,Metronic
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-primary">Success</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                         width="24px" height="24px"
                                                                                         viewBox="0 0 24 24"
                                                                                         version="1.1">
																						<g stroke="none"
                                                                                           stroke-width="1" fill="none"
                                                                                           fill-rule="evenodd">
																							<polygon
                                                                                                    points="0 0 24 0 24 24 0 24"/>
																							<rect fill="#000000"
                                                                                                  opacity="0.5"
                                                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                  x="11" y="5" width="2"
                                                                                                  height="14" rx="1"/>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                  fill="#000000"
                                                                                                  fill-rule="nonzero"
                                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																						</g>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/bebo.svg"
                                                                                         class="h-50 align-self-center"
                                                                                         alt=""/>
																				</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                        Customers</a>
                                                    <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-danger">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                         width="24px" height="24px"
                                                                                         viewBox="0 0 24 24"
                                                                                         version="1.1">
																						<g stroke="none"
                                                                                           stroke-width="1" fill="none"
                                                                                           fill-rule="evenodd">
																							<polygon
                                                                                                    points="0 0 24 0 24 24 0 24"/>
																							<rect fill="#000000"
                                                                                                  opacity="0.5"
                                                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                  x="11" y="5" width="2"
                                                                                                  height="14" rx="1"/>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                  fill="#000000"
                                                                                                  fill-rule="nonzero"
                                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																						</g>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/kickstarter.svg"
                                                                                         class="h-50 align-self-center"
                                                                                         alt=""/>
																				</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                        Theme</a>
                                                    <span class="text-muted fw-bold d-block">Best Customers</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                         width="24px" height="24px"
                                                                                         viewBox="0 0 24 24"
                                                                                         version="1.1">
																						<g stroke="none"
                                                                                           stroke-width="1" fill="none"
                                                                                           fill-rule="evenodd">
																							<polygon
                                                                                                    points="0 0 24 0 24 24 0 24"/>
																							<rect fill="#000000"
                                                                                                  opacity="0.5"
                                                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                  x="11" y="5" width="2"
                                                                                                  height="14" rx="1"/>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                  fill="#000000"
                                                                                                  fill-rule="nonzero"
                                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																						</g>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/plurk.svg"
                                                                                         class="h-50 align-self-center"
                                                                                         alt=""/>
																				</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                        Simmons</a>
                                                    <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">React, HTML</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-success">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                         width="24px" height="24px"
                                                                                         viewBox="0 0 24 24"
                                                                                         version="1.1">
																						<g stroke="none"
                                                                                           stroke-width="1" fill="none"
                                                                                           fill-rule="evenodd">
																							<polygon
                                                                                                    points="0 0 24 0 24 24 0 24"/>
																							<rect fill="#000000"
                                                                                                  opacity="0.5"
                                                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                  x="11" y="5" width="2"
                                                                                                  height="14" rx="1"/>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                  fill="#000000"
                                                                                                  fill-rule="nonzero"
                                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																						</g>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/telegram.svg"
                                                                                         class="h-50 align-self-center"
                                                                                         alt=""/>
																				</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                        Authors</a>
                                                    <span class="text-muted fw-bold d-block">Most Successful</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                         width="24px" height="24px"
                                                                                         viewBox="0 0 24 24"
                                                                                         version="1.1">
																						<g stroke="none"
                                                                                           stroke-width="1" fill="none"
                                                                                           fill-rule="evenodd">
																							<polygon
                                                                                                    points="0 0 24 0 24 24 0 24"/>
																							<rect fill="#000000"
                                                                                                  opacity="0.5"
                                                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                  x="11" y="5" width="2"
                                                                                                  height="14" rx="1"/>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                  fill="#000000"
                                                                                                  fill-rule="nonzero"
                                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																						</g>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/bebo.svg"
                                                                                         class="h-50 align-self-center"
                                                                                         alt=""/>
																				</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                        Customers</a>
                                                    <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-danger">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                         width="24px" height="24px"
                                                                                         viewBox="0 0 24 24"
                                                                                         version="1.1">
																						<g stroke="none"
                                                                                           stroke-width="1" fill="none"
                                                                                           fill-rule="evenodd">
																							<polygon
                                                                                                    points="0 0 24 0 24 24 0 24"/>
																							<rect fill="#000000"
                                                                                                  opacity="0.5"
                                                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                  x="11" y="5" width="2"
                                                                                                  height="14" rx="1"/>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                  fill="#000000"
                                                                                                  fill-rule="nonzero"
                                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																						</g>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/kickstarter.svg"
                                                                                         class="h-50 align-self-center"
                                                                                         alt=""/>
																				</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                        Theme</a>
                                                    <span class="text-muted fw-bold d-block">Best Customers</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                         width="24px" height="24px"
                                                                                         viewBox="0 0 24 24"
                                                                                         version="1.1">
																						<g stroke="none"
                                                                                           stroke-width="1" fill="none"
                                                                                           fill-rule="evenodd">
																							<polygon
                                                                                                    points="0 0 24 0 24 24 0 24"/>
																							<rect fill="#000000"
                                                                                                  opacity="0.5"
                                                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                  x="11" y="5" width="2"
                                                                                                  height="14" rx="1"/>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                  fill="#000000"
                                                                                                  fill-rule="nonzero"
                                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																						</g>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/bebo.svg"
                                                                                         class="h-50 align-self-center"
                                                                                         alt=""/>
																				</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                        Customers</a>
                                                    <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-danger">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                         width="24px" height="24px"
                                                                                         viewBox="0 0 24 24"
                                                                                         version="1.1">
																						<g stroke="none"
                                                                                           stroke-width="1" fill="none"
                                                                                           fill-rule="evenodd">
																							<polygon
                                                                                                    points="0 0 24 0 24 24 0 24"/>
																							<rect fill="#000000"
                                                                                                  opacity="0.5"
                                                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                  x="11" y="5" width="2"
                                                                                                  height="14" rx="1"/>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                  fill="#000000"
                                                                                                  fill-rule="nonzero"
                                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																						</g>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/vimeo.svg"
                                                                                         class="h-50 align-self-center"
                                                                                         alt=""/>
																				</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                        Users</a>
                                                    <span class="text-muted fw-bold d-block">Awesome Users</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Laravel,Metronic
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-primary">Success</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                         width="24px" height="24px"
                                                                                         viewBox="0 0 24 24"
                                                                                         version="1.1">
																						<g stroke="none"
                                                                                           stroke-width="1" fill="none"
                                                                                           fill-rule="evenodd">
																							<polygon
                                                                                                    points="0 0 24 0 24 24 0 24"/>
																							<rect fill="#000000"
                                                                                                  opacity="0.5"
                                                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                  x="11" y="5" width="2"
                                                                                                  height="14" rx="1"/>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                  fill="#000000"
                                                                                                  fill-rule="nonzero"
                                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																						</g>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/telegram.svg"
                                                                                         class="h-50 align-self-center"
                                                                                         alt=""/>
																				</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                        Authors</a>
                                                    <span class="text-muted fw-bold d-block">Most Successful</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-warning">In Progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                         width="24px" height="24px"
                                                                                         viewBox="0 0 24 24"
                                                                                         version="1.1">
																						<g stroke="none"
                                                                                           stroke-width="1" fill="none"
                                                                                           fill-rule="evenodd">
																							<polygon
                                                                                                    points="0 0 24 0 24 24 0 24"/>
																							<rect fill="#000000"
                                                                                                  opacity="0.5"
                                                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                  x="11" y="5" width="2"
                                                                                                  height="14" rx="1"/>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                  fill="#000000"
                                                                                                  fill-rule="nonzero"
                                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																						</g>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 5-->
                </div>
            </div>
        </div>
    </div>

@endsection
