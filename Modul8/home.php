<?php
    session_start();
    if(!isset($_SESSION['user'])||(trim ($_SESSION['user'])==''){
        header('location:index.php');
    }

    include_once('user.php');
    $user = new user();

    $sql = "SELECT * FROM user WHERE id = '".$_SESSION['user']."'";
    $row = $user->details($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login</title>
</head>
<body>
    <div>
    <h1>PHP Login</h1>
        <div>
            <div>
                <h2>Selamat datang di Dashboard</h2>
                <h4>User info: </h4>
                <p>Name : <?= $row['fname'];?></p>
                <p>Username : <?= $row['username'];?></p>
                <p>Password : <?= $row['password'];?></p>
                <a href="logout.php"><span></span>Logout</a>
            </div>
        </div>
    </div>
</body>
</html>