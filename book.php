<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA_Copmatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <section class="header">
        <a href="home.php" class="logo">Capture</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="categories.php">Categories</a>
            <a href="photographers.php">Photographers</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <div class="heading" style="background:url(Images/Images/booking-header.jpg) no-repeat">
        <h1>about</h1>
    </div>


    <section class="booking">
        <h1 class="heading-title">book your photographer</h1>
        <form action="book_form.php" methot="post" class="book-form">
            <div class="flex">
            <div class="inputBox">
                <span>name:</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email:</span>
                <input type="text" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone:</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>address:</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>location:</span>
                <input type="text" placeholder="enter location of photo session" name="location">
            </div>
            <div class="inputBox">
                <span>city:</span>
                <input type="text" placeholder="enter your city" name="city">
            </div>
            <div class="inputBox">
                <span>duration:</span>
                <input type="text" placeholder="enter duration of hiring" name="duration">
            </div>
            <div class="inputBox">
                <span>date:</span>
                <input type="date" placeholder="enter date of booking" name="date">
            </div>
            <input type="submit" value="submit" class="btn" name="send">
            </div>
        </form>
    </section>

























    <section class="footer">

        <div class="box-container">
            
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="categories.php"><i class="fas fa-angle-right"></i>Categories</a>
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






<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>


</body>
</html>