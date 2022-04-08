<?php
    session_start();

    $_SESSION["firstPageVar"] = "fromA";
    $_SESSION["secondPageVar"] = "fromB";
    $_SESSION["thirdPageVar"] = "fromC";

    header("location: index.php");
?>

<!-- <!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Refresh" content="0; url='firstPage.php'" />
    <meta http-equiv="Refresh" content="0; url='secondPage.php'" />
    <meta http-equiv="Refresh" content="0; url='thirdPage.php'" />
    <meta http-equiv="Refresh" content="0; url='index.php'" />
  </head>
</html> -->