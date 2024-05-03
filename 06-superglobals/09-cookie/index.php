<?php
setcookie('username', 'jdoe', time() + 3600, '/', '', false, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>
  <p>Cookie set. <a href="page.php">Go to page.php</a></p>
</body>

</html>