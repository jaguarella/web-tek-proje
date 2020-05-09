<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])){
    $mail = $_POST['email'];
    $pass = $_POST['password'];
    if($mail="b151210063@sakarya.edu.tr" && $pass = "123"){
        echo "HOŞGELDİNİZ.";
        header('Refresh: 5; URL=/index.php'); 
    }
    else{
        echo 1;
        echo "Giriş başarısız. Tekrar denemek için <a href='/login.php'>tıklayınız.</a>";
        header('Refresh: 5; URL=/login.php');
    }
}
else{
    echo "Giriş başarısız. Tekrar denemek için <a href='/login.php'>tıklayınız.</a>";
    header('Refresh: 5; URL=/login.php');
}