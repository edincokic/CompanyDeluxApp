<?php
    /*require('conn.php');
    if(!isset($_SESSION['korisnik_sesija'])){ session_start(); }
    if(isset($_POST['korisnik'])) {

        $korisnik = $_POST['korisnik'];
        $sifra = $_POST['sifra'];

    if(isset($_POST['email'] )) { // registracija korisnika

        $email = $_POST['email'];

        $sqldb = "INSERT INTO registrovani (korisnik, email, sifra, admin) VALUES ('$korisnik','$email', '$sifra', '0')";
        $query = mysqli_query($db, $sqldb); mysqli_close($db);
        $_SESSION['korisnik_sesija'] = $korisnik; echo '<script>window.location="../panel/panel.php";</script>';

        return true;
    }else {
        
    }
    }*/
    if ($_SERVER ['REQUEST_METHOD'] == "POST") {

        $korisnik = $_POST ['korisnik'];
        $sifra = $_POST ['sifra'];
        $email = $_POST ['email'];

        if (!empty ($korisnik) && !empty($sifra) && !empty($email) && !is_numeric($korisnik)) {

            //snimi u bazu
            $query = "insert into registrovani (korisnik, email, sifra) values ()";
        }else {
            echo "Molimo ukucajte ispravne podatke"
        }


    }