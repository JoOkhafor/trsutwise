<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}
 
// Include config file
require_once "core/config.php";
 
// Define variables and initialize with empty values
$login_mail = $login_password = "";
$login_mail_err = $login_password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $login_mail_err = "Veuillez entrer une adresse mail.";
    }  elseif(!preg_match('/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/', trim($_POST["email"]))){
		$email_err = "Email non valide";}
	 else{
        $login_mail = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $login_password_err = "Veuillez entrer un mot de pass";
    } else{
        $login_password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($login_mail_err) && empty($login_password_err)){
        // Prepare a select statement
        $sql = "SELECT  * FROM users_register WHERE email = :login_mail";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":login_mail", $param_login_mail, PDO::PARAM_STR);
            
            // Set parameters
            $param_login_mail = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["user_id"];
                        $user_mail = $row["email"];
                        $user_name = $row["user_name"];
                        $hashed_password = $row["password"];
                        if(password_verify($login_password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["user_name"] = $user_name;                            
                            
                            // Redirect user to welcome page
                            header("location: dashboard.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Identifiant invalide";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Email ou mot de pass incorrect";
                }
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
				
					<!--end::Wrapper-->
					<div class="card card-flush centered_content">
                        <div class="d-flex flex-column flex-column-fluid flex-center p-10">
							<!--begin::Wrapper-->
							<div class="d-flex justify-content-between flex-column-fluid flex-column min-w-75 ">
								<!--begin::Header-->
								<div class="d-flex flex-stack py-2">
									<!--begin::Back link-->
									<div class="me-2">
										<a href="#" class="btn btn-icon bg-light rounded-circle">
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
										<a href="sign-up.php" class="link-primary fw-bold fs-5" data-kt-translate="new-password-head-link">Connectez-vous</a>
									</div>
									<!--end::Sign Up link=-->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="py-20">
									<!--begin::Form-->
									<form class="form w-100" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
										<!--begin::Heading-->
										<div class="text-start mb-10">
											<!--begin::Title-->
											<h1 class="text-dark mb-3 fs-3x" data-kt-translate="new-password-title">Connectez-vous</h1>
											<!--end::Title-->
											<!--begin::Text-->
											<div class="text-gray-400 fw-semibold fs-6" data-kt-translate="new-password-desc">Vous n'avez pas de compte ?</div>
											<!--end::Link-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group=-->
										<div class="fv-row mb-10" >
											<input class="form-control form-control-lg form-control-solid" type="email" placeholder="Email" name="email" <?php echo (!empty($login_mail_err)) ? 'is-invalid' : ''; ?> value="<?php echo $login_mail; ?>">
                <span class="invalid-feedback"><?php echo $login_err; ?></span>
										</div>
										<!--end::Input group=-->
										
										<!--begin::Input group-->
										<div class="mb-10 fv-row" data-kt-password-meter="true">
											<!--begin::Wrapper-->
											<div class="mb-1">
												<!--begin::Input wrapper-->
												<div class="position-relative mb-3">
													<input class="form-control form-control-lg form-control-solid" type="password" placeholder="Mot de pass" name="password" <?php echo (!empty($login_password_err)) ? 'is-invalid' : ''; ?> value="<?php echo $login_password; ?>">
                                                  <span class="invalid-feedback"><?php echo $login_err; ?></span>
													
												</div>
												<!--end::Input wrapper-->
												
											</div>
											<!--end::Wrapper-->
											<!--begin::Hint-->
											<div class="text-muted" data-kt-translate="new-password-hint"></div>
											<!--end::Hint-->
										</div>
										<!--end::Input group=-->
										
										<!--begin::Actions-->
										<div class="d-flex flex-stack mt-10">
											<!--begin::Link-->
											<input  class="btn btn-primary" type="submit" value="Se connecter">
											
										</div>
									</form>
									<!--end::Form-->
								</div>
								<!--end::Body-->
								
							</div>
							<!--end::Wrapper-->
						</div>
					</div>

				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Signup Welcome Message-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
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