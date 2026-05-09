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
                    <li class="nav-item"><a href="../">HOME</a></li>
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
        <br>
        
        <div class="dashboard-container">
            <div class="dashboard-window">
                <div class="dashboard-window-header"><h2> CUSTOMER DETAILS</h2></div>
                <div class="user-data">
                    
                    <p class="customer-details">Customer Name: <?php echo $_SESSION['firstname']. " " . $_SESSION['lastname']; ?></p>
                    <p class="customer-details">Email Address: <?php echo $_SESSION['email_req']; ?></p>
                    <p class="customer-details">Contact Number: <?php echo $_SESSION['contact_no']; ?></p>
                    <p class="customer-details">Address: <?php echo $_SESSION['address']; ?></p>
                    <p class="customer-details">City: <?php echo $_SESSION['city']; ?></p>
                </div>
            </div>
            <div class="side-details">
                <div class="ticket-logs-window">
                    <div class="ticket-logs-header"> CONCERT SCHEDULE </div>
                    <div class="">
                        <p>Concert Name:</p>
                        <p>Artist Name:</p>
                        <p>Date:</p>
                        <p>Ticket Orders:</p>
                    </div>
                </div>
                <br>
                <div class="history-logs-window">
                    <div class="ticket-logs-header"> HISTORY </div>
                </div>
            </div>
        </div>



        
    </div>
</body>
</html>