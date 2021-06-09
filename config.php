<?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("BASE", "internationally GSA");

    $conn = new mysqli(HOST, USER, PASS, BASE) or die(mysqli_error($conn));

?>