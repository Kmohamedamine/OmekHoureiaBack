<?PHP
class livraison{
	private $idclient;
	private $idlivreur;
	private $adresse;
	private $numtel;
	private $numcommande;
	function __construct($idclient,$idlivreur,$adresse,$numtel,$numcommande){
		$this->idclient=$idclient;
		$this->idlivreur=$idlivreur;
		$this->adresse=$adresse;
		$this->numtel=$numtel;
		$this->numcommande=$numcommande;
	}
	
	function getidclient(){
		return $this->idclient;
	}
	function getidlivreur(){
		return $this->idlivreur;
	}
	function getadresse(){
		return $this->adresse;
	}
	function getnumtel(){
		return $this->numtel;
	}
	function getnumcommande(){
		return $this->numcommande;
	}

	function setidlivreur($idlivreur){
		$this->idlivreur=$idlivreur;
	}
	function setadresse($adresse){
		$this->adresse;
	}
	function setnumtel($numtel){
		$this->numtel;
	}
	function setnumcommande($numcommande){
		$this->numcommande;
	}
	
}

?>