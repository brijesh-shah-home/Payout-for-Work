<?php

session_start();

$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}

if (isset($_POST['loginbtn'])) {
    $username = $_REQUEST['email']; // No need to use LIKE for exact match
    $password = $_REQUEST['password'];

    $query = "SELECT email, password FROM userdata WHERE email='$username' AND password='$password'";
    $result = mysqli_query($con, $query) or die("Query failed");
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['email']; // Set session variable
        $_SESSION['login_time'] = time(); // Store login time
        header("Location: ../LandingPage.php");
        exit();
    }
    else if ($username === "Admin" && $password === "12345") {
        // Successful admin login
        $_SESSION['admin'] = true; // Mark the user as admin     
        $_SESSION['login_time'] = time(); // Store login time
        header("Location: admin.php");
        exit;
    }
    else {
        echo "<script>alert('Username and Password are Incorrect')</script>";
    }
}

// Check if the user is logged in and session duration has not exceeded 15 minutes
if (isset($_SESSION['login_time']) && time() - $_SESSION['login_time'] > 900) {
    // 900 seconds = 15 minutes
    // Destroy the session and log the user out
    session_unset();
    session_destroy();
    header("Location: ../LandingPage.php"); // Redirect to login page
    exit();
}
?>