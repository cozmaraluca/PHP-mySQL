<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
	
body {
	
 background-image: url("copil.jpg");
	background-repeat: no-repeat;
  height: 100%;
	background-size: cover;
}
	.nume{
		height: 40px;
    width: 30%;
		position: absolute;
   bottom: 450px;
		left:900px;
		border-color: maroon;
		border-width: 2;
   
	}
	.sel{
		height: 40px;
    width: 30%;
		position: absolute;
   bottom: 380px;
		left:900px;
		border-color: maroon;
		border-width: 2;
   
	}
	
.label1{
		height: 40px;
    width: 30%;
		position: absolute;
   bottom: 450px;
		left:800px;
	font: 900;
			font-size: 28;
		}
		
		.label2{
		height: 40px;
    width: 30%;
		position: absolute;
   bottom: 380px;
		left:790px;
	font: 900;
			font-size: 28;
		}
	.Add{
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
		.Reset{
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

echo "<form action='http://localhost/update_copil.php' method='GET'>";

$id = $_GET['id_copil'];

$query = mysql_query("SELECT * from copii WHERE id_copil = '".$id."'");
$query2 = mysql_query("SELECT * from copii ");

 while($row=mysql_fetch_array($query)){

echo "<label class='label1'>Nume:  </label>";
echo "<input type='hidden' name='nume_vechi' value='".$row["nume_copil"]."'>";
echo "<input class='nume' type='text' name='nume_form' value='".$row["nume_copil"]."'><br>";

echo "<input  type='hidden' name='id_copil' value='".$row["id_copil"]."' />";

echo "<input type='Submit' class='Add' name='submitform' value='Submit'>";

echo "<input type='Reset' class='Reset' value='Reset'><br>";


echo "<label class='label2'>Schimba:  </label>";

//select din care poti alege redirectionrea catre editarea unui alt copil
	echo "<select id='change' class='sel' onchange='window.location.href=this.value;'>";
	 while($row1 = mysql_fetch_array($query2)):;
	
		//optiunile sunt linkuri catre paginile de editare a altor copii
		  echo "<option value=http://localhost/editare_copil.php?id_copil=".$row1[0].">"; echo $row1[1]; echo " "; 
		  echo "</option>";


            endwhile;

	echo "</select><br>";


}
echo "</form>";



?>
</body>
</html>
