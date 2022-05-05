<?php
if(isset($_POST['regupdate'])){
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $uemail= $_POST['uemail'];
    $upass= $_POST['upass'];
    $umobile = $_POST['umobile'];


    /*Database Connection*/

    $con = new mysqli("localhost", "root", "", "php");

    /*query*/

    $query = "UPDATE students SET name= '$uname', email= '$uemail', password= '$upass', mobile= '$umobile' WHERE id = '$id'";

    /* query execution*/

    if ($con->query($query)) {
        header("location:view.php");
        // echo "your data has been submitted";
    }
    else{
        echo mysqli_error($con);
    }
}
?>