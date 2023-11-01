<?php 
session_start();
require 'app.php';

function pay($conn) {
    $sql  = "INSERT INTO korpa (KorpaID, Status, Kreirano, KorisnikID ) VALUES(:id, :status, :kreirano, :korisnikId)";

        //Kreiranje sleceg id-ja
        $lastId = get_count_from_table('korpa', $conn);            
        $status = "U toku";
        $date = date('Y-m-d');

        $user = get_user_by_email($_SESSION['email'], $conn);

        $stm = $conn->prepare($sql);
        $stm->bindParam(':id', $lastId, PDO::PARAM_INT);
        $stm->bindParam(':status', $status, PDO::PARAM_STR);
        $stm->bindParam(':kreirano', $date);
        $stm->bindParam(':korisnikId', $user['KorisnikID']);        
        $stm->execute();



    foreach($_SESSION['cart'] as $product){
        $sql  = "INSERT INTO korpa_proizvod (Cena, Kolicina, Kreirano, ProizvodID, KorpaID ) VALUES(:cena, :kolicina, :kreirano, :proizvodId, :korpaId)";

        $date = date('Y-m-d');       

        $stm = $conn->prepare($sql);
        $stm->bindParam(':cena', $_POST['cena'], PDO::PARAM_INT);
        $stm->bindParam(':kolicina', $product['quantity'], PDO::PARAM_STR);
        $stm->bindParam(':kreirano', $date);
        $stm->bindParam(':proizvodId', $product['id']);        
        $stm->bindParam(':korpaId', $lastId);        
        $stm->execute();
    }

    $sql  = "INSERT INTO porudzbina (Status, TroskoviDostave, Adresa, Drzava, Kreirano, KorisnikID) VALUES(:status, :troskovi, :adresa, :drzava, :kreirano, :korisnikId)";

        $date = date('Y-m-d');

        $user = get_user_by_email($_SESSION['email'], $conn);

        $stm = $conn->prepare($sql);
        $stm->bindParam(':status', $status);
        $stm->bindParam(':troskovi', $_POST['dostava']);
        $stm->bindParam(':adresa', $_POST['adresa']);
        $stm->bindParam(':drzava', $_POST['drzava']);        
        $stm->bindParam(':kreirano', $date);        
        $stm->bindParam(':korisnikId', $user['KorisnikID']);        
        $stm->execute();    
       
}                                

if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    pay($conn);
    $_SESSION['success'] = "Uspešno plaćanje";

    clear_cart();
    redirect_back();
}

?>