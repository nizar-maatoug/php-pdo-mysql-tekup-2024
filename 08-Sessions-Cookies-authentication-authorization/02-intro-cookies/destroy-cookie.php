<?php

// Delete cookie
setcookie('username', '', time() - 3600, '/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>

  <p>
    Your cookie has been deleted. <a href="other-page.php">Go to other-page.php</a>
  </p>

</body>

</html>