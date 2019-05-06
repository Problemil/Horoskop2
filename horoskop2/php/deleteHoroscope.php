<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    if(isset($_SESSION["horoscope"]) == null){
        echo false;
    } else{
        session_destroy();
        echo true;
    }
};
?>