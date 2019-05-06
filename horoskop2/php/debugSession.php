<?php
session_start();

echo "debugSession.php\n";

if(isset($_SESSION['nerevarine'])){
    echo "Session nerevarine är set\n";
    echo "Session nerevarine är: " . $_SESSION['nerevarine'] . "\n";
}else{
    echo "Session nerevarine är inte set\n";
}