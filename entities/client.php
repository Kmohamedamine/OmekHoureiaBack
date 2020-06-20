<?PHP
class client{
	private $id_client;
	private $nom_client;
	private $prenom_client;
	private $password_client;
	private $tel_client;
	private $username_client;
	private $mail_client;
	private $adresse_client;
	private $datenaissance_client;
	function __construct($nom_client,$prenom_client,$password_client,$tel_client,$username_client,$mail_client,$adresse_client,$datenaissance_client){
		
		$this->nom_client=$nom_client;
		$this->prenom_client=$prenom_client;
		$this->password_client=$password_client;
		$this->tel_client=$tel_client;
		$this->username_client=$username_client;
		$this->mail_client=$mail_client;
		$this->adresse_client=$adresse_client;
		$this->datenaissance_client=$datenaissance_client;
	}
	
	function getid_client(){
		return $this->id_client;
	}
	function getnom_client(){
		return $this->nom_client;
	}
	function getprenom_client(){
		return $this->prenom_client;
	}
	function getpassword_client(){
		return $this->password_client;
	}
	function gettel_client(){
		return $this->tel_client;
	}
	function getusername_client(){
		return $this->username_client;
	}
	function getmail_client(){
		return $this->mail_client;
	}
	function getadresse_client(){
		return $this->adresse_client;
	}
	function getdatenaissance_client(){
		return $this->datenaissance_client;
	}


	function setnom_client($nom_client){
		$this->nom_client=$nom_client;
	}
	function setprenom_client($prenom_client){
		$this->prenom_client=$prenom_client;
	}
	function setpassword_client($password_client){
		$this->password_client=$password_client;
	}
	function settel_client($tel_client){
		$this->tel_client=$tel_client;
	}
	function setusername_client($username_client){
		 $this->username_client=$username_client;
	}
	function setmail_client($mail_client){
		 $this->mail_client=$mail_client;
	}
	function setadresse_client($adresse_client){
		 $this->adresse_client=$adresse_client;
	}
	function setdatenaissance_client($datenaissance_client){
		 $this->datenaissance_client=$datenaissance_client;
	}
	
}

?>