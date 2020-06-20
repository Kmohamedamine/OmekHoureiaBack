<?PHP
class ingredient {
	private $id_ing;
	private $libelle_ing;
	private $qte_ing;
	
    function __construct($libelle_ing,$qte_ing){
        $this->libelle_ing=$libelle_ing;
        $this->qte_ing=$qte_ing;
		
		
    }
	
	function getid_ing(){
		return $this->id_ing;
	}
	function getlibelle_ing(){
		return $this->libelle_ing;

	}
	function getqte_ing(){
		return $this->qte_ing;

	}
	



	function setlibelle_ing($libelle_ing){
		$this->libelle_ing=$libelle_ing;
	}

	function setqte_ing($qte_ing){
		$this->qte_ing=$qte_ing;
	}

	

	
}

?>
