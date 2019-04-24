<?php

session_start();

unset($_SESSION['loggedIn']);
unset($_SESSION['user_name']);
unset($_SESSION['user_email']);


header('location:index.php');