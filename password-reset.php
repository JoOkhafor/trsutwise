<!DOCTYPE html>

<html lang="en"> 
	<!--begin::Head-->
		<?php include 'page_components/head.php' ?>
	<!--end::Head-->

	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<?php include 'page_components/dark_mode.php' ?>
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Signup Welcome Message -->
			<div class="d-flex flex-column flex-center flex-column-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-center text-center p-10">
					<!--begin::Wrapper-->
				
					<!--end::Wrapper-->
					<div class="card card-flush centered_content">
                        <div class="d-flex flex-column flex-column-fluid flex-center p-10">
							<!--begin::Wrapper-->
							<div class="d-flex justify-content-between flex-column-fluid flex-column min-w-75 ">
								<!--begin::Header-->
								<div class="d-flex flex-stack py-2">
									<!--begin::Back link-->
									<div class="me-2">
										<a href="#" class="btn btn-icon bg-light rounded-circle">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr002.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-800">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="currentColor"></path>
													<path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="currentColor"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</div>
									<!--end::Back link-->
									
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="py-20">
									<!--begin::Form-->
									<form class="form w-100" novalidate="novalidate" id="kt_new_password_form" data-kt-redirect-url="../../demo3/dist/authentication/layouts/fancy/sign-in.html" action="#">
								<!--begin::Heading-->
								<div class="text-start mb-10">
									<!--begin::Title-->
									<h1 class="text-dark mb-3 fs-3x" data-kt-translate="new-password-title">Nouveau mot de pass</h1>
									<!--end::Title-->
								
								</div>
								<!--end::Heading-->
								<!--begin::Input group-->
								<div class="mb-10 fv-row" data-kt-password-meter="true">
									<!--begin::Wrapper-->
									<div class="mb-1">
										<!--begin::Input wrapper-->
										<div class="position-relative mb-3">
											<input class="form-control form-control-lg form-control-solid" type="password" placeholder="Entrez un nouveau mot de pass" name="password" autocomplete="off" data-kt-translate="new-password-input-password">
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
										</div>
										<!--end::Input wrapper-->
										<!--begin::Meter-->
										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
										<!--end::Meter-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Hint-->
									<div class="text-muted" data-kt-translate="new-password-hint">8 caract??res ou plus avec un m??lange de chiffres, de letteres et de symbols.</div>
									<!--end::Hint-->
								</div>
								<!--end::Input group=-->
								<!--begin::Input group=-->
								<div class="fv-row mb-10">
									<input class="form-control form-control-lg form-control-solid" type="password" placeholder="Confirez le mot de pass" name="confirm-password" autocomplete="off" data-kt-translate="new-password-confirm-password">
								</div>
								<!--end::Input group=-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack">
									<!--begin::Link-->
									<button id="kt_new_password_submit" class="btn btn-primary" data-kt-translate="new-password-submit">
										<!--begin::Indicator label-->
										<span class="indicator-label">Valider</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
									<!--end::Link-->
									
								</div>
								<!--end::Actions-->
							</form>
									<!--end::Form-->
								</div>
								<!--end::Body-->
								
							</div>
							<!--end::Wrapper-->
						</div>
					</div>

				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Signup Welcome Message-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--end::Javascript-->
	
	<!--end::Body-->
<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></body>
	<!--end::Body-->
</html>