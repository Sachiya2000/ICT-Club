<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICT Club</title>
    <!--Style css file add-->
    <link rel="stylesheet" href="./src/css/style.css">
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
    <section class="header" id="header">
        <nav>
            <a href=""><img src="./src/img/logo.png" style="width: 100px; border-radius: 50%;" alt=""></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-solid fa-xmark" onclick="hiddenMenu()"></i>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Join Us</a></li>
            </ul>
        </div>

            <i class="fa fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h4>Welcome To </h4>
            <h1><span>Saegis </span>ICT Club</h1>
        </div>
    </section>
    <!--Contact Us Section Start-->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="subTittle">Contact Us</h1>
                    <p><i class="fa-solid fa-paper-plane"></i> saegis@example.com</p>
                    <p><i class="fa-solid fa-square-phone"></i> 0771234567</p>
                    <div class="social-icons">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <a href="" class="btn3">Join Us</a>
    
                </div>
                <div class="contact-right">
                    <form name="submit-to-google-sheet" id="myform">
                        <input type="text" name="name" id="name" placeholder="Your Name">
                        <input type="email" name="email" id="email" placeholder="Your Email">
                        <textarea name="message" id="message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2" onclick="rest()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
       
    </section>
    
    <!--Contact Us Section End-->
    <!--Map Section Start-->
    <section class="map" id="map">
        <div class="row">
            <div class="col-1">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.185750477821!2d79.88297607413439!3d6.868332319061873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a4f8b514d0f%3A0x6008fdafefb7ecd0!2sSaegis%20Campus!5e0!3m2!1sen!2slk!4v1709623399495!5m2!1sen!2slk"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-2">
                <ul>
                    <li>address : <a href="">Saegis Campus, Colombo"></a></li>
                    <li>phone : <a href="">0771234567</a></li>
                    <li>email : <a href="">saegis@example.com</a></li>

                </ul>
            </div>
        </div>
    </section>
   <?php  include './includes/FooterBar.php'; ?>