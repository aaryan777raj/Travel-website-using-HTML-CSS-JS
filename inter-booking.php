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




        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>



    <div class="heading" style="background:url(./images/building.jpg) no-repeat">
        <h1>World Tour Booking </h1>

    </div>




    <section class="inter-book">
        <h1 class="heading-title">Book Your International Travel Package</h1>
        <form action="interbook_form.php" method="POST" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Name:</span>
                <input type="text" placeholder="Enter your name" name="name" required>
            </div>
            <div class="inputBox">
                <span>Email:</span>
                <input type="email" placeholder="Enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span>Phone:</span>
                <input type="number" placeholder="Enter your number" name="phone" required>
            </div>
            <div class="inputBox">
                <span>Address:</span>
                <input type="text" placeholder="Enter your address" name="address" required>
            </div>
            <div class="inputBox">
                <span>Destination:</span>
                <input type="text" placeholder="Place you want to visit" name="destination" required>
            </div>
            <div class="inputBox">
                <span>Number of Guests:</span>
                <input type="number" placeholder="Number of guests" name="guests" required>
            </div>
            <div class="inputBox">
                <span>Arrival Date:</span>
                <input type="date" name="arrival_date" required>
            </div>
            <div class="inputBox">
                <span>Leaving Date:</span>
                <input type="date" name="leaving_date" required>
            </div>
            <div class="inputBox">
                <span>Package Type:</span>
                <select name="package_type" required>
                    <option value="Economy">Economy</option>
                    <option value="Standard">Standard</option>
                    <option value="Luxury">Luxury</option>
                </select>
            </div>
            <div class="inputBox">
                <span>Additional Information:</span>
                <textarea placeholder="Any additional information" name="additional_info"></textarea>
            </div>

            <div class="inputBox">
                <span>Passport Number:</span>
                <input type="number" placeholder="Enter your passport number" name="passport_number" required>
            </div>
            <div class="inputBox">
                <span>Nationality:</span>
                <input type="text" placeholder="Enter your nationality" name="nationality" required>
            </div>
            <div class="inputBox">
                <span>Date of Birth:</span>
                <input type="date" name="date_of_birth" required>
            </div>
            <div class="inputBox">
                <span>Emergency Contact:</span>
                <input type="number" placeholder="Enter emergency contact name and number" name="emergency_contact" required>
            </div>
            <div class="inputBox">
                <span>Payment Method:</span>
                <select name="payment_method" required>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                </select>
            </div>
           



        </div>
        <input type="submit" value="Book Now" class="btn" name="send">
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