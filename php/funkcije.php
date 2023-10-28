<?php
//Prelazak na drugu stranicu
function redirect($page){
    header("Location:". $page);
}

//Vraca korisnika iz baze preko emaila
function get_user_by_email($email, $conn){    
    $sql = "SELECT * FROM korisnik WHERE email = :email";

    $stm = $conn->prepare($sql);
    $stm->execute(['email' => $email]);
    $user = $stm->fetch(PDO::FETCH_ASSOC);
    
    if(empty($user) || $user === null)
        return null;
            
    return $user;
}

function login($user) {
    $_SESSION['email'] = $user['Email'];
}

//Proverava da li je korisnik logovan - da li ima u sesiji smesten mail
function is_user_logged_in(){
    return isset($_SESSION['email']) ? true:false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {    
    logout();
}

function logout(){          
    session_start();    
    session_destroy();
    redirect('../index.php');  
    exit();     
}
?>