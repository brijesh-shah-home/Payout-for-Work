<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$con = mysqli_connect("localhost", "root", "", "payoutforwork");

if(isset($_REQUEST['email']) && isset($_REQUEST['fullname'])) {
    $email = $_REQUEST['email'];
    $name = $_REQUEST['fullname'];
    $message = $_REQUEST['message']; // Get the message from the form
     
    sendCustomEmail($email, $name, $message);
} 

// Load Composer's autoloader
function sendCustomEmail($email, $name, $message) {
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
        $mail->addAddress($email, $name); // Here, the name is used as the recipient's name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Custom Message from PayoutforWork Team';
        $mail->Body = 'Dear ' . $name . ',<br><br>' . $message . '<br><br>
                Best regards,<br>
                PayoutforWork Team';


        $mail->send();
        echo '<script>alert("Your message has been sent successfully!");</script>';
        // Redirect to appropriate location after sending email
        echo '<script>window.location.href = "../admin/dashboard.php";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
