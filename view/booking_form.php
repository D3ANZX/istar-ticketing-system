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
                    <li class="nav-item"><a href="">HOME</a></li>
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
        <div class="ticket-form-container">
            <div class="loginform-window">
                <form action="" class="ticket-form">
                    <h1> iSTAR - TICKETFORM </h1>
                    <br>
                    <input type="text" class="sign-in-textbox" placeholder="username">
                    <br>
                    <br>
                    <input type="text" class="sign-in-textbox" placeholder="password">
                    <br>
                    <br>
                    <button>REGISTER</button>
                    <input type="submit" value="LOGIN">
                </form>
            </div>
        </div>


        
    </div>
</body>
</html>