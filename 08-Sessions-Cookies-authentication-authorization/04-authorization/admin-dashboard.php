<?php
session_start();


@include('partials/header.php');
@include('partials/menu.php');

$loggedIn= $_SESSION['loggedIn'] ?? false;
$role= $_SESSION['user']['role'] ?? 'USER';

if(!$loggedIn || ($role !== 'ADMIN')){
    header('Location: login.php');
    exit;
}

$username=$_SESSION['user']['username'] ?? '';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
</head>
<body>
    <h2>Admin dashboard</h2>
    <h2>Bonjour <?= $username ?></h2>
</body>
</html>