<?php
$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}
$row = null; // Initialize $row to avoid undefined variable error
$row2 = null; // Initialize $row to avoid undefined variable error
session_start(); // Start session at the top
if (!isset($_SESSION['user'])) {    
    // User not logged in, redirect to login page
    header("Location: ./auth/LoginPage.php"); // Replace LoginPage.php with your login page
    exit;
} else {
    $user = $_SESSION['user'];
    $c = "SELECT username,email FROM userdata WHERE email='$user'"; 
    $r = mysqli_query($con, $c);
    $row2 = mysqli_fetch_object($r);
}

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $q = "SELECT * FROM worker_profiles WHERE id = " . mysqli_real_escape_string($con, $id);
    $res = mysqli_query($con, $q);
    $row = mysqli_fetch_object($res);
}

// if (isset($_POST["appoint"])) {
//     // Insert into appointment_history table    
//     $q1 = "INSERT INTO appointment_history (worker_name, profession, appointment_date, appointment_time, your_address, client_name, contact) VALUES ('" . $_REQUEST['workerName'] . "', '" . $_REQUEST['profession'] . "', '" . $_REQUEST['appointmentDate'] . "', '" . $_REQUEST['appointmentTime'] . "','" . $_REQUEST['address'] . "','".$_REQUEST['client_name']."','".$_REQUEST['contact']."', '" . $row2->username . "')";
//     mysqli_query($con, $q1);    
// }     

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker Appointment Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
}
  </style>
</head>

<body class="bg-gray-900">
    <div class="container mx-auto mt-10 px-8 py-8 md:w-2/5 sm:w-full lg:w-2/5 sm:mx-auto md:mx-auto bg-gray-800 w-2/5 rounded-lg">
        <h2 class="text-2xl font-bold text-center text-gray-300 mb-4">Worker Appointment Form</h2>    
        <form id="appointmentForm" method="POST" enctype="multipart/form-data" class="space-y-4 text-gray-100" action="./Mail_Service/Appointment_Mail.php">
            <label for="workerName" class="block">Worker Name:</label>
            <input type="text" value="<?php echo isset($row) ? $row->fname . " " . $row->lname : ''; ?>" id="workerName"
                name="workerName" readonly
                class="w-full px-4 py-2 bg-transparent text-gray-100 border-2 border-gray-600 rounded">

            <label for="profession" class="block">Profession:</label>
            <input type="text" value="<?php echo isset($row) ? $row->profession : ''; ?>" id="profession"
                name="profession" readonly
                class="w-full px-4 py-2 bg-transparent text-gray-100 border-2 border-gray-600 rounded">
            
            <!-- Worker Email Hidden -->
            <input type="text" value="<?php echo isset($row) ? $row->email : ''; ?>" id="email"
                name="email" readonly
                class="w-full px-4 py-2 bg-transparent text-gray-100 border-2 border-gray-600 rounded hidden">

            <!-- Client Name -->
            <label for="client_name" class="block">Client Name:</label>
            <input type="text" value="<?php echo isset($row2) ? $row2->username : ''; ?>" id="client_name"
                name="client_name" readonly
                class="w-full px-4 py-2 bg-transparent text-gray-100 border-2 border-gray-600 rounded">

            <!-- Client Email -->            
            <input type="text" value="<?php echo isset($row2) ? $row2->email : ''; ?>" id="client_email"
                name="client_email" readonly
                class="w-full px-4 py-2 bg-transparent text-gray-100 border-2 border-gray-600 rounded hidden">

            <label for="appointmentDate" class="block">Date:</label>
            <input type="date" id="appointmentDate" name="appointmentDate" required
                class="w-full px-4 py-2 bg-transparent text-gray-100 border-2 border-gray-600 rounded"
                    min="<?php echo date('Y-m-d'); ?>">

            <label for="appointmentTime" class="block">Time:</label>
            <input type="time" id="appointmentTime" name="appointmentTime" required
                class="w-full px-4 py-2 bg-transparent text-gray-100 border-2 border-gray-600 rounded">

            <label for="address" class="block">Address:</label>
            <input type="text" id="address" name="address" required
                class="w-full px-4 py-2 bg-transparent text-gray-100 border-2 border-gray-600 rounded">

            <label for="address" class="block">Contact:</label>
            <input type="number" id="contact" name="contact" required
                class="w-full px-4 py-2 bg-transparent text-gray-100 border-2 border-gray-600 rounded">


            <!-- <label for="transactionType" class="block">Transaction Type:</label>
            <select id="transactionType" name="transactionType" required
                class="w-full px-4 py-2 bg-transparent text-gray-100 border-2 border-gray-600 rounded">
                <option value="" disabled selected class=" bg-transparent text-gray-400">Select Payment Method</option>
                <option value="payAfterWork" class="text-gray-700">Pay After Work</option>
                <option value="creditCard" class="text-gray-700">Credit Card</option>
                <option value="debitCard" class="text-gray-700">Debit Card</option>
            </select>

            <div id="cardDetails" style="display: none;">
                <label for="cardNumber" class="block">Card Number:</label>
                <input type="text" id="cardNumber" name="cardNumber" maxlength="16"
                    class="w-full px-4 py-2 border text-black font-mono border-gray-600 rounded">

                <label for="expiryDate" class="block">Expiry Date:</label>
                <input type="month" id="expiryDate" name="expiryDate"
                    class="w-full px-4 py-2 border text-black font-mono border-gray-600 rounded">

                <label for="cvv" class="block">CVV:</label>
                <input type="text" id="cvv" name="cvv" maxlength="3"
                    class="w-full px-4 py-2 border text-black font-mono border-gray-600 rounded">
            </div> -->

            <button type="submit" id="bookAppointmentBtn" name="appoint"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded">Book
                Appointment</button>
        </form>        
    </div>
    <!-- <script src="./scripts/appoint.js"></script> -->
    <script>
        function showCardDetails() {
            var transactionType = document.getElementById("transactionType").value;
            var cardDetails = document.getElementById("cardDetails");

            if (transactionType === "creditCard" || transactionType === "debitCard") {
                cardDetails.style.display = "block";
            } else {
                cardDetails.style.display = "none";
            }
        }
    </script>
</body>

</html>
