<?php
$id = $_GET['id'];
/*connection */
$con = new mysqli("localhost", "root", "", "php");
/*query*/
$query = "SELECT * FROM students WHERE id = $id";
/*execution*/
$result= $con->query($query);
/*data fecthing*/ 
$data = $result->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit form</title>
</head>
<body>
    
    <center>
    <h1>Edits form</h1>
        <form method="post" action="update.php">
            <input type="hidden" name="id" value="<?php echo $data->id?>">
            <p>
                <label>Name</label>
                <input type="text" name="uname" value="<?php echo $data->name?>">
            </p>
            <p>
                <label>Email</label>
                <input type="email" name="uemail" value="<?php echo $data->email?>">
            </p>
            <p>
                <label>Password</label>
                <input type="password" name="upass" value="<?php echo $data->password?>">
            </p>
            <p>
                <label>Mobile</label>
                <input type="mobile" name="umobile" value="<?php echo $data->mobile?>">
            </p>
            <p>
                <input type="submit" name="regupdate" value="Update">
            </p>
        </form>
    </center>
    
</body>
</html>