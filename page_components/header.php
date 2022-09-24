<?php
function active($currect_page){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    if($currect_page == $url){
        echo 'active-nav'; //class name in css 
    } 
  };

  function page_title(){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    return $url; 
  }

  $main_title = '';
  $sub_title = '';

  if (page_title() == "dashboard.php") {
	$main_title ='Tableau de bord';
	$sub_title = 'Vous avez 6 transactions en cours';
  } elseif (page_title() == "transactions.php") {
	$main_title ='Mes transactions';
	$sub_title = 'Gestion des transactions';
  } elseif (page_title() == "historique.php") {
	$main_title ='Historique';
	$sub_title = 'Historique de mes transactions';
  } elseif (page_title() == "my-account.php") {
	$main_title ='Mon compte';
	$sub_title = 'Parametrer mon compte';
  }
  

?>
<div id="kt_header" class="header">
					<!--begin::Container-->
					<div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0"
							data-kt-swapper="true" data-kt-swapper-mode="prepend"
							data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
							<!--begin::Heading-->
							<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1"> <?php echo $main_title ?>
								<small class="text-muted fs-6 fw-semibold ms-1 pt-1"><?php  echo $sub_title ?></small>
							</h1>
							<!--end::Heading-->
						</div>
						<!--end::Page title=-->
						<!--begin::Wrapper-->
						<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
							<!--begin::Aside mobile toggle-->
							<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-1 mt-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
											fill="currentColor" />
										<path opacity="0.3"
											d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
											fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Logo-->
							<a href="dashboard.php" class="d-flex align-items-center">
								<img alt="Logo" src="assets/media/logos/demo3.svg" class="theme-light-show h-40px" />
								<img alt="Logo" src="assets/media/logos/demo3-dark.svg"
									class="theme-dark-show h-40px" />
							</a>

							<!--end::Logo-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Topbar-->
						<div class="d-flex align-items-center flex-shrink-0">
							<ul class="menu header_menu menu-hover-primary fw-semibold">
								<li class="menu-item">
									<a href="dashboard.php" class="px-2 nav-link <?php active('dashboard.php');?>">Tableau de bord
									</a>
								</li>
								<li class="menu-item">
									<a href="transactions.php" class="nav-link px-2 <?php active('transactions.php');?>">Transactions</a>
								</li>
								<li class="menu-item">
									<a href="historique.php" class="nav-link px-2 <?php active('historique.php');?>">Historique</a>
								</li>
							</ul>

							
							<!--begin::Theme mode-->
							<div class="d-flex align-items-center ms-3 ms-lg-4">
								<!--begin::Menu toggle-->
								<a href="#" class="btn btn-icon btn-color-gray-700 btn-active-color-primary w-40px h-20px user_pic"
									data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
									data-kt-menu-placement="bottom-end" style="flex-direction: column;
    min-width: 163px!important;
    align-items: flex-end;">
									<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
									<div class="symbol  symbol-40px px-4 mb-3">
										<img src="assets/media/avatars/blank.png" alt="photo" />
									</div>
									<span><b><?php echo htmlspecialchars($_SESSION["user_name"])?></b></span>
								</a>
								<!--begin::Menu toggle-->
								
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted  menu-state-color fw-semibold py-4 fs-base w-auto" data-kt-menu="true" >
												<div class="menu-item px-3 my-0 mb-5">
													<a href="my-account.php" class="menu-link px-3 py-2" data-kt-element="mode"
														data-kt-value="light">
														<span class="menu-icon" data-kt-element="icon">
															<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
															<span class="svg-icon svg-icon-3">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"/>
																	<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"/>
																	</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
														<span class="menu-title">Profile</span>
													</a>
												</div>

												<div class="menu-item px-3 my-0 mb-5">
													<a href="account-settings.php" class="menu-link px-3 py-2" data-kt-element="mode"
														data-kt-value="light">
														<span class="menu-icon" data-kt-element="icon">
															<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
															<span class="svg-icon svg-icon-3">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"/>
																	<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"/>
																	</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
														<span class="menu-title">Paramètres</span>
													</a>
												</div>
									
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
												<a href="log-out.php" class="px-3" data-kt-element="mode"
													data-kt-value="system">
														<span class="menu-icon" data-kt-element="icon">
															<!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="4" y="11" width="12" height="2" rx="1" fill="currentColor"/>
																	<path d="M5.86875 11.6927L7.62435 10.2297C8.09457 9.83785 8.12683 9.12683 7.69401 8.69401C7.3043 8.3043 6.67836 8.28591 6.26643 8.65206L3.34084 11.2526C2.89332 11.6504 2.89332 12.3496 3.34084 12.7474L6.26643 15.3479C6.67836 15.7141 7.3043 15.6957 7.69401 15.306C8.12683 14.8732 8.09458 14.1621 7.62435 13.7703L5.86875 12.3073C5.67684 12.1474 5.67684 11.8526 5.86875 11.6927Z" fill="currentColor"/>
																	<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="currentColor"/>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													<span class="menu-title">Se déconnecter</span>
												</a>
											</div>
											<!--end::Menu item-->
								</div>
							</div>
							<!--end::Theme mode-->

						</div>
						<!--end::Topbar-->
					</div>
					<!--end::Container-->
				</div>