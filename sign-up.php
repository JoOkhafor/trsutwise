<?php
// Include config file
require_once "core/config.php";
 
// Define variables and initialize with empty values
$username = $date_naissance = $pays = $num_telephone = $email = $password = $confirm_password = "";
$username_err = $date_naissance_err = $pays_err = $num_telephone_err = $email_err = $password_err = $confirm_password_err = "";
$date = date('m-d-Y h:i:s');
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
	// Validate email
 if(empty(trim($_POST["email"]))){
	$email_err = "Veuillez entrer une adresse mail";
	} elseif(!preg_match('/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/', trim($_POST["email"]))){
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
    // Validate username
    if(empty(trim($_POST["name"]))){
        $username_err = "Veuillez enttrer un nom d'utilisateur";
    } else{
		$username = trim($_POST["name"]);
	}
    

	  // Validate username
	  if(empty(trim($_POST["date_naissance"]))){
        $date_naissance_err = "Veuillez entrer une date de naissance";
    } else{
		$date_naissance = trim($_POST["date_naissance"]);
	}

	  // Validate username
	  if(empty(trim($_POST["pays"]))){
        $pays_err = "Veuillez enttrer un Pyas";
    } else{
		$pays = trim($_POST["pays"]);
	}

	  // Validate username
	  if(empty(trim($_POST["num_telephone"]))){
        $num_telephone_err = "Veuillez un numéro de téléphone";
    } elseif(!preg_match('/^\+?[1-9][0-9]{7,14}$/' , trim($_POST["num_telephone"]))){
		$num_telephone_err = "Veuillez entrer un numéro de téléphone valide";
	} else{
		$num_telephone = trim($_POST["num_telephone"]);
	}

	

	 // Validate password
	 if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Le mot de pass doit contenir au moins 6 caractères.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Confirmez le mot de pass";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Les mots de pass ne correspondent pas.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($date_naissance_err) && empty($pays_err) && empty($num_telephone_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users_register (user_name, date_naissance, pays, telephone, email, 	password, created_at ) VALUES (:user_name, :date_naissance, :pays, :telephone, :email, :password, :created_at)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":user_name", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":date_naissance", $param_date_naissance, PDO::PARAM_STR);
            $stmt->bindParam(":pays", $param_pays, PDO::PARAM_STR);
            $stmt->bindParam(":telephone", $param_telephone, PDO::PARAM_STR);
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":created_at", $param_created_at, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = $username;
            $param_date_naissance = $date_naissance;
            $param_pays = $pays;
            $param_telephone = $num_telephone;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_created_at = $date;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
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

	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<?php include 'page_components/dark_mode.php' ?>
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Signup Welcome Message -->
			<div class="d-flex flex-column flex-center flex-column-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-center text-center p-10">
					<!--begin::Wrapper-->
					<div class="card card-flush centered_content">
                        <div class="d-flex flex-column flex-column-fluid flex-center p-10">
							<!--begin::Wrapper-->
							<div class="d-flex justify-content-between flex-column-fluid flex-column min-w-75 ">
								<!--begin::Header-->
								<div class="d-flex flex-stack py-2">
									<!--begin::Back link-->
									<div class="me-2">
										<a href="../../demo3/dist/authentication/layouts/fancy/sign-in.html" class="btn btn-icon bg-light rounded-circle">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr002.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-800">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="currentColor"></path>
													<path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="currentColor"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
									</div>
									<!--end::Back link-->
									<!--begin::Sign Up link-->
									<div class="m-0 d-flex flex-column align-items-end">
										<span class="text-gray-400 fw-bold fs-5" data-kt-translate="new-password-head-desc">Vous avez déjà un compte ?</span>
										<a href="login.php" class="link-primary fw-bold fs-5" data-kt-translate="new-password-head-link">Connectez-vous</a>
									</div>
									<!--end::Sign Up link=-->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="py-20">
									<!--begin::Form-->
									<form class="form min-w-10" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
										<!--begin::Heading-->
										<div class="text-start mb-10">
											<!--begin::Title-->
											<h1 class="text-dark mb-3 fs-3x" data-kt-translate="new-password-title">S'inscrire</h1>
											<!--end::Title-->
											<!--begin::Text-->
											<div class="text-gray-400 fw-semibold fs-6" data-kt-translate="new-password-desc">Vous avez déjà un compte ?</div>
											<!--end::Link-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="position-relative mb-5">
													<input class="form-control form-control-lg form-control-solid" type="text" placeholder="Nom & prénom" name="name" autocomplete="off" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?> value="<?php echo $username; ?>">
													<span class="invalid-feedback text-danger"><?php echo $username_err; ?></span>
													
												</div>
												<!--end::Input wrapper-->
												<div class="position-relative mb-5">
													<input class="form-control form-control-lg form-control-solid" type="date" placeholder="Date de naissance" name="date_naissance" autocomplete="off" <?php echo (!empty($date_naissance_err)) ? 'is-invalid' : ''; ?> value="<?php echo $date_naissance_err; ?>">
													<span class="invalid-feedback text-danger"><?php echo $date_naissance_err; ?></span>
													
												</div>

												<div class="position-relative mb-5">
													<input class="form-control form-control-lg form-control-solid" type="text" placeholder="Pays" name="pays" autocomplete="off" <?php echo (!empty($pays_err)) ? 'is-invalid' : ''; ?> value="<?php echo $pays; ?>">
													<span class="invalid-feedback text-danger"><?php echo $pays_err; ?></span>
													
												</div>

												<div class="position-relative mb-5">
													<input class="form-control form-control-lg form-control-solid" type="tel" placeholder="Téléphone" name="num_telephone" autocomplete="off" <?php echo (!empty($num_telephone_err)) ? 'is-invalid' : ''; ?> value="<?php echo $num_telephone; ?>">
													<span class="invalid-feedback text-danger"><?php echo $num_telephone_err; ?></span>
												</div>
												<div class="position-relative mb-5">
													<input class="form-control form-control-lg form-control-solid" type="email" placeholder="E-mail" name="email" autocomplete="off" <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?> value="<?php echo $email; ?>">
													<span class="invalid-feedback text-danger"><?php echo $email_err; ?></span>
													
												</div>
										<!--begin::Input group=-->
										<div class="fv-row mb-5">
											<input class="form-control form-control-lg form-control-solid" type="password" placeholder="Mot de pass" name="password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?> value="<?php echo $password; ?>">
											<span class="invalid-feedback text"><?php echo $password_err; ?></span>
										</div>
										<!--end::Input group=-->

											<!--begin::Input group=-->
										<div class="fv-row mb-5">
											<input class="form-control form-control-lg form-control-solid" type="password" placeholder="Confirmez le mot de pass" name="confirm_password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?> value="<?php echo $confirm_password; ?>">
											<span class="invalid-feedback text-danger"><?php echo $confirm_password_err; ?></span>
										</div>
										<!--end::Input group=-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack mt-10">
											<!--begin::Link-->
											<input  class="btn btn-primary" type="submit" value="S'inscrire">
											
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Body-->
								
							</div>
							<!--end::Wrapper-->
						</div>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Signup Welcome Message-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
			}
		</script>
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--end::Javascript-->
	
	<!--end::Body-->
<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></body>
	<!--end::Body-->
</html>