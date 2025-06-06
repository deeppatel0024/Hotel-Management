<?php
session_start();

// Auto-logout if inactive for more than 1 hour
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
    session_unset(); 
    session_destroy();
    header("Location: login.html?session_expired=true");
    exit();
}

$_SESSION['LAST_ACTIVITY'] = time(); // Update last activity timestamp

// Redirect to login if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>
 
 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

<style>
        .room ul {
    padding: 6px;
    margin: 10px 0;
    }

    .room ul li {
    list-style: none;         /* Removes bullet points */
    text-align: left;         /* Align text to the left */
    font-size: 16px;
    display: flex;            /* Align icon and text side by side */
    align-items: center;
    margin-bottom: 8px;
    }

    .room ul li i {
    font-size: 22px;          /* Icon size */
    color: #444;              /* Optional: icon color */
    margin-right: 10px;       /* Space between icon and text */
    }
</style>
</head>

<body>
        <!-- Header -->
    <?php include 'header.php' ?>

    <div class="welcome-text">
        <h1>Welcome to <strong>The President</strong></h1>
        <p>Experience luxury, comfort, and elegance at our hotel.</p>
    </div>

    <!-- IMAGE SLIDER -->
    <div class="slider-container">
        <div class="slider">
            <div class="slide"><img src="HMSimages/h1.jpeg" alt="Hotel Image"></div>
            <div class="slide"><img src="HMSimages/7.png" alt="Hotel Image"></div>
            <div class="slide"><img src="HMSimages/8.jpg" alt="Hotel Image"></div>
            <div class="slide"><img src="HMSimages/hotel3.jpg" alt="Hotel Image"></div>
            <div class="slide"><img src="HMSimages/4.jpg" alt="Hotel Image"></div>
            <div class="slide"><img src="HMSimages/pool.jpg" alt="Hotel Image"></div>
            <div class="slide"><img src="HMSimages/2.jpg" alt="Hotel Image"></div>
            <!-- Room image -->
            <div class="slide"><img src="HMSimages/Room_img/1.jpg" alt="Hotel Image"></div>
            <div class="slide"><img src="HMSimages/Room_img/3.jpg" alt="Hotel Image"></div>
            <div class="slide"><img src="HMSimages/Room_img/6.jpg" alt="Hotel Image"></div>
            <div class="slide"><img src="HMSimages/Room_img/6.jpg" alt="Hotel Image"></div>
            <div class="slide"><img src="HMSimages/Room_img/duplex.jpg" alt="Hotel Image"></div>
            <div class="slide"><img src="HMSimages/Room_img/suite.png" alt="Hotel Image"></div>
            <div class="slide"><img src="HMSimages/Room_img/g4.jpg" alt="Hotel Image"></div>
            <!-- Banquet img -->
            <div class="slide"><img src="HMSimages/Banquet_img/1.jpg" alt="Banquet Image"></div>
            <div class="slide"><img src="HMSimages/Banquet_img/2.jpg" alt="Banquet Image"></div>
            <div class="slide"><img src="HMSimages/Banquet_img/3.jpg" alt="Banquet Image"></div>
            <div class="slide"><img src="HMSimages/Banquet_img/1.png" alt="Banquet Image"></div>
            <div class="slide"><img src="HMSimages/Banquet_img/5.jpeg" alt="Banquet Image"></div>
            <div class="slide"><img src="HMSimages/Banquet_img/2.png" alt="Banquet Image"></div>
            <div class="slide"><img src="HMSimages/Banquet_img/3.png" alt="Banquet Image"></div>
            <div class="slide"><img src="HMSimages/Banquet_img/1227.jpg" alt="Banquet Image"></div>
            <div class="slide"><img src="HMSimages/Banquet_img/7.jpeg" alt="Banquet Image"></div>
            <div class="slide"><img src="HMSimages/Banquet_img/8.jpg" alt="Banquet Image"></div>
            <div class="slide"><img src="HMSimages/Banquet_img/4.jpg" alt="Banquet Image"></div>
            <!-- Dining img -->
            <div class="slide"><img src="HMSimages/Dining_img/din.jpg" alt="Dining Image"></div>
            <div class="slide"><img src="HMSimages/Dining_img/a1.jpg" alt="Dining Image"></div>
            <div class="slide"><img src="HMSimages/Dining_img/din.jpg" alt="Dining Image"></div>
            <div class="slide"><img src="HMSimages/Dining_img/dinfood.png" alt="Dining Image"></div>
            <div class="slide"><img src="HMSimages/Dining_img/fooddin.jpeg" alt="Dining Image"></div>
            <div class="slide"><img src="HMSimages/Dining_img/dincook.jpg" alt="Dining Image"></div>
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>

    <!--js for slider -->
    <script src="assets/js/image_slide.js"></script>

    <div class="rooms">
    <div class="room">
        <img src="HMSimages/Room_img/duplex.jpg" alt="Deluxe Room" width="250" height="250" />
        <h2>Deluxe Room</h2>
        <ul>
            <li><i class="fas fa-bed"></i> King-sized beds</li>
            <li><i class="fas fa-city"></i> Modern interior with city view</li>
            <li><i class="fas fa-utensils"></i> Complimentary breakfast</li>
            <li><i class="fas fa-wifi"></i> Free high-speed Wi-Fi</li>
            <li><i class="fas fa-tv"></i> Smart TV & workspace</li>
        </ul>
        <a href="rooms/deluxe.php" class="book-btn">Book Now</a>
    </div>

    <div class="room">
        <img src="HMSimages/Room_img/suite.png" alt="Suite Room" width="250" height="250" />
        <h2>Suite</h2>
        <ul>
            <li><i class="fas fa-door-open"></i> Spacious suite with living area</li>
            <li><i class="fas fa-bed"></i> Luxurious king bed</li>
            <li><i class="fas fa-mountain"></i> Private balcony</li>
            <li><i class="fas fa-bath"></i> Jacuzzi bathtub</li>
            <li><i class="fas fa-concierge-bell"></i> 24/7 Room Service</li>
        </ul>
        <a href="rooms/suite.php" class="book-btn">Book Now</a>
    </div>

    <div class="room">
        <img src="HMSimages/Room_img/6.png" alt="Standard Room" width="250" height="250" />
        <h2>Standard Room</h2>
        <ul>
            <li><i class="fas fa-bed"></i> Single bed</li>
            <li><i class="fas fa-wind"></i> Air conditioning</li>
            <li><i class="fas fa-tv"></i> Flat-screen TV</li>
            <li><i class="fas fa-toilet"></i> Attached bathroom</li>
            <li><i class="fas fa-wifi"></i> Free Wi-Fi access</li>
        </ul>
        <a href="rooms/standard.php" class="book-btn">Book Now</a>
    </div>
