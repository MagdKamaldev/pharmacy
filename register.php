<?php include("connection.php"); ?>
<?php 
if (!isset($_SESSION)){
    session_start();
}

if(isset($_POST['register'])){
$username = mysqli_real_escape_string($con,$_POST["un"]);

$email = mysqli_real_escape_string($con,$_POST["em"]);

$password1 = mysqli_real_escape_string($con,$_POST["psw1"]);

$password2 = mysqli_real_escape_string($con,$_POST["psw2"]);

if($password1!=$password2){
    echo "password mismatch";
}else{
    $sql = "INSERT INTO users (name,email,password) values('$username','$email','$password1')";
    mysqli_query($con,$sql);
    $_SESSION["x"]=$username;
    echo "welcome dear " .$_SESSION["x"];
}

}
?>


<!DOCTYPE HTML>
<html>

<head>
    <title>
       magd kamal
    </title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <h2 class="login-header1">my shop </h2>
        <h2 class="login-header2">The faster you login the faster you get offers</h2>
            <form  method ="post" action ="index1.php">
                <p><input type="text" placeholder="name" name = "un"></p>
                <p><input type="text" placeholder="email" name = "em"></p>
                <p><input type="password" placeholder="password" name ="psw1"></p>
                <p><input type="password" placeholder="password" name ="psw2"></p>
                <p><input type="submit" value="register" name="register"></p>
            </form>
    </div>
</body>
</html>


