<?php
//including the database connection file
include_once("configdb.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM ProveedoresOK"); // using mysqli_query instead
?>

<html>
	<head>
	<link href="style.css" rel="stylesheet" type="text/css">	
		<title>DB Product</title>
	</head>

	<body>
    <div id= returnDBs>
    <a  class= "delete" href="selectDB.html">Return to DBs</a>   
    </div>
        <center>
            <div id= "containerdbclient">
	<a class= "other" href="addProvider.html">Add New Data</a><br/><br/>

		<table>

		<tr>
			<th>ID</th>
			<th>NIF</th>
			<th>NAME</th>
            <th>ADDRESS</th>
            <th>OPTIONS</th>

		</tr>
		<?php 
		//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
		while($res = mysqli_fetch_array($result)) { 		
			echo "<tr>";
			echo "<td>".$res['ID_PROVEEDORES']."</td>";
			echo "<td>".$res['NIF']."</td>";
            echo "<td>".$res['NOMBRE']."</td>";
            echo "<td>".$res['DIRECCION']."</td>";
            echo "<td><a class=\"edit\" href=\"editProvider.php?id=$res[ID_PROVEEDORES]\">Edit</a>
            <a class=\"delete\" href=\"deleteProvider.php?id=$res[ID_PROVEEDORES]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
        </table>
        </div>
        </center>
	</body>
</html>
