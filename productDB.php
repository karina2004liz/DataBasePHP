<?php
//including the database connection file
include_once("configdb.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM ProductoOK"); // using mysqli_query instead
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
	<a class= "other" href="addProduct.html">Add New Data</a><br/><br/>

		<table>

		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>CODE</th>
            <th>PRICE</th>
            <th>OPTIONS</th>

		</tr>
		<?php 
		//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
		while($res = mysqli_fetch_array($result)) { 		
			echo "<tr>";
			echo "<td>".$res['ID_PRODUCTO']."</td>";
			echo "<td>".$res['NOMBRE']."</td>";
            echo "<td>".$res['CODIGO']."</td>";
            echo "<td>".$res['PRECIO']."</td>";
            echo "<td><a class=\"edit\" href=\"editProduct.php?id=$res[ID_PRODUCTO]\">Edit</a>
            <a class=\"delete\" href=\"deleteProduct.php?id=$res[ID_PRODUCTO]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
        </table>
        </div>
        </center>
	</body>
</html>
