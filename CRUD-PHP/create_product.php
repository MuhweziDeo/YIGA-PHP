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
include_once 'objects/category.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// pass connection to objects
//$product = new Product($db);
$category = new Category($db);


include_once "layout_header.php";

echo "<div class='right-button-margin'>";
echo "<a href='index.php' class='btn btn-default pull-right'>Read Products</a>";
echo "</div>";
?>
<!-- // content here -->
    <!-- PHP post code will be here -->

    <!-- HTML form for creating a product -->
    <form action="<?php
    echo htmlspecialchars($_SERVER["PHP_SELF"]);
    ?>" method="post">

        <table class='table table-hover table-responsive table-bordered'>

            <tr>
                <td>Name</td>
                <td><input type='text' name='name' class='form-control' /></td>
            </tr>

            <tr>
                <td>Price</td>
                <td><input type='text' name='price' class='form-control' /></td>
            </tr>

            <tr>
                <td>Description</td>
                <td><textarea name='description' class='form-control'></textarea></td>
            </tr>

            <tr>
                <td>Category</td>
                <td>
                    <!-- categories from database will be here -->
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">Create</button>
                </td>
            </tr>

        </table>
    </form>

<?php include_once "layout_footer.php";


