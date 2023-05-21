<?php 
include ('connection.php');
if(!isset($_SESSION)){
    session_start();
}

if(isset($_POST['login'])){
    $n = mysqli_real_escape_string($con, $_POST["un"]);
    $p = mysqli_real_escape_string($con, $_POST["psw1"]);
    $t = "SELECT * FROM users WHERE 'name'='$n' AND 'password'='$p'";
    $r = mysqli_query($con, $t);
    if(mysqli_num_rows($r) == 1){
        $_SESSION['x'] = $n;
        $_SESSION['success'] = "Welcome dear";
        header("Location: index1.php");
        exit;
    }
    else{
        echo "Wrong credentials!";
    }
}
?>
