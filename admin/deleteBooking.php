<?php 
    $id = $_GET['id'];
    $link = mysqli_connect(("bq7fjjq5uw9rmbualgpv-mysql.services.clever-cloud.com", "u7qftlp0hiz0jckc", "iC3KZtjH3apa5T2g8DQd", "bq7fjjq5uw9rmbualgpv");

    $sql = "DELETE FROM bookingTable WHERE bookingID = $id"; 

    if ($link->query($sql) === TRUE) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>