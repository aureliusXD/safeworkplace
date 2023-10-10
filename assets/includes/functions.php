<?php
try{
    $pdo=new PDO("mysql:host=localhost;dbname=safeworkplace","root","");
}
catch(PDOException $e){
    echo $e->getMessage();
}