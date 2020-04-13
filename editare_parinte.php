<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
	
body {
	
 background-image: url("parent.jpg");
	background-repeat: no-repeat;
  height: 100%;
	background-size: cover;
}
	.nume_parinte{
		height: 40px;
    width: 30%;
		position: absolute;
   bottom: 450px;
		left:150px;
		border-color: maroon;
		border-width: 2;
   
	}
	.prenume_parinte{
		height: 40px;
    width: 30%;
		position: absolute;
   bottom: 380px;
		left:150px;
		border-color: maroon;
		border-width: 2;
   
	}
	.meserie_parinte{
		height: 40px;
    width: 30%;
		position: absolute;
   bottom: 310px;
		left:150px;
		border-color: maroon;
		border-width: 2;
   
	}
		.label1{
		height: 40px;
    width: 30%;
		position: absolute;
   bottom: 450px;
		left:40px;
	font: 900;
			font-size: 28;
		}
	.label2{
		height: 40px;
    width: 30%;
		position: absolute;
   bottom: 380px;
		left:40px;
	font: 900;
			font-size: 28;
		}
	.label3{
		height: 40px;
    width: 30%;
		position: absolute;
   bottom: 310px;
		left:40px;
	font: 900;
			font-size: 28;
		}
	.add{
		height: 40px;
    width: 30%;
		position: absolute;
   bottom: 210px;
		left:900px;
	font: 900;
			font-size: 28;
		background-color:burlywood;
		border-color:maroon;
	
		}	
		.reset{
		height: 40px;
    width: 30%;
		position: absolute;
   bottom: 150px;
		left:900px;
	font: 900;
			font-size: 28;
			background-color:burlywood;
			border-color:maroon;
			
		}
	.layer {
    background-color: rgba(248, 247, 216, 0.7);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>

</head>

<body>
<div class="layer"></div>
<?php

mysql_connect("localhost","root","") or die("Nu se poate conecta la serverul MySQL");
mysql_select_db("evidenta_parinti") or die("Nu se poate selecta baza de date");

echo "<form action='http://localhost/update_parinti.php?id=<?php echo $id_parinte;' method='GET'>";

$id = $_GET['id'];
$id_copil = $_GET['id_copil'];

$query = mysql_query("SELECT * from parinti WHERE id = '".$id."'");

 while($row=mysql_fetch_array($query)){
 

echo "<label class='label1'>Nume:  </label>";
echo "<input type='hidden' name='nume_vechi' value='".$row["nume"]."'>";
echo "<input type='text' class='nume_parinte' name='nume_form' value='".$row["nume"]."'><br>";

echo "<label class='label2'>Prenume:   </label>";
echo "<input type='hidden' name='prenume_vechi' value='".$row["prenume"]."'>";
echo "<input type='text' class='prenume_parinte' name='prenume_form' value='".$row["prenume"]."'><br>";

echo "<label class='label3'>Meserie: </label>";
echo "<input type='hidden' name='meserie_veche' value='".$row["meserie"]."'>";
echo "<input type='text' class='meserie_parinte' name='meserie_form'  value='".$row["meserie"]."'><br>";

echo "<input type='hidden' name='id' value='".$row["id"]."' />";


echo "<input type='Submit' class='add' name='submitform' value='Submit'>";

echo "<input type='Reset' class='reset' value='Reset'>";

}
echo "</form>";



?>
</body>
</html>
