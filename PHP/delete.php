<?php
    include "connection.php";
    
    $id = $_GET['id'];
    $connect -> query("DELETE FROM library WHERE id = '$id'");
    header("Location: ../index.php");
?>