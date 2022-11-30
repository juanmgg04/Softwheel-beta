<?php
session_start();
session_destroy();
header('location: ../Controllers/UsersController.php?action=login');

?>