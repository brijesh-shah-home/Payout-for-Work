<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}

if (!isset($_SESSION['user'])) {    
    // User not logged in, redirect to login page
    header("Location: ./auth/LoginPage.php"); // Replace LoginPage.php with your login page
    exit;
} else {
    $user = $_SESSION['user'];
}

// Query to get the appointment history for the logged-in user
$query = "SELECT client_name, worker_name, profession, appointment_date, appointment_time, your_address 
          FROM appointment_history 
          WHERE client_email = '$user'";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment History</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">

    <div class="container mx-auto mt-10 px-8 py-8 md:w-2/3 sm:w-full lg:w-2/3 sm:mx-auto md:mx-auto bg-gray-800 rounded-lg">

        <h2 class="text-2xl font-bold text-center text-gray-300 mb-4">Appointment History</h2>

        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="flex justify-between items-center border-b border-gray-700 py-4 mb-4">
                    <div>
                        <p><span class="font-bold">Client Name:</span> <?php echo $row["client_name"]; ?></p>
                        <p><span class="font-bold">Worker Name:</span> <?php echo $row["worker_name"]; ?></p>
                        <p><span class="font-bold">Profession:</span> <?php echo $row["profession"]; ?></p>
                        <p><span class="font-bold">Appointment Date:</span> <?php echo $row["appointment_date"]; ?></p>
                        <p><span class="font-bold">Appointment Time:</span> <?php echo $row["appointment_time"]; ?></p>
                        <p><span class="font-bold">Address:</span> <?php echo $row["your_address"]; ?></p>
                    </div>
                    <div>
                        <a href="./User/Cancel_appointment.php?date=<?php echo $row["appointment_date"]; ?>" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Cancel Appointment
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center">No Appointment Found !!!</p>
        <?php endif; ?>

        <div class="text-center mt-4">
            <a href="./LandingPage2.php" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Back to Landing Page
            </a>
        </div>

    </div>

</body>

</html>

<?php
mysqli_close($con);
?>
