<?php require_once('page_components/session_setter.php') ?>
<!DOCTYPE html>

<html lang="en"> 
	
<?php include 'page_components/head.php' ?>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="sidebar-enabled">
		<!--begin::Theme mode setup on page load-->


		<?php include 'page_components/dark_mode.php' ?>

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
							
							<!--begin::Table-->
							<div class="card card-flush mt-6 mt-xl-9">
								<!--begin::Card header-->
								
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0">
									<!--begin::Table container-->
									<div class="table-responsive">
										<!--begin::Table-->
										<div id="kt_profile_overview_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold dataTable no-footer">
											<!--begin::Head-->
											<thead class="fs-7 text-gray-400 text-uppercase">
												<tr>
													<th class="min-w-250px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Manager: activate to sort column ascending" style="width: 306.625px;">Compte</th>
													
													<th class="min-w-150px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 186.172px;">Date</th>

													<th class="min-w-90px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 112.578px;">Montant</th>
													
													<th class="min-w-90px sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 119.875px;">Status</th>
													
													<th class="min-w-50px text-end sorting" tabindex="0" aria-controls="kt_profile_overview_table" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending" style="width: 76.25px;">Details</th>
												</tr>
											</thead>
											<!--end::Head-->
											<!--begin::Body-->
											<tbody class="fs-6">
												
												
											<tr class="odd">
													<td>
														<!--begin::User-->
														<div class="d-flex align-items-center">
															<!--begin::Wrapper-->
															<div class="me-5 position-relative">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<img alt="Pic" src="assets/media/avatars/blank.png">
																</div>
																<!--end::Avatar-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Info-->
															<div class="d-flex flex-column justify-content-center">
																<a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
																<div class="fw-semibold text-gray-400">smith@kpmg.com</div>
															</div>
															<!--end::Info-->
														</div>
														<!--end::User-->
													</td>
													<td data-order="2022-06-24T00:00:00+00:00">Jun 24, 2022</td>
													<td>$846.00</td>
													<td>
														<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
													</td>
													<td class="text-end">
													<a href="details-historique.php" class="btn btn-light btn-sm">Voir</a>
													</td>
												</tr>
												<tr class="even">
													<td>
														<!--begin::User-->
														<div class="d-flex align-items-center">
															<!--begin::Wrapper-->
															<div class="me-5 position-relative">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Online-->
																<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																<!--end::Online-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Info-->
															<div class="d-flex flex-column justify-content-center">
																<a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
																<div class="fw-semibold text-gray-400">melody@altbox.com</div>
															</div>
															<!--end::Info-->
														</div>
														<!--end::User-->
													</td>
													<td data-order="2022-02-21T00:00:00+00:00">Feb 21, 2022</td>
													<td>$733.00</td>
													<td>
														<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
													</td>
													<td class="text-end">
													<a href="details-historique.php" class="btn btn-light btn-sm">Voir</a>
													</td>
												</tr>
												<tr class="even">
													<td>
														<!--begin::User-->
														<div class="d-flex align-items-center">
															<!--begin::Wrapper-->
															<div class="me-5 position-relative">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																	<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Online-->
																<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																<!--end::Online-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Info-->
															<div class="d-flex flex-column justify-content-center">
																<a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
																<div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
															</div>
															<!--end::Info-->
														</div>
														<!--end::User-->
													</td>
													<td data-order="2022-03-10T00:00:00+00:00">Mar 10, 2022</td>
													<td>$616.00</td>
													<td>
														<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
													</td>
													<td class="text-end">
														<a href="details-historique.php" class="btn btn-light btn-sm">Voir</a>
													</td>
												</tr>
												
											</tbody>
											<!--end::Body-->
										</table>
									</div>
								</div>
										<!--end::Table-->
									</div>
									<!--end::Table container-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					
					<?php include 'page_components/footer.php' ?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
				
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->

		<!--end::Engage toolbar-->
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