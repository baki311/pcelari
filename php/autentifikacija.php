<?php 
session_start();
require 'app.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prijava'])){
    if(empty($_POST['email']) || empty($_POST['lozinka'])){
     die('Morate popuniti polja');
    }

    //Nalazak korisnika koji se prijavljuje
    $user = get_user_by_email($_POST['email'], $conn);
    if($user === null)
        die( 'Korisnik nije pronadjen');
         
        
    login($user);
    if(password_verify($_POST['lozinka'], $user['Sifra']))
        redirect('../index.php');
    else
    {
        redirect('../loginforma.php');
    }
}
?>