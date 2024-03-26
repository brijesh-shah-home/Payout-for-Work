<?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}

// Retrieve profile ID from URL parameter
if (isset($_GET['id'])) {
    $profile_id = mysqli_real_escape_string($con, $_GET['id']);

    // Query to fetch worker profile data based on profile ID
    $query = "SELECT * FROM worker_profiles WHERE profile_id = $profile_id";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // Worker profile found, display profile information
        $profile = mysqli_fetch_assoc($result);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <meta name="theme-color" content="#000000" />
            <title>Worker Profile</title>
        </head>
        <body>
            <h2>Worker Profile</h2>
            <div>
                <img src="<?php echo $profile['profilepicture']; ?>" alt="Profile Picture" width="100" height="100"><br>
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" value="<?php echo $profile['fname']; ?>" disabled><br>
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" value="<?php echo $profile['lname']; ?>" disabled><br>
                <label for="gender">Gender:</label>
                <input type="text" id="gender" name="gender" value="<?php echo $profile['gender']; ?>" disabled><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $profile['email']; ?>" disabled><br>
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contact" value="<?php echo $profile['contact']; ?>" disabled><br>
                <label for="profession">Profession:</label>
                <input type="text" id="profession" name="profession" value="<?php echo $profile['profession']; ?>" disabled><br>
                <label for="experience">Experience:</label>
                <input type="text" id="experience" name="experience" value="<?php echo $profile['experience']; ?>" disabled><br>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo $profile['address']; ?>" disabled><br>
                <label for="city">City:</label>
                <input type="text" id="city" name="city" value="<?php echo $profile['city']; ?>" disabled><br>
                <label for="country">Country:</label>
                <input type="text" id="country" name="country" value="<?php echo $profile['country']; ?>" disabled><br>
                <label for="zipcode">Zipcode:</label>
                <input type="text" id="zipcode" name="zipcode" value="<?php echo $profile['zipcode']; ?>" disabled><br>
                <a href="EditProfile.php?id=<?php echo $profile['profile_id']; ?>">Edit</a>
                <a href="DeleteProfile.php?id=<?php echo $profile['profile_id']; ?>">Delete</a>
            </div>
        </body>
        </html>
        <?php
    } else {
        // Worker profile not found
        echo "Worker profile not found.";
    }
} else {
    // Profile ID not provided in URL parameter
    echo "Profile ID not provided.";
}

mysqli_close($con);
?>
