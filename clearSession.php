<?php
    session_start(); //without this, we cant obtain existing sessions to be destroyed

    session_destroy();

    header("location: index.php");
?>