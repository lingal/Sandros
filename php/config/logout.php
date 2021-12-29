<?php 
session_start();

session_unset();
session_destroy();

header('Location: /php/templates/login_screen.php');
