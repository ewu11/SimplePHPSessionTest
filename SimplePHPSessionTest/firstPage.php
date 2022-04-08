<?php
    //insert here...
    $sessionVar1 = session_start();

    if($sessionVar1) {
        $theSession1 = "Session started!";
    }
    else {
        $theSession1 = "Session error!";
    }
    $_SESSION["firstPageSession"] = $theSession1;

    $_SESSION["firstPageVar"] = "fromA";

    echo $_SESSION["firstPageSession"];
?>

<html>
    <br><br>Go<a href="index.php"> back.</a>
</html>

<?php
    header("location: index.php");
?>