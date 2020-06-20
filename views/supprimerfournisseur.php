<?PHP
include "../core/fournisseurc.php";
$fournisseurc=new fournisseurc();
if (isset($_POST["id_fourn"])){
	$fournisseurc->supprimer_fournisseur($_POST["id_fourn"]);
	header('Location: tables_affichage.php');
}

?> 