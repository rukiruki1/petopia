<?php
    require_once("php/mainLogCheck.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petopia</title>
    <link href="css/advice.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">

    <!--[Google Fonts]-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--Nunito Font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800&family=Work+Sans:wght@700;800&display=swap"
        rel="stylesheet">

    <!--Box Icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--Flickity-->
    <!--CSS-->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!--JS-->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</head>
<body>
    <header>
        <!--Logo-->
        <div class="logo-container"><img src="assets/logo.png" alt=""></div>

        <!--Middle Navigation-->
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="items.html">Cats</a></li>
                <li><a href="items.html">Dogs</a></li>
                <li><a href="advice.html">Advice</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>

        <!--Right Navigation-->
        <div class="right-nav">
            <!--Shoppiung Basket Button-->
            <div class='basket-button bx bx-basket'></div>
            <?php
                if ($b==true) {
                    //Log out button
                    echo '<div class="login-button"><a href="php/signOut.php"">Log Out</a></div>';
                }else{
                    //Login Button
                    echo '<div class="login-button"><a href="login.php">Login</a></div>';
                }       
            ?>
        </div>

    </header>
    
</body>