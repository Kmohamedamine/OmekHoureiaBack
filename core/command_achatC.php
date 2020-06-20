<?PHP
include "C:/xampp/htdocs/OmekHoureiaBack/config.php";
class commandc {
function afficher_command_achat($command_achat){
		echo "code_achat: ".$command_achat->getcode_achat()."<br>";
		echo "qte: ".$command_achat->getqte()."<br>";
		echo "prix_unitaire: ".$command_achat->getprix_unitaire()."<br>";
		echo "date_debut: ".$command_achat->getdate_debut()."<br>";
		echo "date_arriver: ".$command_achat->getdate_arriver()."<br>";
        echo "code_ing: ".$command_achat->getcode_ing()."<br>";
        echo "id_fourn: ".$command_achat->getid_fourn()."<br>";
	}
	function ajouter_command_achat($command_achat){
		$sql="INSERT INTO command_achat (qte,prix_unitaire,date_debut,date_arriver,code_ing,id_fourn) VALUES (:qte,:prix_unitaire ,:date_debut ,:date_arriver,:code_ing,:id_fourn)";
		$sql2= "UPDATE ingredient SET qte_ing=:qte+qte_ing  WHERE code_ing=:code_ing";
		$sql3 = "INSERT INTO facture (prix_total, code_achat) VALUES ((:qte*:prix_unitaire), code_achat)";
		
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req2=$db->prepare($sql2);
			$req3=$db->prepare($sql3);
			$qte=$command_achat->getqte();
			$prix_unitaire=$command_achat->getprix_unitaire();
			$code_ing=$command_achat->getcode_ing();
			$id_fourn=$command_achat->getid_fourn();
			$date_debut=$command_achat->getdate_debut();
			$date_arriver=$command_achat->getdate_arriver();
			$req->bindValue(':qte',$qte);
			$req2->bindValue(':qte',$qte);
			$req->bindValue(':prix_unitaire',$prix_unitaire);
			$req->bindValue(':code_ing',$code_ing);	
			$req2->bindValue(':code_ing',$code_ing);	
			$req->bindValue(':id_fourn',$id_fourn);
			$req->bindValue(':date_debut',$date_debut);
			$req->bindValue(':date_arriver',$date_arriver);
			$req3->bindValue(':qte',$qte);
			$req3->bindValue(':prix_unitaire',$prix_unitaire);
			$req->execute();
			$req2->execute();
			$req3->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	/*function calcule_prix ($code_achat){
		$sql="SELECT (qte)*(prix_unitaire)
		FROM command_achat
		WHERE code_achat=:code_achat;";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':code_achat',$code_achat);
		try{
			$prix=$db->query($sql);
			return $prix;
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}*/

	function affichercommand_achat (){
		$sql="SELECT  code_achat, qte, prix_unitaire, date_debut, date_arriver, (SELECT libelle_ing FROM ingredient i  where i.code_ing=c.code_ing) AS ingredient, (SELECT CONCAT_WS (' ', nom_fourn, prenom_fourn) AS nom_prenom FROM fournisseur f  WHERE f.id_fourn=c.id_fourn ) AS Nom_Prenom FROM command_achat c order by code_achat";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimer_command_achat($code_achat){
		$sql="DELETE FROM command_achat WHERE code_achat= :code_achat";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':code_achat',$code_achat);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifier_command_achat($command_achat,$code_achat){
		var_dump($code_achat);
		$sql="UPDATE command_achat SET qte=:qte,prix_unitaire=:prix_unitaire , code_ing=:code_ing , id_fourn=:id_fourn 
						WHERE code_achat=:code_achat";
		
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $qte=$command_achat->getqte();
        $prix_unitaire=$command_achat->getprix_unitaire();
        $code_ing=$command_achat->getcode_ing();
        $id_fourn=$command_achat->getid_fourn();
		
		$req->bindValue(':code_achat',$code_achat);
		$req->bindValue(':qte',$qte);
		$req->bindValue(':prix_unitaire',$prix_unitaire);
        $req->bindValue(':code_ing',$code_ing);
        $req->bindValue(':id_fourn',$id_fourn);		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}

	function rechercher_command_par_ingredient_code_fournisseur($recherche){
		$sql="SELECT * FROM command_achat  WHERE code_achat LIKE '%$recherche%' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recuperer_command_achat($code_achat){
		$sql="SELECT * FROM command_achat WHERE code_achat=$code_achat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function calculer_prix($code_achat)
	{
		$sql= "SELECT prix FROM command_achat WHERE code_achat=$code_achat";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{
			$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	
	/*function rechercherListecartes($id_client){
		$sql="SELECT * from carte where id_client=$id_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}

?>