<?php require_once('page_components/session_setter.php') ?>
<?php

$card_name = "";
$card_number = "";
$card_expiry_month = "";
$card_expiry_year = "";
$card_cvv = "";
$save_card = "";
$card_name_err = $card_number_err = $card_expiry_month_err = $card_expiry_year_err = $card_cvv_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty(trim($_POST["card_name"]))){
		$card_name_err = "Veuillez remplir le champ";
	} 
    
	else{
		$card_name = trim($_POST["card_name"]);

    $_SESSION['card_name'] = $card_name;
	}

    if(empty(trim($_POST["card_number"]))){
		$card_number_err = "Veuillez entrer un destinataire";
	} 
        else{
		$card_number = trim($_POST["card_number"]);
        $_SESSION['card_number'] = $card_number;
	}

	if(empty(trim($_POST["card_expiry_month"]))){
		$card_expiry_month_err = "Veuillez remplir le champ";
	} 
    
	else{
		$card_expiry_month = trim($_POST["card_expiry_month"]);

    $_SESSION['card_expiry_month'] = $card_expiry_month;
	}

    if(empty(trim($_POST["card_expiry_year"]))){
		$card_expiry_year_err = "Veuillez remplir le champ";
	} 
        else{
		$card_expiry_year = trim($_POST["card_expiry_year"]);
        $_SESSION['card_expiry_year'] = $card_expiry_year;
	}

	if(empty(trim($_POST["card_cvv"]))){
		$card_cvv_err = "Veuillez remplir le champ";
	} 
    
	else{
		$card_cvv = trim($_POST["card_cvv"]);
    	$_SESSION['card_cvv'] = $card_cvv;
	}


    if(trim($_POST["save_card"])){ 
		$save_card = trim($_POST["save_card"]);
        $_SESSION['save_card'] = $save_card;
	}
	
    if(empty($card_name_err) && empty($card_number_err) && empty($card_expiry_month_err) && empty($card_expiry_year_err) && empty($card_expiry_year_err) && empty($card_cvv_err)){
        header("location: new-transaction-summary.php");
    }
    


}



?>
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
										<!--begin::Nav-->
										<div class="stepper-nav mb-5">
											<!--begin::Step 1-->
											<div class="stepper-item current" data-kt-stepper-element="nav">
												<h3 class="stepper-title">Payement</h3>
											</div>
											<!--end::Step 1-->
											<!--begin::Step 2-->
											<div class="stepper-item" data-kt-stepper-element="nav">
												<h3 class="stepper-title">Récapitulatif</h3>
											</div>
											<!--end::Step 2-->
											<!--begin::Step 3-->
											<div class="stepper-item" data-kt-stepper-element="nav">
												<h3 class="stepper-title">Finalisation</h3>
											</div>
											<!--end::Step 3-->
											
										</div>
										<!--end::Nav-->
										<!--begin::Form-->
										<form class="mx-auto mw-600px w-100 pt-15 pb-10"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
											<!--begin::Step 1-->
											<div class="current" data-kt-stepper-element="content">
												<!--begin::Wrapper-->
												<div class="w-100">
													<!--begin::Heading-->
													<div class="pb-10 pb-lg-15">
														<!--begin::Title-->
														<h2 class="fw-bold d-flex align-items-center text-dark">Choisissez votre méthode de Payement</h2>
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
																<input type="radio" class="btn-check" name="account_type" value="corporate" checked="checked" />
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
<!--begin::Col-->
<div class="col-lg-6">
																<!--begin::Option-->
																<input type="radio" class="btn-check" name="account_type" value="mobile_money"  />
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
                                                                    <input type="text" class="form-control form-control-solid" name="card_name" value="" />
																  <span class="text-danger"><?php echo $card_name_err; ?></span>
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
                                                                        <input type="text" class="form-control form-control-solid" name="card_number" value="" />
																		<span class="text-danger"><?php echo $card_number_err; ?></span>
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
																				<span class="text-danger"><?php echo $card_expiry_month_err; ?></span>
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
																				<span class="text-danger"><?php echo $card_expiry_year_err; ?></span>
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
																			<span class="text-danger"><?php echo $card_cvv_err; ?></span>
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
                                                                        <label class="fs-6 fw-semibold form-label">Enrégistrer les coordonnés pour les prochaines opération?</label>
                                                                    </div>
                                                                    <!--end::Label-->
                                                                    <!--begin::Switch-->
                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
																		
                                                                        <input class="form-check-input" name="save_card" type="checkbox" value="1" checked="checked" />
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
												<input  class="btn btn-primary" type="submit" value="Continuer">
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