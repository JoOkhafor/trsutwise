<?php
require_once ('core/config.php');
$montant_transaction = "";
$mail_destinataire = "";
$montant_transaction_err = $mail_destinataire_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty(trim($_POST["montant_transaction"]))){
		$montant_transaction_err = "Veuillez entrer un montant";
	} 
        else{
		$montant_transaction = trim($_POST["montant_transaction"]);

    $_SESSION['montant'] = $montant_transaction;
	}

    if(empty(trim($_POST["mail_destinataire"]))){
		$mail_destinataire_err = "Veuillez entrer un destinataire";
	} 
	elseif(!filter_var(trim($_POST["mail_destinataire"]), FILTER_VALIDATE_EMAIL)){
		$mail_destinataire_err = "Email non valide";} 
	else{
			// Prepare a select statement
			$sql = "SELECT email FROM users_register WHERE email = :email";
			
			if($stmt = $pdo->prepare($sql)){
				// Bind variables to the prepared statement as parameters
				$stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
				
				// Set parameters
				$param_email = trim($_POST["mail_destinataire"]);
				
				// Attempt to execute the prepared statement
				if($stmt->execute()){
					if($stmt->rowCount() <= 0){
						$mail_destinataire_err = "Ce mail n'est associé à aucun compte";
					}  else{
						$mail_destinataire = trim($_POST["mail_destinataire"]);
						$_SESSION['destinataire'] = $mail_destinataire;
					}
				} else{
					echo "Oops! Something went wrong. Please try again later.";
				}
	
				// Close statement
				unset($stmt);
			}
		}
   
    if(empty($montant_transaction_err) && empty($mail_destinataire_err)){
        header("location: new-transaction-fund.php");
    }
    


}
