<?php
//creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.
session_start();

if(isset($_SESSION['name'])){
    echo $_SESSION['name'];
}

