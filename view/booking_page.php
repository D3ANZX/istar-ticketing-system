<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
    <?php
    session_start();
    ?>
</head>

<body>
    <div class="main">
        <div class="nav-container">
            <div class="nav-bar">
                <ul>
                    <li class="logo"><a href="../"><img src="../assets/istar-logo.png" alt="istar-logo" class="nav-icon"></a></li>
                    <li class="nav-item"> <a href="../view/about_page.php">ABOUT </a></li>
                    <li class="nav-item"><a href="">HOME</a></li>
                    <li class="nav-item"><a href="../view/booking_page.php">BOOK NOW</a></li>
                    <li class="nav-item"><a href="../view/login_page.php">
                        <?php
                                if(!isset($_SESSION['firstname']))
                                echo "LOGIN"; 
                                else echo $_SESSION['firstname'];
                            ?>    
                    </a></li>
                </ul>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="booking-banner">
            <img src="../assets/istar-banner-1.png" alt="" class="banner-img">
        </div>

        <div class="booking-category-container">


        
            <center>
                <h1 class="content-header">AVAILABLE CONCERTS</h1>
                <div class="booking-category-selection">


                        <div class="category-card">
                            <div class="category-card-content">
                                <div class="user-icon-container">
                                    <img src="../assets/sabrina-logo.jpg" alt="user-icon" class="user-icon">
                                </div>
                                
                                <div class="info-container">
                                    <h2>Sabrina Carpenter</h2>
                                    <p>Catch up with the music of LANY, live in Manila!</p>
                                </div>

                                <div class="link-container">
                                    <a href="./sabrina-carpenter-booking-page.php"><img src="../assets/right.png" alt="right-button" class="card-icons"></a>
                                </div>
                            </div>
                        </div>

                        <div class="category-card">
                            <div class="category-card-content">
                                <div class="user-icon-container">
                                    <img src="../assets/ariana-logo.jpg" alt="user-icon" class="user-icon">
                                </div>
                                
                                <div class="info-container">
                                    <h2>Ariana Grande</h2>
                                    <p>Catch up with the music of LANY, live in Manila!</p>
                                </div>

                                <div class="link-container">
                                    <a href=""><img src="../assets/right.png" alt="right-button" class="card-icons"></a>
                                </div>
                            </div>
                        </div>

                        <div class="category-card">
                            <div class="category-card-content">
                                <div class="user-icon-container">
                                    <img src="../assets/bebe-rexha-logo.jpg" alt="user-icon" class="user-icon">
                                </div>
                                
                                <div class="info-container">
                                    <h2>Bebe Rexha</h2>
                                    <p>Catch up with the music of LANY, live in Manila!</p>
                                </div>

                                <div class="link-container">
                                    <a href=""><img src="../assets/right.png" alt="right-button" class="card-icons"></a>
                                </div>
                            </div>
                        </div>

                        <div class="category-card">
                            <div class="category-card-content">
                                <div class="user-icon-container">
                                    <img src="../assets/taylor-logo.jpg" alt="user-icon" class="user-icon">
                                </div>
                                
                                <div class="info-container">
                                    <h2>Taylor Swift - Eras Tour</h2>
                                    <p>Catch up with the music of LANY, live in Manila!</p>
                                </div>

                                <div class="link-container">
                                    <a href=""><img src="../assets/right.png" alt="right-button" class="card-icons"></a>
                                </div>
                            </div>
                        </div>

                        

                        <div class="category-card">
                            <div class="category-card-content">
                                <div class="user-icon-container">
                                    <img src="../assets/anne-marie-logo.jpg" alt="user-icon" class="user-icon">
                                </div>
                                
                                <div class="info-container">
                                    <h2> Anne Marie</h2>
                                    <p>Catch up with the music of LANY, live in Manila!</p>
                                </div>

                                <div class="link-container">
                                    <a href=""><img src="../assets/right.png" alt="right-button" class="card-icons"></a>
                                </div>
                            </div>
                        </div>

                        <div class="category-card">
                            <div class="category-card-content">
                                <div class="user-icon-container">
                                    <img src="../assets/dua-lipa-logo.jpg" alt="user-icon" class="user-icon">
                                </div>
                                
                                <div class="info-container">
                                    <h2>Dua-Lipa</h2>
                                    <p>Catch up with the music of LANY, live in Manila!</p>
                                </div>

                                <div class="link-container">
                                    <a href=""><img src="../assets/right.png" alt="right-button" class="card-icons"></a>
                                </div>
                            </div>
                        </div>

                        <div class="category-card">
                            <div class="category-card-content">
                                <div class="user-icon-container">
                                    <img src="../assets/lany-logo.jpg" alt="user-icon" class="user-icon">
                                </div>
                                
                                <div class="info-container">
                                    <h2>LANY - World Tour</h2>
                                    <p>Catch up with the music of LANY, live in Manila!</p>
                                </div>

                                <div class="link-container">
                                    <a href=""><img src="../assets/right.png" alt="right-button" class="card-icons"></a>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>