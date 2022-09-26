<?php require_once('page_components/session_setter.php');
require_once "core/config.php";


$sender = "SELECT * FROM `users_register` WHERE user_id= :id " ;
if($stmt = $pdo->prepare($sender)){
	// Bind variables to the prepared statement as parameters
	$stmt->bindParam(":id", $param_id);
	
	// Set parameters
	$param_id = trim($_SESSION['id']);
	
	// Attempt to execute the prepared statement
	if($stmt->execute()){
		if($stmt->rowCount() > 0){
			/* Fetch result row as an associative array. Since the result set
			contains only one row, we don't need to use while loop */
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			
			// Retrieve individual field value
			$name = $row["user_name"];
			$profile = $row["profile_pic"];
			$pays = $row["pays"] ;
			$telephone = $row["telephone"] ;
			$email = $row["email"];
			$profile = $row["profile_pic"];
		} 
		
	} else{
		echo "Oops! Something went wrong. Please try again later.";
	}
}

// Close statement
unset($sender);

// Define variables and initialize with empty values

$name_err = "";
 $profil_err = "";
 $pays_err = "";
 $telephone_err = "";
 $email_err ="" ;


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
        $img_name = $_FILES['pp']['name'];
        $tmp_name = $_FILES['pp']['tmp_name'];
        $error = $_FILES['pp']['error'];
        
        if($error === 0){
           $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
           $img_ex_to_lc = strtolower($img_ex);

           $allowed_exs = array('jpg', 'jpeg', 'png');
           if(in_array($img_ex_to_lc, $allowed_exs)){
              $new_img_name =  $param_id.'.'.$img_ex_to_lc;
              $img_upload_path = 'assets/media/profile/'.$new_img_name;
              move_uploaded_file($tmp_name, $img_upload_path);

                    // Create prepared statement
                $sql = "UPDATE users_register SET profile_pic=:profile WHERE user_id =$param_id";
                $stmt = $pdo->prepare($sql);
                
                // Bind parameters to statement
                $stmt->bindParam(':profile', $new_img_name);
                
                // Execute the prepared statement
                $stmt->execute();

				$profile= $new_img_name; 

           }else {
              $em = "You can't upload files of this type";
              header("Location: ../index.php?error=$em&$data");
              exit;
           }
        }else {
           $em = "unknown error occurred!";
           header("Location: ../index.php?error=$em&$data");
           exit;
        }
    }


	if (isset($_POST["name"])){

	// Validate email
		if(empty(trim($_POST["email"]))){
			$email_err = "Veuillez entrer une adresse mail";
			} elseif(!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)){
				$email_err = "Email non valide";
			} else{
				// Prepare a select statement
				$sql = "SELECT user_id FROM users_register WHERE email = :email";
				
				if($stmt = $pdo->prepare($sql)){
					// Bind variables to the prepared statement as parameters
					$stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
					
					// Set parameters
					$param_email = trim($_POST["email"]);
					
					// Attempt to execute the prepared statement
					if($stmt->execute()){
						if($stmt->rowCount() > 0){
							$email_err = "Ce mail est déjà associé à un compte";
						} else{
							$email = trim($_POST["email"]);
						}
					} else{
						echo "Oops! Something went wrong. Please try again later.";
					}
		
					// Close statement
					unset($stmt);
				}
			}
			if (isset($_POST["name"])) {
				// Validate username
				if(empty(trim($_POST["name"]))){
					$name_err = "Veuillez enttrer un nom d'utilisateur";
				} else{
					$name = trim($_POST["name"]);
				}
			}

			if (isset($_POST["pays"])) {
			// Validate username
			if(empty(trim($_POST["pays"]))){
				$pays_err = "Veuillez enttrer un nom d'utilisateur";
			} else{
				$pays = trim($_POST["pays"]);
			}
		}

	}
			// Validate username
			if (isset($_POST["pays"])) {
			if(empty(trim($_POST["telephone"]))){
				$telephone_err = "Veuillez enttrer un nom d'utilisateur";
			} else{
				$telephone = trim($_POST["telephone"]);
			}
		}

	
        $sql = "UPDATE users_register SET user_name=:name, pays=:pays, telephone=:telephone, email=:email WHERE user_id=:id";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":name", $param_name);
            $stmt->bindParam(":pays", $param_pays);
            $stmt->bindParam(":telephone", $param_telephone);
            $stmt->bindParam(":email", $param_email);
            $stmt->bindParam(":id", $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_pays = $pays;
            $param_telephone = $telephone;
            $param_param_email = $param_email;
            $param_id = $_SESSION['id'];
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
				$_SESSION["user_country"] =  $pays ;
				$_SESSION['user_name'] = $name;
				$_SESSION['user_profile'] = $profile;
				$_SESSION["user_telephone"] = $telephone;
				$_SESSION["user_mail"] = $email;
                // Records updated successfully. Redirect to landing page
                header("location: account-settings.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
         
        // Close statement
        unset($stmt);
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
							<!--begin::Navbar-->
							<?php include 'page_components/my-account-top.php' ?>
							<!--end::Navbar-->
							<!--begin::details View-->
							<div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Mes informations</h3>
									</div>
									<!--end::Card title-->
								</div>
								<!--begin::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_profile_details" class="collapse show">
									<!--begin::Form-->
									<form  class="form fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data"  action="" method="POST">
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Pofile</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Image input-->
													<div class="d-flex">
													
														<!-- begin::Preview existing avatar-->
														<!--end::Preview existing avatar-->
													 <div class="avatar-upload">
															<div class="avatar-edit">
																<input type='file' id="imageUpload" name="pp" accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"></label>
															</div>
															<div class="avatar-preview">
																<div id="imagePreview"  style="background-image: url('assets/media/profile/<?= $profile ?>')">
																</div>
															</div>
														</div> 
													</div>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
										
											<!--end::Input group-->
											
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Nom & Prénom
												</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<input type="tel" name="name" class="form-control form-control-lg form-control-solid" placeholder="user_name" style="text-transform:capitalize ;"  value=" <?= $name ?> ">
													<p class="text-danger"><?= $name_err ?></p>
												</div>
												<!--end::Col-->
											</div>
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Téléphone
												</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<input type="tel" name="telephone" class="form-control form-control-lg form-control-solid" placeholder="Téléphone" value=" <?= $telephone ?> ">
													<p class="text-danger"><?=  $telephone_err ?></p>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Pays</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<input type="text" name="pays"  class="form-control form-control-lg form-control-solid "  style="text-transform: capitalize;" placeholder="pays" value="<?= $pays ?> ">
													<p class="text-danger"><?= $pays_err ?></p>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											
											<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-semibold fs-6">Email
													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="tel" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value=" <?= $email ?> ">
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-semibold fs-6">Mot de pass</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<input type="password" name="password"  class="form-control form-control-lg form-control-solid capitalize"  placeholder="Mettre à jour le mot de pass"/>
													</div>
													<!--end::Col-->
											
										</div>
										<!--end::Card body-->
										<!--begin::Actions-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
										<input type="submit" class="btn btn-primary" value="Enregistrer">
										</div>
								</form>
									<!--end::Form-->
								</div>
								<!--end::Content-->
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