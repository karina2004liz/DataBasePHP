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

        $nombre = $_POST['nombre']; 
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $dni = $_POST['dni'];
        $direccion = $_POST['direccion'];
        $fechanac = $_POST['fechanac'];
			
				
			//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO ClientesOK (NOMBRE,APELLIDO,TELEFONO,DNI,DIRECCION,FECHANAC) VALUES('$nombre','$apellido','$telefono','$dni','$direccion','$fechanac')");
			
            //display success message
        $message = "Data Added Successfully";    
      //  echo "<font color='green'>Data added successfully.";
        echo "<center>";
        echo "<h1> ".$message." </h1>";
        echo "<br/><a class=\"result\" href='clientDB.php'>View Result</a>";
		
        echo "</center>";

		//echo "<br/><a  href='clientDB.php'>View Result</a>";
		
    }
    
    $mysqli->close();
	?>
	</body>
</html>
