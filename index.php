<?php 
    $sessionVar = session_start();
    
    if($sessionVar) {
        $theSession = "Session started!";
    }
    else {
        $theSession = "Session error!";
    }
?>

<html>
    <header>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test session</title>
        <link rel="stylesheet" href="myStyle.css"> <!-- import css -->

        <div id="headerContainer">
            <h1>Testing: "session"</h1>
        </div>
    </header>
    <body>
        <hr id="horiLine1">
        <div id="bodyContainer">
            <?php
                //insert here...
                // !----uncommenting the "includes" will defeat the purpose of "session_start()" && "$_SESSION"----!
                // include "firstPage.php";
                // include "secondPage.php";
                // include "thirdPage.php";
                // !----uncommenting the "includes" will defeat the purpose of "session_start()" && "$_SESSION"----!
            ?>
            <p>var from <span>"firstPage.php"</span> is: <span><?php echo $_SESSION["firstPageVar"] ?></span></p>
            <p>var from <span>"secondPage.php"</span> is: <span><?php echo $_SESSION["secondPageVar"] ?></span></p>
            <p>var from <span>"thirdPage.php"</span> is: <span><?php echo $_SESSION["thirdPageVar"] ?></span></p>
        </div>
        <hr id="horiLine1">
    </body>
    <footer>
        <!-- insert here... -->
        <div id="footerContainer">
            <h2><?php echo $theSession; ?></h2>
        </div>
        <div id="extraContainer">
            <fieldset>
                <legend>Debugging purposes</legend>
                <p>Go to <a href="firstPage.php">firstPage.php</a></p>
                <p>Go to <a href="secondPage.php">secondPage.php</a></p>
                <p>Go to <a href="thirdPage.php">thirdPage.php</a></p>
                <hr id="horiLine2">
                <p>Re-open the<a href="reopenSession.php"> session</a></p>
                <p><a href="clearSession.php">Clear</a> the session</p>
            </fieldset>
        </div>
    </footer>
</html>