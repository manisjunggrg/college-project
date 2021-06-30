<div class="toolbar" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <div data-kt-place="true"
             data-kt-place-mode="prepend"
             data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
             class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
            <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">
                Dashboard
                <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ $panel }}</small>
            </h1>
        </div>
        <div class="d-flex align-items-center py-1">
            <div class="me-4">
                <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                   data-kt-menu-flip="top-end">
                    <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z"
                                                          fill="#000000"/>
												</g>
											</svg>
										</span>
                    Filter
                </a>
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                    </div>
                    <div class="separator border-gray-200"></div>
                    <div class="px-7 py-5">
                        <div class="mb-10">
                            <label class="form-label fw-bold">Status:</label>
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true"
                                        data-placeholder="Select option" data-allow-clear="true">
                                    <option></option>
                                    <option value="1">Approved</option>
                                    <option value="2">Pending</option>
                                    <option value="2">In Process</option>
                                    <option value="2">Rejected</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-10">
                            <label class="form-label fw-bold">Member Type:</label>
                            <div class="d-flex">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                    <input class="form-check-input" type="checkbox" value="1"/>
                                    <span class="form-check-label">Author</span>
                                </label>
                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="2"
                                           checked="checked"/>
                                    <span class="form-check-label">Customer</span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-10">
                            <label class="form-label fw-bold">Notifications:</label>
                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value=""
                                       name="notifications" checked="checked"/>
                                <label class="form-check-label">Enabled</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="reset"
                                    class="btn btn-sm btn-white btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset
                            </button>
                            <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
               data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
        </div>
    </div>
</div>