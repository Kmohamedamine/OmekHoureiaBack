<?php
include "../core/command_achatC.php";
include "../entities/command_achat.php";



if ( isset($_POST['qte']) and isset($_POST['prix_unitaire']) and isset($_POST['code_ing']) and isset($_POST['id_fourn'])  ){
	$command_achat1=new command_achat($_POST['qte'],$_POST['prix_unitaire'],$_POST['code_ing'],$_POST['id_fourn']);

	$date_debut = new DateTime();
	$date_debut->setTimezone(new DateTimeZone('GMT+1'));
	$command_achat1->setdate_debut($date_debut -> format('Y-m-d H:i:s'));

	$hours = 48;
	$date_fin = new DateTime();
	$date_fin->setTimezone(new DateTimeZone('GMT+1'));
	$date_fin->add(new DateInterval("PT{$hours}H"));
	$command_achat1->setdate_arriver($date_fin -> format('Y-m-d H:i:s'));

	$commandc1=new commandc();
	$commandc1->ajouter_command_achat($command_achat1);
	header('Location: ../');
}


?>
<HTML>
<head>
</head>
<body>
<form method="POST" action="ajouter_command_achat.php">
<table>
<caption>Ajouter un commande</caption>
<tr>
<td>Quantité a acheter</td>
<td><input type="number" name="qte"></td>
</tr>
<tr>
<td>Prix unitaire </td>
<td><input type="number" step="0.01" name="prix_unitaire"></td>
</tr>
<tr>
<td>Code de l'ingredient a acheter</td>
<td><input type="number" name="code_ing"></td>
</tr>
<tr>
<td>Identifiant de fournisseur</td>
<td><input type="number" name="id_fourn"></td>
</tr>
<tr>
<td> <input type="reset" name="annuler" value="Annuler"> </td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
</table>
</form>
</body>
</HTMl>