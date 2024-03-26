<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$con = mysqli_connect("localhost", "root", "", "payoutforwork");

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['accept'])) {
        // Accept button clicked, mark appointment as accepted
        $appointment_date = $_POST['appointment_date'];
        acceptAppointment($appointment_date);
        Send_Acceptance_Message($_POST['client_email']);
    } elseif (isset($_POST['reject'])) {
        // Reject button clicked, send rejection email
        Reject_Appointment_Request($_POST['client_email']);
    }
}
function acceptAppointment($appointment_date) {
    global $con;
    // Update the database record to mark the appointment as accepted
    $update_query = "UPDATE appointment_history SET appointment_accepted = 1 WHERE appointment_date = '$appointment_date'";
    $result = mysqli_query($con, $update_query);
    if (!$result) {
        // Handle error if update query fails
        echo "Error updating record: " . mysqli_error($con);
    }
}


function Send_Acceptance_Message($client_email) {
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
        $mail->addAddress($client_email); // Client's email

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Appointment Request Accepted';
        $mail->Body = 'Dear Client,<br><br>
                    We are pleased to inform you that the worker has <b> Accepted </b> your appointment request. You can proceed with the scheduled appointment at the agreed date and time.<br><br>
                    If you have any further questions or need assistance, feel free to contact us.<br><br>
                    Best regards,<br>
                    PayoutforWork Team';

        $mail->send();
        echo '<script>alert("Acceptance message has been sent");</script>';
        // Redirect to appropriate location
        echo '<script>window.location.href = "../Workers/Worker_Appointment.php";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

function Reject_Appointment_Request($client_email) {
        global $con;
    
        // Delete the record from the database
        $delete_query = "DELETE FROM appointment_history WHERE client_email = '$client_email'";
        $result = mysqli_query($con, $delete_query);
    
        if($result) {
            // Send rejection email to the client
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
                $mail->addAddress($client_email); // Client's email
    
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Appointment Request Rejected';
                $mail->Body = 'Dear Client,<br><br>
                            We regret to inform you that the worker has rejected your appointment request for the date '.$reject_date.'. We apologize for any inconvenience caused.<br><br>
                            If you have any further questions or need assistance, feel free to contact us.<br><br>
                            Best regards,<br>
                            PayoutforWork Team';
    
                $mail->send();
                echo '<script>alert("Rejection message has been sent");</script>';
                // Redirect to appropriate location
                echo '<script>window.location.href = "../Workers/Worker_Appointment.php";</script>';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Error occurred while canceling the appointment.";
        }
}
?>