</div>

    <section class="services">
        <h2>Our Services</h2>
        <p class="services-subtitle">Exceptional Experiences</p>
        <p class="services-description">
            Indulge in a world of amenities and services designed to elevate your stay from ordinary to extraordinary.
        </p>
        <div class="services-container">
            <div class="service-box">
                <i class="fas fa-bed"></i>
                <h3>Luxury Accommodation</h3>
                <p>Experience unparalleled comfort in our meticulously designed rooms and suites, featuring premium
                    amenities and elegant furnishings.</p>
            </div>
            <div class="service-box">
                <i class="fas fa-utensils"></i>
                <h3>Gourmet Dining</h3>
                <p>Indulge your palate at our award-winning restaurants, offering exquisite culinary creations using the
                    finest local and international ingredients.</p>
            </div>
            <div class="service-box">
                <i class="fas fa-spa"></i>
                <h3>Spa & Wellness</h3>
                <p>Rejuvenate your body and mind at our premium spa, featuring a comprehensive range of treatments,
                    thermal experiences, and fitness facilities.</p>
            </div>
            <div class="service-box">
                <i class="fas fa-bell-concierge"></i>
                <h3>Concierge Service</h3>
                <p>Our dedicated concierge team is available 24/7 to assist with any request, from restaurant
                    reservations to exclusive local experiences.</p>
            </div>
        </div>
    </section>
    
    <!-- footer -->
    <?php include 'footer.php' ?>

    <!--Note: include the logout part form the 'old_home.php' at the end -->
</body>

</html>
