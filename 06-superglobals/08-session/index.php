<?php

// Start session
session_start();

// Set session variables
$_SESSION['username'] = 'john';

print_r($_SESSION);
