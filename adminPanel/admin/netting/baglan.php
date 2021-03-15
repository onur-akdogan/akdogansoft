<?php
try {
    $db=new PDO("mysql:host=localhost;dbname=akdogansoft;charset=utf8",'root','onur.2000');




} catch (PDOException $e) {

    echo $e->getMessage();

}
?>