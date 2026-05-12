<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iStar Ticketing System</title>
    <link rel="stylesheet" href="../styles.css"> 
    <style>
    body {
        background-color: #182346
    }
    </style>
    <?php
    session_start();
    // 1. Include the model file containing your readOrder() function
    
    require_once('../model/order.php');

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
                    <?php if(isset($_SESSION['firstname'])): ?>
                        <li class="nav-item"><a href="../controller/logout.php">LOGOUT</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

        <!--slideshow artist-->
        <div class="hero-banner">
<<<<<<< HEAD
            <div class="carousel-track" id="track">
                <div class="carousel-item">
                    <video autoplay muted loop playsinline class="hero-video">
                        <source src="../assets/taylorswiftvideo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
=======
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
>>>>>>> 0c7a70c2a29f60660c3c66a91f09172800bac52e
                    
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

                        <div class="episode-list">
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
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 

        <div class="dashboard-container">
            <div class="left-column">
                <div class="dashboard-window">
                    <div class="dashboard-window-header"><h2>YOUR DETAILS</h2></div>
                    <div class="user-data">
                        <table class="dashboard-table">
                            <tr>
                                <td>Name</td>
                                <td><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $_SESSION['email_req']; ?></td>
                            </tr>
                            <tr>
                                <td>Contact</td>
                                <td><?php echo $_SESSION['contact_no']; ?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><?php echo $_SESSION['address']; ?></td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td><?php echo $_SESSION['city']; ?></td>
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
                                    <th>Time Left</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (mysqli_num_rows($concert_result) > 0) {
                                    while($row = mysqli_fetch_assoc($concert_result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['concert_title']; ?></td>
                                            <td><?php echo $row['concert_artist']; ?></td>
                                            <td>₱<?php echo number_format($row['ticket_cost']); ?></td>
                                            <td>
                                                <span class="countdown-timer" data-time="2026-06-15 20:00:00">
                                                    estimating the time...
                                                </span>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='4' style='text-align:center;'>No scheduled concerts.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- End Left Column -->

            <div class="right-column">
                <!-- 2. Reverted History Container with Integrated Loop -->
                <div class="dashboard-window">
                    <div class="dashboard-window-header"><h2>YOUR HISTORY</h2></div>
                    <div class="user-data">
                        <table class="dashboard-table">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Concert ID</th>
                                    <th>Tickets Amount</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $all_orders = readOrder(); 
                                if (!empty($all_orders)): 
                                    foreach ($all_orders as $order): 
                                ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($order['order_id'] ?? $order['id']); ?></td>
                                            <td>Concert #<?php echo htmlspecialchars($order['concert_id']); ?></td>
                                            <td><?php echo htmlspecialchars($order['order_amount']); ?></td>
                                        </tr>
                                <?php 
                                    endforeach; 
                                else: 
                                ?>
                                    <tr>
                                        <td colspan="3" style="text-align:center;">No order history found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- End Right Column -->
        </div> <!-- End Dashboard Container -->
    </div> <!-- End Main -->

<<<<<<< HEAD
    <script>
=======
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
            <div class="dashboard-window-header"><h2>YOUR HISTORY</h2></div>
            <div class="user-data">
                <table class="dashboard-table">
                    <tr>
                        <th>Order ID</th>
                        <th>Concert</th>
                        <th>Tickets</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Sample Concert</td>
                        <td>2</td>
                    </tr>
                </table>
            </div>
        </div>
    </div> </div> <script>
>>>>>>> 0c7a70c2a29f60660c3c66a91f09172800bac52e
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
<<<<<<< HEAD
    setInterval(() => {
        moveSlide(1);
    }, 3000);
    </script>
=======

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
>>>>>>> 0c7a70c2a29f60660c3c66a91f09172800bac52e
</body>
</html>
