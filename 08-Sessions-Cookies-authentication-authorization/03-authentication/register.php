<?php
require_once 'database.php';

@include('partials/header.php');
@include('partials/menu.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $username= $_POST['username'] ?? '';
    $password= $_POST['password'] ?? '';
    $password_confirmation=$_POST['password_confirmation'] ?? '';

    //validate fields

    //save new user
    // INSERT statement with placeholders for title and body
    $sql = 'INSERT INTO users (username, password) VALUES (:username, :password)';

    // Prepare the statement
    $stmt = $pdo->prepare($sql);

    // Params for prepared statement
     $params = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ];

    // Execute the statement
    $stmt->execute($params);

    header('Location: login.php');
    exit;

}
?>

<div class="container" style="min-height: 80vh;">
<form method="POST" action="register.php">
  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" id="username" name="username" >    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="password_confirmation" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
</form>


</div>

<?php @include('partials/footer.php');?>