<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BURAYA PROFİL BİLGİLERİ EKLENECEK.</h1>
</body>
</html>