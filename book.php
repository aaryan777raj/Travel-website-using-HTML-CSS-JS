<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <section class="header">
        <a href="home.php" class="logo">Incredible Travels</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="inter-booking.php">more</a>




        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>



    <div class="heading" style="background:url(./images/wallpaperflare.com_wallpaper.jpg) no-repeat">
        <h1>Book now!</h1>

    </div>




    <section class="book">
        <h1 class="heading-title">Book your journey now!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name: </span>
                    <input type="text" placeholder="enter your name" name="name">

                </div>
                <div class="inputBox">
                    <span>email: </span>
                    <input type="email" placeholder="enter your email" name="email">

                </div>
                <div class="inputBox">
                    <span>phone: </span>
                    <input type="number" placeholder="enter your number" name="phone">


                </div>
                <div class="inputBox">
                    <span>address: </span>
                    <input type="text" placeholder="enter your address" name="address">


                </div>
                <div class="inputBox">
                    <span>where to: </span>
                    <input type="text" placeholder="place you want to visit" name="location">


                </div>
                <div class="inputBox">
                    <span>how many: </span>
                    <input type="number"placeholder="number of guests" name="guest">

                </div>
                <div class="inputBox">
                    <span>arrivals: </span>
                    <input type="date" name="arrivals">

                </div>
                <div class="inputBox">
                    <span>leaving: </span>
                    <input type="date" name="leaving">

                </div>


            </div>

            <input type="submit" value="submit" class="btn" name="send">



        </form>

    </section>


























    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quicks Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>


            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask question</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>



            </div>

            <div class="box">
                <h3>contacts info</h3>
                <a href="#"><i class="fas fa-phone"></i>+91-7853453456</a>
                <a href="#"><i class="fas fa-phone"></i>+91-8766788765</a>
                <a href="#"><i class="fas fa-envelope"></i>abc@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>ranchi, india - 834001</a>

            </div>

            <div class="box">
                <h3>follows us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin/a>



            </div>





        </div>

        <div class="credit">created by <span>Mr. Aaryan Raj</span> |All Rigits Reserved. </div>







    </section>














    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="./script.js"></script>

</body>

</html>