<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if(isset($_REQUEST['email']))
{
    $email=$_REQUEST['email'];
    $q="SELECT * FROM userdata WHERE email='$email'";
    $qry=mysqli_query($con,$q);
    $res=mysqli_fetch_assoc($qry);
    $d_pass=$res['password'];
    Send_Mail($email, $d_pass);
}
//Load Composer's autoloader
function Send_Mail($email, $d_pass){
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dummymail11n69@gmail.com';                         //SMTP username
    $mail->Password   = 'khbalownzrfnknjd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dummymail11n69@gmail.com', 'PayoutforWork Team');
    $mail->addAddress($email, 'Your Password');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Forgot Your Password';
    $mail->Body = 'Dear User,<br><br>
                You have recently requested to reset your password for your account. Please find your temporary password below:<br><br>
                <strong>' . $d_pass . '</strong><br><br>
                For security reasons, we recommend changing this temporary password immediately after logging in. If you did not request this change, please contact our support team.<br><br>
                Thank you for using our services.<br><br>
                Sincerely,<br>
                PayoutforWork Team';

    $mail->send();
    echo '<script>alert("Message has been sent");</script>';
    // Redirect to login page
    echo '<script>window.location.href = "../auth/LoginPage.php";</script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
