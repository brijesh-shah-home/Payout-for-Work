<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "payoutforwork";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get total number of users
$userQuery = "SELECT COUNT(*) AS totalUsers FROM userdata";
$userResult = $conn->query($userQuery);
$totalUsers = $userResult->fetch_assoc()["totalUsers"];

// Query to get total number of workers
$workerQuery = "SELECT COUNT(*) AS totalWorkers FROM worker_profiles";
$workerResult = $conn->query($workerQuery);
$totalWorkers = $workerResult->fetch_assoc()["totalWorkers"];

// Query to get total number of feedback
$feedbackQuery = "SELECT COUNT(*) AS totalFeedback FROM feedback";
$feedbackResult = $conn->query($feedbackQuery);
$totalFeedback = $feedbackResult->fetch_assoc()["totalFeedback"];

// Query to get total number of appointments
$appointmentQuery = "SELECT COUNT(*) AS totalAppointments FROM appointment_history";
$appointmentResult = $conn->query($appointmentQuery);
$totalAppointments = $appointmentResult->fetch_assoc()["totalAppointments"];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="../img/rate.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../img/rate.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/styles/tailwind.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Admin Panel</title>
</head>

<body class="text-blueGray-700 antialiased">
  <noscript>You need to enable JavaScript to run this app.</noscript>
  <div id="root">
    <?php include('../navigation/links.php') ?>
    <?php include('./adminnav.php'); ?>
    <!-- Header -->
    <div class="relative bg-blue-800 h-screen md:pt-32 pb-32 pt-12">
      <div class="container mx-auto mt-8">
        
        <h1 class="text-3xl font-bold mb-6 ml-3 text-white">Dashboard Overview</h1>

        <!-- Card stats -->
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div class="relative flex flex-col min-w-0 p-5 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                      Worker
                    </h5>
                    <span class="font-semibold text-xl text-blueGray-700">
                    <?php echo $totalWorkers; ?>
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                      <i class="far fa-chart-bar"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-blueGray-400 mt-4">
                  <span class="text-emerald-500 mr-2">
                    <i class="fas fa-arrow-up"></i> 3.48%
                  </span>
                  <span class="whitespace-nowrap">
                    Workers
                  </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words p-5  bg-white rounded mb-6 xl:mb-0 shadow-lg">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                      Users
                    </h5>
                    <span class="font-semibold text-xl text-blueGray-700">
                    <?php echo $totalUsers; ?>
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                      <i class="fas fa-chart-pie"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-blueGray-400 mt-4">
                  <span class="text-red-500 mr-2">
                    <i class="fas fa-arrow-down"></i> 3.48%
                  </span>
                  <span class="whitespace-nowrap"> Since last week </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div class="relative flex flex-col min-w-0 p-5  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                      Feedback
                    </h5>
                    <span class="font-semibold text-xl text-blueGray-700">
                    <?php echo $totalFeedback; ?>
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-blueGray-400 mt-4">
                  <span class="text-orange-500 mr-2">
                    <i class="fas fa-arrow-down"></i> 1.10%
                  </span>
                  <span class="whitespace-nowrap"> Since yesterday </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div class="relative flex flex-col min-w-0 p-5  break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                      Appointment
                    </h5>
                    <span class="font-semibold text-xl text-blueGray-700">
                    <?php echo $totalAppointments; ?>
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500">
                      <i class="fas fa-percent"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-blueGray-400 mt-4">
                  <span class="text-emerald-500 mr-2">
                    <i class="fas fa-arrow-up"></i> 12%
                  </span>
                  <span class="whitespace-nowrap">
                    Since last month
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>


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