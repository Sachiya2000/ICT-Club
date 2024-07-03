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
            <a href=""><img src="../src/img/logo.png" style="width: 100px; border-radius: 50%;" alt=""></a>
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

    <!--Event Section-->
    <section class="event">
        <h1>Upcoming Events</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At doloribus molestiae dicta? Perferendis nam laborum debitis.</p>
         <div class="work-list">
            <div class="event-col">
                <h3>Gaming Event</h3>
            <img src="./src/img/logo.jpg" alt="">
            <a href="">Read More</a>
            </div>
            <div class="event-col">
                <h3>WorkShop</h3>
                <img src="./src/img/logo.jpg" alt="">
                <a href="">Read More</a>
            </div>
            <div class="event-col">
                <h3>Hackthon</h3>
            <img src="./src/img/logo.jpg" alt="">
            <a href="">Read More</a>
            </div>
         </div> 
    
    </section>
    <section class="pEvent" id="pEvent">
        <div class="container">
       <div class="row">
        <div class="card">
            <img src="./src/img/background.jpg" alt="Denim Jeans" style="width:100%">
            <h1>Event Name</h1>
            <p class="price">Date</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Click here</button></p>
        </div>
        <div class="card">
            <img src="./src/img/background.jpg" alt="Denim Jeans" style="width:100%">
            <h1>Event Name</h1>
            <p class="price">Date</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Click here</button></p>
        </div>
        <div class="card">
            <img src="./src/img/background.jpg" alt="Denim Jeans" style="width:100%">
            <h1>Event Name</h1>
            <p class="price">Date</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Click here</button></p>
        </div>
        <div class="card" >
            <img src="./src/img/background.jpg" alt="Denim Jeans" style="width:100%">
            <h1>Event Name</h1>
            <p class="price">Date</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Click here</button></p>
        </div>
        <div class="card" id="work-display-list">
            <img src="./src/img/background.jpg" alt="Denim Jeans" style="width:100%">
            <h1>Event Name</h1>
            <p class="price">Date</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Click here</button></p>
        </div>
        <div class="card" id="work-display-list">
            <img src="./src/img/background.jpg" alt="Denim Jeans" style="width:100%">
            <h1>Event Name</h1>
            <p class="price">Date</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button>Click here</button></p>
        </div>
        
       </div>
       <div class=" row-col">
        <button type="button" class="btn" id="seeMoreBtn" onclick="displayList()">See More</button>

       </div>
      </div>
    </section>
    
    <!--About Section Start-->
     <section class="about" id="about">
        <div class="row">
            <div class="about-col-1" >
                <img src="./src/img/logo.png" alt="">
            </div>
            <div class="about-col-2" >
                <h1 class="sub-title">About Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt maiores earum alias? Dolorum modi amet similique officiis repudiandae beatae, facilis magnam temporibus unde repellat, enim quisquam blanditiis. Corporis voluptates commodi, beatae voluptatibus autem blanditiis consequuntur labore ullam reprehenderit repellendus quasi nobis sequi tempora ad ipsa dolore perferendis, vero iste a.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ab dolore corrupti facere quos exercitationem tempora ipsa voluptatibus fuga omnis, sunt aliquid assumenda quidem. Magnam atque cumque, fuga delectus incidunt et modi ex rerum sint ipsam, alias praesentium illo debitis repellendus, consectetur quod vitae cupiditate omnis facilis. Veritatis, provident inventore?</p>

        </div>

        </div>
    </section>
    <!--Community Section Start-->
    <section class="community">
        <h1>Our Community</h1>
        <div class="community-main">
            <div class="wrapper">
                <i id="left" class="fa-solid  fas fa-angle-left"></i>
                <ul class="carousel">
                    <li class="card">
                        <div class="img"><img src="./src/img/udaya.jpg" alt="" draggable="false"> </div>
                        <h2 style="color: #F8EDFF; font-weight:bold;">
                            Udaya S Perera
                        </h2>
                        <span>President</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./src/img/pradeep.jpg" alt="" draggable="false"> </div>
                        <h2 style="color: #F8EDFF; font-weight:bold;">Pradeep Gunawardhna</h2>
                        <span>Vice President</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./src/img/pradeep.jpg" alt="" draggable="false"> </div>
                        <h2 style="color: #F8EDFF; font-weight:bold;">Pradeep Gunawardhna</h2>
                        <span>Vice President</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./src/img/pradeep.jpg" alt="" draggable="false"> </div>
                        <h2 style="color: #F8EDFF; font-weight:bold;">Pradeep Gunawardhna</h2>
                        <span>Vice President</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./src/img/pradeep.jpg" alt="" draggable="false"> </div>
                        <h2 style="color: #F8EDFF; font-weight:bold;">Pradeep Gunawardhna</h2>
                        <span>Vice President</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./src/img/pradeep.jpg" alt="" draggable="false"> </div>
                        <h2 style="color: #F8EDFF; font-weight:bold;">Pradeep Gunawardhna</h2>
                        <span>Vice President</span>
                    </li>
                </ul>
                <i id="right" class="fa-solid fas fa-angle-right"></i>
            </div>
        </div>
    </section>
    <!--Gallery Section Start-->
    <section class="gallery-main">
    <div class="gallery">
        <input type="checkbox">
        <img src="https://picsum.photos/id/1028/300/300" alt="a forest after an apocalypse">
        <img src="https://picsum.photos/id/15/300/300" alt="a waterfall and many rocks">
        <img src="https://picsum.photos/id/1040/300/300" alt="a house on a mountain">
        <img src="https://picsum.photos/id/106/300/300" alt="sime pink flowers">
        <img src="https://picsum.photos/id/136/300/300" alt="big rocks with some trees">
        <img src="https://picsum.photos/id/1039/300/300" alt="a waterfall, a lot of tree and a great view from the sky">
        <img src="https://picsum.photos/id/110/300/300" alt="a cool landscape">
        <img src="https://picsum.photos/id/1047/300/300" alt="inside a town between two big buildings">
        <img src="https://picsum.photos/id/1057/300/300" alt="a great view of the sea above the mountain">
    </div>
    </section>









     <!--Footer -->
    <footer class="footer">
        <div class="footer__addr">
            <h1 class="footer__logo">ICT Club</h1>
    
            <h2>Contact</h2>
    
            <address>
                5534 Somewhere In. The World 22193-10212<br>
    
                <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
            </address>
        </div>
    
        <ul class="footer__nav">
            <li class="nav__item">
                <h2 class="nav__title">Media</h2>
    
                <ul class="nav__ul">
                    <li>
                        <a href="#">Online</a>
                    </li>
    
                    <li>
                        <a href="#">Print</a>
                    </li>
    
                    <li>
                        <a href="#">Alternative Ads</a>
                    </li>
                </ul>
            </li>
    
            <li class="nav__item nav__item--extra">
                <h2 class="nav__title">Technology</h2>
    
                <ul class="nav__ul nav__ul--extra">
                    <li>
                        <a href="#">Hardware Design</a>
                    </li>
    
                    <li>
                        <a href="#">Software Design</a>
                    </li>
    
                    <li>
                        <a href="#">Digital Signage</a>
                    </li>
    
                    <li>
                        <a href="#">Automation</a>
                    </li>
    
                    <li>
                        <a href="#">Artificial Intelligence</a>
                    </li>
    
                    <li>
                        <a href="#">IoT</a>
                    </li>
                </ul>
            </li>
    
            <li class="nav__item">
                <h2 class="nav__title">Legal</h2>
    
                <ul class="nav__ul">
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
    
                    <li>
                        <a href="#">Terms of Use</a>
                    </li>
    
                    <li>
                        <a href="#">Sitemap</a>
                    </li>
                </ul>
            </li>
        </ul>
    
        <div class="legal">
            <p>&copy; 2024 Something. All rights reserved.</p>
    
            <div class="legal__links">
                <span>Made with  <span class="heart">♥</span>  <span class="name">Sachitha Madhuranga</span> </span>
            </div>
        </div>
    </footer>

    <script src="./src/js/script.js"></script>
</body>
</html>