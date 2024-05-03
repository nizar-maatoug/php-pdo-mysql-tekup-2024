<?php
$loggedIn= $_SESSION['loggedIn'] ?? false;


?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <?php if(!$loggedIn): ?>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>   
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
          </li> 
        <?php else: ?> 
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li> 
        <?php endif ?>         
      </ul>
    </div>
  </div>
</nav>