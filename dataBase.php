<?php

$dsn = "mysql:host=localhost;dbname=mahara";
$userName = "root";
$password = "";
$table = "products";

try {
    $db = new PDO($dsn, $userName, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Connection Success";
}
catch (PDOException $e) {
    echo "Please Check Your Code". $e->getMessage();
}

$str = $db->prepare("SELECT * FROM products ");
$str->execute();
$rows = $str->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);