<?php require_once('page_components/session_setter.php');
require_once "core/config.php"; ?>

<?php

date_default_timezone_set('Africa/Lome');
function id_generator($length='14', $charset='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789')
{
    $str = '';
    $count = strlen($charset);
    while ($length--) {
        $str .= $charset[mt_rand(0, $count-1)];
    }

    return $str;
}
$mail_recepteur = $_SESSION['destinataire'];
try{
    $sql = "SELECT * FROM users_register WHERE email= '$mail_recepteur'";  
    $result = $pdo->query($sql);
    $row = $result->fetch();
    unset($result);

} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
} 

$id_recepteur = $row['user_id'];
$id_transaction = id_generator();
$transaction_date = date('d/m/Y');
$transaction_hour = date('h:i');
$transaction_status = 'pending';
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// Attempt insert query execution
	try{
		// Create prepared statement
		$sql = "INSERT INTO transactions (id_transaction, montant, transaction_date, transaction_hour, id_emetteur, id_recepteur, transaction_status) VALUES (:id_transaction, :montant, :transaction_date, :transaction_hour, :id_emetteur, :id_recepteur, :transaction_status)";
		$stmt = $pdo->prepare($sql);
		
		// Bind parameters to statement
		$stmt->bindParam(':id_transaction', $id_transaction);
		$stmt->bindParam(':montant', $_SESSION['montant']);
		$stmt->bindParam(':transaction_date',$transaction_date);
		$stmt->bindParam(':transaction_hour',$transaction_hour);
		$stmt->bindParam(':id_emetteur',$_SESSION['id']);
		$stmt->bindParam(':id_recepteur',$id_recepteur);
		$stmt->bindParam(':transaction_status',$transaction_status);
		
		// Execute the prepared statement
		$stmt->execute();
		header("location: transactions.php");
	} catch(PDOException $e){
		die("ERROR: Could not able to execute $sql. " . $e->getMessage());
	}
	
	// Close connection
	unset($pdo);
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
											<div class="stepper-item" data-kt-stepper-element="nav">
												<h3 class="stepper-title">Payement</h3>
											</div>
											<!--end::Step 1-->
											<!--begin::Step 2-->
											<div class="stepper-item current" data-kt-stepper-element="nav">
												<h3 class="stepper-title ">Récapitulatif</h3>
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
										<form class="mx-auto mw-600px w-100 pt-15 pb-10" novalidate="novalidate" ction="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
											<!--begin::Step 1-->
											<div class="current" data-kt-stepper-element="content">
												<!--begin::Wrapper-->
												<div class="w-100">
													<!--begin::Heading-->
													<div class="pb-10 pb-lg-15">
														<!--begin::Title-->
														<h2 class="fw-bold text-dark">Account Info</h2>
														<!--end::Title-->
														<!--begin::Notice-->
														<div class="text-muted fw-semibold fs-6">If you need more info, please check out
														<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
														<!--end::Notice-->
													</div>
													<!--end::Heading-->
													<!--begin::Input group-->
													<div class="mb-10 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
														<!--begin::Label-->
														<label class="d-flex align-items-center form-label mb-3">Specify Team Size
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Provide your team size to help us setup your billing" data-kt-initialized="1"></i></label>
														<!--end::Label-->
														<!--begin::Row-->
														<div class="row mb-2" data-kt-buttons="true" data-kt-initialized="1">
															<!--begin::Col-->
															<div class="col">
																<!--begin::Option-->
																<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
																	<input type="radio" class="btn-check" name="account_team_size" value="1-1">
																	<span class="fw-bold fs-3">1-1</span>
																</label>
																<!--end::Option-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col">
																<!--begin::Option-->
																<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 active">
																	<input type="radio" class="btn-check" name="account_team_size" checked="checked" value="2-10">
																	<span class="fw-bold fs-3">2-10</span>
																</label>
																<!--end::Option-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col">
																<!--begin::Option-->
																<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
																	<input type="radio" class="btn-check" name="account_team_size" value="10-50">
																	<span class="fw-bold fs-3">10-50</span>
																</label>
																<!--end::Option-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col">
																<!--begin::Option-->
																<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
																	<input type="radio" class="btn-check" name="account_team_size" value="50+">
																	<span class="fw-bold fs-3">50+</span>
																</label>
																<!--end::Option-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Row-->
														<!--begin::Hint-->
														<div class="form-text">Customers will see this shortened version of your statement descriptor</div>
														<!--end::Hint-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
														<!--begin::Label-->
														<label class="form-label mb-3">Team Account Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-lg form-control-solid" name="account_name" placeholder="" value="">
														<!--end::Input-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-0 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
														<!--begin::Label-->
														<label class="d-flex align-items-center form-label mb-5">Select Account Plan
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Monthly billing will be based on your account plan" data-kt-initialized="1"></i></label>
														<!--end::Label-->
														<!--begin::Options-->
														<div class="mb-0">
															<!--begin:Option-->
															<label class="d-flex flex-stack mb-5 cursor-pointer">
																<!--begin:Label-->
																<span class="d-flex align-items-center me-2">
																	<!--begin::Icon-->
																	<span class="symbol symbol-50px me-6">
																		<span class="symbol-label">
																			<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
																			<span class="svg-icon svg-icon-1 svg-icon-gray-600">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor"></path>
																					<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																	<!--end::Icon-->
																	<!--begin::Description-->
																	<span class="d-flex flex-column">
																		<span class="fw-bold text-gray-800 text-hover-primary fs-5">Company Account</span>
																		<span class="fs-6 fw-semibold text-muted">Use images to enhance your post flow</span>
																	</span>
																	<!--end:Description-->
																</span>
																<!--end:Label-->
																<!--begin:Input-->
																<span class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="radio" name="account_plan" value="1">
																</span>
																<!--end:Input-->
															</label>
															<!--end::Option-->
															<!--begin:Option-->
															<label class="d-flex flex-stack mb-5 cursor-pointer">
																<!--begin:Label-->
																<span class="d-flex align-items-center me-2">
																	<!--begin::Icon-->
																	<span class="symbol symbol-50px me-6">
																		<span class="symbol-label">
																			<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
																			<span class="svg-icon svg-icon-1 svg-icon-gray-600">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="currentColor"></path>
																					<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																	<!--end::Icon-->
																	<!--begin::Description-->
																	<span class="d-flex flex-column">
																		<span class="fw-bold text-gray-800 text-hover-primary fs-5">Developer Account</span>
																		<span class="fs-6 fw-semibold text-muted">Use images to your post time</span>
																	</span>
																	<!--end:Description-->
																</span>
																<!--end:Label-->
																<!--begin:Input-->
																<span class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="radio" checked="checked" name="account_plan" value="2">
																</span>
																<!--end:Input-->
															</label>
															<!--end::Option-->
															<!--begin:Option-->
															<label class="d-flex flex-stack mb-0 cursor-pointer">
																<!--begin:Label-->
																<span class="d-flex align-items-center me-2">
																	<!--begin::Icon-->
																	<span class="symbol symbol-50px me-6">
																		<span class="symbol-label">
																			<!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
																			<span class="svg-icon svg-icon-1 svg-icon-gray-600">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z" fill="currentColor"></path>
																					<path opacity="0.3" d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z" fill="currentColor"></path>
																					<path opacity="0.3" d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																	<!--end::Icon-->
																	<!--begin::Description-->
																	<span class="d-flex flex-column">
																		<span class="fw-bold text-gray-800 text-hover-primary fs-5">Testing Account</span>
																		<span class="fs-6 fw-semibold text-muted">Use images to enhance time travel rivers</span>
																	</span>
																	<!--end:Description-->
																</span>
																<!--end:Label-->
																<!--begin:Input-->
																<span class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="radio" name="account_plan" value="3">
																</span>
																<!--end:Input-->
															</label>
															<!--end::Option-->
														</div>
														<!--end::Options-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Input group-->

													
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Step 1-->
											 
											<div class="d-flex flex-stack pt-15">
												<!--begin::Wrapper-->
												<div class="mr-2">
													<a type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
													<span class="svg-icon svg-icon-4 me-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor"></rect>
															<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor"></path>
														</svg>
													</span>
													<!--end::Svg Icon-->Retour</a>
												</div>
												<!--end::Wrapper-->
												<!--begin::Wrapper-->
												<div>
												
												<input  class="btn btn-primary" type="submit" value="Envoyer">
												</div>
												<!--end::Wrapper-->
											</div>
											
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
					<!--begin::Footer-->
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