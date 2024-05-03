<?php
//creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.
session_start();

// Set session variables 
$_SESSION['name']='Nizar';

print_r($_SESSION);

echo '<br>'. session_id();