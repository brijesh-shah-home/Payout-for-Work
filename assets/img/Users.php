<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../img/rate.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../img/rate.png" />
    <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../../assets/styles/tailwind.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/styles/tailwind.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Panel</title>
    <style>
        /* Additional CSS styles for the table */
        table {
            border-collapse: separate;
            border-spacing: 0 20px; /* Add space between rows */
            width: 100%;
            margin-top: 20px; /* Add margin at the top */
            border-radius: 10px; /* Add border radius */
            overflow: hidden; /* Hide overflow content */
        }
        
        th, td {
            padding: 15px;
            text-align: left;
            background-color: #ffffff;
        }
        
        th {
            background-color: #10b981;
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
        }
        
        td {
            color: #4b5563;
            font-weight: bold;
            border-bottom: 1px solid #e2e8f0; /* Add border bottom */
        }
        
        tbody tr:last-child td {
            border-bottom: none; /* Remove border bottom for the last row */
        }
    </style>
</head>

<body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <?php include('./adminnav.php'); ?>
        <!-- Header -->
        <div class="relative bg-blue-900 md:pt-32 pb-32 pt-12">
            <!-- Boxes section -->
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap mt-4">
                    <!-- Box 1: Users -->
                    <div class="w-full md:w-1/2 xl:w-1/4 p-4 hidden" id="userdata">
                        <div class="border border-gray-200 rounded p-6 bg-white">
                            <a href="#" id="showUsers" class="text-xl font-semibold text-pink-600">Users</a>
                        </div>
                        <!-- User Information Table -->
                        <div id="userData" class="w-full md:w-1/2 xl:w-3/4 p-4">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $con = mysqli_connect("localhost", "root", "", "payoutforwork");
                                        if (!$con) {
                                            exit("Database Not Connected !");
                                        }   
                                        $q = "select * from userdata";
                                        $res = mysqli_query($con, $q);
                                        while ($row = mysqli_fetch_object($res)) { ?>
                                    <tr>
                                        <td><?php echo $row->username; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <script>
        $(document).ready(function () {
            // Show user data when "Users" link is clicked            
            $("#userdata").slideDown("slow");
        });      
    </script>
</body>

</html>
