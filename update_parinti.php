<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php

mysql_connect("localhost","root","") or die("Nu se poate conecta la serverul MySQL");
mysql_select_db("evidenta_parinti") or die("Nu se poate selecta baza de date");

echo "<form action='http://localhost/editare_copil.php' method='GET'>";

$id_copil = $_GET['id_copil'];
$id = $_GET['id'];
$nume = $_GET['nume_form'];
$prenume = $_GET['prenume_form'];
$meserie = $_GET['meserie_form'];

$query = mysql_query("SELECT * from parinti WHERE id = '".$id."'");

$query2 = mysql_query("UPDATE parinti SET nume = '".$nume."', prenume = '".$prenume."', meserie = '".$meserie."'  WHERE id = '".$id."'");

if (isset($_GET['submitform']))
    {   
    ?>
<script type="text/javascript">
window.location = "http://localhost/afisare_parinti.php";
</script>      
<?php
}
echo "</form>";
?>
</body>
</html>
