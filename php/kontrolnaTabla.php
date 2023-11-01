<?php 
session_start();
require 'app.php';

if($_POST['status'] == 1)
change_order_status('Isporučeno', $_POST['id'], $conn);
?>