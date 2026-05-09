<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./booking-styles.css">
    <?php
    session_start();
    ?>
</head>

<body>
    <div class="main">
        <div class="nav-container">
            <div class="nav-bar">
                <ul>
                    <li class="logo"><a href=""><img src="../assets/istar-logo.png" alt="istar-logo" class="nav-icon"></a></li>
                    <li class="nav-item"> <a href="./about_page.php">ABOUT </a></li>
                    <li class="nav-item"><a href="../">HOME</a></li>
                    <li class="nav-item"><a href="./booking_page.php">BOOK NOW</a></li>
                    <li class="nav-item"><a href="./login_page.php">LOGIN</a></li>
                </ul>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="booking-form-container">
            <div class="booking-window">
                <div class="booking-banner">
                    <center><img src="../assets/sabrina-banner.jpg" alt="sabrina-banner" class="booking-banner-img">
                    
                </div>
                <div class="customer-details">
                    <h2 class="form-header">CONFIRM ORDER </h2>
                    <br>
                    <br>

                    <div class="form-name">
                        <h3 class="form-label">Concert Name: </h2>
                        <p class="data">Sabrina: World Tour</p>
                    </div>

                    <div class="form-name">
                        <h3 class="form-label">Ticket ID: </h2>
                        <p class="data">1</p>
                    </div>
                    
                    <div class="form-name">
                        <h3 class="form-label">Customer Name: </h2>
                        <p class="data">Florentino Dean P. Gas</p>
                    </div>

                    <div class="form-name">
                        <h3 class="form-label">Age: </h2>
                        <p class="data">22</p>
                    </div>
                    <br>
                    <br>
                    <div class="submit-button-container">
                        <a href="" class="confirm-order-button">CONFIRM</a>
                    </div>
                </div>


                
            </div>
        </div>
    </div>
</body>
</html>