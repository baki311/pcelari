<?php 
session_start();
require 'app.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove'])) {        
    remove_single_product_from_cart($_POST['id']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {    
    add_product_to_cart($_POST['id']);
}


?>