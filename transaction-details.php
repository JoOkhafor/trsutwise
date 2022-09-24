
<?php require_once('page_components/session_setter.php');
require_once "core/config.php"; 

if(isset($_GET["tr_id"]) && !empty(trim($_GET["tr_id"]))){
 
    // Prepare a select statement
    $sql = "SELECT * FROM `transactions` WHERE id_transaction= :id " ;
    
    if($stmt = $pdo->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":id", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["tr_id"]);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            if($stmt->rowCount() == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                // Retrieve individual field value
                $montant = $row["montant"];
                $date_tr = $row["transaction_date"];
                $id_emetteur = $row["id_emetteur"];
                $id_recepteur = $row["id_recepteur"];
                $transaction_status = $row["transaction_status"];
            } 
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    unset($stmt);
    

	function total($montant,$frais=1) {

		$total=0;
		$total = $montant + ($frais*($montant/100));
		$total = round($total, 2);
		return $total;
	}
	
		$total = total($row["montant"]);
		$badge ='';
	


	$sender = "SELECT * FROM `users_register` WHERE user_id= :id " ;
    
    if($stmt = $pdo->prepare($sender)){
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":id", $param_id);
        
        // Set parameters
        $param_id = trim($id_emetteur);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            if($stmt->rowCount() == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                // Retrieve individual field value
                $nom_emmeteur = $row["user_name"];
                $mail_emetteur = $row["email"];
                $phone_emetteur = $row["telephone"];
            } 
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    unset($sender);


	$reciver = "SELECT * FROM `users_register` WHERE user_id= :id " ;
    
    if($stmt = $pdo->prepare($reciver)){
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":id", $param_id);
        
        // Set parameters
        $param_id = trim($id_recepteur);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            if($stmt->rowCount() == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                // Retrieve individual field value
                $nom_reciver = $row["user_name"];
                $mail_reciver = $row["email"];
                $phone_reciver = $row["telephone"];
            } 
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    unset($sender);

    // Close connection
    unset($pdo);


} 

?>



<?php
// Include config file
// require_once "config.php";
 
// // Define variables and initialize with empty values
// $name = $address = $salary = "";
// $name_err = $address_err = $salary_err = "";
 
// // Processing form data when form is submitted
// if(isset($_POST["id"]) && !empty($_POST["id"])){
//     // Get hidden input value
//     $id = $_POST["id"];
    
//     // Validate name
//     $input_name = trim($_POST["name"]);
//     if(empty($input_name)){
//         $name_err = "Please enter a name.";
//     } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
//         $name_err = "Please enter a valid name.";
//     } else{
//         $name = $input_name;
//     }
    
//     // Validate address address
//     $input_address = trim($_POST["address"]);
//     if(empty($input_address)){
//         $address_err = "Please enter an address.";     
//     } else{
//         $address = $input_address;
//     }
    
//     // Validate salary
//     $input_salary = trim($_POST["salary"]);
//     if(empty($input_salary)){
//         $salary_err = "Please enter the salary amount.";     
//     } elseif(!ctype_digit($input_salary)){
//         $salary_err = "Please enter a positive integer value.";
//     } else{
//         $salary = $input_salary;
//     }
    
//     // Check input errors before inserting in database
//     if(empty($name_err) && empty($address_err) && empty($salary_err)){
//         // Prepare an update statement
//         $sql = "UPDATE employees SET name=:name, address=:address, salary=:salary WHERE id=:id";
 
//         if($stmt = $pdo->prepare($sql)){
//             // Bind variables to the prepared statement as parameters
//             $stmt->bindParam(":name", $param_name);
//             $stmt->bindParam(":address", $param_address);
//             $stmt->bindParam(":salary", $param_salary);
//             $stmt->bindParam(":id", $param_id);
            
//             // Set parameters
//             $param_name = $name;
//             $param_address = $address;
//             $param_salary = $salary;
//             $param_id = $id;
            
//             // Attempt to execute the prepared statement
//             if($stmt->execute()){
//                 // Records updated successfully. Redirect to landing page
//                 header("location: index.php");
//                 exit();
//             } else{
//                 echo "Oops! Something went wrong. Please try again later.";
//             }
//         }
         
