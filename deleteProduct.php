<?php
//including the database connection file
include("configdb.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM ProductoOK WHERE ID_PRODUCTO=$id");

//redirecting to the display page (index.php in our case)
header("Location:productDB.php");

?>
