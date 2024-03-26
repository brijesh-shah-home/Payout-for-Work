<?php
$con=mysqli_connect("localhost","root","","payoutforwork"); 
// Check connection
if(isset($_REQUEST['send']))
{
    $q="insert into join_us set 
    name='".$_REQUEST['name']."',
    email='".$_REQUEST['email']."',
    description='".$_REQUEST['message']."'";
    mysqli_query($con,$q);    
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../img/rate.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../img/rate.png" />
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/styles/tailwind.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PAYOUT FOR WORK</title>
    <style>
        .img-pro{
            border-radius: 5px 20px 5px;
        }
    </style>
</head>

<body class="text-blueGray-700 antialiased">   
    <?php include('./Navigation2.php'); ?> 
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('img/bg1.jpg');
          ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-bold mb-2 text-3xl">
                                Crafting Careers, Building Futures</h1>

                            <h3 class="text-white font-semibold text-2xl">Explore the World of Opportunities.</h3>

                            <p class="mt-4 text-base text-blueGray-200">
                                From Passion to Profession - Where Your Skills Make the Difference.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-800 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-20 bg-blueGray-800 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-blueGray-600 w-full mb-8 shadow-lg rounded-lg hover:-mt-4     ease-linear transition-all duration-150 img-pro">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400 ">
                                    <i class="fa-solid fa-globe"></i>
                                </div>
                                <h6 class="text-xl text-white font-semibold">Online Platform</h6>
                                <p class="mt-2 mb-4 text-blueGray-300">
                                    Where talent meets opportunity - revolutionizing the way we hire and work.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-blueGray-600 w-full mb-8 shadow-lg rounded-lg hover:-mt-4     ease-linear transition-all duration-150 img-pro">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                                    <!-- <i class="fas fa-retweet"></i>
                                    <i class="fa-solid fa-globe"></i>
                                     -->
                                     
                                     <i class="bi bi-people-fill"></i>
                                </div>
                                <h6 class="text-xl text-white font-semibold">Skilled Workers</h6>
                                <p class="mt-2 mb-4 text-blueGray-300">
                                    Where expertise meets demand - transforming the way we find and hire skilled
                                    professionals.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-blueGray-600 w-full mb-8 shadow-lg rounded-lg hover:-mt-4     ease-linear transition-all duration-150 img-pro">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                                    <!-- <i class="fas fa-fingerprint"></i> -->
                                    <!-- <i class="bi bi-app-indicator"></i> -->
                                    <i class="fa-solid fa-address-card"></i>
                                </div>
                                <h6 class="text-xl text-white font-semibold">Availability Display</h6>
                                <p class="mt-2 mb-4 text-blueGray-300">
                                    Empowering workers to showcase their skills, enabling users to find the perfect fit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center mt-32">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <div
                            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <i class="fas fa-user-friends text-xl"></i>
                        </div>
                        <h3 class="text-2xl mb-2 font-semibold text-blueGray-300 leading-normal">
                            More Than a Job, It's a Journey - Your Career, Your Adventure.
                        </h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-400">

                            Welcome to our online platform! We connect users with skilled professionals for various
                            projects. Browse profiles, communicate seamlessly, and securely pay for services. Say
                            goodbye to hiring hassles and hello to convenience!
                        </p>
                       
                        <a href="./LandingPage.php" class="font-bold text-blueGray-400 mt-8 hover:text-blue-500">Hire Now!</a>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-lightBlue-600">
                            <img alt="..." src="img/pos1.jpg" class="w-full align-middle rounded-t-lg " />
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                    class="absolute left-0 w-full block h-95-px -top-94-px">
                                    <!-- <polygon points="-30,95 583,95 583,65" class="fill-current bg-lightBlue-500"></polygon> -->
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Top Services
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                The Platform aims to streamline the process of connecting users with skilled workers, providing a convenient and efficient solution for fulfilling various tasks and projects.
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" src="img/pos3.jpg" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12 text-justify">
                           
                            <h3 class="text-2xl text-justify font-semibold">Elevate Your Work Experience - Discover Jobs Tailored to
                                Your Skills.</h3>
                            <p class="mt-4 text-lg leading-relaxed text-justify text-blueGray-500">
                            Welcome to our online platform, where finding skilled workers for your projects is made effortless. Our website serves as a comprehensive hub where users like you can connect with talented professionals from various fields. Whether you're looking for a web developer, graphic designer, writer, or any other skilled worker, you'll find them here.
                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-2 px-3 uppercase rounded-full text-blue-600 bg-blue-200 mr-3">
                                                <i class="fa-solid fa-address-book"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-blueGray-500">Comprehensive Profiles
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-2 px-3 uppercase rounded-full text-blue-600 bg-blue-200 mr-3">
                                                <i class="fa-solid fa-pen-nib"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-blueGray-500">Enhanced User Experience</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-2 px-3 uppercase rounded-full text-blue-600 bg-blue-200 mr-3">
                                                <i class="fa-solid fa-briefcase"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-blueGray-500">Diverse Range of Services</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-20 pb-48">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-24">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold">Here are our heroes</h2>
                        <p class="text-lg leading-relaxed m-4 text-blueGray-500">
                        Responsible for overseeing the development and execution of the platform, ensuring timely delivery of features and functionalities, and coordinating the efforts of the development team.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="img/Divyang.jpg" 
                                class="shadow-2xl  rounded-full mx-auto max-w-120-px" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Divyang Chaudhari</h5>
                                <p class="mt-1 text-sm text-blueGray-400 uppercase font-semibold">
                                    Web Developer
                                </p>
                            
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 ">
                        <div class="px-6">
                            <img alt="..." src="img/kaushik.jpg" class="shadow-2xl rounded-full mx-auto max-w-120-px" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Kaushik Khatwani</h5>
                                <p class="mt-1 text-sm text-blueGray-400 uppercase font-semibold">
                                    Marketing Specialist
                                </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 ">
                        <div class="px-6">
                            <img alt="..." src="img/brijesh.jpg" class="shadow-2xl rounded-full mx-auto max-w-120-px" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Brijesh Shah</h5>
                                <p class="mt-1 text-sm text-blueGray-400 uppercase font-semibold">
                                    UI/UX Designer
                                </p>
                               
                            </div>
                        </div>
                    </div>  
                    
                    
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 ">
                        <div class="px-6">
                            <img alt="..." src="img/user.png" class="shadow-2xl rounded-full mx-auto max-w-120-px" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Brijesh & Divyang</h5>
                                <p class="mt-1 text-sm text-blueGray-400 uppercase font-semibold">
                                    Founder and CEO
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-20 relative block bg-blueGray-800">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-800 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-9/12 px-4">
                        <h2 class="text-4xl font-semibold text-blueGray-200">Build Something</h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-blueGray-400">
                        To connect with workers on the platform, users can sign up/login and browse through worker profiles using the search functionality. Once a suitable worker is found, users can contact them directly to discuss project details. To hire a worker, users fill out a detailed form specifying the project scope, timeline, and budget. After confirming the hiring decision, users make payments securely through the platform's payment gateway upon project completion.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap mt-12 justify-center">
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div
                            class="text-blueGray-800 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                            <i class="fas fa-medal text-xl text-orange-500"></i>
                        </div>
                        <h6 class="text-xl mt-5 font-semibold text-white">
                            Excellent Services
                        </h6>
                        <p class="mt-2 mb-4 text-blueGray-400">
                        Seamless connections, endless possibilities - welcome to the future of hiring.
                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div
                            class="text-blueGray-800 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                            <i class="fas fa-poll text-xl text-blue-500"></i>
                        </div>
                        <h5 class="text-xl mt-5 font-semibold text-white">
                            Grow your market
                        </h5>
                        <p class="mt-2 mb-4 text-blueGray-400">
                        Effortless connections, exceptional results - experience the future of online hiring.
                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div
                            class="text-blueGray-800 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                            <!-- <i class="fas fa-lightbulb text-xl"></i> -->
                            <i class="fa-solid fa-rocket text-purple-600"></i>
                        </div>
                        <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
                        <p class="mt-2 mb-4 text-blueGray-400">
                        Unlocking the potential of skilled professionals, one hire at a time.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative block py-24 lg:pt-0 bg-blueGray-800">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                    <div class="w-full lg:w-6/12 px-4">
                        <form method="POST" id="sendEmailForm" enctype="multipart/form-data" action="./Mail_Service/Contact_Mail.php">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-700">
                            <div class="flex-auto p-5 lg:p-10">
                                <h4 class="text-2xl text-blueGray-300 font-semibold">Want to work with us?</h4>
                                <p class="leading-relaxed mt-1 mb-4 text-blueGray-400">
                                    Complete this form and we will get back to you in 24 hours.
                                </p>
                                <div class="relative w-full mb-3 mt-8">
                                    <label class="block uppercase text-blueGray-400 text-xs font-bold mb-2"
                                        for="full-name">Full Name</label><input type="text" name="name"
                                        class="px-3 py-3 text-blueGray-700 bg-gray-200 border-0 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Full Name" required/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-400 text-xs font-bold mb-2"
                                        for="email">Email</label>
                                        <input type="email" name="email"
                                        class="px-3 py-3 text-blueGray-700 bg-gray-200 border-0  rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Email" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-400 text-xs font-bold mb-2"
                                        for="message">Message</label>
                                        <textarea rows="4" cols="80" name="message"
                                        class="px-3 py-3 placeholder-blueGray-700 text-blueGray-700 bg-gray-200 border-0  rounded text-sm shadow focus:outline-none focus:ring w-full"
                                        placeholder="Type a message..." required></textarea>
                                </div>
                                <div class="text-center mt-6">
                                    <input type="submit" value="Send Message" id="submit" name="send"
                                        class="bg-blueGray-800 w-full text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        required>     
                                    
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('./navigation/footer.php'); ?>

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