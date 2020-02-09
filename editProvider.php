<?php
// including the database connection file
include_once("configdb.php");

//if the submit click is update, then...
if(isset($_POST['update'])) {	

    //getting new data to instert in table
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $nif = mysqli_real_escape_string($mysqli, $_POST['nif']);
    $nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
    $direccion = mysqli_real_escape_string($mysqli, $_POST['direccion']);
  
	
		//updating the table
        $result = mysqli_query($mysqli, "UPDATE ProveedoresOK SET NIF='$nif',NOMBRE='$nombre',DIRECCION='$direccion' WHERE ID_PROVEEDORES=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location:providerDB.php");
	
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM ProveedoresOK WHERE ID_PROVEEDORES=$id");

//with while we show the data saved in DB associated with the id selected
while($res = mysqli_fetch_array($result))
{

    $nif = $res['NIF']; 
    $nombre = $res['NOMBRE'];
    $direccion = $res['DIRECCION'];

}


?>
<html>
	<head>	
		<title>Edit Data</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
        <center class="addClientform">
		<a class= "other" href="providerDB.php">Return to DB</a>
		<br/><br/>
		
		<form name="form1" method="POST" action="editProvider.php">

        <input type="text" value="<?php echo $nif;?>" name="nif" size="35">
        <br>
        <input type="text" value= "<?php echo $nombre;?>" name="nombre" size="35">
        <br>
        <input type="text" value="<?php echo $direccion;?>" name="direccion" size="35">
        <br>
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
        <input class="submit" type="submit" name="update" value="Update">


        </form>
        </center>
	</body>
</html>
