<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../assets/img/id-card.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/id-card.png" />
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/styles/tailwind.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title> SERVICES | PAYOUT FOR WORK</title>
    <style>
        /* Additional styles */
        .worker-card {
            transition: transform 0.3s ease;
        }

        .worker-card:hover {
            transform: translateY(-5px);
        }

        .worker-card button {
            transition: opacity 0.3s ease;
        }

        .worker-card:hover button {
            opacity: 1;
        }

        .worker-card button {
            opacity: 0;
        }
    </style>
</head>

<body class="text-blueGray-700 antialiased">
  
    <div id="root">
    <?php include("./navigation/vertical_navbar.php") ?>    
        <div class="relative md:ml-64 bg-blueGray-600">
            <nav
                class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4 ">
                    <a class="text-white text-xl uppercase hidden lg:inline-block font-semibold"
                        href="./Landing.php">Dashboard</a>
                    <!-- <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
                        <div class="relative flex w-full flex-wrap items-stretch">
                            <span
                                class="z-10 h-full leading-snug font-normal  text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i
                                    class="fas fa-search"></i></span>
                            <input type="text" placeholder="Search here..."
                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 relative bg-blueGray-800 rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10" />
                        </div>
                    </form> -->
                    <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                        <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
                            <div class="items-center flex">
                               
                            </div>
                        </a>


                        <div class="hidden bg-blueGray-800 text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                            id="user-dropdown">
                            <a href="auth/login.php"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-300">Login</a>
                            <a href="#"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-300">Help
                            </a>
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a href="./LandingPage.php"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-200">Log
                                out</a>
                        </div>
                    </ul>
                </div>
            </nav>


            <!-- Header -->
            <div class="relative bg-blueGray-700 md:pt-32 pb-32 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">

                </div>
            </div>


            <div class="px-4 md:px-10 mx-auto w-full -m-24">
                <div class="flex flex-wrap w-full ">
                    <div class="w-full lg:w-full px-4">

                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-800 border-0">
                            <div class="container mx-auto p-6">
                                <h1 class="text-3xl text-gray-300 font-bold mb-6">Meet Our Workers</h1>
                                <div id="workersGrid"
                                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                                    <!-- Worker cards will be dynamically added here -->
                                </div>
                            </div>

                            <!-- Worker card template (hidden) -->
                            <template id="workerCardTemplate">
                                <div
                                    class="worker-card bg-gray-700 rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform hover:shadow-lg">
                                    <img src="worker_profile_image.jpg" alt="Worker Profile"
                                        class="w-full h-48 object-cover">
                                    <div class="p-4">
                                        <h2 class="text-xl font-semibold mb-2">Worker Name</h2>
                                        <p class="text-gray-200">Occupation</p>
                                        <p class="text-gray-200 mb-2">Experience: 5 years</p>
                                        <p class="text-gray-200 mb-2">Job Description: Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Phasellus ut tellus auctor, rhoncus metus vel,
                                            dictum urna.</p>
                                        <button
                                            class="bg-blue-700 text-white w-full px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none">Contact</button>
                                    </div>
                                </div>
                            </template>


                        </div>
                    </div>
                </div>

                <footer class="block py-7">
                    <div class="container mx-auto px-4">
                        <hr class="mb-4 border-b-1 border-blueGray-200" />
                        <div class="flex flex-wrap items-center md:justify-between justify-center">
                            <div class="w-full md:w-4/12 px-4">
                                <div class="text-sm text-blueGray-300 font-semibold py-1 text-center md:text-left">
                                    Copyright © <span id="get-current-year"></span>
                                    <a href="#"
                                        class="text-blueGray-300 hover:text-blue-400 text-sm font-semibold py-1">
                                        Payout For Work
                                    </a>
                                </div>
                            </div>
                            <div class="w-full md:w-8/12 px-4">
                                <ul class="flex flex-wrap list-none md:justify-end justify-center">
                                    <li>
                                        <a href="./LandingPage.php"
                                            class="text-blueGray-300 hover:text-blueGray-500 text-sm font-semibold block py-1 px-3">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href=""
                                            class="text-blueGray-300 hover:text-blueGray-500 text-sm font-semibold block py-1 px-3">
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a href=""
                                            class="text-blueGray-300 hover:text-blueGray-500 text-sm font-semibold block py-1 px-3">
                                            Contact
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-blueGray-300 hover:text-blueGray-500 text-sm font-semibold block py-1 px-3">
                                            Help
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
    </div>
    </div>



    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
        /* Make dynamic date appear */
        (function () {
            if (document.getElementById("get-current-year")) {
                document.getElementById("get-current-year").innerHTML =
                    new Date().getFullYear();
            }
        })();
        /* Sidebar - Side navigation menu on mobile/responsive mode */
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-blueGray-800");

            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
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


        // Aa Js Code Remove Kari ne Php thi Data fetch karine ne Print kari deje
        // Sample data for workers (can be fetched from a backend)
        const workers = [
            { name: "Ajay Kumawat", occupation: "Electrician", experience: "5 years", description: "Lorem ipsum dolor sit amet, consectetur adipiscing us vel, " },
            { name: "Yash Mahajan", occupation: "Plumber", experience: "3 years", description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. " },
            { name: "Kamlesh Kumawat", occupation: "Mechanic", experience: "7 years", description: "Loremur llus ut tellus auctor, rhoncus metus vel, dictum urna." },
            { name: "Divyang Chaudhari", occupation: "Teacher", experience: "6 years", description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ." },
            { name: "Brijesh Shah", occupation: "Designer", experience: "6 years", description: "Lorem ipsum dolor sit amet, consectetur arhoncus metus vel," },
            { name: "Kaushik Khatwani", occupation: "Investor", experience: "6 years", description: "Lorem ipsum dolor sit amet, consectetur r, rhoncus metus vel," },
            { name: "Utsav Soni", occupation: "Gamer", experience: "6 years", description: "Lorem Phasellus ut or, rhoncus metus vel, dictum urna." }

            // Add more worker objects as needed
        ];

        // Function to dynamically render worker cards
        function renderWorkers() {
            const workerCardTemplate = document.getElementById("workerCardTemplate");
            const workersGrid = document.getElementById("workersGrid");

            workers.forEach(worker => {
                const workerCard = workerCardTemplate.content.cloneNode(true);
                workerCard.querySelector(".worker-card img").setAttribute("src", `worker_profile_${Math.floor(Math.random() * 5) + 1}.jpg`);
                workerCard.querySelector(".worker-card h2").textContent = worker.name;
                workerCard.querySelector(".worker-card p:nth-of-type(1)").textContent = worker.occupation;
                workerCard.querySelector(".worker-card p:nth-of-type(2)").textContent = `Experience: ${worker.experience}`;
                workerCard.querySelector(".worker-card p:nth-of-type(3)").textContent = `Job Description: ${worker.description}`;
                workersGrid.appendChild(workerCard);
            });
        }

        // Call the renderWorkers function when the page loads
        document.addEventListener("DOMContentLoaded", renderWorkers);

    </script>
</body>

</html>