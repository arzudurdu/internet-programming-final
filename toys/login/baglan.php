<?php
try{
    $db = new PDO("mysql:host=localhost; dbname=admin; charset=utf8", 'root', 'arzu123');
}
catch(exception $e){
    echo $e->getMessage();
}


?>
