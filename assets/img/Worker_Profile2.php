<?php
$con = mysqli_connect("localhost", "root", "", "payoutforwork") or die("Connetion Failed !");
// Check if ID is provided in the URL
if(isset($_GET['id'])) {
    // Sanitize the ID to prevent SQL injection
    $id = $_GET['id'];
    $id = mysqli_real_escape_string($con, $id);

    // Query to fetch data from the database
    $query = "SELECT * FROM worker_profiles WHERE id = '$id'";

    // Execute the query
    $result = mysqli_query($con, $query);

    // Check if query was successful
    if($result) {
        // Check if data exists for the given ID
        if(mysqli_num_rows($result) > 0) {
            // Fetch the data as an associative array
            $row = mysqli_fetch_assoc($result);
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../assets/img/id-card.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/id-card.png" />
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/styles/tailwind.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="bg-gray-900 h-screen">
    <div class="container mx-auto p-16">
        <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
            <div class="col-span-4 sm:col-span-3">
                <div class="bg-blueGray-700 shadow rounded-lg p-6">
                    <div class="flex flex-col items-center">
                        <img src="<?php echo './uploaded/profilepicture/'.$row['profile_picture']; ?>" class="w-36 h-36 bg-gray-300 rounded-full mb-4 shrink-0">
                        </img>
                        <h1 class="text-xl mb-3 text-gray-300 font-bold"><?php echo $row['fname'].' '.$row['lname']; ?></h1>
                        <p class="text-gray-400"><?php echo $row['profession']; ?></p>
                        
                    </div>
                    <hr class="my-6 border-t border-gray-300">
     
                    <div class="flex flex-col">
                        <span class="text-gray-300 text-sm uppercase font-bold tracking-wider mb-2">Contact</span>
                        <ul>
                            <li class="mb-4 text-gray-400"><?php echo $row['contact']; ?></li>
                        </ul>
                        
                        <span class="text-gray-300 uppercase text-sm font-bold tracking-wider mb-2">Email</span>
                        <ul>
                            <li class="mb-2 text-gray-400 break-words"><?php echo $row['email']; ?></li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-span-4 sm:col-span-9">
                <div class="bg-blueGray-700 shadow rounded-lg px-10 py-4">
                    <h2 class="text-xl text-gray-300 font-bold mb-2">Profession</h2>
                    <p class="text-gray-400">
                    <?php echo $row['profession']; ?>
                    </p>

                    <h2 class="text-md text-gray-300 font-bold mt-6 mb-4">Experience</h2>
                    <div class="mb-4">
                        <div class="flex justify-between flex-wrap gap-2 w-full">
                            <span class="text-gray-400 text-sm font-bold"><?php echo $row['experience']; ?></span>
                        </div>
                    </div>
                   

                    <h2 class="text-md text-gray-300 font-bold mt-6 mb-3">Zip Code</h2>
                    <div class="mb-4">
                        <div class="flex justify-between flex-wrap gap-2 w-full">
                            <span class="text-gray-400 text-sm font-bold"><?php echo $row['zipcode']; ?></span>
                        </div>
                    </div>

                    <h2 class="text-md text-gray-300 font-bold mt-6 mb-3">Address</h2>
                    <div class="mb-4">
                        <div class="flex justify-between flex-wrap gap-2 w-full">
                            <span class="text-gray-400 text-sm font-bold"><?php echo $row['address']; ?></span>
                        </div>
                    </div>

                    <h2 class="text-md text-gray-300 font-bold mt-6 mb-3">City</h2>
                    <div class="mb-4">
                        <div class="flex justify-between flex-wrap gap-2 w-full">
                            <span class="text-gray-400 text-sm font-bold"><?php echo $row['city']; ?> </span>
                        </div>
                    </div>

                    <h2 class="text-md text-gray-300 font-bold mt-6 mb-3">Country</h2>
                    <div class="mb-4">
                        <div class="flex justify-between flex-wrap gap-2 w-full">
                            <span class="text-gray-400 text-sm font-bold">India</span>
                        </div>
                    </div>


                </div>
                
            </div>

           
        </div>
    </div>
</div>
</body>
</html>
<?php
        } else {
            // No data found for the given ID
            echo "No data found for the provided ID.";
        }
    } else {
        // Query execution failed
        echo "Error: " . mysqli_error($con);
    }

    // Free the result set
    mysqli_free_result($result);

    // Close the database connection
    mysqli_close($con);
} else {
    // ID is not provided in the URL
    echo "ID is not provided in the URL.";
}
?>