<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}
if(isset($_POST['submit_feedback']))
{
    $q="insert into feedback set
    name='".$_REQUEST['name']."',
    email='".$_REQUEST['email']."',
    message= '".$_REQUEST['message']."'";
    if(mysqli_query($con,$q))
        echo "<script>alert('Feedback Submitted Successfully...!')</script>";
    else
        die("<script>alert('Error in submitting Feedback..!')</script>");
}
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
        $mail->Subject = 'Thank You for Your Feedback';
        $mail->Body = 'Dear ' . $name . ',<br><br>
                    Thank you for your valuable feedback. We appreciate your time and effort in helping us improve our services.<br><br>
                    Sincerely,<br>
                    PayoutforWork Team';

        $mail->send();
        echo '<script>alert("Thank you for your feedback! We truly appreciate it.");</script>';
        // Redirect to feedback page or any other appropriate location
        echo '<script>window.location.href = "../About.php";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
