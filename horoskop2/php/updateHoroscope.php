<?php
parse_str(file_get_contents("php://input"), $_PUT);
session_start();
if($_SERVER["REQUEST_METHOD"] == "PUT"){
    if(isset($_SESSION) && !empty($_SESSION["horoscope"])){
        include 'countHoroscope.php';
        $horoscope = new user($_PUT['prsnnmr']);
        $_SESSION["horoscope"] = $horoscope->echoSign();
        echo true;
    }  else{
        echo false;
    }
};
?>