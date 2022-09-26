<?php require_once('page_components/session_setter.php');
require_once "core/config.php"; ?>

<?php

$user_id = $_SESSION['id'];
try{
    $sql = "SELECT * FROM users_register WHERE user_id=$user_id";  
    $result = $pdo->query($sql);
    if($result->rowCount() > 0){
       $row = $result->fetch();
        unset($result);
    } else{
        echo "No records matching your query were found.";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>
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
							<!--begin::Navbar-->
							<?php include 'page_components/my-account-top.php' ?>
							<!--end::Navbar-->
							<!--begin::details View-->
							<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
								<!--begin::Card header-->
								<div class="card-header cursor-pointer">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Détails du compte</h3>
									</div>
									<!--end::Card title-->
									<!--begin::Action-->
									<a href="account-settings.php" class="btn btn-primary align-self-center">Mettre à jour</a>
									<!--end::Action-->
								</div>
								<!--begin::Card header-->
								<!--begin::Card body-->
								<div class="card-body p-9">
									<!--begin::Row-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Nom</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bold fs-6 text-gray-800"><?= $row['user_name'] ?></span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Pays</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span class="fw-semibold text-gray-800 fs-6" style="text-transform: capitalize;" placeholder="pays" ><?= $row['pays'] ?></span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Date de naissance</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"><?= $row['date_naissance'] ?></a>
										</div>
										<!--end::Col-->
									</div>
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Téléphone
										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Phone number must be active" data-kt-initialized="1"></i></label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 d-flex align-items-center">
											<span class="fw-bold fs-6 text-gray-800 me-2"><?= $row['telephone'] ?></span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-semibold text-muted">Email</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bold fs-6 text-gray-800"><?= $row['email'] ?></span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--end::Notice-->
								</div>
								<!--end::Card body-->
							</div>
							
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					
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