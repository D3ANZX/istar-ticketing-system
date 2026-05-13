<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iStar Ticketing System</title>
    <link rel="stylesheet" href="../styles.css"> 
    <link rel="icon" type="image/x-icon" href="../assets/istar-logo.png">
    <style>
    body {
        background-color: #182346
    }
</style>
    <?php

    session_start();
    
    if(isset($_SESSION['role'])){
        $role = $_SESSION['role'];
        if($role === "admin"){
            header('Location: ./admin_page.php');
        }
    }
    $conn = mysqli_connect("localhost", "root", "", "istardb");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $concert_query = "SELECT * FROM concerts_tbl";
    $concert_result = mysqli_query($conn, $concert_query);
    

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

<!--slideshow artist-->
        <div class="hero-banner">
    <div class="carousel-track" id="track">
        
        <div class="carousel-item">
            <video autoplay muted loop playsinline preload="auto" class="hero-video">
    <source src="../assets/taylorswiftvideo.mp4" type="video/mp4">
</video>
            
            <div class="hero-overlay">
                <h1 class="hero-title">THE ERA'S TOUR</h1>
                
                <div class="hero-meta">
                    <span class="match">JUNE</span>
                    <span>2026</span>
                    <span class="badge">Watch Live!</span>
                </div>
                
                <p class="hero-description">
                    ISTAR DB - Experience the magic of Taylor Swift's Eras Tour live on your dashboard.
                </p>

                <div class="episode-container" style="position: relative; display: flex; align-items: center;">
    
    <button type="button" class="list-nav-btn" onclick="scrollAlbums(-1)" style="left: -15px;">&#10094;</button>

    <div class="episode-list" id="albumScroll">
                    <div class="episode-card">
                        <div class="ep-img-container">
                            <span class="ep-number">1</span>
                            <img src="../assets/fearless.jpg" alt="Fearless">
                        </div>
                        <div class="ep-info">
                            <span class="ep-title">FEARLESS</span>
                        </div>
                    </div>
                    
                    <div class="episode-card">
                        <div class="ep-img-container">
                            <span class="ep-number">2</span>
                            <img src="../assets/speaknow.jpg" alt="Speak Now">
                        </div>
                        <div class="ep-info">
                            <span class="ep-title">SPEAK NOW</span>
                        </div>
                    </div>

                    <div class="episode-card">
                        <div class="ep-img-container">
                            <span class="ep-number">3</span>
                            <img src="../assets/red.jpg" alt="Red">
                        </div>
                        <div class="ep-info">
                            <span class="ep-title">RED</span>
                        </div>
                    </div>

                    <div class="episode-card">
                        <div class="ep-img-container">
                            <span class="ep-number">4</span>
                            <img src="../assets/1989.png" alt="1989">
                        </div>
                        <div class="ep-info">
                            <span class="ep-title">1989</span>
                        </div>
                    </div>

                    <div class="episode-card">
                        <div class="ep-img-container">
                            <span class="ep-number">5</span>
                            <img src="../assets/reputation.jpg" alt="reputation">
                        </div>
                        <div class="ep-info">
                            <span class="ep-title">REPUTATION</span>
                        </div>
                    </div>

                    <div class="episode-card">
                        <div class="ep-img-container">
                            <span class="ep-number">6</span>
                            <img src="../assets/folklore.webp" alt="folklore">
                        </div>
                        <div class="ep-info">
                            <span class="ep-title">FOLKLORE</span>
                        </div>
                    </div>

                    <div class="episode-card">
                        <div class="ep-img-container">
                            <span class="ep-number">7</span>
                            <img src="../assets/LOVER.JPG" alt="lover">
                        </div>
                        <div class="ep-info">
                            <span class="ep-title">LOVER</span>
                        </div>
                    </div>   
                    
                    <button type="button" class="list-nav-btn" onclick="scrollAlbums(1)" style="right: -15px;">&#10095;</button>
</div>
                                </div> <!-- episode-container -->
            </div> <!-- hero-overlay -->
        </div> <!-- carousel-item -->
    </div> <!-- carousel-track -->
</div> <!-- hero-banner -->

<div class="dashboard-container">
    
    
    <div class="left-column">
        <div class="dashboard-window">
            <div class="dashboard-window-header"><h2>YOUR DETAILS</h2></div>
            <div class="user-data">
                <table class="dashboard-table">
    <tr>
        <td>User Type</td>
        <td><?php echo isset($_SESSION['role']) ? $_SESSION['role'] : "Guest"; ?></td>
    </tr>

    <tr>
        <td>User ID</td>
        <td><?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : "Guest"; ?></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo isset($_SESSION['firstname']) ? $_SESSION['firstname']." ".$_SESSION['lastname'] : "Guest"; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo isset($_SESSION['email_req']) ? $_SESSION['email_req'] : "N/A"; ?></td>
    </tr>
    <tr>
        <td>Contact</td>
        <td><?php echo isset($_SESSION['contact_no']) ? $_SESSION['contact_no'] : "N/A"; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo isset($_SESSION['address']) ? $_SESSION['address'] : "N/A"; ?></td>
    </tr>
    <tr>
        <td>City</td>
        <td><?php echo isset($_SESSION['city']) ? $_SESSION['city'] : "N/A"; ?></td>
    </tr>
