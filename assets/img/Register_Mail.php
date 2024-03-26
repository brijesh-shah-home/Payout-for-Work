<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if(isset($_POST['btnsubmit']))
     {
        $q="insert into userdata set
        username='".$_REQUEST['fullname']."',
        email='".$_REQUEST['email']."',
        password='".$_REQUEST['password']."'";
        mysqli_query($con,$q);        
     }
if(isset($_REQUEST['email']) && isset($_REQUEST['fullname'])) {
    $email = $_REQUEST['email'];
    $name = $_REQUEST['fullname'];
     
    Register_Mail($email, $name);
} 
// elseif(isset($_REQUEST['feedback']) && isset($_REQUEST['name'])) {
//     $email = $_REQUEST['email'];
//     $name = $_REQUEST['name'];
//     Send_ThankYou_Message($email, $name);
// }

// Load Composer's autoloader
function Register_Mail($email, $name) {
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
        $mail->Subject = 'Thank You for Register in Our Website';
        $mail->Body = 'Dear ' . $name . ',<br><br>
                Thank you for registering on our website! We are thrilled to have you join our community.<br><br>
                Your registration marks the beginning of an exciting journey together. As a member, you now have access to a wide range of features and resources to help you [describe the benefits or services of your website].<br><br>
                We value your trust in us and are committed to providing you with the best experience possible. If you have any questions or need assistance, please feel free to reach out to our support team.<br><br>
                Once again, welcome to our community! We\'re excited to have you on board and look forward to seeing you thrive on our platform.<br><br>
                Best regards,<br>
                PayoutforWork Team';


        $mail->send();
        echo '<script>alert("Your Sucessfully Registered !!!");</script>';
        // Redirect to feedback page or any other appropriate location
        echo '<script>window.location.href = "../auth/LoginPage.php";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
