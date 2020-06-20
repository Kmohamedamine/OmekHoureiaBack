<?PHP
//include "../config.php";
include "../core/fournisseurc.php";
class ingredientc {
function afficher_ingredient($ingredient){
		echo "id_ing: ".$ingredient->getid_ing()."<br>";
		echo "libelle_ing: ".$ingredient->getlibelle_ing()."<br>";
		echo "qte_ing: ".$ingredient->getqte_ing()."<br>";
		
	}
	function ajouter_ingredient($ingredient){
		$sql="INSERT INTO ingredient (libelle_ing) VALUES (:libelle_ing)";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		
		$req->bindValue(':libelle_ing',$ingredient);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function chercher_par_nom ($libelle_ing)
	{
		$sql=" SELECT * FROM ingredient where libelle_ing=:libelle_ing";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':libelle_ing',$libelle_ing);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}
	
	function afficher_ingredient2 (){
		$sql="SELECT * FROM ingredient";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimer_ingredient($id_ing){
		$sql="DELETE FROM ingredient WHERE code_ing= :id_ing";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_ing',$id_ing);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifier_ingredient($ingredient,$code_ing){
		$sql="UPDATE ingredient SET libelle_ing=:libelle_ing , qte_ing=:qte_ing WHERE code_ing=:code_ing";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$qte_ing=$ingredient->getqte_ing();
		$libelle_ing=$ingredient->getlibelle_ing();
		
		$req->bindValue(':code_ing',$code_ing);
		$req->bindValue(':qte_ing',$qte_ing);
		$req->bindValue(':libelle_ing',$libelle_ing);
	
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}

	function rechercher_ingredient_par_lib_code($recherche){
		$sql="SELECT * FROM ingredient
      WHERE libelle_ing LIKE '%$recherche%'
      OR code_ing LIKE '%$recherche%' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function recuperer_ingredient($id_ing){
		$sql="SELECT * FROM ingredient WHERE code_ing=$id_ing";
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