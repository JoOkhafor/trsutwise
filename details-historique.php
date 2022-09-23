<?php require_once('page_components/session_setter.php') ?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->
<?php include 'page_components/head.php' ?>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="sidebar-enabled">
<?php include 'page_components/dark_mode.php' ?>
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<?php include 'page_components/aside.php' ?>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<?php include 'page_components/header.php' ?>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
                        <div class="card">
                                        <!--begin::Body-->
                                        <div class="card-body p-lg-20">
                                            <!--begin::Layout-->
                                            <div class="d-flex flex-column flex-xl-row">
                                                <!--begin::Content-->
                                                <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                                                    <!--begin::Invoice 2 content-->
                                                    <div class="mt-n1">
                                                        <!--begin::Top-->
                                                        <div class="d-flex flex-stack pb-10">
                                                            <!--begin::Logo-->
                                                            <div class="d-flex align-items-center">
																			<div class="symbol symbol-45px me-5">
																				<img src="assets/media/avatars/blank.png"
																					alt="" />
																			</div>
																			<div
																				class="d-flex justify-content-start flex-column">
																				<span
																					class="text-dark fw-bold text-hover-primary fs-6">John
																					Doe</span>
																				<span
																					class="text-muted fw-semibold text-muted d-block fs-7">johndoe@gmail.com</span>
																			</div>
																		</div>
                                                            <!--end::Logo-->
                                                        </div>
                                                        <!--end::Top-->
                                                        <!--begin::Wrapper-->
                                                        <div class="m-0">
                                                            <!--begin::Label-->
                                                            <div class="fw-bold fs-3 text-gray-800 mb-8">ID de transaction #34782</div>
                                                            <!--end::Label-->
                                                            <!--begin::Row-->
                                                            <div class="row g-5 mb-11">
                                                                <!--end::Col-->
                                                                <div class="col-sm-6">
                                                                    <!--end::Label-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Date:</div>
                                                                    <!--end::Label-->
                                                                    <!--end::Col-->
                                                                    <div class="fw-bold fs-6 text-gray-800">12 Apr 2021</div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Col-->
                                                                <!--end::Col-->
                                                                <div class="col-sm-6">
                                                                    <!--end::Label-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Montant:</div>
                                                                    <!--end::Label-->
                                                                    <!--end::Info-->
                                                                    <div class="fw-bold fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                                                        <span class="pe-2">02 Mai 2022</span>
                                                                        <span class="fs-7 text-danger d-flex align-items-center">
                                                                        <span class="bullet bullet-dot bg-danger me-2"></span>Validé le 3 MAi 2022</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                            <!--begin::Row-->
                                                            <div class="row g-5 mb-12">
                                                                <!--end::Col-->
                                                                <div class="col-sm-6">
                                                                    <!--end::Label-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Reçu par:</div>
                                                                    <!--end::Label-->
                                                                    <!--end::Text-->
                                                                    <div class="fw-bold fs-6 text-gray-800">Jo O'Khafor</div>
                                                                    <!--end::Text-->
                                                                    <!--end::Description-->
                                                                    <div class="fw-semibold fs-7 text-gray-600">jo@okhafor.com</div>
                                                                    <div class="fw-semibold fs-7 text-gray-600">+228 92035070</div>
                                                                    <!--end::Description-->
                                                                </div>
                                                                <!--end::Col-->
                                                                <!--end::Col-->
                                                                <div class="col-sm-6">
                                                                    <!--end::Label-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Émis par:</div>
                                                                    <!--end::Label-->
                                                                    <!--end::Text-->
                                                                    <div class="fw-bold fs-6 text-gray-800">CodeLab Inc.</div>
                                                                    <!--end::Text-->
                                                                    <!--end::Description-->
                                                                    <div class="fw-semibold fs-7 text-gray-600">9858 South 53rd Ave.
                                                                    <br>Matthews, NC 28104</div>
                                                                    <!--end::Description-->
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                            <!--begin::Content-->
                                                            
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Invoice 2 content-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Sidebar-->
                                                <div class="m-0">
                                                    <!--begin::Invoice 2 sidebar-->
                                                    <div class="d-print-none border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-9 bg-lighten">
                                             
                                                        <!--begin::Title-->
                                                        <h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">Destinataire</h6>
                                                        <!--end::Title-->
                                                        <!--begin::Item-->
                                                        <div class="mb-6">
                                                            <div class="fw-semibold text-gray-600 fs-7">Project Name</div>
                                                            <div class="fw-bold fs-6 text-gray-800">SaaS App Quickstarter
                                                            <a href="#" class="link-primary ps-1">View Project</a></div>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="mb-6">
                                                            <div class="fw-semibold text-gray-600 fs-7">Completed By:</div>
                                                            <div class="fw-bold text-gray-800 fs-6">Mr. Dewonte Paul</div>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="m-8">
                                                            <div class="fw-semibold text-gray-600">Time Spent:</div>
                                                            <div class="fw-bold fs-6 text-gray-800 d-flex align-items-center">230 Hours
                                                            <span class="fs-7 text-success d-flex align-items-center">
                                                            <span class="bullet bullet-dot bg-success mx-2"></span>35$/h Rate</span></div>
                                                        </div>
                                                        <!--end::Item-->

                                                        <div class="mb-8">
                                                            <span class="badge badge-light-success me-2">Complèté</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Invoice 2 sidebar-->
                                                </div>
                                                <!--end::Sidebar-->
                                            </div>
                                            <!--end::Layout-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
                    <!--end::Content-->
				<?php include 'page_components/footer.php' ?>
			</div>
			<!--end::Wrapper-->

		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->

	<div class="modal fade" tabindex="-1" id="warning-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div aria-labelledby="swal2-title" aria-describedby="swal2-html-container"
					class="swal2-popup swal2-modal swal2-icon-warning swal2-show" tabindex="-1" role="dialog"
					aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button"
						class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button>
					<ul class="swal2-progress-steps" style="display: none;"></ul>
					<div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;">
						<div class="swal2-icon-content">!</div>
					</div><img class="swal2-image" style="display: none;">
					<h2 class="swal2-title" id="swal2-title" style="display: none;"></h2>
					<div class="swal2-html-container" id="swal2-html-container" style="display: block;">Are you sure you
						want to delete Emma Smith?</div><input class="swal2-input" style="display: none;"><input
						type="file" class="swal2-file" style="display: none;">
					<div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select
						class="swal2-select" style="display: none;"></select>
					<div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox"
						class="swal2-checkbox" style="display: none;"><input type="checkbox"><span
							class="swal2-label"></span></label><textarea class="swal2-textarea"
						style="display: none;"></textarea>
					<div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
					<div class="swal2-actions" style="display: flex;">
						<div class="swal2-loader"></div><button type="button"
							class="swal2-confirm btn fw-bold btn-danger" aria-label=""
							style="display: inline-block;">Yes, delete!</button><button type="button" class="swal2-deny"
							aria-label="" style="display: none;">No</button><button type="button"
							class="swal2-cancel btn fw-bold btn-active-light-primary" aria-label=""
							style="display: inline-block;">No, cancel</button>
					</div>
					<div class="swal2-footer" style="display: none;"></div>
					<div class="swal2-timer-progress-bar-container">
						<div class="swal2-timer-progress-bar" style="display: none;"></div>
					</div>
				</div>
		</div>
	</div>

	</div>

	<div class="modal fade" tabindex="-1" id="danger-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div aria-labelledby="swal2-title" aria-describedby="swal2-html-container"
						class="swal2-popup swal2-modal swal2-icon-error swal2-show" tabindex="-1" role="dialog"
						aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close"
							aria-label="Close this dialog" style="display: none;">×</button>
						<ul class="swal2-progress-steps" style="display: none;"></ul>
						<div class="swal2-icon swal2-error swal2-icon-show" style="display: flex;"><span class="swal2-x-mark">
								<span class="swal2-x-mark-line-left"></span>
								<span class="swal2-x-mark-line-right"></span>
							</span>
						</div><img class="swal2-image" style="display: none;">
						<h2 class="swal2-title" id="swal2-title" style="display: none;"></h2>
						<div class="swal2-html-container" id="swal2-html-container" style="display: block;">Sorry, looks like
							there are some errors detected, please try again.</div><input class="swal2-input"
							style="display: none;"><input type="file" class="swal2-file" style="display: none;">
						<div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select
							class="swal2-select" style="display: none;"></select>
						<div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox"
							style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea
							class="swal2-textarea" style="display: none;"></textarea>
						<div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
						<div class="swal2-actions" style="display: flex;">
							<div class="swal2-loader"></div><button type="button" class="swal2-confirm btn btn-primary"
								aria-label="" style="display: inline-block;">Ok, got it!</button><button type="button"
								class="swal2-deny" aria-label="" style="display: none;">No</button><button type="button"
								class="swal2-cancel" aria-label="" style="display: none;">Cancel</button>
						</div>
						<div class="swal2-footer" style="display: none;"></div>
						<div class="swal2-timer-progress-bar-container">
							<div class="swal2-timer-progress-bar" style="display: none;"></div>
						</div>
					</div>
		</div>
	</div>
		

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
						fill="currentColor" />
					<path
						d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
						fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->

		<?php include 'page_components/scripts.php' ?>
</body>
<!--end::Body-->

</html>