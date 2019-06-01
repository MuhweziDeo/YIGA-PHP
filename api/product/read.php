<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once  '../objects/product.php';

$db = new Database();
$product = new Product($db);

$stmt = $product->read();

$num = $stmt->rowCount();


echo 'Products';
