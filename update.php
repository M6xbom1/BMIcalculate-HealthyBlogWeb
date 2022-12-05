<?php
//update
    session_start();
    include('server.php');
    $username = $_SESSION["username"];
    $stmt = $conn->prepare("UPDATE `userpj` SET  `email` = ?, `dob` = ?, `address` = ?, `phone` = ? WHERE username = '$username'" );
    $stmt->bind_param("ssss",$email,$dob,$address,$phone);
    

    // $id = $_POST['id'];
    // $username = $_POST['username'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $stmt->execute();
    header("Location:index.php");
    
    $stmt->close();
    $conn->close();
?>