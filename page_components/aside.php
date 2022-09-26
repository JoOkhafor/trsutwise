<?php
 function current_page(){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    return $url; 
  }

$aside_form = true;
  if (current_page() != "new-transaction-fund.php" && current_page() != "new-transaction-summary.php" && current_page() != "transaction-done.php") {
	require_once('core/new_transaction_process.php');
    $aside_form = false;

  }


?>


<div id="kt_aside create--new__transaction" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside"
data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
data-kt-drawer-toggle="#kt_aside_toggle">
<!--begin::Brand-->
<div class="aside-logo flex-column-auto px-9 mb-9" id="kt_aside_logo">
    <!--begin::Logo-->
    <a href="index.php">
        <img alt="Logo" src="assets/media/logos/demo3.svg" class="h-40px logo theme-light-show" />
        <img alt="Logo" src="assets/media/logos/demo3-dark.svg" class="h-40px logo theme-dark-show" />
    </a>
    <!--end::Logo-->
</div>
<!--end::Brand-->
<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid ps-5 pe-3 mb-9" id="kt_aside_menu">
    <!--begin::Aside Menu-->
    <div class="w-100 hover-scroll-overlay-y d-flex new-transaction-wrapper pe-2"
        id="kt_aside_menu_wrapper" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
        data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper"
        data-kt-scroll-offset="100">
        <!--begin::Menu-->
      <?php if (!($aside_form)):?>
        <form class="pt-1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <!--begin::Heading-->
            <h3 class="fw-semibold text-dark mb-7">Creer une nouvelle <br> transaction</h3>
            <!--end::Heading-->


            <!--begin::Input group-->
            <div class="mb-5 text-start">
                <input type="text" name="montant_transaction"
                    class="form-control form-control-sm form-control-solid" placeholder="Montant" <?php echo (!empty($montant_transaction_err)) ? 'is-invalid' : ''; ?> value="<?php echo $montant_transaction; ?>">
                    <span class="text-danger py-2 mt-1"><?php echo $montant_transaction_err; ?></span>
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-5 text-start">
                <input type="text" name="mail_destinataire"
                    class="form-control form-control-sm form-control-solid"
                    placeholder="Email du destinataire" <?php echo (!empty($mail_destinataire_err)) ? 'is-invalid' : ''; ?> value="<?php echo $mail_destinataire; ?>">
                    <p class="text-danger"><?php echo $mail_destinataire_err; ?></p>
            </div>
            <!--end::Input group-->


            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="d-flex justify-content-end">
            <input  class="btn btn-primary" type="submit" value="Suivant">
            </div>
            <!--end::Actions-->
        </form>

    <?php endif ?> 

    <?php if($aside_form): ?>
        <div class="card-body d-flex flex-column flex-center">
											<!--begin::Heading-->
											<div class="mb-2">
												<!--begin::Title-->
												<h1 class="fw-semibold text-gray-800 text-center lh-lg">Encore quelques étapes</h1>
												<!--end::Title-->
												<!--begin::Illustration-->
												<div class="py-10 text-center">
													<img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="">
													<img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="">
												</div>
												<!--end::Illustration-->
											</div>
											<!--end::Heading-->
											
										</div>
    <?php endif; ?>
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside menu-->

</div>