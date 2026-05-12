<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iStar Ticketing System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="./assets/istar-logo.png">
<?php
    session_start();
?>
</head>



<body>



    <div class="main">

        <nav>
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
                        <?php if(isset($_SESSION['firstname'])): ?>
                            <li class="nav-item"><a href="./controller/logout.php">LOGOUT</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="homepage-banner">
            <div class="homepage-content">
                <h1>WELCOME TO iSTAR Tickets!</h1>
                <h2>YOUR GATEWAY TO LAST-MINUTE BOOKING</h2>
            </div>
        </div>
    </div>
</body>

<footer>
    <div class="footer-container">
        <br>
        <div class="footer-content">
            <div class="iStar_details">
                <b><p>iStar Ticketing Systems</p></b>
                <p>Copyright CodeBlackSolutions 2026</p>
                <p>Native PHP, HTML5, CSS, and JS</p>
                <br>
                <b><p>Applications Development</p></b>
                <p>Batch 2025-2026</p>
            </div>

            <div class="developer-data">
                <b><p>Developers</p></b>
                <ul>
                    <li>Florentino Dean P. Gas</li>
                    <li>Jenmar Oliveros</li>
                    <li>BJ B. Saycon</li>
                    <li>Andre Pulo</li>
                    <li>Jim Lozada</li>
                </ul>
            </div>

            <div class="external_links">
                <b><p>Contacts</p></b>
                <p>ADDRESS <br> New Way Street New York 5176</p>
                <p>COMPANY TEL NO. <br> 0915-637-3614</p>
            </div>
        </div>
    </div>
</footer>
</html>