<?php

session_start();
include_once '../Models/User.php';

if (isset($_SESSION))

{

    session_destroy();

    header('location: UsersController.php?action=login');

    exit();

}

?>