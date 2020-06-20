<?PHP
include "../core/clientc.php";
$clientc=new clientc();
if (isset($_POST["id"])){
	$clientc->supprimerclient($_POST["id"]);
	header('Location: afficherclient.php');
}

?>