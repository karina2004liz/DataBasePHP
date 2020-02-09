<?php
// including the database connection file
include_once("configdb.php");

//if the submit click is update, then...
if(isset($_POST['update'])) {	

    //getting new data to instert in table
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
    $codigo = mysqli_real_escape_string($mysqli, $_POST['codigo']);
    $precio = mysqli_real_escape_string($mysqli, $_POST['precio']);
  
	
		//updating the table
        $result = mysqli_query($mysqli, "UPDATE ProductoOK SET NOMBRE='$nombre',CODIGO='$codigo',PRECIO='$precio' WHERE ID_PRODUCTO=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location:productDB.php");
	
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM ProductoOK WHERE ID_PRODUCTO=$id");

//with while we show the data saved in DB associated with the id selected
while($res = mysqli_fetch_array($result))
{

    $nombre = $res['NOMBRE']; 
    $codigo = $res['CODIGO'];
    $precio = $res['PRECIO'];

}


?>
<html>
	<head>	
		<title>Edit Data</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
        <center class="addClientform">
		<a class= "other" href="productDB.php">Return to DB</a>
		<br/><br/>
		
		<form name="form1" method="POST" action="editProduct.php">

        <input type="text" value="<?php echo $nombre;?>" name="nombre" size="35">
        <br>
        <input type="text" value= "<?php echo $codigo;?>" name="codigo" size="35">
        <br>
        <input type="text" value="<?php echo $precio;?>" name="precio" size="35">
        <br>
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
        <input class="submit" type="submit" name="update" value="Update">


        </form>
        </center>
	</body>
</html>
