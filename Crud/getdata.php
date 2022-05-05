<?php

if(isset($_POST['regSubmit'])){
    $uname = $_POST['uname'];
    $uemail= $_POST['uemail'];
    $upass= $_POST['upass'];
    $umobile = $_POST['umobile'];


    /*Database Connection*/

    $con = new mysqli("localhost", "root", "", "php");

    $query = "INSERT INTO students VALUES(NULL, '$uname', '$uemail', '$upass', '$umobile')";

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