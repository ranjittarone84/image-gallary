<?php
$id = $_GET['id'];

/* <Connection */ 
$con = new mysqli("localhost", "root", "", "php");

/*query*/
$query= "DELETE FROM students WHERE id = $id";

/*execution*/
if ($con->query($query)) {
    header('location:view.php');
}
else{
    echo mysqli_error($con);
}

?>