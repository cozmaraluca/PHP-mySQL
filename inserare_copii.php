<?php
mysql_connect("localhost","root","") or die("Nu se poate conecta la serverul MySQL");
mysql_select_db("evidenta_parinti") or die("Nu se poate selecta baza de date");


  $query="SELECT * from parinti";
	$result1=mysql_query($query);
	
	
$nume=$_POST['nume_form'];
$id=$_POST['id_parinte'];


$query1=mysql_query("INSERT INTO copii values ('$id','$nume')");
//header('Location: http://localhost/meniu.html');
if (isset($_POST['submitform']))
    {   
    ?>
<script type="text/javascript">
window.location = "http://localhost/afisare_parinti.php";
</script>      
    <?php
    }
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>inserare_copii</title>
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
	.parinte{
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
		left:800px;
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
<form method="post">
<label class="label1" for="nume">Nume</label>
<input class="nume" type="text" name="nume_form"><br>
<label class="label2" for="parinte">Parinte</label>
<select class="parinte" name="id_parinte">
	<?php while($row1 = mysql_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?><?php echo " ";?><?php echo $row1[2];?></option>

            <?php endwhile;?>

	</select>

<input class="add" type="SUBMIT" name="submitform" value="Add">
<input class="reset" type="RESET" value="Reset">

</form> 

</body>
</html>
