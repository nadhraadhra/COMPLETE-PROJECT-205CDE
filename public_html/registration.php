
<!DOCTYPE HTML>
<html>

<?php

include("database.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $country = $_POST["country"];
    $password = $_POST["password"];

    
    $encryptPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $stmt = $mysqli ->prepare("INSERT INTO users(name, username, email, mobile, country, password) Values(?, ?, ?, ?)");
    $stmt -> bind_param("ssss", $name, $username, $email, $mobile, $country, $password);
    $stmt -> execute();
    $result =$stmt->affected_rows;
    $stmt -> close();
    $mysqli -> close();
    
    if($result > 0)
    {
    header("location: RegisterSuccess.php");
    }
    
    else {
    echo "Oops. Something went wrong. Please try again";
    ?>
    
    <a href="SignUp.php">Sign Up</a>
    <?php
        
 }
}
?>

</body>
</html>

    