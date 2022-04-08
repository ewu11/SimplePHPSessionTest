<?php
    //insert here...
    $sessionVar2 = session_start();
    
    if($sessionVar2) {
        $theSession2 = "Session started!";
    }
    else {
        $theSession2 = "Session error!";
    }
    $_SESSION["secondPageSession"] = $theSession2;

    $_SESSION["secondPageVar"] = "fromB";

    echo $_SESSION["secondPageSession"];
?>

<html>
    <br><br>Go<a href="index.php"> back.</a>
</html>

<?php
    header("location: index.php");
?>