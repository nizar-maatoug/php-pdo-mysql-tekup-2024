<?php
setcookie('username', 'nizar', time() + 3600, '/', '', false, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>
  <p>Cookie set. <a href="other-page.php">Go to other-page.php</a></p>
</body>

</html>