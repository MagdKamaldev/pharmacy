<?php include('connection.php');?>
<?php include('logform.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>my pharmacy</title>
    <link rel="stylesheet" href="homestyle.css">
</head>
<body>
    <header>
        <h1>Our phamacy home</h1>
        <section>
            <?php 
            if(isset($_SESSION['x'])){
                echo "welcome dear " .$_SESSION["x"];
            }echo "<br>";
            if(isset($_SESSION['success'])){
                echo $_SESSION['success'];
            }
            ?>
            <section>
                <div>
                    <a href="index1.php?logout='1'">logout</a>
                </div>
    </header>
</body>
</html>