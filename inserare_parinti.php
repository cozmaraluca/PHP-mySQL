<?php
mysql_connect("localhost","root","") or die("Nu se poate conecta la serverul MySQL");
mysql_select_db("evidenta_parinti") or die("Nu se poate selecta baza de date");

$_SESSION['prenume_form'] = $prenume_form;

$nume=$_GET['nume_form'];
$prenume=$_GET['prenume_form'];
$meserie=$_GET['meserie_form'];

  $query1=mysql_query("INSERT INTO parinti values (NULL,'$nume','$prenume','$meserie')");

header('Location: http://localhost/afisare_parinti.php');
 
?>