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
        
        <br>
        <br>
       <div class="ticket-grid" style="
    display: grid; 
    grid-template-columns: repeat(auto-fit, minmax(380px, 1fr)); 
    gap: 25px; 
    padding: 40px; 
    max-width: 1200px; 
    margin: 0 auto; 
    font-family: 'Inter', sans-serif;">

    <?php 
        if(isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $order_query = "SELECT * FROM orders_tbl WHERE user_id = '$user_id'";
            $order_result = mysqli_query($conn, $order_query);

            

          
            if($order_result && mysqli_num_rows($order_result) > 0){
                while($order_row = mysqli_fetch_assoc($order_result) ){


                    $concert_query = "SELECT * FROM concerts_tbl WHERE concert_id =".$order_row['concert_id'];
                    $concert_result = mysqli_query($conn, $concert_query);
                    $concert_row = mysqli_fetch_assoc($concert_result);
                    ?>
                    <!-- Individual Ticket Card -->
                    <div class="ticket-card" style="
                        display: flex; 
                        background: #ffffff; 
                        border-radius: 12px; 
                        height: 180px; 
                        overflow: hidden; 
                        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
                        color: #333;">
                        
                        <!-- Left Stub Section -->
                        <div class="stub" style="
                            background: #f39c12; 
                            color: white; 
                            width: 70px; 
                            display: flex; 
                            flex-direction: column; 
                            justify-content: center; 
                            align-items: center; 
                            border-right: 2px dashed #ddd;
                            position: relative;">
                            
                            <span style="writing-mode: vertical-rl; transform: rotate(180deg); font-weight: 900; letter-spacing: 2px; font-size: 0.9rem;">
                                ADMIT ONE
                            </span>
                            <span style="font-size: 0.7rem; margin-top: 10px; opacity: 0.8;">
                                #<?php echo $order_row['order_id']; ?>
                            </span>
                        </div>
                        
                        <!-- Right Info Section -->
                        <div class="content" style="
                            padding: 20px; 
                            flex-grow: 1; 
                            display: flex; 
                            flex-direction: column; 
                            justify-content: space-between;">
                            
                            <div>
                                <h3 style="margin: 0; color: #e67e22; font-size: 1.3rem; font-weight: 900; letter-spacing: -0.5px;">
                                    <?php echo $concert_row['concert_title']?>
                                </h3>
                                <p style="margin: 8px 0 0; font-size: 0.8rem; color: #777; text-transform: uppercase; font-weight: bold;">
                                    Customer: <?php echo $_SESSION['firstname']; ?>
                                </p>
                            </div>

                            <div style="display: flex; justify-content: space-between; align-items: flex-end;">
                                <div style="font-size: 0.85rem; line-height: 1.4;">
                                    <div style="color: #999; font-size: 0.7rem;">CONCERT DATE</div>
                                    <div style="font-weight: bold;"><?php echo $concert_row['concert_date']; ?></div>
                                </div>
                                <div style="text-align: right;">
                                    <div style="color: #999; font-size: 0.7rem;">TOTAL PAID</div>
                                    <div style="font-size: 1.2rem; font-weight: 900; color: #2ecc71;">
                                        <?php echo "₱".$order_row['order_amount'] * $concert_row['ticket_cost'].".00";?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p style='color: white; text-align: center; grid-column: 1/-1;'>No tickets found in your account.</p>";
            }
        }
    ?>
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