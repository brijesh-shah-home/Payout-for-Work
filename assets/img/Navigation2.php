<html>
    <head>

    </head>
    <body>
        
    
<!-- <?php session_start(); ?> -->
<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-5 navbar-expand-lg">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
            <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                href="./LandingPage.php">Payout For Work</a><button
                class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                type="button" onclick="toggleNavbar('example-collapse-navbar')">
                <i class="text-white fas fa-bars"></i>
            </button>
        </div>
        <div class="lg:flex flex-grow items-center bg-blueGray-700 rounded-lg lg:bg-opacity-0 lg:shadow-none hidden"
            id="example-collapse-navbar">

            <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
                <li class="inline-block relative">

                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-300 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="./LandingPage2.php">
                        Home</a>
                </li>

                <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-300 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                    href="#" onclick="openDropdown(event,'demo-pages-dropdown')">
                    Services
                </a>
                <div class="hidden bg-blueGray-800 text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="demo-pages-dropdown">
                    <span
                        class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-200">
                        User
                    </span>
                    <!-- <a href="./Job_Listing.php"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:text-white text-blueGray-300">
                        View Workers
                    </a> -->
                    <a href="./Find2.php"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:text-white text-blueGray-300">
                        Search
                    </a>
                    <a href="./User_Appointment.php"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:text-white text-blueGray-300">
                        Appointment
                    </a>
                    <a href="./About.php"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:text-white text-blueGray-300">
                        About
                    </a>
                    <a href="./ContactUs.php"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:text-white text-blueGray-300">
                        Contact
                    </a>
                    <div class="h-0 mx-4 my-2 border border-solid border-blueGray-500"></div>
                    <span
                        class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-200">
                        Worker
                    </span>
                    <?php if(isset( $_SESSION['is_worker'] )) { ?>
                        <a href="./Worker_Profile2.php"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:text-white text-blueGray-300">
                        Profile
                    </a>
                    <a href="./Workers/Worker_Appointment.php"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:text-white text-blueGray-300">
                        Appointment Request
                    </a>
                   <?php } ?>
                    <a href="./auth/Worker_Login.php"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:text-white text-blueGray-300">
                        Login
                    </a>
                    <a href="./New_Worker.php"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:text-white text-blueGray-300">
                        Add Profile
                    </a>
                    <div class="h-0 mx-4 my-2 border border-solid border-blueGray-500"></div>
                    <span
                        class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-200">
                        Admin
                    </span>
                    <!-- <a href="./auth/LoginPage.php"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap hover:text-white bg-transparent text-blueGray-300">
                            Login
                        </a> -->
                    <a href="./admin/dashboard.php"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:text-white text-blueGray-300">
                            Dashboard
                        </a>
                </div>
                </li>

                <?php                   

                    // Check if a user is logged in
                    if (isset($_SESSION['user'])) {
                        // User is logged in, display "Logout" button
                ?>
                <li class="flex items-center">
                    <button
                        class="bg-transparent text-blueGray-200 border-2 hover:border-gray-400 rounded-full active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                        type="button">
                        <a href="auth/signout.php">Logout</a> <i class="fa-solid fa-right-to-bracket"></i>
                    </button>
                </li>
                <?php
                    } elseif (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true) {
                        // Admin is logged in, display "Logout" button
                    ?>
                <li class="flex items-center">
                    <button
                        class="bg-transparent text-blueGray-200 border-2 hover:border-gray-400 rounded-full active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                        type="button">
                        <a href="auth/signout.php">Logout</a> <i class="fa-solid fa-right-to-bracket"></i>
                    </button>
                </li>
                <?php
                    } elseif (isset($_SESSION['is_worker'])) {
                        // Worker is logged in, display "Logout" button
                    ?>
                <li class="flex items-center">
                    <button
                        class="bg-transparent text-blueGray-200 border-2 hover:border-gray-400 rounded-full active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                        type="button">
                        <a href="auth/signout.php">Logout</a> <i class="fa-solid fa-right-to-bracket"></i>
                    </button>
                </li>
                <?php
                    } else {
                        // No one is logged in, display "Login" button
                    ?>
                <li class="flex items-center">
                    <button
                        class="bg-transparent text-blueGray-200 border-2 hover:border-gray-400 rounded-full active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                        type="button">
                        <a href="auth/LoginPage.php">Login</a> <i class="fa-solid fa-right-to-bracket"></i>
                    </button>
                </li>
                <?php } ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
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