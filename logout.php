<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){

    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">

    <title>home</title>
</head>
<body>

<div class="loading"></div>
<?php require 'NavBars/_nav1.php' ?>

<div class="bg-img"></div>

<div class="container2 my-4 col-sm-6">
<h1>Thank You!!! <?php echo  $_SESSION['username']; ?></h1>
<h1>for visiting our website.</h1>
</div>

</body>
</html>