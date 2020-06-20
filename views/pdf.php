 <?php
   
    require("fpdf/fpdf.php");
    $db=new PDO('mysql:host=localhost;dbname=omek_houria', 'root', '');  
   
    class myPDF extends FPDF
    {
   
    function header()
    {
    $this->SetFont("Arial","B",14);
            $this->Cell(10,10,"Omek Houria",'C');
            $this->Ln(20);
            $this->Cell(5,5,"liste des Livraisons:",'C');
            $this->ln();
    }
    function headertable()
    {
    $this->SetFont('Times','B',12);
    $this->Cell(40,10,'idclient',1,0,'C');
    $this->Cell(20,10,'idlivreur',1,0,'C');
    $this->Cell(40,10,'adresse',1,0,'C');
    $this->Cell(40,10,'numtel',1,0,'C');
    $this->Cell(60,10,'numcommande',1,0,'C');
    $this->ln();
    }
    function viewsTable($db)
    {
    $this->SetFont('times','',12);
    $stmt = $db->query("SElECT * From livraison");
            while($data = $stmt->fetch(PDO::FETCH_OBJ))
            {
       $this->Cell(40,10,$data->idclient,1,0,'C');
       $this->Cell(20,10,$data->idlivreur,1,0,'L');
       $this->Cell(40,10,$data->adresse,1,0,'L');
       $this->Cell(40,10,$data->numtel,1,0,'C');
       $this->Cell(60,10,$data->numcommande,1,0,'C');
       $this->ln();
            }

    }
    }
    $pdf=new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headertable();
    $pdf->viewsTable($db);
    $pdf->output("liste_des_livraisons.pdf", "D");


?>