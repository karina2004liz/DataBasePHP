<?php
// including the database connection file
include_once("configdb.php");

//if the submit click is update, then...
if(isset($_POST['update'])){	

    //getting new data to instert in table
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($mysqli, $_POST['apellido']);
    $telefono = mysqli_real_escape_string($mysqli, $_POST['telefono']);
    $dni = mysqli_real_escape_string($mysqli, $_POST['dni']);
    $direccion = mysqli_real_escape_string($mysqli, $_POST['direccion']);
    $fechanac = mysqli_real_escape_string($mysqli, $_POST['fechanac']);
	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE ClientesOK SET NOMBRE='$nombre',APELLIDO='$apellido',TELEFONO='$telefono', DNI='$dni',DIRECCION='$direccion' WHERE ID_CLIENTES=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: clientDB.php");
	
};
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM ClientesOK WHERE ID_CLIENTES=$id");

//with while we show the data saved in DB associated with the id selected
while($res = mysqli_fetch_array($result))
{
    
    $nombre = $res['NOMBRE']; 
    $apellido = $res['APELLIDO'];
    $telefono = $res['TELEFONO'];
    $dni = $res['DNI'];
    $direccion = $res['DIRECCION'];
    $fechanac = $res['FECHANAC'];
}


?>
<!DOCTYPE html>
<html>
	<head>	
		<title>Edit Data</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
        <center class="addClientform">
		<a class= "other" href="clientDB.php">Return to DB</a>
		<br/><br/>
		
		<form name="form1" method="POST" action="editClient.php">

        <input type="text" value="<?php echo $nombre;?>" name="nombre" size="35">
        <br>
        <input type="text" value= "<?php echo $apellido;?>" name="apellido" size="35">
        <br>
        <input type="text" value="<?php echo $telefono;?>" name="telefono" size="35">
        <br>
        <input type="text" value="<?php echo $dni;?>" name="dni" size="35" >
        <br>
        <input type="text" value= "<?php echo $direccion;?>" name="direccion" size="35" >
        <br>
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?> >
        <input class="submit" type="submit" name="update" value="Update">


        </form>
        </center>
	</body>
</html>
