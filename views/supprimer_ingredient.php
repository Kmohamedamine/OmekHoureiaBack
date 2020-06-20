<?PHP
include "../core/ingredientc.php";
$ingredientc=new ingredientc();
if (isset($_POST["code_ing"])){
	$ingredientc->supprimer_ingredient($_POST["code_ing"]);
	header('Location: tables_affichage.php');
}

?> 