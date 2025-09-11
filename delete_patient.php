<?php
include('dbcon.php');
session_start();

if (isset($_GET['id'])) {
    $id = (int) $_GET['id']; // Sanitize input

    $sql = "DELETE FROM user1 WHERE id = $id";
    if (mysqli_query($connect, $sql)) {
        $_SESSION['message'] = "Patient record deleted successfully!";
    } else {
        $_SESSION['message'] = "Error deleting record: " . mysqli_error($connect);
    }

    mysqli_close($connect);
    header("Location: drnew.php"); // Redirect back to the main page
    exit();
} else {
    $_SESSION['message'] = "Invalid request!";
    header("Location: drnew.php");
    exit();
}
?>