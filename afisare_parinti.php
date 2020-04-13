<?php
//conectarea la baza de date
mysql_connect("localhost","root","") or die ("Nu se poate conecta la serverul MySQL");
mysql_select_db("evidenta_parinti") or die("Nu se poate selecta baza de date");

 echo "<form method='get' action='http://localhost/editare_parinte.php?id=<?php echo $id_parinte;'>";
 
$query2=mysql_query("select p.id as id_parinte, c.id_copil as id_copil,p.nume as nume_parinte, c.nume_copil as nume_copil, p.meserie as meserie_parinte, p.prenume	 as prenume_parinte from parinti p left join copii c on p.id=c.id_parinte ");
$nr_inreg=mysql_num_rows($query2);

echo "<div class=layer>";
 //daca exista inregistrari
if ($nr_inreg>0){

 echo "<table >";
 echo"<tr bgcolor='silver'>";
 

 echo "<th> Nume </th>";
  echo "<th> Nume copil </th>";
   echo "<th> Meseria </th>";
    echo "<th> Editare parinte </th>";
	   echo "<th> Editare copil </th>";

 echo"</tr>";
 

 while($row=mysql_fetch_array($query2)){

 echo"<tr>";
		 	echo "<td>".$row["nume_parinte"]."</td>";

			echo "<td>".$row["nume_copil"]."</td>";

			echo "<td>".$row["meserie_parinte"]."</td>";
		 
 
 echo "<td><a href='http://localhost/editare_parinte.php?id=".$row["id_parinte"]."'>Modificare</a></td> ";
 echo "<td><a href='http://localhost/editare_copil.php?id_copil=".$row["id_copil"]."'>Modificare</a></td> "; 


 echo"</tr>";
 }
 
 
 echo"</table>";
}

else{ 
 echo"<center>";
 echo "Nu s-a gasit nici o inregistrare!!!";
 echo"</center>";
}
 echo "</form>";
mysql_close();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>inserare_copii</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<style>
	
body {
	
 background-image: url("last.jpg");
	background-repeat: no-repeat;
  height: 100%;
	background-size: cover;
}
	table{
		width: 100%; 
		border:2;
		border-color:darkseagreen;
		font:900;
		font-size:26;
		}
		th{
			background-color:darksalmon;
  color: white;
		}
   h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
		.layer {
    background-color: rgba(248, 247, 216, 0.7);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
		
		
	</style>
</head>

<body>
	

	

</body>
</html>