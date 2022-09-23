<?php require_once('page_components/session_setter.php');
require_once "core/config.php"; 


?>


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
					<!--begin::Head-->
					<?php include 'page_components/header.php' ?>

					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							
							<!--begin::Tables Widget 9-->

							<div class="col-xl-12 mb-8">
								<!--begin::Tables widget 14-->
								<div class="card card-flush h-md-100">
									
									<!--begin::Body-->
								
									<!--end: Card Body-->
								</div>
								<!--end::Tables widget 14-->
							</div>
							
							<div class="col-xl-12">
							<!--begin::Timeline Widget 4-->
							<div class="card h-md-100">
								<!--end::Card header-->
								<div class="card-body pt-6">

									<div class="card ">
										<div class="card-header card-header-stretch">
											<!--begin::Card title-->
											<h3 class="card-title text-gray-800 fw-bold">Liste de vos transactionss</h3>
											<!--end::Card title-->
											<div class="card-toolbar">
												<ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-4"
													role="tablist">
													<!--begin::Nav item-->

													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0" role="presentation">
														<a class="nav-link btn btn-color-gray-400 flex-center px-3 active"
															data-bs-toggle="tab" href="#outgoing_tab">
															<!--begin::Title-->
															<span class="nav-text fw-semibold fs-4 mb-3">Sortant</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span
																class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
															<!--end::Bullet-->
														</a>
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0" role="presentation">
														<a class="nav-link btn btn-color-gray-400 flex-center px-3"
															data-bs-toggle="tab" href="#incoming_tab">
															<!--begin::Title-->
															<span class="nav-text fw-semibold fs-4 mb-3">Entrant</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span
																class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
															<!--end::Bullet-->
														</a>
													</li>
													<!--end::Nav item-->
												</ul>
											</div>
										</div>
										<div class="card-body">
											<div class="tab-content" id="myTabContent">
												<div class="tab-pane fade show active" id="outgoing_tab"
													role="tabpanel">

													<?php $sql = "SELECT * FROM `transactions` WHERE transaction_status='pending' ORDER BY `transactions`.`transaction_hour` DESC LIMIT 10 " ; ?>
													<?php if($result = $pdo->query($sql)):?>
														<?php	if($result->rowCount() > 0): ?>
															
															<?php while($row = $result->fetch()): ?>
																<?php if($row['id_emetteur'] === $_SESSION['id']): ?>

																<div class="table-responsive item--card mb-4">
																		<!--begin::Table-->
																		<table
																			class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">

																			<!--begin::Table body-->
																			<tbody>
																				<tr>

																					<td>
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
																					</td>
																					<td>
																						<p href="#"
																							class="text-dark fw-bold text-hover-primary d-block fs-6"><?= $row['montant'] ?> </p>
																					</td>
																					<td>
																						<p href="#"
																							class="text-dark fw-bold text-hover-primary d-block fs-6">
																							<?= $row['transaction_date'] ?> </p>
																					</td>
																					<td class="text-end">
																						<!--begin::Label-->
																						<span
																							class="badge badge-light-success fs-base">En attente</span>
																					</td>
																					<td>
																						<div
																							class="d-flex justify-content-end flex-shrink-0">
																							<a href="transaction-details.php"
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
																							<a href="#"
																								class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal"
																								data-bs-target="#danger-modal">
																								<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																								<span class="svg-icon svg-icon-3">
																									<svg width="24" height="24"
																										viewBox="0 0 24 24" fill="none"
																										xmlns="http://www.w3.org/2000/svg">
																										<rect opacity="0.3" x="2" y="2"
																											width="20" height="20"
																											rx="10"
																											fill="currentColor" />
																										<rect x="11" y="14" width="7"
																											height="2" rx="1"
																											transform="rotate(-90 11 14)"
																											fill="currentColor" />
																										<rect x="11" y="17" width="2"
																											height="2" rx="1"
																											transform="rotate(-90 11 17)"
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
																</div>
															<?php endif; ?>
															  <?php endwhile; ?>	
															  <?php  unset($result); ?>
														<?php endif; ?>
															
												<?php endif; ?>
														
													
												</div>

												<div class="tab-pane fade" id="incoming_tab" role="tabpanel">
					
												<?php  $sql = "SELECT * FROM `transactions` WHERE transaction_status='pending' ORDER BY `transactions`.`transaction_hour` DESC LIMIT 10 " ; ?>
													<?php if($result = $pdo->query($sql)):?>
														<?php	if($result->rowCount() > 0): ?>
															
															<?php while($row = $result->fetch()): ?>
																			<?php if($row['id_recepteur'] === $_SESSION['id']): ?>

																				<div class="table-responsive item--card mb-4">
																						<!--begin::Table-->
																						<table
																							class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
								
																							<!--begin::Table body-->
																							<tbody>
																								<tr>
								
																									<td>
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
																									</td>
																									<td>
																										<p href="#"
																											class="text-dark fw-bold text-hover-primary d-block fs-6"><?= $row['montant'] ?> </p>
																									</td>
																									<td>
																										<p href="#"
																											class="text-dark fw-bold text-hover-primary d-block fs-6">
																											<?= $row['transaction_date'] ?> </p>
																									</td>
																									<td class="text-end">
																										<!--begin::Label-->
																										<span
																											class="badge badge-light-success fs-base">En attente</span>
																									</td>
																									<td>
																										<div
																											class="d-flex justify-content-end flex-shrink-0">
																											<a href="transaction-details.php"
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
																											<a href="#"
																												class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal"
																												data-bs-target="#danger-modal">
																												<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																												<span class="svg-icon svg-icon-3">
																													<svg width="24" height="24"
																														viewBox="0 0 24 24" fill="none"
																														xmlns="http://www.w3.org/2000/svg">
																														<rect opacity="0.3" x="2" y="2"
																															width="20" height="20"
																															rx="10"
																															fill="currentColor" />
																														<rect x="11" y="14" width="7"
																															height="2" rx="1"
																															transform="rotate(-90 11 14)"
																															fill="currentColor" />
																														<rect x="11" y="17" width="2"
																															height="2" rx="1"
																															transform="rotate(-90 11 17)"
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
																				</div>
																			<?php endif; ?>
																				
															      <?php endwhile; ?>	
															  <?php  unset($result); ?>
														<?php endif; ?>
													<?php endif; ?>
													<div class="table-responsive item--card mb-4">
														<!--begin::Table-->
														<table
															class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">

															<!--begin::Table body-->
															<tbody>
																<tr>

																	<td>
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
																	</td>
																	<td>
																		<p href="#"
																			class="text-dark fw-bold text-hover-primary d-block fs-6">
																			54000 FCFA</p>
																	</td>
																	<td>
																		<p href="#"
																			class="text-dark fw-bold text-hover-primary d-block fs-6">
																			12/09/2022</p>
																	</td>
																	<td class="text-end">
																		<!--begin::Label-->
																		<span
																			class="badge badge-light-warning fs-base">En annulation</span>
																	</td>
																	<td>
																		<div
																			class="d-flex justify-content-end flex-shrink-0">
																			<a href="transaction-details.php"
																				class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal"
																				data-bs-target="#warning-modal">
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
																			<a href="contest-cancellation.php"
																				class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																				<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																				<span class="svg-icon svg-icon-3">
																					<svg width="24" height="24"
																						viewBox="0 0 24 24" fill="none"
																						xmlns="http://www.w3.org/2000/svg">
																						<rect opacity="0.3" x="2" y="2"
																							width="20" height="20"
																							rx="10"
																							fill="currentColor" />
																						<rect x="11" y="14" width="7"
																							height="2" rx="1"
																							transform="rotate(-90 11 14)"
																							fill="currentColor" />
																						<rect x="11" y="17" width="2"
																							height="2" rx="1"
																							transform="rotate(-90 11 17)"
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
													</div>
													<!--end::Table-->

													<div class="table-responsive item--card mb-4">
														<!--begin::Table-->
														<table
															class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">

															<!--begin::Table body-->
															<tbody>
																<tr>

																	<td>
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
																	</td>
																	<td>
																		<p href="#"
																			class="text-dark fw-bold text-hover-primary d-block fs-6">
																			54000 FCFA</p>
																	</td>
																	<td>
																		<p href="#"
																			class="text-dark fw-bold text-hover-primary d-block fs-6">
																			12/09/2022</p>
																	</td>
																	<td class="text-end">
																		<!--begin::Label-->
																		<span
																			class="badge badge-light-success fs-base">En
																			cours</span>
																	</td>
																	<td>
																		<div
																			class="d-flex justify-content-end flex-shrink-0">
																			<a href="transaction-details.php"
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
													</div>
													<!--end::Table-->
												</div>
											</div>
										</div>
									</div>


								</div>
							</div>
							<!--end::Timeline Widget 1-->
						</div>
									
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<!--begin::Head-->

					<?php include 'page_components/footer.php' ?>

					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
				
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
	
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->

	
		<?php include 'page_components/scripts.php' ?>
	</body>
	<!--end::Body-->
</html>