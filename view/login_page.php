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
            <div class="loginform-window">
                <form action="../model/login.php" method="post" class="loginform">
                    <h1>SIGN IN</h1>
                    <br>
                    <input type="text" class="sign-in-textbox" placeholder="username" name="email_address">
                    <br>
                    <br>
                    <input type="text" class="sign-in-textbox" placeholder="password" name="password">
                    <br>
                    <br>
                    <input type="submit" value="LOGIN" class="auth-button">
                    <a href="../view/register_page.php" class="register-btn">
                        <button type="button" class="auth-button">REGISTER</button>
                    </a>
                </form>
            </div>
        </div>



    </div>
</body>

</html>