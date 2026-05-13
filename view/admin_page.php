<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iStar Ticketing System</title>
    <link rel="stylesheet" href="../styles.css"> 
    <link rel="icon" type="image/x-icon" href="../assets/istar-logo.png">
 
    <?php
        session_start();
        require('../model/db_connection.php');
        if($_SESSION['role'] !== "admin"){
            header('Location: ./dashboard_page.php');
        }
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
    
  <div class="admin-tools-container" style="padding: 40px 20px; display: flex; justify-content: center;">
    <div class="accounts-manager-window" style="
        background: rgba(255, 255, 255, 0.6); 
        backdrop-filter: blur(20px); 
        -webkit-backdrop-filter: blur(20px); 
        border-radius: 24px; 
        padding: 32px; 
        width: 1000px;
        height: 400px; 
        
        box-shadow: 0 20px 40px rgba(0,0,0,0.1); 
        border: 1px solid rgba(255,255,255,0.4);
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica;
    ">
        <h2 style="margin-top: 0; font-weight: 600; color: #1d1d1f; letter-spacing: -0.5px; text-align: center; margin-bottom: 30px;">
            Accounts Management
        </h2>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; min-width: 800px;">
                <thead>
                    <tr style="border-bottom: 1px solid rgba(0,0,0,0.1); color: black;">
                        <th style="padding: 12px; text-align: left; font-size: 11px; text-transform: uppercase;">User ID</th>
                        <th style="padding: 12px; text-align: left; font-size: 11px;  text-transform: uppercase;">Email</th>
                        <th style="padding: 12px; text-align: left; font-size: 11px; color: text-transform: uppercase;">Name</th>
                        <th style="padding: 12px; text-align: left; font-size: 11px; color: text-transform: uppercase;">Contact</th>
                        <th style="padding: 12px; text-align: left; font-size: 11px; color: text-transform: uppercase;">City</th>
                        <th style="padding: 12px; text-align: center; font-size: 11px; color: text-transform: uppercase;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $user_query = "SELECT * FROM users_tbl";
                        $user_result = mysqli_query($conn, $user_query);

                        if($user_result && mysqli_num_rows($user_result) > 0){
                            while($row = mysqli_fetch_assoc($user_result)){
                                echo "<tr style='border-bottom: 1px solid rgba(0,0,0,0.05); color:black'>";
                                echo "<td style='padding: 16px 12px; font-size: 14px;'>".$row['user_id']."</td>";
                                echo "<td style='padding: 16px 12px; font-size: 14px;'>".$row['email_address']."</td>";
                                echo "<td style='padding: 16px 12px; font-size: 14px;'>".$row['firstname']." ".$row['lastname']."</td>";
                                echo "<td style='padding: 16px 12px; font-size: 14px;'>".$row['contact_no']."</td>";
                                echo "<td style='padding: 16px 12px; font-size: 14px;'>".$row['city']."</td>";
                                // Functional Delete Link
                                echo "<td style='padding: 16px 12px; text-align: center;'> 
                                        <a href='?delete_id=".$row['user_id']."' 
                                           onclick=\"return confirm('Delete this user?')\" 
                                           style='background: #ff3b30; color: white; padding: 6px 14px; border-radius: 8px; text-decoration: none; font-size: 12px; font-weight: 600; display: inline-block;'>
                                           DELETE
                                        </a>
                                      </td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
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