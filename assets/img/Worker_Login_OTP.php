<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$con = mysqli_connect("localhost", "root", "", "payoutforwork");
session_start();
if (!$con) {
    exit("Database Not Connected....!");
}
if (isset($_POST['send_otp'])) {
    $email = $_REQUEST['email']; // Email entered by the user

    // Check if the email exists in the database
    $query = "SELECT email FROM worker_profiles WHERE email='$email'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // Email exists in the database, proceed to send OTP        
        $_SESSION['is_worker'] = $email; // Store the email in session for verification
        if (isset($_REQUEST['email'])) {
            $email = $_REQUEST['email'];
            // Generate OTP
            $otp = rand(10000, 99999);            
            $_SESSION['otp'] = $otp; // Store OTP in session
            Send_OTP($email, $otp);
        }
        
        exit();
    } else {
        // Email does not exist in the database
        echo "<script>alert('Email not found. Please enter a valid email.');</script>";
        echo  '<script>window.location.href = "../auth/Worker_Login.php";</script>';
    }
}

// Load Composer's autoloader
function Send_OTP($email, $otp)
{
    require '../vendor/autoload.php';

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                        // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                   // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                               // Enable SMTP authentication
        $mail->Username   = 'dummymail11n69@gmail.com';         // SMTP username
        $mail->Password   = 'khbalownzrfnknjd';                 // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        // Enable implicit TLS encryption
        $mail->Port       = 465;                                // TCP port to connect to

        // Recipients
        $mail->setFrom('dummymail11n69@gmail.com', 'PayoutforWork Team');
        $mail->addAddress($email);                             // Add a recipient

        // Content
        $mail->isHTML(true);                                    // Set email format to HTML
        $mail->Subject = 'OTP for Password Reset';
        $mail->Body    = 'Dear User,<br><br>
                          You have recently requested to reset your password for your account. Please use the following OTP to proceed:<br><br>
                          <strong>' . $otp . '</strong><br><br>
                          If you did not request this OTP, please ignore this email.<br><br>
                          Thank you for using our services.<br><br>
                          Sincerely,<br>
                          PayoutforWork Team';

        $mail->send();
        // echo '<script>alert("OTP has been sent to your email");</script>';
        // Redirect to OTP verification page
        echo '<script>window.location.href = "../auth/OTP_Verification.php";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
