
<?php
session_start();


require_once 'database.php';

@include('partials/header.php');
@include('partials/menu.php');

$username=$_SESSION['username'] ?? '';




?>

<div class="container" style="min-height: 80vh;">
    

        <h2>Bonjour <?= $username ?></h2>

    

</div>





    

<?php include('partials/footer.php') ?>