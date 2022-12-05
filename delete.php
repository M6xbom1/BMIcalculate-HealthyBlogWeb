<?php
    session_start();
    include('server.php');
    $id = $_POST['id'];
    $sql = "DELETE FROM userpj WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    header("Location:profile.php");
    $conn->close();
?>