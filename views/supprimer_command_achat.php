<?PHP
include "C:/xampp/htdocs/OmekHoureiaBack/core/command_achatC.php";
$commandc=new commandc();
if (isset($_POST["code_achat"])){
	$commandc->supprimer_command_achat($_POST["code_achat"]);
	header('Location: ../');
}

?> 