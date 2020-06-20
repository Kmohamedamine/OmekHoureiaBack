<?PHP
include "../core/clientc.php";
$clientc=new clientc();
if (isset($_POST["id_carte"])){
	$clientc->supprimercarte($_POST["id_carte"]);
	header('Location: afficherclient.php');
}

?>