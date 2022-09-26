
<?php 
require_once('page_components/session_setter.php');
require_once "core/config.php"; 



date_default_timezone_set('Africa/Lome');
function id_generator($length='14', $charset='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789')
{
    $str = '';
    $count = strlen($charset);
    while ($length--) {
        $str .= $charset[mt_rand(0, $count-1)];
    }

    return $str;
}
$mail_recepteur = $_SESSION['destinataire'];
try{
    $sql = "SELECT * FROM users_register WHERE email= '$mail_recepteur'";  
    $result = $pdo->query($sql);
    $row = $result->fetch();
   
	$id_recepteur = $row['user_id'];
	$email_recepteur = $row['email'];
	$name_recepteur = $row['user_name'];

	unset($result);
	

} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
} 

$name_sender = $_SESSION['user_name'];
$id_transaction = id_generator();
$transaction_date = date('d/m/Y');
$transaction_hour = date('H:i');
$transaction_status = 'pending';
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// Attempt insert query execution
	try{
		// Create prepared statement
		$sql = "INSERT INTO transactions (id_transaction, montant, transaction_date, transaction_hour, id_emetteur, id_recepteur, transaction_status) VALUES (:id_transaction, :montant, :transaction_date, :transaction_hour, :id_emetteur, :id_recepteur, :transaction_status)";
		$stmt = $pdo->prepare($sql);
		
		// Bind parameters to statement
		$stmt->bindParam(':id_transaction', $id_transaction);
		$stmt->bindParam(':montant', $_SESSION['montant']);
		$stmt->bindParam(':transaction_date',$transaction_date);
		$stmt->bindParam(':transaction_hour',$transaction_hour);
		$stmt->bindParam(':id_emetteur',$_SESSION['id']);
		$stmt->bindParam(':id_recepteur',$id_recepteur);
		$stmt->bindParam(':transaction_status',$transaction_status);
		
		$stmt->execute();

		// require 'vendor/autoload.php';
		// USE \Mailjet\Resources;
		// $mj = new \Mailjet\Client(API_USER, API_LOGIN,true,['version' => 'v3.1']);
		// $body = [
		//   'Messages' => [
		// 	[
		// 	  'From' => [
		// 		'Email' => "noreply@trustwise.easygroupe.org",
		// 		'Name' => "Trustwise"
		// 	  ],
		// 	  'To' => [
		// 		[
		// 		  'Email' => "$email_recepteur",
		// 		  'Name' => "$name_recepteur "
		// 		]
		// 	  ],
		// 	  'Subject' => "Nouvelle transaction",
		// 	  'HTMLPart' => "<h3>Vous avez une nouvelle transaction de $name_sender. </h3> <br> Connecez vous à votre compte pour plus de détails.",
		// 	  'CustomID' => "AppGettingStartedTest"
		// 	]
		//   ]
		// ];
		// $response = $mj->post(Resources::$Email, ['body' => $body]);
		// $response->success();

		
		

		header("location: transactions.php");
	} catch(PDOException $e){
		die("ERROR: Could not able to execute $sql. " . $e->getMessage());
	}

	unset($stmt);
	
	// Close connection
	unset($pdo);
	}

	function total($montant,$frais=1) {

		$total=0;
		$total = $montant + ($frais*($montant/100));
		$total = round($total, 2);
		return $total;
	}
