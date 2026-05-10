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
    $conn = mysqli_connect("localhost", "root", "", "istardb");

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
                </ul>
            </div>
        </div>

<!--slideshow artist-->
        <div class="hero-banner">
    <div class="carousel-track" id="track">
        
        <div class="carousel-item">
            <video autoplay muted loop playsinline class="hero-video">
                <source src="../assets/taylorswiftvideo.mp4" type="video/mp4">
                Your browser does not support the video tag.
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
                </div> </div> </div> </div> </div> <div class="dashboard-container">
    
    
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
                    <th>Time Left</th> </tr>
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
estimating the time...                                </span>
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

    setInterval(() => {
        moveSlide(1);
    }, 3000);

    
</script>

</body>
</html>