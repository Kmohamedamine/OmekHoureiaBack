<?PHP

class command_achat {
	private $code_achat;
	private $qte;
	private $prix_unitaire;
	private $date_debut;
	private $date_arriver;
    private $code_ing;
    private $id_fourn;
	function __construct($qte,$prix_unitaire,$code_ing,$id_fourn){
		$this->qte=$qte;
		$this->prix_unitaire=$prix_unitaire;
        $this->code_ing=$code_ing;
        $this->id_fourn=$id_fourn;
	}
    
    function getcode_achat(){
        return $this->code_achat;
    }
	function getid_fourn(){
		return $this->id_fourn;
	}
	function getqte(){
		return $this->qte;

	}function getprix_unitaire(){
		return $this->prix_unitaire;
	}
	function getdate_debut(){
        return $this->date_debut;
	}
	function getdate_arriver(){
        return $this->date_arriver;
    }
	function getcode_ing(){
		return $this->code_ing;
    }
    


    function setid_fourn()
    {
        return $this->id_fourn;
	}

	function setdate_debut($date_debut)
    {
        return $this->date_debut = $date_debut;
	}
	function setdate_arriver($date_arriver)
    {
        return $this->date_arriver=$date_arriver;
    }

	function setqte($qte){
		$this->qte=$qte;
	}

	function setprix_unitaire($prix_unitaire){
		$this->prix_unitaire=$prix_unitaire;
	}
	
	function setcode_ing($code_ing){
		$this->code_ing=$code_ing;
	}

	
}

?>
