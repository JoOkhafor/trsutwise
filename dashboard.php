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
				
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		

					<div class="container-xxl" id="kt_content_container">
				
						<div class="row g-5 g-xl-10 mb-xl-10">
					
							<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-md-5 mb-xl-10">

						
								<div class="card card-flush mb-5">
								
									<div class="card-header pt-5">
										
										<div class="card-title d-flex flex-column">
										
											<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">0</span>
											
											<span class="text-gray-400 pt-1 fw-semibold fs-6">Transactions au total</span>
										
										</div>
									</div>
									<div class="card-body d-flex flex-column justify-content-end pe-0">
									
										<span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Derniers contacts</span>
									
										<div class="symbol-group symbol-hover flex-nowrap">
											<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
												title="Alan Warden">
												<span
													class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
											</div>
											<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
												title="Michael Eberon">
												<img alt="Pic" src="assets/media/avatars/blank.png" />
											</div>
											<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
												title="Susan Redwood">
												<span
													class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-md-5 mb-xl-10">
							
								<div class="card card-flush mb-5">
									
									<div class="card-header pt-5">
										
										<div class="card-title d-flex flex-column">
										
											<div class="d-flex align-items-center">
												
												<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">0 FCFA</span>
											</div>
											
											
										</div>
									</div>
									<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
									<div class="donut mt-3">
												<div class="hole"></div>
											</div>
										<div>
										<div class="d-flex flex-column p-5 content-justify-center flex-row-fluid">
										
										<div class="d-flex fw-semibold align-items-center">
											
											<div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
										
											<div class="text-gray-500 flex-grow-1 me-4">Entrant</div>
										
											<div class="fw-bolder text-gray-700 text-xxl-end">7,660 FCFA</div>
										
										</div>
										<div class="d-flex fw-semibold align-items-center my-3">
											
											<div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
										
											<div class="text-gray-500 flex-grow-1 me-4">Sortant</div>
											
											<div class="fw-bolder text-gray-700 text-xxl-end">2,820 FCFA</div>
										</div>
										
									</div>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>

					<div class="container-xxl" id="kt_content_container">

						<div class="col-xl-12">
							<!--begin::Timeline Widget 4-->
							<div class="card h-md-100">
								<!--end::Card header-->
								<div class="card-body pt-6">

									<div class="card ">

										<div class="card-header card-header-stretch">
											<!--begin::Card title-->
											<h3 class="card-title text-gray-800 fw-bold">Liste de vos transactionss</h3>
										</div>
										
										<div class="card-body">
											<div class="tab-content" id="myTabContent">
												<div class="tab-pane fade show active" id="outgoing_tab"
													role="tabpanel">
													<?php		$id = $_SESSION['id'];
													$sql = "SELECT * FROM `transactions` WHERE id_emetteur=$id OR id_recepteur=$id AND transaction_status='pending' ORDER BY `transactions`.`transaction_date` ASC ";
													if($result = $pdo->query($sql)){
														if($result->rowCount() > 0){
																while($row = $result->fetch())
																
																{

																	$sender = "SELECT * FROM `users_register` WHERE user_id= :id " ;
																			if($stmt = $pdo->prepare($sender)){
																				// Bind variables to the prepared statement as parameters
																				$stmt->bindParam(":id", $param_id);
																				
																				// Set parameters
																				$param_id = trim($row['id_recepteur']);
																				
																				// Attempt to execute the prepared statement
																				if($stmt->execute()){
																					if($stmt->rowCount() > 0){
																						/* Fetch result row as an associative array. Since the result set
																						contains only one row, we don't need to use while loop */
																						$recepteur_row = $stmt->fetch(PDO::FETCH_ASSOC);
																						
																						// Retrieve individual field value
																						$nom_recepteur = $recepteur_row["user_name"];
																						$profile_recepteur = $recepteur_row["profile_pic"];
																					} 
																					
																				} else{
																					echo "Oops! Something went wrong. Please try again later.";
																				}
																			}
																			// Close statement
																			unset($sender);
																			

																	echo ' <div class="table-responsive item--card mb-4">
																				<!--begin::Table-->
																				<table
																					class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">

																					<!--begin::Table body-->
																					<tbody>
																						<tr>

																							<td>
																								<div class="d-flex align-items-center">
																									<div class="symbol symbol-45px me-5">
																										<img src="assets/media/profile/'.$profile_recepteur.'"alt="" />
																									</div>
																										<div class="d-flex justify-content-start flex-column">
																											<span class="text-dark fw-bold text-hover-primary fs-6">'.$nom_recepteur.'
																										</span>
																									</div>
																								</div>
																							</td>
																							<td>
																								<p href="#"
																									class="text-dark fw-bold text-hover-primary d-block fs-6"> '.$row['montant'].'  </p>
																							</td>
																							<td>
																								<p href="#"
																									class="text-dark fw-bold text-hover-primary d-block fs-6">
																									'.$row['transaction_date'].' </p>
																							</td>
																							<td class="text-end">
																								<!--begin::Label-->
																								<span
																									class="badge badge-light-success fs-base">En attente</span>
																							</td>
																							<td>
																								<div
																									class="d-flex justify-content-end flex-shrink-0">
																									<a href="transaction-details.php?tr_id='.$row['id_transaction'].'"
																										class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																										<span class="svg-icon svg-icon-3">
																											<svg width="24" height="24"
																												viewBox="0 0 24 24" fill="none"
																												xmlns="http://www.w3.org/2000/svg">
																												<rect opacity="0.3" x="2" y="2"
																													width="20" height="20"
																													rx="5"
																													fill="currentColor" />
																												<path
																													d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
																													fill="currentColor" />
																											</svg>
																										</span>
																										<!--end::Svg Icon-->
																									</a>
																									

																								</div>
																							</td>
																						</tr>

																					</tbody>
																					<!--end::Table body-->
																				</table>
																				<!--end::Table-->
																		</div>';
																}
															unset($result);
														} else{
															echo '<div class="alert alert-warning"><em>Vous n\'avez aucune transaction .</em></div>';
														}
													} else{
														echo "Oops! Something went wrong. Please try again later.";
													}
													
													// Close connection
													unset($pdo);
													?>
											</div>

										</div>
									</div>


								</div>
							</div>
							<!--end::Timeline Widget 1-->
						</div>

					</div>
				</div>
				<?php include 'page_components/footer.php' ?>
			</div>

		</div>
	</div>

		

		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
						fill="currentColor" />
					<path
						d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
						fill="currentColor" />
				</svg>
			</span>
		</div>
		<?php include 'page_components/scripts.php' ?>
		
</body>

</html>