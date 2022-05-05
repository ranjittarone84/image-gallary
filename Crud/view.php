<?php
/*connection*/
$con = new mysqli("localhost", "root", "", "php");
/*query*/
$query= "SELECT * FROM students";
/*Execution */
$result = $con->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View data</title>
</head>
<body>
    <h1>View your Data</h1>
    <h1><a href="Resister.php">Newly Resistered</a></h1>
    <table border="1" cellspacing="0" cellpadding="20">
        <tr>
            <th>Sr.no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>
        <?php
        $count = 0;
        while ($data = $result->fetch_object()) {
        ?>
         <tr>
             <td><?php echo ++$count?></td>
             <td><?php echo $data->name?></td>
             <td><?php echo $data->email?></td>
             <td><?php echo $data->password?></td>
             <td><?php echo $data->mobile?></td>
             <td>
                 <a href="edit.php?id=<?php echo $data->id?>">Edit |</a>
                 <a href="delete.php?id=<?php echo $data->id?>"> Delete</a>
             </td>
         </tr> 
         <?php  
        }
        ?>
    </table>
</body>
</html>