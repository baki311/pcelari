<?php
//Prelazak na drugu stranicu
function redirect($page){
    header("Location:". $page);
}

//Postavljanje greske u sesiji
function set_session_error($errorMessage) {
    $_SESSION['error'] = $errorMessage;
    return $errorMessage;
}

//Brisanje greske iz sesije
function clear_session_error() {
    if(isset($_SESSION['error']))
        unset($_SESSION['error']);
}

//Vraca korisnika iz baze preko emaila
function get_user_by_email($email, $conn) {    
    $sql = "SELECT * FROM korisnik WHERE email = :email";

    $stm = $conn->prepare($sql);
    $stm->execute(['email' => $email]);
    $user = $stm->fetch(PDO::FETCH_ASSOC);
    
    if(empty($user) || $user === null)
        return null;
            
    return $user;
}

//Vraca broj korisnika u bazi
function get_user_count($conn) {
    $sql = "SELECT COUNT(*) FROM korisnik";
    $res = $conn->query($sql);
    $count = $res->fetchColumn();

    return $count;
}


//---------------AUTENTIFIKACIJA FUNKCIJE -------------
    //Registracija korisnika
    function register($conn) {    
        //podrazumevani id role korisnik
        $roleUserId = 2;

        $sql  = "INSERT INTO korisnik (KorisnikID,Ime, Prezime, Email, Telefon, Adresa, Sifra, RolaID) VALUES(:id, :ime, :prezime, :email, :telefon, :adresa, :sifra, :rolaId)";

        //Kreiranje sleceg id-ja
        $lastUserId = get_user_count($conn);
        ++$lastUserId;  

        $passwordHash = password_hash($_POST['Sifra'], PASSWORD_DEFAULT);
        
        $stm = $conn->prepare($sql);
        $stm->bindParam(':id', $lastUserId, PDO::PARAM_INT);
        $stm->bindParam(':ime', $_POST['Ime'], PDO::PARAM_STR);
        $stm->bindParam(':prezime', $_POST['Prezime'], PDO::PARAM_STR);
        $stm->bindParam(':email', $_POST['Email']);
        $stm->bindParam(':telefon', $_POST['Telefon']);
        $stm->bindParam(':adresa', $_POST['Adresa'], PDO::PARAM_STR);
        $stm->bindParam(':sifra', $passwordHash);
        $stm->bindParam(':rolaId', $roleUserId, PDO::PARAM_INT);

        $stm->execute();

        $user = get_user_by_email($_POST['Email'], $conn);
        login($user);
        
        redirect('../index.php');

    }

    //Logovanje korisnika - kreiranje sesije
    function login($user) {
        $_SESSION['email'] = $user['Email'];
    }

    //Proverava da li je korisnik logovan - da li ima u sesiji smesten mail
    function is_user_logged_in(){
        return isset($_SESSION['email']) ? true:false;
    }

    //Logout
    function logout(){          
        session_start();    
        session_destroy();
        redirect('../index.php');  
        exit();     
    }

//--------------- //AUTENTIFIKACIJA FUNKCIJE -------------

//Vraca sve kategorije iz baze
function get_all_categories($conn) {
    $sql = "SELECT * FROM kategorija";

    $stm = $conn->prepare($sql);
    $stm->execute();
    $category = $stm->fetchAll(PDO::FETCH_ASSOC);
    
    if(empty($category) || $category === null)
        return null;
            
    return $category;
}

//Vraca proizvode odredjene kategorije
function get_all_products_by_categoryid($categoryId, $conn) {
    $sql = "SELECT * FROM proizvod WHERE KategorijaID = :kategorijaId";    

    $stm = $conn->prepare($sql);
    $stm->execute(['kategorijaId' => $categoryId]);
    $products = $stm->fetchAll(PDO::FETCH_ASSOC);
    
    if(empty($products) || $products === null)
        return null;
            
    return $products;
}

//Vraca niz detalja o proizvodu (koji se trazi preko id-ja u bazi)
function get_product_by_product_id($productId, $conn) {
    $sql = "SELECT * FROM proizvod WHERE ProizvodID = :proizvodId";    

    $stm = $conn->prepare($sql);
    $stm->execute(['proizvodId' => $productId]);
    $product = $stm->fetch(PDO::FETCH_ASSOC);

    if(empty($product) || $product === null)
        return null;
    
    $productDetails = [
        'id' => $product['ProizvodID'],
        'name' => $product['NazivProizvoda'],
        'price' => $product['CenaProizvoda'],
        'image' => $product['Slika'],
        'quantity' => 1
    ];  
            
    return $productDetails;
}

//brisesve iz korpe
function clear_cart() {
    if(isset($_SESSION['cart']))
        unset($_SESSION['cart']);
}

//Uklanja jedan proizvod iz korpe po id-ju
function remove_single_product_from_cart($productId) {
    if(isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
        redirect('../korpa.php');
    }    
}

//Vraca ukupnu cenu proizvoda u korpi
function get_cart_total_price() {
    $totalPrice = 0;
    foreach($_SESSION['cart'] as $product) {
        $totalPrice += $product['price'] * $product['quantity'];
    }

    return $totalPrice;
}

//Vraca broj proizvoda u korpi
function get_cart_count() {
    if(isset($_SESSION['cart']))
        return count($_SESSION['cart']);
    
    return 0;
}

//Dodaje proizvod u korpu
function add_product_to_cart($productId) {    
    global $conn;
    if(!isset($_SESSION['cart']))
        $_SESSION['cart'] = [];        

    $productDetails = get_product_by_product_id($productId, $conn); //nalazi proizvod u bazi
    
    //Kreiranje korpe
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] += 1;
    } else {    
        $_SESSION['cart'][$productId] = $productDetails;
    }    
    
    print_r($_SESSION['cart']);        

}


?>