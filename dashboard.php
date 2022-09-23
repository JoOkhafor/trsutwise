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
										
											<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
											
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
											<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
												title="Melody Macy">
												<img alt="Pic" src="assets/media/avatars/blank.png" />
											</div>
											<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
												title="Perry Matthew">
												<span
													class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
											</div>
											<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
												title="Barry Walter">
												<img alt="Pic" src="assets/media/avatars/blank.png" />
											</div>
											<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
												data-bs-target="#kt_modal_view_users">
												<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+4</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-md-5 mb-xl-10">
							
								<div class="card card-flush mb-5">
									
									<div class="card-header pt-5">
										
										<div class="card-title d-flex flex-column">
										
											<div class="d-flex align-items-center">
												
												<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700N  FCFA</span>
											
												
											</div>
											<span class="text-gray-400 pt-1 fw-semibold fs-6">Volume de données</span>
											
										</div>
									</div>
									<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
										
										<div class="d-flex flex-center me-5 pt-2">
										
										</div>
										<div class="d-flex flex-column content-justify-center flex-row-fluid">
										
											<div class="d-flex fw-semibold align-items-center">
												
												<div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
											
												<div class="text-gray-500 flex-grow-1 me-4">Transaction entrant</div>
											
												<div class="fw-bolder text-gray-700 text-xxl-end">7,660 FCFA</div>
											
											</div>
											<div class="d-flex fw-semibold align-items-center my-3">
												
												<div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
											
												<div class="text-gray-500 flex-grow-1 me-4">Transaction sortant</div>
												
												<div class="fw-bolder text-gray-700 text-xxl-end">2,820 FCFA</div>
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
											<h3 class="card-title text-gray-800 fw-bold">Dernières transactions</h3>
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
													<!--begin::Table container-->
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
																			class="badge badge-light-success fs-base">En attente</span>
																	</td>
																	<td>
																		<div
																			class="d-flex justify-content-end flex-shrink-0">
																			<a href="#"
																				class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal"
																				data-bs-target="#warning-modal">
																				<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																				<span class="svg-icon svg-icon-3">
																					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor"/>
																					</svg>															
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																			<a href="#"
																				class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal"
																				data-bs-target="#danger-modal">
																				<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																				<span class="svg-icon svg-icon-3">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
																					<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
																					<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
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
																			<a href="#"
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
																			<a href="#"
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
													<!--end::Table-->
												</div>

												<div class="tab-pane fade" id="incoming_tab" role="tabpanel">
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
																			class="badge badge-light-success fs-base">En attente</span>
																	</td>
																	<td>
																		<div
																			class="d-flex justify-content-end flex-shrink-0">
																			<a href="#"
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
																			<a href="#"
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
																			<a href="#"
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
				</div>
				<?php include 'page_components/footer.php' ?>
			</div>

		</div>
	</div>

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
					<div class="swal2-html-container" id="swal2-html-container" style="display: block;">Êtes-vous sur de voulir annuler cette transaction?</div><input class="swal2-input" style="display: none;"><input
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
							style="display: inline-block;">Oui continuer!</button><button type="button" class="swal2-deny"
							aria-label="" style="display: none;"></button><button type="button"
							class="swal2-cancel btn fw-bold btn-active-light-primary" aria-label=""
							style="display: inline-block;">Non, annuler</button>
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