<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();
$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}
$row = null; // Initialize $row to avoid undefined variable error
$row2 = null; // Initialize $row to avoid undefined variable error
if (!isset($_SESSION['user'])) {    
    // User not logged in, redirect to login page
    header("Location: ./auth/LoginPage.php"); // Replace LoginPage.php with your login page
    exit;
} else {
    $user = $_SESSION['user'];
    $c = "SELECT username FROM userdata WHERE email='$user'"; 
    $r = mysqli_query($con, $c);
    $row2 = mysqli_fetch_object($r);
}
// if (isset($_POST["appoint"])) {
//     // Insert into appointment_history table    
//     $q1 = "INSERT INTO appointment_history (worker_name, profession, appointment_date, appointment_time, your_address, client_name, contact) VALUES ('" . $_REQUEST['workerName'] . "', '" . $_REQUEST['profession'] . "', '" . $_REQUEST['appointmentDate'] . "', '" . $_REQUEST['appointmentTime'] . "','" . $_REQUEST['address'] . "','".$_REQUEST['client_name']."','".$_REQUEST['contact']."', '" . $row2->username . "')";
//     mysqli_query($con, $q1);    
// }   

if(isset($_REQUEST['client_email']) && isset($_REQUEST['client_name']) && isset($_REQUEST['address']) && isset($_REQUEST['appointmentTime']) && isset($_REQUEST['appointmentDate']) &&  isset($_REQUEST['email']) && isset($_REQUEST['workerName'])){
    $worker_name = $_REQUEST['workerName'];
    $client_name = $_REQUEST['client_name'];
    $address = $_REQUEST['address'];
    $time = $_REQUEST['appointmentTime'];
    $date = $_REQUEST['appointmentDate'];
    $worker_email = $_REQUEST['email'];
    $profession=$_REQUEST['profession'];
    $contact = $_REQUEST['contact'];    
    $client_email = $_REQUEST['client_email'];
     
    sendAppointmentMail($client_name, $address, $time, $date, $worker_email, $worker_name, $contact);

    // Insert data into the appointment_history table
    $insert_query = "INSERT INTO appointment_history (worker_name,profession,appointment_date,appointment_time,your_address,client_name,contact,client_email,worker_email) 
                 VALUES ('$worker_name','$profession','$date', '$time','$address','$client_name','$contact','$client_email','$worker_email')";

    mysqli_query($con, $insert_query);
} 

function sendAppointmentMail($client_name, $address, $time, $date, $worker_email, $worker_name, $contact) {
    require '../vendor/autoload.php';

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'dummymail11n69@gmail.com';             // SMTP username
        $mail->Password   = 'khbalownzrfnknjd';                     // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable implicit TLS encryption
        $mail->Port       = 465;                                    // TCP port to connect to

        // Recipients
        $mail->setFrom('dummymail11n69@gmail.com', 'PayoutforWork Team');
        $mail->addAddress($worker_email, $worker_name); // Worker's email and name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Appointment Notification';
        $mail->Body = 'Dear ' . $worker_name . ',<br><br>
                You have been appointed to do work by a client.<br><br>
                Client Name: ' . $client_name . '<br>
                Date : '.$date.'<br>
                Timing : '.$time.'<br>
                Client Address: ' . $address . '<br><br>
                Contact  the client for further details or any questions you may have. +91 '.$contact.' <br><br>
                Regards,<br>
                Please reach out to the client to discuss the details of the work.<br><br>
                Best regards,<br>
                PayoutforWork Team';


        $mail->send();
        echo '<script>alert("Appointment notification email has been sent to the worker!");</script>';
        // Redirect to appropriate location
        echo '<script>window.location.href = "../LandingPage2.php";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
