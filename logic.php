<?php
include("database.php");
// Checking if the form has been submitted
if(isset($_POST['submit'])) {
$username = $_POST["username"];
$password = $_POST["password"];
// Check if the submitted credential match with the valid ones
$sql = "select * from users where username = '$username' and password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count==1){
header("Location:welcome.php");
}
// Display Error Message For Incorrect Credentials
else{
    echo '<script>
    alert("Invalid username or password!")
    </script>';
}
}
?>