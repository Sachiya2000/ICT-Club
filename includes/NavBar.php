<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICT Club</title>
    <!--Style css file add-->
    <link rel="stylesheet" href="../src/css/style.css">
    <!--Fonts added-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

        <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

        <!--Icon Added-->
        <script src="https://kit.fontawesome.com/ed86613a55.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php  include "includes/config.php";       ?>
    <section class="header" id="header">
        <nav>
            <a href=""><img src="../src/img/logo.png" style="width: 100px; border-radius: 50%;" alt=""></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-solid fa-xmark" onclick="hiddenMenu()"></i>
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="./index.php#about">About</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./index.php#gallery">Gallery</a></li>
                <li><a href="./contact.php">Join Us</a></li>
            </ul>
        </div>

            <i class="fa fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h4>Welcome To </h4>
            <h1><span>Saegis </span>ICT Club</h1>
        </div>
    </section>