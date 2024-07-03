<?php
    // index.php
   include './includes/NavBar.php';
    include './includes/config.php';

    $sql = "SELECT * FROM event ORDER BY event_id DESC";
    $result = $conn->query($sql);

    // Fetch all data into an array
    $events = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $events[] = $row;
        }
    }

?>
    <!--Event Section-->
    <link rel="stylesheet" href="./src/css/style.css">
    <section class="event">
        <h1>Upcoming Events</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At doloribus molestiae dicta? Perferendis nam laborum debitis.</p>
         <div class="work-list">
            <?php foreach ($events as $event) { ?>
                 <?php if ($event['date'] > date("Y-m-d")) { ?>
        <div class="event-col">
            <h3><?php echo $event['event_name'] ?></h3>
            <img src="./uploads/<?php echo $event['event_img'] ?>" alt="">
            <a href="">Read More</a>
        </div>
        <?php } ?>
        <?php } ?>
         </div> 
    
    </section>
    <!--Previous Event Section-->
    <section class="pEvent" id="pEvent">
        <h1>Previous Events</h1>
        <div class="container">
       <div class="row">
       <?php foreach ($events as $event) { ?>
                <?php if ($event['date'] < date("Y-m-d")) { ?>
                    <div class="card">
                        <img src="./uploads/<?php echo $event['event_img']; ?>" alt="Event Image: <?php echo $event['event_name']; ?>" style="width:100%">
                        <h1><?php echo $event['event_name']; ?></h1>
                        <p class="price"><?php echo $event['date']; ?></p>
                        <p><?php echo $event['description']; ?></p>
                        <p><button>Click here</button></p>
                    </div>
                <?php } ?>
            <?php } ?>
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
                        <span>Staff Advicer</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./src/img/dismika.jpg" alt="" draggable="false"> </div>
                        <h2 style="color: #F8EDFF; font-weight:bold;">Dismika Bandara</h2>
                        <span>President</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./src/img/pradeep.jpg" alt="" draggable="false"> </div>
                        <h2 style="color: #F8EDFF; font-weight:bold;">Pradeep Gunawardhna</h2>
                        <span>Vice President</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./src/img/sethma.jpg" alt="" draggable="false"> </div>
                        <h2 style="color: #F8EDFF; font-weight:bold;">Sethma Gunathilaka</h2>
                        <span>Secretary</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./src/img/ama.jpg" alt="" draggable="false"> </div>
                        <h2 style="color: #F8EDFF; font-weight:bold;">Amaya Rajasuriya</h2>
                        <span>Assignment Secretary</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./src/img/Sasiya.jpg" alt="" draggable="false"> </div>
                        <h2 style="color: #F8EDFF; font-weight:bold;">Sasi Rasmika</h2>
                        <span>Assignment Secretary</span>
                    </li>
                </ul>
                <i id="right" class="fa-solid fas fa-angle-right"></i>
            </div>
        </div>
    </section>
    <!--Gallery Section Start-->
    <section class="gallery-main" id="gallery">
    <div class="gallery">
        <input type="checkbox">
        <img src="./src/img/desigthon1.jpg" alt="a forest after an apocalypse">
        <img src="./src/img/wrapup.jpg" alt="a waterfall and many rocks">
        <img src="./src/img/hackthon2.jpg" alt="a house on a mountain">
        <img src="./src/img/workshopv.jpg" alt="sime pink flowers">
        <img src="./src/img/logo.png" alt="big rocks with some trees">
        <img src="./src/img/workshopv2.jpg" alt="a waterfall, a lot of tree and a great view from the sky">
        <img src="./src/img/staff.jpg" alt="a cool landscape">
        <img src="./src/img/desigthon2.jpg" alt="inside a town between two big buildings">
        <img src="./src/img/staff2.jpg" alt="a great view of the sea above the mountain">
    </div>
    </section>
    <script src="./src/js/script.js"></script>
    <?php

         include './includes/FooterBar.php';

    ?>
   
   