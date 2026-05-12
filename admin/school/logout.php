<?php
session_start(); // WAJIB
// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

header("location:../../");

?>