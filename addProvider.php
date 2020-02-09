<html>
	<head>
        <title>Add Data</title>
        <link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
	<?php
	//including the database connection file
	include_once("configdb.php");

	if(isset($_POST['submit'])) {	

        /*
		$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
		$apellido = mysqli_real_escape_string($mysqli, $_POST['apellido']);
        $telefono = mysqli_real_escape_string($mysqli, $_POST['telefono']);
        $dni = mysqli_real_escape_string($mysqli, $_POST['dni']);
        $direccion = mysqli_real_escape_string($mysqli, $_POST['direccion']);
        $fechanac = mysqli_real_escape_string($mysqli, $_POST['fechanac']);
*/

        $nif = $_POST['nif']; 
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];

				
			//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO ProveedoresOK (NIF,NOMBRE,DIRECCION) VALUES('$nif','$nombre','$direccion')");
			
            //display success message
        $message = "Data Added Successfully";    
      //  echo "<font color='green'>Data added successfully.";
        echo "<center>";
        echo "<h1> ".$message." </h1>";
        echo "<br/><a class=\"result\" href='providerDB.php'>View Result</a>";
		
        echo "</center>";

		//echo "<br/><a  href='clientDB.php'>View Result</a>";
		
	}
	?>
	</body>
</html>
