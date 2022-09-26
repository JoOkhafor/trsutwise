<?php require_once('page_components/session_setter.php') ?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->
<?php include 'page_components/head.php' ?>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="sidebar-enabled">
	<!--begin::Theme mode setup on page load-->
	<?php include 'page_components/dark_mode.php' ?>
	<div class="d-flex flex-column flex-root">

		<div class="page d-flex flex-row flex-column-fluid">

			<?php include 'page_components/aside.php' ?>
		
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
	
				<?php include 'page_components/header.php' ?>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							<!--begin::Navbar-->
							<?php include 'page_components/my-account-top.php' ?>
							<!--end::Navbar-->
							 
							<!--end::Billing Summary-->
							<!--begin::Payment methods-->
							<div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header card-header-stretch pb-0">
									<!--begin::Title-->
									<div class="card-title">
										<h3 class="m-0">Méthode de payement</h3>
									</div>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar m-0">
										<!--begin::Tab nav-->
										<ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
											<!--begin::Tab item-->
											<li class="nav-item" role="presentation">
												<a id="kt_billing_creditcard_tab" class="nav-link fs-5 fw-bold me-5 active" data-bs-toggle="tab" role="tab" href="#kt_billing_creditcard">Payement / Réception</a>
											</li>
											<!--end::Tab item-->
											<!--begin::Tab item-->
											<li class="nav-item" role="presentation">
												<a id="kt_billing_paypal_tab" class="nav-link fs-5 fw-bold" data-bs-toggle="tab" role="tab" href="#kt_billing_paypal">Ajouter</a>
											</li>
											<!--end::Tab item-->
										</ul>
										<!--end::Tab nav-->
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Tab content-->
								<div id="kt_billing_payment_tab_content" class="card-body tab-content">
									<!--begin::Tab panel-->
									<div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel">
										<!--begin::Title-->
										<h3 class="mb-5">Mes enrégistrements</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row gx-9 gy-6">
											<!--begin::Col-->
											<div class="col-xl-6">
												<!--begin::Card-->
												<div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
													<!--begin::Info-->
													<div class="d-flex flex-column py-2">
														<!--begin::Owner-->
														<div class="align-items-center fs-4 fw-bold mb-5"><?= $_SESSION['user_name'] ?>
														<!--end::Owner-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mt-5">
															<!--begin::Icon-->
															<img src="assets/media/svg/card-logos/visa.svg" alt="" class="me-4" />
															<!--end::Icon-->
															<!--begin::Details-->
															<div>
																<div class="fs-4 fw-bold">Visa **** 1679</div>
																<div class="fs-6 fw-semibold text-gray-400">Card expires at 09/24</div>
															</div>
															<!--end::Details-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Info-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Tab panel-->
									<!--begin::Tab panel-->
									<div id="kt_billing_paypal" class="tab-pane fade" role="tabpanel" aria-labelledby="kt_billing_paypal_tab">
										
										<!--begin::Form-->
										<form class="mx-auto mw-600px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_create_account_form">
											<!--begin::Step 1-->
											<div class="current" data-kt-stepper-element="content">
												<!--begin::Wrapper-->
												<div class="w-100">
													<!--begin::Heading-->
													<div class="pb-10 pb-lg-15">
														<!--begin::Title-->
														<h2 class="fw-bold d-flex align-items-center text-dark">Ajoutez un nouveau moyen de Payement</h2>
														<!--end::Title-->
														<!--begin::Notice-->
														
														<!--end::Notice-->
													</div>
													<!--end::Heading-->
													<!--begin::Input group-->
													<div class="fv-row">
														<!--begin::Row-->
														<div class="row">
															<!--begin::Col-->
															<div class="col-lg-6">
																<!--begin::Option-->
																<input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
																<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
																	<span class="svg-icon svg-icon-3x me-5">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="currentColor"/>
																			<path opacity="0.3" d="M17 2H7C6.4 2 6 2.4 6 3V20H18V3C18 2.4 17.6 2 17 2Z" fill="currentColor"/>
																			<path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="currentColor"/>
																			</svg>
																																				</span>
																	<!--end::Svg Icon-->
																	<!--begin::Info-->
																	<span class="d-block fw-semibold text-start">
																		<span class="text-dark fw-bold d-block fs-4 mb-2">Mobile money</span>
																	</span>
																	<!--end::Info-->
																</label>
																<!--end::Option-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-lg-6">
																<!--begin::Option-->
																<input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
																<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
																	<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
																	<span class="svg-icon svg-icon-3x me-5">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M22 7H2V11H22V7Z" fill="currentColor" />
                                                                                        <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
                                                                                    </svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Info-->
																	<span class="d-block fw-semibold text-start">
																		<span class="text-dark fw-bold d-block fs-4 mb-2">Carte bancaire</span>
																	</span>
																	<!--end::Info-->
																</label>
																<!--end::Option-->
															</div>
															<!--end::Col-->

                                                            <div class="w-100 mt-10">
                                                                <!--begin::Heading-->
                                                                <div class="pb-5 pb-lg-10">
                                                                    <!--begin::Title-->
                                                                    <h2 class="fw-bold text-dark">Informations de Payement</h2>
                                                                    <!--end::Title-->
                                                                   
                                                                </div>
                                                                <!--end::Heading-->
                                                                <!--begin::Input group-->
                                                                <div class="d-flex flex-column mb-7 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                        <span class="required">Nom sur la carte</span>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="card_name"/>
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="d-flex flex-column mb-7 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label class="required fs-6 fw-semibold form-label mb-2">Numéro de carte</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input wrapper-->
                                                                    <div class="position-relative">
                                                                        <!--begin::Input-->
                                                                        <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" />
                                                                        <!--end::Input-->
                                                                        <!--begin::Card logos-->
                                                                        <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                                            <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                                                            <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                                                            <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                                                        </div>
                                                                        <!--end::Card logos-->
                                                                    </div>
                                                                    <!--end::Input wrapper-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-10">
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-8 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="required fs-6 fw-semibold form-label mb-2">Date d'xpiration</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Row-->
                                                                        <div class="row fv-row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-6">
                                                                                <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Mois">
                                                                                    <option></option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="12">12</option>
                                                                                </select>
                                                                            </div>
                                                                            <!--end::Col-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-6">
                                                                                <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Année">
                                                                                    <option></option>
                                                                                    <option value="2022">2022</option>
                                                                                    <option value="2023">2023</option>
                                                                                    <option value="2024">2024</option>
                                                                                    <option value="2025">2025</option>
                                                                                    <option value="2026">2026</option>
                                                                                    <option value="2027">2027</option>
                                                                                    <option value="2028">2028</option>
                                                                                    <option value="2029">2029</option>
                                                                                    <option value="2030">2030</option>
                                                                                    <option value="2031">2031</option>
                                                                                    <option value="2032">2032</option>
                                                                                </select>
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-4 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                            <span class="required">CVV</span>
                                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
                                                                        </label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input wrapper-->
                                                                        <div class="position-relative">
                                                                            <!--begin::Input-->
                                                                            <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                                            <!--end::Input-->
                                                                            <!--begin::CVV icon-->
                                                                            <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                                                <span class="svg-icon svg-icon-2hx">
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M22 7H2V11H22V7Z" fill="currentColor" />
                                                                                        <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </div>
                                                                            <!--end::CVV icon-->
                                                                        </div>
                                                                        <!--end::Input wrapper-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="d-flex flex-stack">
                                                                    <!--begin::Label-->
                                                                    <div class="me-5">
                                                                        <label class="fs-6 fw-semibold form-label">Enrégistrer les coordonnés pour les prochains paiement?</label>
                                                                    </div>
                                                                    <!--end::Label-->
                                                                    <!--begin::Switch-->
                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                                                        <span class="form-check-label fw-semibold text-muted">Enrégistrer</span>
                                                                    </label>
                                                                    <!--end::Switch-->
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
													<a  class="btn btn-lg btn-primary" href="new-transaction-summary.html" >Continuer
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
									<!--end::Tab panel-->
								</div>
								<!--end::Tab content-->
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