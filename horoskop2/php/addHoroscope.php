<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'countHoroscope.php';
    $horoscope = new user($_POST['prsnnmr']);
    if(isset($_SESSION["horoscope"]) == null){
        $_SESSION["horoscope"] = $horoscope->echoSign();
        echo true;
    } else if($_SESSION["horoscope"] != null){
        echo false;
    
    }
};
?>