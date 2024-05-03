<?php
session_start();


@include('partials/header.php');
@include('partials/menu.php');

$loggedIn= $_SESSION['loggedIn'] ?? false;

if(!$loggedIn){
    header('Location: login.php');
    exit;
}

$username=$_SESSION['user']['username'] ?? '';

?>

<div class="container" style="min-height: 80vh;">
    
        <h2>Profile</h2>
        <h2>Bonjour <?= $username ?></h2>

    

</div>





    

<?php include('partials/footer.php') ?>