<?php
include("db-connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">
    <title>Document</title>
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
    <?php
    if(isset($_SESSION["user_id"]))
    {
        $user_id = $_SESSION["user_id"];
        $sqlSelect = "SELECT * FROM users WHERE user_id = '$user_id'";
        $data = $conn->query($sqlSelect);
        foreach($data as $value){
    ?>
<div class="formDiv">
    <form method="post" action="">
    <section class="edit-product-form-group">
        <label for="input">Voornaam</label>
        <?php echo $value['firstname']; ?>
    </section>
    <section class="edit-product-form-group">
        <label for="textarea">Achternaam</label>
        <?php echo $value['lastname']; ?>
    </section>
    <section class="edit-product-form-group">
        <label for="textarea">Schermnaam</label>
        <?php echo $value['screenname']; ?>
    </section>
    <section class="edit-product-form-group">
        <label for="input">Email</label>
        <?php echo $value['email']; ?>
    </section>
    <section class="edit-product-form-group">
        <label for="input">Telefoonnummer</label>
        <?php echo $value['phone_number']; ?>
    </section>
    <section class="edit-product-form-group">
        <label for="input">Huisnummer</label>
        <?php echo $value['house_number']; ?>
    </section>
    <section class="edit-product-form-group">
        <input disabled type="checkbox" name="accept-phonenumber_input" value="true" <?php $value['accept_phone'] == 'true' ? print 'checked' : 'false'  ?>>Accepteer telefoon
        <br>
        <input disabled type="checkbox" name="accept-email_input" value="true" <?php $value['accept_email'] == 'true' ? print 'checked' : 'false'  ?>>Accepteer email
        <br>
        <input disabled type="checkbox" name="accept-postalcode_input" value="true" <?php $value['accept_address'] == 'true' ? print 'checked' : 'false'  ?>>Accepteer postcode
    </section>
    </form>
</div>
<div class="knop">
    <a href="edit-profile.php">profiel bewerken</a>
        </div>
    <?php
        }
    } else{
        echo "Log in om deze pagina te kunnen gebruiken";
    }
    ?>
</body>
</html>