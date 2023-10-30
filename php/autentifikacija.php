<?php 
session_start();
require 'app.php';

//Register
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registracija'])) {    
    register($conn);
}

print_r($_POST);
//Login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prijava'])){   
    if(empty($_POST['email']) || empty($_POST['lozinka'])){
     die('Morate popuniti polja');
    }

    //Nalazak korisnika koji se prijavljuje
    $user = get_user_by_email($_POST['email'], $conn);
    if($user === null)
        set_session_error('Neispravan mejl ili lozinka.');
         
    if(password_verify($_POST['lozinka'], $user['Sifra'])){
        session_regenerate_id();
        login($user);
        redirect('../index.php');
    }
    else{
        set_session_error('Neispravan mejl ili lozinka.');
        redirect('../loginforma.php');
    }

}


//Logout
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {    
    logout();
}
?>