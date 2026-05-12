<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iStar Ticketing System</title>
    <link rel="stylesheet" href="../styles.css">
    <!-- Added Google Fonts for a cleaner look -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/istar-logo.png">
    <?php session_start(); ?>
</head>

<body>
    <div class="main">
        <nav class="nav-container">
            <div class="nav-bar">
                <ul>
                    <li class="logo"><a href="../"><img src="../assets/istar-logo.png" alt="istar-logo" class="nav-icon"></a></li>
                    <li class="nav-item"> <a href="../view/about_page.php">ABOUT</a></li>
                    <li class="nav-item"><a href="../index.php">HOME</a></li>
                    <li class="nav-item"><a href="../view/booking_page.php" class="active">BOOK NOW</a></li>
                    <li class="nav-item">
                        <a href="../view/login_page.php" class="login-btn">
                            <?php echo isset($_SESSION['firstname']) ? strtoupper($_SESSION['firstname']) : "LOGIN"; ?>
                        </a>
                    </li>
                    <?php if(isset($_SESSION['firstname'])): ?>
                        <li class="nav-item"><a href="../controller/logout.php">LOGOUT</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

    
        <div class="booking-concert-banner">
            <div class="booking-content">
                <div class="booking-header">
                    <h1>AVAILABLE CONCERTS</h1>
                </div>

                <div class="concert-card-container">

                <!-- CARDS -->
                    <form action= "../controller/order_controller.php" method="post">

                        <input type="hidden" name="concert_id" value="1">
                        <div class="concert-card">
                            <img src="../assets/sabrina-banner.webp" alt="sabrina-banner" class="card-banner">
                            <div class="concert-details">
                                <h3>Sabrina - Love</h3>
                                <p>Catch up with Sabrina Carpenter and slay - with Love</p>

                                <div class="button-container">
                                    <select name="order_amount" id="">
                                        <option value="1"> 1</option>
                                        <option value="2"> 2</option>
                                        <option value="3"> 3</option>
                                        <option value="4"> 4</option>
                                        <option value="5"> 5</option>
                                    </select>
                                    <button type="submit" class="card-button">
                                        <img src="../assets/right.png" alt="submit-icon">
                                    </button>

                                </div>
                                
                                <p class="card-feedback"> <span style="color:green; font-size: 20px;">2,000PHP</span> <br> Please set order amout</p>
                            </div>
                        </div>
                    </form>

                    <form action= "../controller/order_controller.php" method="post">
                        <input type="hidden" name="concert_id" value="2">
                        <div class="concert-card">
                            <img src="../assets/taylor-banner.jpg" alt="taylor-concert-banner" class="card-banner">
                            <div class="concert-details">
                                <h3>Taylor Swift - ERAS TOUR 2026</h3>
                                <p>Meet Taylor Swift Live, in ERAS TOUR 2026!</p>

                                <div class="button-container">
                                    <select name="order_amount" id="">
                                        <option value="1"> 1</option>
                                        <option value="2"> 2</option>
                                        <option value="3"> 3</option>
                                        <option value="4"> 4</option>
                                        <option value="5"> 5</option>
                                    </select>
                                    <button type="submit" class="card-button">
                                        <img src="../assets/right.png" alt="submit-icon">
                                    </button>

                                </div>
                                
                                <p class="card-feedback"> <span style="color:green; font-size: 20px;">4,000PHP</span> <br> Please set order amout</p>
                            </div>
                        </div>
                    </form>
                    
                    <form action= "../controller/order_controller.php" method="post">
                        <input type="hidden" name="concert_id" value="3">
                        <div class="concert-card">
                            <img src="../assets/rexha-banner.png" alt="taylor-concert-banner" class="card-banner">
                            <div class="concert-details">
                                <h3>Bebe Rexha - Best F*n Night of My Life Tour</h3>
                                <p>Have the best night with Bebe Rexha in her latest concert, see you there!</p>

                                <div class="button-container">
                                    <select name="order_amount" id="">
                                        <option value="1"> 1</option>
                                        <option value="2"> 2</option>
                                        <option value="3"> 3</option>
                                        <option value="4"> 4</option>
                                        <option value="5"> 5</option>
                                    </select>
                                    <button type="submit" class="card-button">
                                        <img src="../assets/right.png" alt="submit-icon">
                                    </button>

                                </div>
                                
                                <p class="card-feedback"> <span style="color:green; font-size: 20px;">6,000PHP</span> <br> Please set order amout</p>
                            </div>
                        </div>
                    </form>
                    


                </div>
            </div>
        </div>
       
    </div>
</body>
</html>