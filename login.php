<!-- connecting the php file with the mySQL data -->
 <?php
 include("database.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id= "form">
        <h1>Login Form</h1>
        <form name="form" action= "logic.php" method="POST">

<!--The form includes two input fields:USERNAME AND PASSWORD  -->
            <label>Username</label>
            <input type="text" id= "username" name="username">
            <br></br>
            <label>Password</label>
            <input type="password" id="password" name="password">
            <br></br>
            <input type="submit" id="btn" value= "Login" name="submit"/>
        </form>

    </div>
    
</body>
</html>
