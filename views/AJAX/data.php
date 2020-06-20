<?php 

$input = $_GET['text'];

$conn = mysqli_connect("localhost", "root", "", "gestionclient");
$sql = "SELECT * FROM client where username_client like '%".$input."%' ";
$result = mysqli_query($conn, $sql);

$row_cnt = $result->num_rows;
if ($row_cnt==0)
	{
		echo json_encode("not found");
	}
else
	{	
		while($row = $result->fetch_array())
            {
            $rows[] = $row;
            }

        echo json_encode($rows);
    }
    




?>