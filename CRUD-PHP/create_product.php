<?php
/**
 * Created by PhpStorm.
 * User: dee
 * Date: 2019-04-18
 * Time: 19:45
 */
$page_title = "Create Product";
//headers
// include database and object files
include_once 'config/database.php';
//include_once 'objects/product.php';
//include_once 'objects/category.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// pass connection to objects
//$product = new Product($db);
//$category = new Category($db);

include_once "layout_header.php";
// content here
echo "<div class='right-button-margin'>";
echo "<a href='index.php' class='btn btn-default pull-right'>Read Products</a>";
echo "</div>";


include_once "layout_footer.php";


