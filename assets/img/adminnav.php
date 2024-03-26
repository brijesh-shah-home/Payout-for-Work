<?php session_start(); ?>

<head>

<link rel="shortcut icon" href="img/id-card.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/id-card.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="../../assets/styles/tailwind.css" />
</head>
<nav
  class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-gray-800 flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
  <div
    class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
    <button
      class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-gray-300 rounded border border-solid border-transparent"
      type="button" onclick="toggleNavbar('example-collapse-sidebar')">
      <i class="fas fa-bars"></i>
    </button>
    <a class="md:block text-left md:pb-2 text-gray-300  mr-0 inline-block whitespace-nowrap text-lg uppercase font-bold p-4 px-0"
      href="../LandingPage2.php">
      Payout For Work
    </a>
    <ul class="md:hidden items-center flex flex-wrap list-none">
      <li class="inline-block relative">
        <a class="text-blueGray-500 block py-1 px-3" href="#pablo"
          onclick="openDropdown(event,'notification-dropdown')"></a>
        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
          id="notification-dropdown">
          <a href="#pablo"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
            href="#pablo"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
            action</a><a href="#pablo"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
            else here</a>
          <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
          <a href="#pablo"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
            link</a>
        </div>
      </li>
      <li class="inline-block relative">
        <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-responsive-dropdown')">
          <div class="items-center flex">
            <span
              class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
              <img
                alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                src="../img/user.png" /></span>
          </div>
        </a>
        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
          id="user-responsive-dropdown">
          <a href="./dashboard.php"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Login</a><a
            href="./Workers.php"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Workers
            </a><a href="./Users.php"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Users
            </a>
          <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
          <a href="./LandingPage2.php"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Log out
            </a>
        </div>
      </li>
    </ul>
    <div
      class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 bg-gray-800 p-5 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
      id="example-collapse-sidebar">
      <!-- <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
        <div class="flex flex-wrap">
          <div class="w-6/12">
            <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
              href="../../index.html">
              Notus Tailwind JS
            </a>
          </div>
          <div class="w-6/12 flex justify-end">
            <button type="button"
              class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
              onclick="toggleNavbar('example-collapse-sidebar')">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
      </div> -->
      <!-- <form class="mt-6 mb-4 md:hidden">
        <div class="mb-3 pt-0">
          <input type="text" placeholder="Search"
            class="border-0 px-3 py-2 h-12 border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
        </div>
      </form> -->
      <!-- Divider -->
      <hr class="my-4 md:min-w-full" />
      <!-- Heading -->
      <h6 class="md:min-w-full text-blueGray-400 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
        Admin 
      </h6>
      <!-- Navigation -->

      <ul class="md:flex-col md:min-w-full flex flex-col list-none">
        <li class="items-center">
          <a href="./dashboard.php" class="text-xs uppercase py-3 font-bold block text-blue-500 hover:text-blue-700">
            <i class="fas fa-tv mr-2 text-sm text-blue-600 opacity-75"></i>
            Dashboard
          </a>
        </li>
        <!-- <li class="items-center">
          <a href="./Worker_Approvel.php" id="workerdata"
            class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
            <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
            Join Requests
          </a>
        </li> -->
        <!-- <li class="items-center">
          <a href="./tables.php" id="userdata"
            class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
            <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
            Tables
          </a>
        </li>         -->
        <li class="items-center">
          <a href="./Users.php" id="workerdata"
            class="text-xs uppercase py-3 font-bold block text-gray-300 hover:text-blueGray-500">
            <i class="fas fa-table mr-2 text-sm text-gray-400"></i>
            User
          </a>
        </li>
        <li class="items-center">
          <a href="./Workers.php" id="workerdata"
            class="text-xs uppercase py-3 font-bold block text-gray-300 hover:text-blueGray-500">
            <i class="fas fa-table mr-2 text-sm text-gray-400"></i>
            Worker
          </a>
        </li>
        <li class="items-center">
          <a href="./Feedback.php" id="feedbackdata"
            class="text-xs uppercase py-3 font-bold block text-gray-300 hover:text-blueGray-500">
            <i class="fas fa-table mr-2 text-sm text-gray-300"></i>
            Feedback
          </a>
        </li>
        <li class="items-center">
          <a href="./Appointment_table.php"
            class="text-xs uppercase py-3 font-bold block text-gray-300 hover:text-blueGray-500">
            <i class="fas fa-table mr-2 text-sm text-gray-300"></i>
            Appointments Data
          </a>
        </li>

      </ul>

      <!-- Divider -->
      <hr class="my-4 md:min-w-full" />
      <!-- Heading -->
      <h6 class="md:min-w-full text-gray-400 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
        Authantication Pages
      </h6>
      <!-- Navigation -->

      <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
        <li class="items-center">
          <?php             
// Check if user is logged in
if (isset($_SESSION['user'])) {  ?>
          <a href="../auth/signout.php"
              class="text-gray-300 hover:text-gray-300 text-xs uppercase py-3 font-bold block">
              <i class="fas fa-fingerprint text-gray-300 mr-2 text-sm"></i>
              Logout
            </a>
            <?php } else { ?>
            <a href="../auth/login.php"
              class="text-gray-300 hover:text-gray-300 text-xs uppercase py-3 font-bold block">
              <i class="fas fa-fingerprint text-gray-300 mr-2 text-sm"></i>
              Login
            </a>
            <?php
             } 
          ?>

        </li>

        <li class="items-center">

          <a href="../auth/register.php"
            class="text-gray-300 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block">
            <i class="fas fa-clipboard-list text-gray-300 mr-2 text-sm"></i>
            Register
          </a>
        </li>
      </ul>


    </div>
  </div>
</nav>
<div class="relative md:ml-64 bg-blueGray-50">
  <!-- <nav
    class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
    <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
      <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="./index.html">Dashboard</a>
      <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
        <div class="relative flex w-full flex-wrap items-stretch">
          <span
            class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i
              class="fas fa-search"></i></span>
          <input type="text" placeholder="Search here..."
            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10" />
        </div>
      </form>
      <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
        <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
          <div class="items-center flex">
            <span
              class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                src="../../assets/img/team-1-800x800.jpg" /></span>
          </div>
        </a>
        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
          id="user-dropdown">
          <a href="#pablo"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
            href="#pablo"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
            action</a><a href="#pablo"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
            else here</a>
          <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
          <a href="#pablo"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
            link</a>
        </div>
      </ul>
    </div>
  </nav> -->