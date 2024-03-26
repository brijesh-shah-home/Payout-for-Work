<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}

if (isset($_POST['loginbtn'])) {
    $username = $_REQUEST['email']; // No need to use LIKE for exact match
    $password = $_REQUEST['password'];

    $query = "SELECT email, password FROM userdata WHERE email='$username' AND password='$password'";
    $result = mysqli_query($con, $query) or die("Query failed");
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['email']; // Set session variable
        $_SESSION['login_time'] = time(); // Store login time
        header("Location: ../LandingPage2.php");
        exit();
    }
    if ($username === "admin@gmail.com" && $password === "12345") {
      // Set session variable to indicate the user is logged in as an admin
      $_SESSION['is_admin'] = true;
      // Redirect to admin page
      header("Location: ../LandingPage2.php");
      exit;
    }
    else {
        echo "<script>alert('Username and Password are Incorrect')</script>";
    }
}

// Check if the user is logged in and session duration has not exceeded 15 minutes
if (isset($_SESSION['login_time']) && time() - $_SESSION['login_time'] > 900) {
    // 900 seconds = 15 minutes
    // Destroy the session and log the user out
    session_unset();
    session_destroy();
    header("Location: ../LandingPage2.php"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="../img/id-card.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="../img/id-card.png" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../../assets/styles/tailwind.css" />
  <title>Login | PAYOUT FOR WORK</title>
</head>

<body class="text-blueGray-700 antialiased">
  <main>
    <section class="relative w-full h-full py-40 min-h-screen">
      <div class="absolute top-0 w-full h-full bg-blueGray-800 bg-full bg-no-repeat"
        style="background-image: url(../../assets/img/register_bg_2.png)"></div>
      <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
          <div class="w-full lg:w-4/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-700 border-0">
              <div class="rounded-t mb-0 px-6 py-6">
                <div class="text-center mb-3">
                  <h6 class="text-blueGray-200 text-base font-bold">
                    Sign in with
                  </h6>
                </div>
            
                <hr class="mt-6 border-b-1 border-blueGray-200" />
              </div>
              <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
               
                <form method="POST" enctype="multipart/form-data">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                      for="grid-password">Email</label><input type="email" id="username" name="email"
                      class="border-0 px-3 py-3 placeholder-blueGray-400 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Email" required/>
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                      for="grid-password">Password</label><input type="password" id="password" name="password"
                      class="border-0 px-3 py-3 placeholder-blueGray-400 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Password" required/>
                  </div>
                  <div>
                    <label class="inline-flex items-center cursor-pointer"><a href="./Forgot.php"><span
                        class="text-sm font-semibold text-blueGray-400 hover:text-blueGray-300">Forget Password ?</span></a>                        
                      </label>                        
                  </div>
                  
                  <div class="text-center mt-4">
              
                    
                    <input type="submit" value="Sign In" name="loginbtn"
                      class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">
                  </div>                                                      
                </form>
                <div class="text-center mt-2">    
                    <a href="./register.php">
                    <input type="submit" value="Create New Account" name="newaccount"
                      class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"></a>                
                  </div>
              </div>
              
            </div>           
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
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

</html>