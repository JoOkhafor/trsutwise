<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->
<?php include 'page_components/head.php' ?>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="sidebar-enabled">
	<!--begin::Theme mode setup on page load-->
	<script>var defaultThemeMode = "dark"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if (localStorage.getItem("data-theme") !== null) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
	<!--begin::Main-->
	<!--begin::Root-->
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
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body">
									<!--begin::Stepper-->
									<div class="stepper stepper-links d-flex flex-column pt-15" id="kt_create_account_stepper">
										
										<!--begin::Form-->
										<form class="mx-auto mw-600px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_create_account_form">
											<!--begin::Step 1-->
											<div class="current" data-kt-stepper-element="content">
												<!--begin::Wrapper-->
												<div class="w-100">
													<!--begin::Heading-->
													<div class="pb-10 pb-lg-15">
														<!--begin::Title-->
														<h2 class="fw-bold d-flex align-items-center text-dark">Contester l'annulation</h2>
														<!--end::Title-->
														<!--begin::Notice-->
														
														<!--end::Notice-->
													</div>
													<!--end::Heading-->
													<!--begin::Input group-->
													<div class="fv-row">
														<!--begin::Row-->
														<div class="row">
															
                                                            <div class="w-100 mt-10">
                                                                <!--begin::Input group-->
                                                                <div class="d-flex flex-column mb-7 fv-row">
                                                                    <!--begin::Label-->
																	<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Motif">
                                                                                    <option></option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                </select>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Input group-->
																<!--begin::Input group-->
                                                                <div class="d-flex flex-column mb-7 fv-row">
																<textarea class="form-control form-control-solid" placeholder="Leave a comment here" id="floatingTextarea1" style="height: 200px"></textarea>
                                                                </div>
                                                                <!--end::Input group-->
                                                               
                                                            </div>
														</div>
														<!--end::Row-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Step 1-->
											  
											<!--begin::Actions-->
											<div class="d-flex flex-stack pt-15">
												<!--begin::Wrapper-->
												
												<!--begin::Wrapper-->
												<div>
													<a  class="btn btn-lg btn-primary" href="new-transaction-summary.html" >Soumettre la requête
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-4 ms-1 me-0">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon--></a>
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Stepper-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
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