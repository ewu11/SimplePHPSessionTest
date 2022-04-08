<?php
    //insert here...
    $sessionVar3 = session_start();
    
    if($sessionVar3) {
        $theSession3 = "Session started!";
    }
    else {
        $theSession3 = "Session error!";
    }
    $_SESSION["thirdPageSession"] = $theSession3;

    $_SESSION["thirdPageVar"] = "fromC";

    echo $_SESSION["thirdPageSession"];
?>

<html>
    <br><br>Go<a href="index.php"> back.</a>
</html>

<?php
    header("location: index.php");
?>