//         // Close statement
//         unset($stmt);
//     }
    
//     // Close connection
//     unset($pdo);
// } else{
//     // Check existence of id parameter before processing further
//     if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
//         // Get URL parameter
//         $id =  trim($_GET["id"]);
        
//         // Prepare a select statement
//         $sql = "SELECT * FROM employees WHERE id = :id";
//         if($stmt = $pdo->prepare($sql)){
//             // Bind variables to the prepared statement as parameters
//             $stmt->bindParam(":id", $param_id);
            
//             // Set parameters
//             $param_id = $id;
            
//             // Attempt to execute the prepared statement
//             if($stmt->execute()){
//                 if($stmt->rowCount() == 1){
//                     /* Fetch result row as an associative array. Since the result set
//                     contains only one row, we don't need to use while loop */
//                     $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
//                     // Retrieve individual field value
//                     $name = $row["name"];
//                     $address = $row["address"];
//                     $salary = $row["salary"];
//                 } else{
//                     // URL doesn't contain valid id. Redirect to error page
//                     header("location: error.php");
//                     exit();
//                 }
                
//             } else{
//                 echo "Oops! Something went wrong. Please try again later.";
//             }
//         }
        
//         // Close statement
//         unset($stmt);
        
//         // Close connection
//         unset($pdo);
//     }  else{
//         // URL doesn't contain id parameter. Redirect to error page
//         header("location: error.php");
//         exit();
//     }
// }
?>


