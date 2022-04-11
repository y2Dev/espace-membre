<?php
    include "config.php";
    $mysqli->query("INSERT INTO `users` (`id`, `email`, `password`, `dateIns`) VALUES (NULL, '".$_POST["email"]."', '".$_POST["pass"]."', current_timestamp())")
?>