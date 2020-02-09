<?php
//including the database connection file
include_once("configdb.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM ClientesOK"); // using mysqli_query instead
?>

<html>
	<head>
	<link href="style.css" rel="stylesheet" type="text/css">	
		<title>DB Client</title>
	</head>

	<body>
    <div id= returnDBs>
    <a  class= "delete" href="selectDB.html">Return to DBs</a>   
    </div>
        <center>
            <div id= "containerdbclient">
	<a class= "other" href="addClient.html">Add New Data</a><br/><br/>

		<table>

		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>LAST NAME</th>
            <th>PHONE</th>
            <th>DNI</th>
            <th>ADDRESS</th>
            <th>DATE OF BIRTH</th>
            <th>OPTIONS</th>
		</tr>
		<?php 
		//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
		while($res = mysqli_fetch_array($result)) { 		
			echo "<tr>";
			echo "<td>".$res['ID_CLIENTES']."</td>";
			echo "<td>".$res['NOMBRE']."</td>";
            echo "<td>".$res['APELLIDO']."</td>";
            echo "<td>".$res['TELEFONO']."</td>";
            echo "<td>".$res['DNI']."</td>";
            echo "<td>".$res['DIRECCION']."</td>";
            echo "<td>".$res['FECHANAC']."</td>";	
            echo "<td> <a class=\"edit\" href=\"editClient.php?id=$res[ID_CLIENTES]\">Edit</a>
            <a class=\"delete\" href=\"deleteClient.php?id=$res[ID_CLIENTES]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		};
?>
        </table>
        </div>
        </center>
	</body>
</html>
