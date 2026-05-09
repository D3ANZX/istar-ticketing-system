<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
<?php
    session_start();
?>
</head>



<body>



    <div class="main">
        <div class="nav-container">
            <div class="nav-bar">
                <ul>
                    <li class="logo"><a href=""><img src="./assets/istar-logo.png" alt="istar-logo" class="nav-icon"></a></li>
                    <li class="nav-item"> <a href="./view/about_page.php">ABOUT </a></li>
                    <li class="nav-item"><a href="">HOME</a></li>
                    <li class="nav-item"><a href="./view/booking_page.php">BOOK NOW</a></li>
                    <li class="nav-item"><a href="./view/login_page.php">
                        <?php
                                if(!isset($_SESSION['firstname']))
                                echo "LOGIN"; 
                                else echo $_SESSION['firstname'];
                            ?>    
                    </a></li>
                </ul>
            </div>
        </div>


        <div class="content">
            <div class="banner-container">
                <h1>ARE YOU READY TO MEET YOUR <br> <span class="highlighted-text"> FAVORITE ARTISTS? </span>
                    <a href="./view/booking_form.php" class="booking-link">BOOK NOW</a>
                </h1>
            </div>

        <center><h1 class="content-header">TOP ARTISTS</h1></center>
            <div class="user-category-selection">


                <div class="category-card">
                    <div class="category-card-content">
                        <div class="user-icon-container">
                            <img src="assets/lany-logo.jpg" alt="user-icon" class="user-icon">
                        </div>
                        
                        <div class="info-container">
                            <h2>LANY - World Tour</h2>
                            <p>Catch up with the music of LANY, live in Manila!</p>
                        </div>

                        <div class="link-container">
                            <a href=""><img src="assets/right.png" alt="right-button" class="card-icons"></a>
                        </div>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-card-content">
                        <div class="user-icon-container">
                            <img src="assets/ariana-logo.jpg" alt="user-icon" class="user-icon">
                        </div>
                        
                        <div class="info-container">
                            <h2>ARIANA GRANDE</h2>
                            <p>Catch up with the music of Ariana, live in Manila!</p>
                        </div>

                        <div class="link-container">
                            <a href=""><img src="assets/right.png" alt="right-button" class="card-icons"></a>
                        </div>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-card-content">
                        <div class="user-icon-container">
                            <img src="assets/taylor-logo.jpg" alt="user-icon" class="user-icon">
                        </div>
                        
                        <div class="info-container">
                            <h2>TAYLOR SWIFT</h2>
                            <p>Catch up with the music of Taylor, live in Manila!</p>
                        </div>

                        <div class="link-container">
                            <a href=""><img src="assets/right.png" alt="right-button" class="card-icons"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>