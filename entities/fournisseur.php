<?PHP
class fournisseur {
	private $id_fourn;
	private $nom_fourn;
	private $prenom_fourn;
	private $phone_number;
	private $email_fourn;
	function __construct($nom_fourn,$prenom_fourn,$phone_number,$email_fourn){
		$this->nom_fourn=$nom_fourn;
		$this->prenom_fourn=$prenom_fourn;
		$this->phone_number=$phone_number;
		$this->email_fourn=$email_fourn;
	}
	
	function getid_fourn(){
		return $this->id_fourn;
	}
	function getnom_fourn(){
		return $this->nom_fourn;

	}
	function getprenom_fourn(){
		return $this->prenom_fourn;

	}
	function getphone_number(){
		return $this->phone_number;
	}
	function getemail_fourn(){
		return $this->email_fourn;
	}




	function setnom_fourn($nom_fourn){
		$this->nom_fourn=$nom_fourn;
	}

	function setprenom_fourn($prenom_fourn){
		$this->prenom_fourn=$prenom_fourn;
	}

	function setphone_number($phone_number){
		$this->phone_number=$phone_number;
	}
	
	function setemail_fourn($email_fourn){
		$this->email_fourn=$email_fourn;
	}

	
}

?>