?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->
<?php include 'page_components/head.php' ?>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="sidebar-enabled">
	<!--begin::Theme mode setup on page load-->
	
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
					<!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							<!--begin::Card-->
							<div class="card">
								<!--begin::Card body-->
								<div class="card-body">
									<!--begin::Stepper-->
									<div class="stepper stepper-links d-flex flex-column pt-15" id="kt_create_account_stepper">
										<!--begin::Nav-->
										<div class="stepper-nav mb-5">
											<!--begin::Step 1-->
											<div class="stepper-item" data-kt-stepper-element="nav">
												<h3 class="stepper-title">Payement</h3>
											</div>
											<!--end::Step 1-->
											<!--begin::Step 2-->
											<div class="stepper-item current" data-kt-stepper-element="nav">
												<h3 class="stepper-title ">Récapitulatif</h3>
											</div>
											<!--end::Step 2-->
											<!--begin::Step 3-->
											<div class="stepper-item" data-kt-stepper-element="nav">
												<h3 class="stepper-title">Finalisation</h3>
											</div>
											<!--end::Step 3-->
											
										</div>
										<!--end::Nav-->
										<!--begin::Form-->
										<div class="card">
                                        <!--begin::Body-->
									
										<form class="mx-auto w-100 pt-15 pb-10"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                        <div class="card-body p-lg-20">
                                            <!--begin::Layout-->
                                            <div class="d-flex flex-column flex-xl-row">
                                                <!--begin::Content-->
                                                <div class="flex-lg-row-fluid me-xl-10 mb-10 mb-xl-0">
                                                    <!--begin::Invoice 2 content-->
                                                    <div class="mt-n1">
                                                        
                                                        <!--begin::Wrapper-->
                                                        <div class="m-0">
                                                            <!--begin::Label-->
                                                            <div class="fw-bold fs-3 text-gray-800 mb-8">Récapitulatif de l'opération</div>
                                                            <!--end::Label-->
                                                            <!--begin::Row-->
                                                            <div class="row g-5 mb-11">
                                                               
                                                            </div>
                                                            <!--end::Row-->
                                                            <!--begin::Row-->
                                                            <div class="row g-5 mb-12">
                                                                    <!--end::Label-->
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Destinataire:</div>
                                                                    <!--end::Label-->
                                                                    <!--end::Text-->
                                                                    <sapn class="fw-bold fs-6 text-gray-800 " ><?=  $row['user_name'] ?></span> <br>
                                                                    <!--end::Text-->
                                                                    <!--end::Description-->
                                                                    <span class="fw-semibold fs-7 text-gray-700"><?=  $row['email'] ?></span><br>
																	<span class="fw-semibold fs-7 text-gray-700"><?=  $row['telephone'] ?></span>
                                                                <!--end::Col-->
                                                               
                                                            </div>
                                                            <!--end::Row-->
                                                            <!--begin::Content-->
                                                           
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Invoice 2 content-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Sidebar-->
                                                <div class="m-0">
                                                    <!--begin::Invoice 2 sidebar-->
                                                    <div class="d-print-none border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-9 bg-lighten">
                                                       
                                                        <!--begin::Title-->
                                                        <h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">Détails du paiement</h6>
                                                        <!--end::Title-->
                                                        <!--begin::Item-->
                                                        <div class="mb-6 d-flex" style="justify-content: space-between;">
                                                            <div>
															<div class="fw-semibold text-gray-600 fs-7">Méthode:</div>
                                                            <div class="fw-bold text-gray-800 fs-6">Carte bancaire</div>
															</div>
															<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="mb-6">
                                                            <div class="fw-semibold text-gray-600 fs-7">Numéro de carte :</div>
															<div class="fw-semi-bold text-gray-800 fs-6"><?= $_SESSION['card_number']  ?></div>
															
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                    </div>
                                                    <!--end::Invoice 2 sidebar-->
                                                </div>
                                                <!--end::Sidebar-->
												
                                            </div>
                                            <!--end::Layout-->

											
                                        </div>
                                        <!--end::Body-->
										<div class="flex-grow-1 w-100 ">
                                                                <!--begin::Table-->
                                                                <div class="table-responsive border-bottom mb-9">
                                                                    <table class="table mb-3">
                                                                      
                                                                    </table>
                                                                </div>
                                                                <!--end::Table-->
                                                                <!--begin::Container-->
                                                                <div class="d-flex justify-content-end">
                                                                    <!--begin::Section-->
                                                                    <div class="w-100">
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-stack mb-3">
                                                                            <!--begin::Accountname-->
                                                                            <div class="fw-semibold pe-10 text-gray-600 fs-7">Sous total:</div>
                                                                            <!--end::Accountname-->
                                                                            <!--begin::Label-->
                                                                            <div class="text-end fw-bold fs-6 text-gray-800"><?= $_SESSION['montant'].' FCFA'?></div>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-stack mb-3">
                                                                            <!--begin::Accountname-->
                                                                            <div class="fw-semibold pe-10 text-gray-600 fs-7">Frais (1%)</div>
                                                                            <!--end::Accountname-->
                                                                            <!--begin::Label-->
                                                                            <div class="text-end fw-bold fs-6 text-gray-800"><?= total( $_SESSION['montant']) - $_SESSION['montant'].' FCFA' ?></div>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                       
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-stack">
                                                                            <!--begin::Code-->
                                                                            <div class="fw-bold pe-10 text-warning fs-7">Total</div>
                                                                            <!--end::Code-->
                                                                            <!--begin::Label-->
                                                                            <div class="text-end fw-bold  text-gray-800"><?=   total( $_SESSION['montant']).' FCFA' ?></div>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Container-->
                                                            </div>
                                      </div>
										<!--end::Form-->
										<div class="d-flex flex-stack flex-end pt-15 px-15">
												<!--begin::Wrapper-->
												
												<span></span>
												<input  class="btn btn-primary" type="submit" value="Continuer">
											</div>
										</form>
									</div>
									<!--end::Stepper-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
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