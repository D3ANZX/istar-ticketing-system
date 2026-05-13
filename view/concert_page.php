<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iStar Ticketing System</title>
    <link rel="stylesheet" href="../styles.css">
    <!-- Added Google Fonts for a cleaner look -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/istar-logo.png">
    <?php 
        require('../model/db_connection.php');
        session_start(); 
        $concert_id = $_POST['concert_id'];
    ?>


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

    
        <div class="payment-banner">
            <br>
            <br>
            <br>
            
                <div class="concert-window">
                    <?php 
                        $concert_query = "SELECT * FROM concerts_tbl where concert_id =".$concert_id;
                        $concert_result = mysqli_query($conn, $concert_query);
                        $concert_row = mysqli_fetch_assoc($concert_result);
                    ?>
                    <div class="concert_info">
                        <form action="./payment_page.php" method="post">
                            <input type="hidden"  name="concert_id" value="<?php echo $concert_id; ?>">
                            <h1>Concert Details</h1>
                            <p> Concert Id: <?php echo $concert_row['concert_id'] ?></p>
                            <p> Concert Title: <?php echo $concert_row['concert_title'] ?></p>
                            <p> Artist: <?php echo $concert_row['concert_artist'] ?></p>
                            <p> Ticket Cost: <?php echo $concert_row['ticket_cost'] ?></p>
                            <p> Concert Date: <?php echo $concert_row['concert_date'] ?></p>
                            <select name="order_amount" id="">
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                            </select>
                            <br>
                            <br>
                            <button type="submit" class="book-submit"> BOOK CONCERT </button>
                     </form>
                    </div>
                    <img src="<?php echo $concert_row['png_src'] ?>" alt="concert-imgs" class="concert-img">
                    
               

                
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