<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: ./dashboard_page.php');
    exit(); // Always exit after a header redirect
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iStar Ticketing System</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="icon" type="image/x-icon" href="../assets/istar-logo.png">
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
                            if (!isset($_SESSION['firstname']))
                                echo "LOGIN";
                            else echo $_SESSION['firstname'];
                            ?>
                        </a></li>
                </ul>
            </div>
        </div>
<div class="loginform-container">
    <div class="loginform-window" style="
        background: rgba(255, 255, 255, 0.4); 
        backdrop-filter: blur(20px); 
        -webkit-backdrop-filter: blur(20px); 
        border: 1px solid rgba(255, 255, 255, 0.5); 
        border-radius: 24px; 
        padding: 40px; 
        width: 600px; 
        height: 600px;
        margin: 0 auto; 
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    ">
        <form action="../model/register.php" method="post" class="loginform" style="display: flex; flex-direction: column; gap: 12px;">
            <h1 style="margin: 0 0 10px 0; font-size: 28px; font-weight: 600; text-align: center; color: #1d1d1f;">Create Account</h1>
            
            <input type="email" class="sign-in-textbox" placeholder="Email Address" name="email_address" style="
                padding: 14px; border-radius: 10px; border: 1px solid rgba(0,0,0,0.1); background: rgba(255,255,255,0.7); font-size: 15px; outline: none;
            ">

            <input type="password" class="sign-in-textbox" placeholder="Password" name="password" style="
                padding: 14px; border-radius: 10px; border: 1px solid rgba(0,0,0,0.1); background: rgba(255,255,255,0.7); font-size: 15px; outline: none;
            ">

            <div style="display: flex; gap: 10px;">
                <input type="text" class="sign-in-textbox" placeholder="First Name" name="firstname" style="
                    flex: 1; padding: 14px; border-radius: 10px; border: 1px solid rgba(0,0,0,0.1); background: rgba(255,255,255,0.7); font-size: 15px; outline: none;
                ">
                <input type="text" class="sign-in-textbox" placeholder="Last Name" name="lastname" style="
                    flex: 1; padding: 14px; border-radius: 10px; border: 1px solid rgba(0,0,0,0.1); background: rgba(255,255,255,0.7); font-size: 15px; outline: none;
                ">
            </div>

            <div style="font-size: 12px; color: #86868b; margin-bottom: -8px; padding-left: 5px;">Birthdate</div>
            <input type="date" class="sign-in-textbox" name="birthdate" style="
                padding: 14px; border-radius: 10px; border: 1px solid rgba(0,0,0,0.1); background: rgba(255,255,255,0.7); font-size: 15px; outline: none; color: #424245;
            ">

            <input type="text" class="sign-in-textbox" placeholder="Contact Number" name="contact_no" style="
                padding: 14px; border-radius: 10px; border: 1px solid rgba(0,0,0,0.1); background: rgba(255,255,255,0.7); font-size: 15px; outline: none;
            ">

            <div style="display: flex; gap: 10px;">
                <input type="text" class="sign-in-textbox" placeholder="City" name="city" style="
                    flex: 1; padding: 14px; border-radius: 10px; border: 1px solid rgba(0,0,0,0.1); background: rgba(255,255,255,0.7); font-size: 15px; outline: none;
                ">
                <input type="text" class="sign-in-textbox" placeholder="Address" name="address" style="
                    flex: 2; padding: 14px; border-radius: 10px; border: 1px solid rgba(0,0,0,0.1); background: rgba(255,255,255,0.7); font-size: 15px; outline: none;
                ">
            </div>

            <input type="submit" value="REGISTER" style="
                margin-top: 15px; padding: 16px; border-radius: 12px; border: none; background: #0071e3; color: white; font-size: 16px; font-weight: 600; cursor: pointer; transition: opacity 0.2s;
            ">
        </form>
    </div>
</div>


    </div>
</body>

</html>