<?php
if(isset($_POST['submit']))
{
        $servername = "bq7fjjq5uw9rmbualgpv-mysql.services.clever-cloud.com";
        $username = "u7qftlp0hiz0jckc";
        $password = "Bob123$";
        $dbName="iC3KZtjH3apa5T2g8DQd";
        $link = new mysqli($servername, $username, $password, $dbName);
        $sql = "INSERT INTO bookingTable (  movieName,
                                            bookingTheatre,
                                            bookingType,
                                            bookingDate,
                                            bookingTime,
                                            bookingFName,
                                            bookingLName,
                                            bookingPNumber)
                VALUES ('".$_POST["theatre"]."',
                        '".$_POST["theatre"]."',
                        '".$_POST["type"]."',
                        '".$_POST["date"]."',
                        '".$_POST["hour"]."',
                        '".$_POST["fName"]."',
                        '".$_POST["lName"]."',
                        '".$_POST["pNumber"]."')";
                        }
        mysqli_close($link);
?>