</table>
            </div>
        </div>

        <div class="dashboard-window">
    <div class="dashboard-window-header"><h2>YOUR UPCOMING CONCERT SCHEDULE</h2></div>
    <div class="user-data">
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th>Concert Name</th>
                    <th>Artist</th>
                    <th>Price</th>
                    <th>Time Left</th> </tr>
            </thead>
          <tbody>
    <?php 
    // 1. Check muna natin kung gumagana ang connection
    if (!$conn) {
        echo "<tr><td colspan='4' style='color:red;'>DB Connection Error: " . mysqli_connect_error() . "</td></tr>";
    }

    // 2. Siguraduhin nating may records
    if ($concert_result && mysqli_num_rows($concert_result) > 0) {
        while($row = mysqli_fetch_assoc($concert_result)) {
            // DEBUG: I-print natin ang date sa console ng browser para makita natin
            echo "<script>console.log('Fetching: " . $row['concert_title'] . " | Date: " . $row['concert_date'] . "');</script>";
            
$raw_date = date("Y-m-d H:i:s", strtotime($row['concert_date']));
            ?>
            <tr>
                <td><?php echo $row['concert_title']; ?></td>
                <td><?php echo $row['concert_artist']; ?></td>
                <td>₱<?php echo number_format($row['ticket_cost']); ?></td>
                <td>
                    <span class="countdown-timer" data-time="<?php echo $raw_date; ?>">
                        WAITING...
                    </span>
                </td>
            </tr>
            <?php
        }
    } else {
        // Kung walang nakuha sa SELECT *
        echo "<tr><td colspan='4' style='text-align:center;'>No records found in concerts_tbl.</td></tr>";
    }
    ?>
</tbody>
        </table>
    </div>
</div>


    </div> <div class="right-column">
        <div class="dashboard-window">
            <div class="dashboard-window-header"><h2>YOUR HISTORY</h2> <a href="./ticket.php" class="view-tickets-button">VIEW TICKETS</a></div>
            <div class="user-data">
                <table class="dashboard-table">
                    <tr>
                        <th>Order ID</th>
                        <th>Concert</th>
                        <th>Tickets</th>
                        <th>Amount Paid</th>
                    </tr>

                   
                        <?php
                            $order_query = "SELECT * FROM orders_tbl where user_id =".$_SESSION['user_id'];
                            $order_result = mysqli_query($conn, $order_query);
                            if(!$conn){
                                echo "<td> Error 404 Cannot fetch data </td>";
                            }
                            else{
                                if($order_result && mysqli_num_rows($order_result) > 0){
                                    while($row = mysqli_fetch_assoc($order_result)){
                                        $concert_id = $row['concert_id'];
                                        $order_id = $row['order_id'];
                                        $concert_query = "SELECT concert_title, ticket_cost FROM concerts_tbl where concert_id = $concert_id";
                                        $concert_result_data = mysqli_query($conn, $concert_query);
                                        $concert_row = mysqli_fetch_assoc($concert_result_data);
                                        
                                        
                                       
                                        echo "<tr><td>".$row['order_id']."</td>";
                                        echo "<td>".$concert_row['concert_title']."</td>";
                                        echo "<td>".$row['order_amount']."</td>";
                                        echo "<td>". $row['order_amount'] * $concert_row['ticket_cost']."</td></tr>";
                                    }
                                }
                            }

                        ?>
                    
                </table>
            </div>
        </div>
    </div>
    
    </div>
<script>
    let index = 0;
    const track = document.getElementById("track");
    const items = document.querySelectorAll(".carousel-item");

    function updateSlide(){
        track.style.transform = `translateX(-${index * 100}%)`;
    }

    function moveSlide(dir){
        index += dir;
        if(index < 0){
            index = items.length - 1;
        } else if(index >= items.length){
            index = 0;
        }
        updateSlide();
    }

    function scrollList(direction) {
    const list = document.getElementById('albumList');
    const scrollAmount = 300;
    if (direction === 1) {
        list.scrollLeft += scrollAmount;
    } else {
        list.scrollLeft -= scrollAmount;
    }
}

function scrollAlbums(direction) {
    const container = document.getElementById('albumScroll');
    const scrollAmount = 400; // Gaano kalayo ang isang lipat
    
    if (direction === 1) {
        container.scrollLeft += scrollAmount;
    } else {
        container.scrollLeft -= scrollAmount;
    }
}
function updateDashboardTimers() {

    console.log("FUNCTION RUNNING");

    const timers = document.querySelectorAll('.countdown-timer');

    console.log("TIMERS FOUND:", timers.length);

    timers.forEach(timer => {

        const concertDate = timer.dataset.time;

        console.log("DATE VALUE:", concertDate);

        const targetDate = new Date(concertDate).getTime();

        console.log("TARGET DATE:", targetDate);

        if (isNaN(targetDate)) {
            timer.innerHTML = "INVALID";
            return;
        }

        const now = Date.now();
        const diff = targetDate - now;

        if (diff <= 0) {
            timer.innerHTML = "EVENT STARTED";
            return;
        }

        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
        const mins = Math.floor((diff / (1000 * 60)) % 60);
        const secs = Math.floor((diff / 1000) % 60);

        timer.innerHTML = `${days}d ${hours}h ${mins}m ${secs}s`;

    });
}

updateDashboardTimers();

setInterval(updateDashboardTimers, 1000);
</script>
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