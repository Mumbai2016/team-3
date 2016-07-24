<?php 
require 'session.php';
session_destroy();
header('location:home.html');
?>