<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resistration Form</title>
    
</head>
<body>
    <center>
        <form method="post" action="getdata.php">
            <p>
                <label>Name</label>
                <input type="text" name="uname">
            </p>
            <p>
                <label>Email</label>
                <input type="email" name="uemail">
            </p>
            <p>
                <label>Password</label>
                <input type="password" name="upass">
            </p>
            <p>
                <label>Mobile</label>
                <input type="mobile" name="umobile">
            </p>
            <p>
                <input type="submit" name="regSubmit" value="Resister">
            </p>
        </form>
    </center>
    
</body>
</html>