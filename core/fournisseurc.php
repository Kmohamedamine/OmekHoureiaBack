<?PHP
include "../config.php";
class fournisseurc {
function afficher_fournisseur($fournisseur){
		echo "id_fourn: ".$fournisseur->getid_fourn()."<br>";
		echo "nom_fourn: ".$fournisseur->getnom_fourn()."<br>";
		echo "prenom_fourn: ".$fournisseur->getprenom_fourn()."<br>";
		echo "phone_number: ".$fournisseur->getphone_number()."<br>";
		echo "email_fourn: ".$fournisseur->getemail_fourn()."<br>";
	}
	function ajouterfournisseur($fournisseur){
		$sql="INSERT INTO fournisseur (nom_fourn,prenom_fourn,phone_number,email_fourn) VALUES (:nom_fourn,:prenom_fourn,:phone_number,:email_fourn)";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$nom_fourn=$fournisseur->getnom_fourn();
		$prenom_fourn=$fournisseur->getprenom_fourn();
        $phone_number=$fournisseur->getphone_number();
        $email_fourn=$fournisseur->getemail_fourn();
		$req->bindValue(':nom_fourn',$nom_fourn);
		$req->bindValue(':prenom_fourn',$prenom_fourn);
		$req->bindValue(':phone_number',$phone_number);
		$req->bindValue(':email_fourn',$email_fourn);	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherfournisseur (){
		$sql="SELECT * FROM fournisseur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimer_fournisseur($id_fourn){
		$sql="DELETE FROM fournisseur WHERE id_fourn= :id_fourn";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_fourn',$id_fourn);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifier_fournisseur($fournisseur,$id){
		$sql="UPDATE fournisseur SET nom_fourn=:nom_fourn , prenom_fourn=:prenom_fourn , phone_number=:phone_number 
		, email_fourn=:email_fourn  WHERE id_fourn=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		
		$nom_fourn=$fournisseur->getnom_fourn();
		$prenom_fourn=$fournisseur->getprenom_fourn();
        $phone_number=$fournisseur->getphone_number();
		$email_fourn=$fournisseur->getemail_fourn();
		
		$req->bindValue(':id',$id);
		$req->bindValue(':nom_fourn',$nom_fourn);
		$req->bindValue(':prenom_fourn',$prenom_fourn);
		$req->bindValue(':phone_number',$phone_number);
		$req->bindValue(':email_fourn',$email_fourn);	
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function rechercher_fournisseur_par_nom_prenom_code($recherche){
		$sql="SELECT * FROM fournisseur  WHERE nom_fourn LIKE '%$recherche%' 
		OR prenom_fourn LIKE '%$recherche%' 
		OR id_fourn LIKE '%$recherche%'  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recuperer_fournisseur($id_fourn){
		$sql="SELECT * FROM fournisseur WHERE id_fourn=$id_fourn";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
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