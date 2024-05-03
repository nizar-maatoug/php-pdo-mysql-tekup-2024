<?php
session_start();

// Unset a single session variable
unset($_SESSION['username']);

// Destroy all session variables
session_destroy();
