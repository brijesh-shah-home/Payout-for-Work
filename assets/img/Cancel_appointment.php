<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}

if (!isset($_SESSION['user'])) {    
    // User not logged in, redirect to login page
    header("Location: ./auth/LoginPage.php"); // Replace LoginPage.php with your login page
    exit;
} else {
    $user = $_SESSION['user'];
    $worker=$_SESSION['is_worker'];
}

if(isset($_GET['date'])) {
    $date = $_GET['date'];

    // Query to delete the appointment based on the appointment date
    $delete_query = "DELETE FROM appointment_history WHERE client_email = '$user' AND appointment_date = '$date'";
    $result = mysqli_query($con, $delete_query);

    if($result) {
        echo "Appointment for the date ".$date." has been canceled successfully.";
        header("Location: ../LandingPage2.php");
    } else {
        echo "Error occurred while canceling the appointment.";
    }
}

mysqli_close($con);
?>
