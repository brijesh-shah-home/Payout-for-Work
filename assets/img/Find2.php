<?php
session_start(); // Start session at the top
if (!isset($_SESSION['user'])) {    
  // User not logged in, redirect to login page
  header("Location: ./auth/LoginPage.php"); // Replace login.php with your login page
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Worker</title>
    <!-- <link rel="stylesheet" href="./css/services.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #141b2d;
            color: #fff;
        }

        .find-worker-form {
            background-color: #111827;
            padding: 50px;
            margin: 100px auto;
            max-width: 400px;
            border-radius: 8px;
            text-align: center;
        }

        label {
            text-align: left;
            display: block;
            margin-bottom: 8px;
            color: #adb5bd;
        }

        #profession,
        #zipcode {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 2px solid #6c757d;
            border-radius: 5px;
            background-color: #0e1625;
            color: #fff;
        }

        .find-btn {
            background-color: #87CEEB;
            /* Sky Blue */
            color: #141b2d;
            padding: 12px 20px;
            border: none;
            margin-bottom: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 17px;
            font-weight: bold;
            letter-spacing: 2px;
            transition: background-color 0.3s;
        }

        .find-btn:hover {
            background-color: #4682b4;
            /* Darker shade of Sky Blue */
        }

        table {
            width: 300px;
            border-collapse: collapse;
            margin-top: 20px;
            color: #ffffff;
        }

        th {
            border: none;
            padding: 10px;
            text-align: left;
        }

        td {
            border: none;
            padding: 5px;
            text-align: left;
            width: 30%;
        }

        th {
            background-color: transparent;
            color: #3498db;
            /* Blue color */
            font-weight: bold;
            width: 30%;
            /* Set a fixed width for labels */
        }

        td {
            /* background-color: #3a5572; */
            /* Darker blue */
            margin-top: 5px;
        }

        tr {
            display: block;
            margin-bottom: 5px;
        }

        #main {
            margin-top: -50px;
        }

        .profiles {
            margin-top: 30px;
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;

        }

        .profile-box {
            width: fit-content;
            word-wrap: break-word;
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
            text-align: center;
            background-color: #111827;
            /* font-weight: bolder; */
        }

        .profile-box img {
            border-radius: 20%;
            margin-bottom: 20px;
            height: 130px;
            width: 120px;
            margin: auto;
        }

        .profile-box p {
            margin: 5px 0;
        }

        .appointment-btn {
            background-color: transparent;
            border: 2px solid #DDDDDD;
            color: white;
            width: 100%;
            font-weight: bold;
            border-radius: 5px;
            padding: 8px 16px;
            cursor: pointer;
            /* transition: background-color 0.3s; */
        }

        .appointment-btn:hover {
            background-color: #008DDA;
            border: 2px solid #008DDA;
        }

        .find-worker-form > h3 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
            font-weight: 600;
        }
    </style>
    <script>
        $(document).ready(function () {
            $(".login-btn").click(function () {
                $("#main").slideDown("slow");
            });
        });
    </script>
</head>

<body class="bg-blueGray-700">
    <?php include('./navigation/links.php'); ?>
    <?php include('./navigation/vertical_navbar.php'); ?>
    <form class="find-worker-form" method="POST">

        <h3>Find Workers</h3>
        <label for="profession">Worker's Profession</label>
        <select id="profession" name="profession">
            <option value="Select">Select</option>
            <option class="bg-gray-700 " value="Developer">Developer</option>
            <option class="bg-gray-700 " value="Designer">Designer</option>
            <option class="bg-gray-700 " value="Engineer">Engineer</option>
            <option class="bg-gray-700 " value="constructionWorker">Construction Worker</option>
            <option class="bg-gray-700 " value="electrician">Electrician</option>
            <option class="bg-gray-700 " value="plumber">Plumber</option>
            <option class="bg-gray-700 " value="carpenter">Carpenter</option>
            <option class="bg-gray-700 " value="welder">Welder</option>                                                
            <option class="bg-gray-700 " value="mechanic">Mechanic</option>                                                
            <option class="bg-gray-700 " value="doctor">Doctor</option>
            <option class="bg-gray-700 " value="teacher">Teacher</option>                                                                                                                                                                                               
            <option class="bg-gray-700 " value="physical_therapist">Physical Therapist</option>
            <option class="bg-gray-700 " value="interior_designer">Interior Designer</option>
        </select>

        <label for="zip-code">Zip Code</label>
        <input type="number" id="zipcode" name="zipcode" placeholder="Enter zip code">

        <button type="submit" class="find-btn" name="find">Find</button>
    </form>
    <?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}

if (isset($_POST['find'])) {
    // Validate and sanitize inputs
    $zipcode = $_POST['zipcode'];
    $profession = $_POST['profession'];

    // Fetch data based on ZIP code and/or profession
    $q = "SELECT * FROM worker_profiles WHERE (zipcode = ? OR ? = '') AND (profession = ? OR ? = '')";

    $stmt = mysqli_prepare($con, $q);
    mysqli_stmt_bind_param($stmt, 'ssss', $zipcode, $zipcode, $profession, $profession);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    // Display fetched data
    if (mysqli_num_rows($result) > 0) {
        echo "<div id='main'>";
        echo "<h2 align='center' style='font-size:25px;'>{$profession} in ZIP Code {$zipcode}:</h2>";
        echo "<div class='profiles'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='profile-box'>";
            echo "<table>";
            echo "<tr><td><img src='./uploaded/profilepicture/{$row['profile_picture']}' alt='Profile Picture'></td></tr>";
            echo "<tr><td><p>{$row['fname']} {$row['lname']}</p></td></tr>";
            echo "<tr><td><p>Contact: {$row['contact']}</p></td></tr>";
            echo "<tr><td><p>Email: {$row['email']}</p></td></tr>";
            echo "<tr><td><p>Profession: {$row['profession']}</p></td></tr>";
            echo "<tr><td><button class='appointment-btn'><a href='Appointment.php?id={$row['id']}'>Make Appointment</a></button>"; 
            // Appointment button
            echo "</table>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
    } else {
        echo "<p align='center' class='text-xl uppercase py-2 font-bold'>No {$profession} Found for ZIP Code {$zipcode}</p>";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>


<script>

    
    /* Make dynamic date appear */
    (function () {
        if (document.getElementById("get-current-year")) {
            document.getElementById("get-current-year").innerHTML =
                new Date().getFullYear();
        }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
            element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
            placement: "bottom-start"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
    }

</script>
</body>

</html>
