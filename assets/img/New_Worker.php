<?php
$con=mysqli_connect("localhost","root","","payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}
if(isset($_POST['submit']))
    {
        $q="insert into worker_profiles set
        profile_picture='".$_FILES['profilepicture']['name']."',
        email='".$_REQUEST['email']."', 
        fname='".$_REQUEST['fname']."',  
        lname='".$_REQUEST['lname']."',         
        contact='".$_REQUEST['number']."', 
        address='".$_REQUEST['address']."',         
        city='".$_REQUEST['city']."',         
        country='".$_REQUEST['country']."',         
        zipcode='".$_REQUEST['zipcode']."', 
        profession='".$_REQUEST['profession']."',                  
        experience='".$_REQUEST['experience']."'";               
        mysqli_query($con,$q);
        move_uploaded_file($_FILES['profilepicture']['tmp_name'],"./uploaded/profilepicture/".$_FILES['profilepicture']['name']);
        echo "<script>alert('You Profile Generated Succesfully');</script>";
    }
    header('LandingPage2.php');

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../assets/img/id-card.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../pages/img/id-card.png" />
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/styles/tailwind.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> NEW WORKER | PAYOUT FOR WORK</title>
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
}
  </style>
</head>

<body class="text-blueGray-700 antialiased">
    <?php include('./navigation/nav2.php'); ?>
    <div id="root">
        <?php include("./navigation/vertical_navbar.php") ?>
        <div class="relative md:ml-64 bg-blueGray-600">
            <!-- Header -->
            <div class="relative bg-blueGray-700 md:pt-32 pb-32 pt-12">

            </div>
            <div class="px-4 md:px-10 mx-auto w-full -m-24">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-8/12 px-4">
                        <form method="POST" enctype="multipart/form-data">
                            <div
                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-800 border-0 demo">
                                <div class="rounded-t bg-blueGray-800 mb-0 px-6 py-6">
                                    <div class="text-center flex justify-between">
                                        <h6 class="text-blueGray-200 mt-2 text-xl font-bold">
                                            <i class="fa-solid fa-user-plus"></i>
                                            Add Worker's Profile
                                        </h6>

                                        <input type="submit" name="submit"
                                            class=" bg-lightBlue-500 text-white active:bg-lightBlue-900 hover:bg-orange-500  font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                            value="SUBMIT">

                                    </div>
                                </div>
                                <hr class="mt-2 border-b-1 mb-2 border-blueGray-300" />
                                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                        Worker Information
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Profile Picture
                                                </label>
                                                <input type="file" name="profilepicture"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent 
                                                    rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Email address
                                                </label>
                                                <input type="email" name="email"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 bg-transparent text-blueGray-200  rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    placeholder="yourname@example.com" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    First Name
                                                </label>
                                                <input type="text" name="fname"
                                                    class="border-2 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent border-gray-400 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    placeholder="Yourname" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Last Name
                                                </label>
                                                <input type="text" name="lname"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    placeholder="Surname" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Contact
                                                </label>
                                                <input type="number" name="number"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    placeholder="Number +91 " />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                for="Gender">
                                                Gender
                                            </label>
                                            <select id="gender" name="gender"
                                                class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">                                                
                                                <option class="bg-gray-700" value="Male">Male
                                                </option>
                                                <option class="bg-gray-700" value="Female">Female</option>
                                                <option class="bg-gray-700" value="Other">Other</option>                                                
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mt-6 border-b-1 border-blueGray-300" />

                                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                        Contact Information
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-12/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Address
                                                </label>
                                                <input type="text" name="address"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    placeholder="Enter permanent address" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    City
                                                </label>
                                                <input type="text" name="city"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    placeholder="Surat" />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Country
                                                </label>
                                                <input type="text" name="country"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    value="India" readonly/>
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Postal Code
                                                </label>
                                                <input type="number"  name="zipcode"
                                                    class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    placeholder="123456" />
                                            </div>

                                        </div>

                                        <div class="w-full lg:w-6/12 px-4">
                                            <!-- Profession select control -->
                                            <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                for="profession">
                                                Profession
                                            </label>
                                            <select id="profession" name="profession"
                                                class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                <option value="" disabled selected name="profession">Select profession
                                                </option>
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
                                                
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <!-- Work Experience select control -->
                                            <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                for="work-experience">
                                                Work Experience
                                            </label>
                                            <select id="work-experience" name="experience"
                                                class="border-2 border-gray-400 px-3 py-3 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                <option class="bg-gray-700" value="" disabled selected>Select work
                                                    experience</option>
                                                <option class="bg-gray-700" value="Less than 1 year">Less than 1 year
                                                </option>
                                                <option class="bg-gray-700" value="1-3 years">1-3 years</option>
                                                <option class="bg-gray-700" value="3-5 years">3-5 years</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>                                        
                                    </div>
                                    
                                    <!-- <hr class="mt-6 border-b-1 border-blueGray-300" />

                                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                        About Me
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-12/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Description
                                                </label>
                                                <textarea type="text" name="worker_details"
                                                    class="border-2 border-gray-400 px-1 py-2 placeholder-blueGray-300 text-blueGray-200 bg-transparent rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    rows="3">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-blueGray-800 w-full mb-6 shadow-xl rounded-lg mt-16">
                            <div class="px-6">
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full px-4 flex justify-center">
                                        <div class="relative">
                                            <img alt="..." src="../pages/img/pay2.jpg"
                                                class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px" />
                                        </div>
                                    </div>
                                    <div class="w-full px-4 text-center mt-20">
                                        <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                            <div class="mr-4 p-3 text-center">
                                                <span
                                                    class="text-xl font-bold block uppercase tracking-wide text-blueGray-400">
                                                    122
                                                </span>
                                                <span class="text-sm text-blueGray-400">Workers</span>
                                            </div>
                                            <div class="mr-4 p-3 text-center">
                                                <span
                                                    class="text-xl font-bold block uppercase tracking-wide text-blueGray-400">
                                                    61
                                                </span>
                                                <span class="text-sm text-blueGray-400">Users</span>
                                            </div>
                                            <div class="lg:mr-4 p-3 text-center">
                                                <span
                                                    class="text-xl font-bold block uppercase tracking-wide text-blueGray-400">
                                                    91
                                                </span>
                                                <span class="text-sm text-blueGray-400">Reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-12">
                                    <h3 class="text-xl font-semibold uppercase leading-normal text-blueGray-300 mb-2">
                                        Payout For Work
                                    </h3>
                                    <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                                        <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                        Bardoli, Gujarat
                                    </div>
                                    <div class="mb-2 text-blueGray-300 mt-10">

                                        <i class="fa-solid fa-user-tie mr-2 text-lg text-blueGray-400"></i>
                                        Brijesh Shah
                                    </div>
                                    <div class="mb-2 text-blueGray-300">
                                        <i class="fa-solid fa-user mr-2 text-lg text-blueGray-400"></i>

                                        Divyang Chaudhari
                                    </div>
                                </div>
                                <div class="mt-10 py-10 border-t border-blueGray-200 text-center">

                                </div>
                            </div>
                        </div>
                    </div>
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
    </script>
</body>

</html>