<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$con = mysqli_connect("localhost", "root", "", "payoutforwork");

if(isset($_REQUEST['email']) && isset($_REQUEST['name'])) {
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    Send_ThankYou_Message($email, $name);
} elseif(isset($_REQUEST['feedback']) && isset($_REQUEST['name'])) {
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    Send_ThankYou_Message($email, $name);
}

// Load Composer's autoloader
function Send_ThankYou_Message($email, $name) {
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
        $mail->Subject = 'Thank You for Your Approach';
        $mail->Body = 'Dear ' .$name.',<br><br>
                    Thank you so much for reaching out and expressing your interest in joining us on our journey. Your willingness to come aboard means a great deal to us.<br><br>
                    We truly appreciate your enthusiasm and commitment, and we\'re excited to have you as part of our team. Your skills and perspectives will undoubtedly enrich our journey and help us achieve our goals.<br><br>
                    Our team will be in touch with you soon to provide further details and discuss next steps. In the meantime, if you have any questions or concerns, please don\'t hesitate to reach out.<br><br>
                    Once again, thank you for choosing to join us. We\'re looking forward to embarking on this adventure together!<br><br>
                    Best regards,<br>
                    PayoutforWork Team';

        $mail->send();
        echo '<script>alert("Thank you message has been sent");</script>';
        // Redirect to feedback page or any other appropriate location
        echo '<script>window.location.href = "../LandingPage2.php";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
