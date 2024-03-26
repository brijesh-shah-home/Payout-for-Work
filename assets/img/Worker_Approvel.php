
<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php"); // Redirect to admin login page if not logged in
    exit();
}

// Connect to the database
$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}

// Fetch pending requests
$query = "SELECT * FROM worker_profiles WHERE join_request = 1";
$result = mysqli_query($con, $query);
?>

<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php"); // Redirect to admin login page if not logged in
    exit();
}

// Connect to the database
$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}

if (isset($_POST['accept'])) {
    $worker_id = $_POST['worker_id'];
    // Update the join_request status to accepted
    $query = "UPDATE worker_profiles SET join_request = 2 WHERE id = $worker_id";
    mysqli_query($con, $query);
    echo "Request accepted successfully!";
} elseif (isset($_POST['reject'])) {
    $worker_id = $_POST['worker_id'];
    // Update the join_request status to rejected
    $query = "UPDATE worker_profiles SET join_request = 0 WHERE id = $worker_id";
    mysqli_query($con, $query);
    echo "Request rejected successfully!";
}

header('Location: admin_requests.php'); // Redirect back to admin requests page
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Accept Requests</title>
</head>

<body>
    <h1>Admin Panel - Accept Requests</h1>
    <table>
        <tr>
            <th>Profile Picture</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Contact</th>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Zipcode</th>
            <th>Profession</th>
            <th>Experience</th>
            <th>Worker Details</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><img src="./uploaded/profilepicture/<?php echo $row['profile_picture']; ?>" width="50" height="50"></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td><?php echo $row['zipcode']; ?></td>
                <td><?php echo $row['profession']; ?></td>
                <td><?php echo $row['experience']; ?></td>
                <td><?php echo $row['worker_details']; ?></td>
                <td>
                    <form action="accept_request.php" method="POST">
                        <input type="hidden" name="worker_id" value="<?php echo $row['id']; ?>">
                        <input type="submit" name="accept" value="Accept">
                        <input type="submit" name="reject" value="Reject">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
