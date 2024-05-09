
<?php
session_start();

require_once 'database.php';

@include('partials/header.php');
@include('partials/menu.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $username= $_POST['username'] ?? '';
    $password= $_POST['password'] ?? '';

    // SELECT user from database
    $sql = 'SELECT * FROM users WHERE username = :username';

    // Prepare the SELECT statement
    $stmt = $pdo->prepare($sql);

    // Params for prepared statement
    $params = ['username' => $username];

    // Execute the statement
    $stmt->execute($params);

    // Fetch the post from the database
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$user){
      header('Location: login.php');
      exit;
    }

        
    //verify password
    if(password_verify($password,$user['password'])){

      
      
      $_SESSION['user']=[
        'id' => $user['id'],
        'username' => $user['username'],
        'role' => $user['role']
      ];
      $_SESSION['loggedIn']=true;
      
      //redirect user case role
      if($_SESSION['user']['role']==='ADMIN')
      {
        header('Location: admin-dashboard.php');

      }else{//USER
        header('Location: profile.php');

      }
      
      exit;
         
    }
    
    
   


}

?>

<div class="container" style="min-height: 80vh;">
<form method="POST" action="login.php">
  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" id="username" name="username" >    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>


</div>

<?php @include('partials/footer.php');?>
