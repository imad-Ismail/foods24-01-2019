<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/product-information.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>product-information</title>
</head>
<body>
    <?php
    include "hamburger-menu.php";
?>  
    <!--NAVBAR-->
            <div class="landingspage-navbar">
                <div class="navbar-logo animated bounceInUp">
                    <a href="index.php">
                    <img src="images/logo-foodsavers.png" alt="logo"></a>
                </div>
                <div class="navbar-hamburger-menu animated bounceInUp">
                    <span onclick="openNav()">&#9776;</span>
                </div>
                
            </div>

    <div class=product-information-container>
        <?php
include "db-connection.php";

$product_id = $_GET["product_id"];
$sql = "SELECT * FROM product WHERE product_id = '$product_id'";

$data = $conn->query($sql);

foreach($data as $row)
{
    $htmlOutput  = "";
    $htmlOutput  = '<div class="product-information-card">';
    $htmlOutput .= '<img src="uploads/' . $row['imagelist'] . '" style="width:75%">';
    $htmlOutput .= '<h1>'. '<div class="products-information-title">' . $row['title'] . '</h1>';
    $htmlOutput .= '<b>'. '<div class="products-information-expire-date">' . 'houdsbaarheids datum&nbsp;'. '</b>' . '<div class=date-color>' . $row['expire_date'] . '</div>';
    $htmlOutput .= '<br>';
    $htmlOutput .= '<b>'. '<div class"products-information-distance">' . 'afstand&nbsp;' . '</b>' . '<div class=distance-color>' . '1.3km' . '</div>';
    $htmlOutput .= '<br>';
    $htmlOutput .= '<div class="products-information-info">' . $row['description'];
    $htmlOutput .= '</div>'; 
    $htmlOutput .= '<div class="product-information-button">';
    $htmlOutput .= '<p>'. '<button>'. '  <img src="images/chat.png" height="40" width="40">' . '</button>' . '</p>';
    $htmlOutput .= '<p>'. '<button>'. '  <img src="images/smartphone.png" height="40" width="40">' . '</button>' . '</p>';
    $htmlOutput .= '<p>'. '<button>'. '  <img src="images/email.png" height="40" width="40">' . '</button>' . '</p>';
    $htmlOutput .= '<p>'. '<button>'. '  <img src="images/like.png" height="40" width="40">' . '</button>' . '</p>';
    $htmlOutput .= '</div>';   
echo $htmlOutput;

}
?>

    </div>
</body>
</html>