<?php  if ($transaction_status === 'pending'): ?>
		<?php $badge = ' <span class="badge badge-light-warning">En attente</span>' ?>
	<?php endif; ?>
	<?php  if ($transaction_status === 'delete_pending'): ?>
		<?php $badge = '<span class="badge badge-light-danger">En suspension</span>' ?>
		
	<?php endif; ?>
	<?php  if ($transaction_status === 'done'): ?>
		<?php $badge = ' <span class="badge badge-light-succes">Finalisé</span>' ?>
	<?php endif; ?>

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
						<div class="container-xxl">
							
							
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body">
									<!--begin::Layout-->
									<div class="d-flex flex-column flex-xl-row p-7">
										<!--begin::Content-->
										<div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
											<!--begin::Tickets-->
											<div class="mb-0">
                                                <div class="mt-n1">
                                                       
                                                        <!--begin::Wrapper-->
                                                        <div class="m-0">
                                                            <!--begin::Label-->
                                                            <div class="fw-bold fs-3 text-gray-800 mb-8">ID de transaction #<?=  $_GET["tr_id"] ?> </div>
                                                            <!--end::Label-->
                                                            <!--begin::Row-->
                                                            <div class="row g-5 mb-11">
                                                                <!--end::Col-->
                                                                <div class="col-sm-6">
                                                                    <!--end::Label-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Date de création:</div>
                                                                    <!--end::Label-->
                                                                    <!--end::Col-->
                                                                    <div class="fw-bold fs-6 text-gray-800"><?= $date_tr ?></div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Col-->
                                                                <!--end::Col-->
                                                                <div class="col-sm-6">
                                                                    <!--end::Label-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Status:</div>
                                                                    <!--end::Label-->
                                                                    <!--end::Info-->
                                                                    <div class="fw-bold fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                                                       <?= $badge ?> 
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                            <!--begin::Row-->
                                                            <div class="row g-5 mb-12">
                                                                <!--end::Col-->
                                                                <div class="col-sm-6">
                                                                    <!--end::Label-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-5">Envoyé par:</div>
                                                                    <!--end::Label-->
                                                                    <!--end::Text-->
                                                                    <div class="fw-bold fs-6 text-gray-800 mb-2" style ="text-transform: capitalize;">
																		<?= $nom_emmeteur ?>
																	</div>
                                                                    <!--end::Text-->
                                                                    <!--end::Description-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-2"><?= $phone_emetteur ?></div>
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-2"><?= $mail_emetteur ?></div>
                                                                    <!--end::Description-->
                                                                </div>
                                                                <!--end::Col-->
                                                                <!--end::Col-->
                                                                <div class="col-sm-6">
                                                                    <!--end::Label-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-5">Reçu  par:</div>
                                                                    <!--end::Label-->
																	<div class="fw-bold fs-6 text-gray-800 mb-2" style ="text-transform: capitalize;">
																		<?= $nom_reciver ?>
																	</div>
                                                                    <!--end::Text-->
                                                                    <!--end::Description-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-2"><?= $phone_reciver  ?></div>
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-2"><?= $mail_reciver  ?></div>
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                            <!--begin::Content-->
                                                            
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
												<!--end::Tickets List-->
												<ul class="nav flex-wrap border-transparent fw-bold">
                                                     <!--begin::Nav item-->
                                                     <li class="nav-item my-1">
                                                        <a class="btn btn-success btn-active-secondary btn-active-color-succes fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="../../demo3/dist/apps/support-center/tickets/list.html">Finaliser</a>
                                                    </li> 
                                                    <!--begin::Nav item-->
                                                    <li class="nav-item my-1">
                                                        <a class="btn btn-danger btn-active-secondary btn-active-color-danger fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="../../demo3/dist/apps/support-center/overview.html">Annuler</a>
                                                    </li>
                                                    <!--end::Nav item-->
                                                   
                                                   
                                                </ul>
											</div>
											<!--end::Tickets-->
										</div>
										<!--end::Content-->
										<!--begin::Sidebar-->
										<div class="flex-column flex-lg-row-auto w-100 mw-lg-300px mw-xxl-350px">
											<!--begin::More channels-->
											<div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
												<!--begin::Title-->
												<h2 class="text-dark fw-bold mb-11">Facture</h2>
												<!--end::Title-->
												<!--begin::Item-->
                                                <div class="mb-7">
                                                    <!--begin::Title-->
                                                
                                                    <!--end::Title-->
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center mb-1">
                                                        <!--begin::Name-->
														<span class="fw-bold text-gray-800me-2">Montant du transfert: </a>
                                                        <!--end::Name-->
                                                        <!--begin::Status-->
                                                        <span class="text-gray-600"><?= ''.$montant.' FCFA' ?></span>
                                                        <!--end::Status-->
                                                    </div>
                                                    <!--end::Details-->
													<div class="d-flex align-items-center mb-1">
                                                        <!--begin::Name-->
                                                        <span class="fw-bold text-gray-800 me-2">Frais: </a>
                                                        <!--end::Name-->
                                                        <!--begin::Status-->
                                                        <span class="text-gray-600"><?= ''.$total - $montant.' FCFA' ?></span>
                                                        <!--end::Status-->
                                                    </div>
                                                    <!--end::Details-->

													 <!--end::Details-->
													 <div class="d-flex align-items-center mb-1">
                                                        <!--begin::Name-->
                                                        <span class="fw-bold text-gray-800 me-2">Total: </a>
                                                        <!--end::Name-->
                                                        <!--begin::Status-->
                                                        <span class="text-gray-600"><?php echo ''.$total.' FCFA' ?></span>
                                                        <!--end::Status-->
                                                    </div>
                                                    <!--end::Details-->
                                                   
                                                </div>
                                                <!--end::Section-->
                                                
                                                <!--end::Seperator-->
                                                <!--begin::Section-->
                                                <div class="mb-10">
                                                    <!--begin::Title-->
                                                    <h5 class="mb-3">Méthode de payement</h5>
                                                    <!--end::Title-->
                                                    <!--begin::Details-->
                                                    <div class="mb-0">
                                                        <!--begin::Card info-->
                                                        <div class="fw-semibold text-gray-600 d-flex align-items-center mb-2">Mastercard
                                                        <img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px ms-2" alt=""></div>
                                                        <!--end::Card info-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Section-->
											</div>
											<!--end::More channels-->
										</div>
										<!--end::Sidebar-->
									</div>
									<!--end::Layout-->
								</div>
								<!--end::Card body-->
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
					<div class="swal2-html-container" id="swal2-html-container" style="display: block;">Are you sure you
						want to delete Emma Smith?</div><input class="swal2-input" style="display: none;"><input
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
							style="display: inline-block;">Yes, delete!</button><button type="button" class="swal2-deny"
							aria-label="" style="display: none;">No</button><button type="button"
							class="swal2-cancel btn fw-bold btn-active-light-primary" aria-label=""
							style="display: inline-block;">No, cancel</button>
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