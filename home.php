<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA_Copmatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <section class="header">
        <a href="home.php" class="logo">Capture</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="http://localhost/WebProgrammingProject-master/categories.php">Categories</a>
            <a href="photographers.php">Photographers</a>
            <a href="book.php">Book</a>
            <a href="http://localhost/WebProgrammingProject-master/f/login-reg.html">Register</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">
            
            <div class="swiper-slide slide" style="background:url('Images/Images/wedding 11.jpg') no-repeat">
                <div class="content">
                    <span>where all memories are captured</span>
                    <h3>creating visual heirlooms</h3>
                    <a href="http://localhost/WebProgrammingProject-master/categories.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url('Images/Images/fashion 11.jpg') no-repeat">
                <div class="content">
                    <span>where all memories are captured</span>
                    <h3>Expertise meets creativity</h3>
                    <a href="http://localhost/WebProgrammingProject-master/categories.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url('Images/Images/wild 3.jpg') no-repeat">
                <div class="content">
                    <span>where all memories are captured</span>
                    <h3>The beauty of life, captured</h3>
                    <a href="http://localhost/WebProgrammingProject-master/categories.php" class="btn">discover more</a>
                </div>
            </div>

        </div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

    </section>

    <section class="home-about">

        <div class="image">
            <img src="Images/Images/about-img.jpg" alt="about image">
        </div>

        <div class="content">
            <h3>about</h3>
            <p>Welcome to the Captured Moments Gallery, a breathtaking online showcase of extraordinary photographs captured by talented photographers from around the world. Immerse yourself in a visual journey where every click tells a unique story and each image is a testament to the artistry of our featured photographers.</p>
            <a href="about.php" class="btn">read more</a>
        </div>

    </section>

    <!-- categories-->
<section class="categories">
    <style>
        .jlr {
        font-size: 0;
        text-align: center;
    }

    .jlr .jlr_item {
        font-size: 1rem;
        display: inline-block;
        box-sizing: border-box;
        padding: 6px;
        opacity: 1;
        width: 50%; /* Display two images side by side */
    }

    .jlr img.jlr_img {
        width: 100%; /* Ensure images take full width of their container */
        height: auto; /* Maintain aspect ratio */
        opacity: 1;
    }

    .jlr img.jlr_loaded {
        -webkit-transition: opacity 1s ease-in;
        -moz-transition: opacity 1s ease-in;
        -o-transition: opacity 1s ease-in;
        -ms-transition: opacity 1s ease-in;
        transition: opacity 1s ease-in;
        opacity: 1;
    }
    </style>
    <div class="continer">
        <div>
        <h1 style="margin-top: 70px;">Portrait Photography</h1>
    </div>
      <div id="jLightroom" class="jlr">
         <a href="DanielReynolds.php" data-lightbox="lbl" class="jlr_item"><img src="Images/Images/portrait 4.jpg" class="jlr_img"/></a>
         <a href="DanielReynolds.php" data-lightbox="lbl" class="jlr_item"><img src="Images/Images/portrait 5.jpg" class="jlr_img"/></a>
         <div class="button-container">
            <button onclick="showPortrait()" id="button1">Show more/Hide</button>
        </div>
       
         <a href="DanielReynolds.php" data-lightbox="lbl" class="jlr_item"><img src="Images/Images/portrait 9.jpg" class="jlr_img" id="portrait-photos-left"/></a>
         <a href="DanielReynolds.php" data-lightbox="lbl" class="jlr_item"><img src="Images/Images/portrait 13.jpg" class="jlr_img" id="portrait-photos-right"/></a>
      </div>
         <div>
         <h1 style="margin-top: 70px;">Fashion Photography</h1>
         </div>
         <div id="jLightroom" class="jlr">
         <a href="Deanna Williams.php" data-lightbox="lbl" class="jlr_item"><img src="Images/Images/fashion 1.jpg" class="jlr_img"/></a>
         <a href="Deanna Williams.php" data-lightbox="lbl" class="jlr_item"><img src="Images/Images/fashion 2.jpg" class="jlr_img"/></a>
         
         <div class="button-container">
            <button onclick="showFashion()" id="button2">Show more/Hide</button>
        </div>
         <a href="Deanna Williams.php" data-lightbox="lbl" class="jlr_item"><img src="Images/Images/fashion 3.jpg" class="jlr_img" id="fashion-photos-left"/></a>
         <a href="Deanna Williams.php" data-lightbox="lbl" class="jlr_item"><img src="Images/Images/fashion 4.jpg" class="jlr_img" id="fashion-photos-right"/></a>
         </div>
         <div class="button-container">
            <button id="button3" onclick="window.location.href='http://localhost/WebProgrammingProject-master/categories.php'">See more categories</button>
            
         
         
       </div>
       </div>


    </section>
    <!-- photographers-->

    <section class="home-offer">

    <div class="content">
            <h3>Book Your Photographer Today and Enjoy Up to 30% Off!</h3>
            <h4>🎉 New Year's Exclusive Photography Offer! 📸</h4>
            <p>Capture the Moments, Cherish the Memories! 🌟 <br>
            As we bid farewell to the old and welcome the new, we're thrilled to present an exclusive New Year's offer on our exceptional photography services! 🎊 <br>
            <b>📆 Offer Period: January 1, 2023, to January 31, 2023</b></p>
            <a href="book.php" class="btn">book now</a>
        </div>

    </section>

       

    <section class="footer">
        <style>
            .footer{
                background: url('Images/Images/footer.jpg');
                background-size: cover;
                background-position: center;
            }
        </style>
        <div class="box-container">
            
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="http://localhost/WebProgrammingProject-master/categories.php"><i class="fas fa-angle-right"></i>Categories</a>
                <a href="photographers.php"><i class="fas fa-angle-right"></i>Photographers</a>
                <a href="photographers.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>


            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask Question</a>
                <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i>+02 0123-456-7890</a>
                <a href="#"><i class="fas fa-envelope"></i>capture@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Smart Village, Kerdasa, Giza Governorate - 3650106</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
                <a href="#"><i class="fab fa-whatsapp"></i>whatsapp</a>
            </div>


        </div>

        <div class="credit">created by <span>Zeina Amr, Ghadeer Hesham, Farah Magdy</span></div>

    </section>






<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>

<script src="scripts.js"></script>
<script src="weddingscript.js"></script>


<script src="js/jquery.min.js"></script>
 <script src="js/imagesloaded.pkgd.min.js"></script>
 <script src="js/lightbox.min.js"></script>
 <script src="js/jquery.lightroom.js"></script>
 
 <script type="text/javascript">
     $("#jLightroom").lightroom({
         image_container_selector: ".jlr_item",
         img_selector: "img.jlr_img",
         img_class_loaded: "jlr_loaded",
         img_space: 6,
         img_mode: 'min',
         init_callback: function(elem){$(elem).removeClass("gray_out")}
     }).init();
 </script>


</body>
</html>
