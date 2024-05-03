<?php
session_start();

// Unset a single session variable
unset($_SESSION['name']);

// Destroy all session variables
session_destroy();

echo 'Session destroyed';