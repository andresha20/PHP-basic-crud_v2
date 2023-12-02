<?php
    include 'connection.php';

    $author = $_POST['author'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $send = $connect->prepare("INSERT INTO library VALUES (null, ? , ?, ?)");
    $send->bindParam(1, $author);
    $send->bindParam(2, $title);
    $send->bindParam(3, $description);
    $send->execute();
    header('Location: ../index.php');
?>