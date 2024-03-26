<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="../img/id-card.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="../img/id-card.png" />
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../../assets/styles/tailwind.css" />
  <title>Signup | Payout For Work</title>
</head>

<body class="text-blueGray-700 antialiased">
<?php // include('../navigation/navbar.php'); ?>   
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
                    Sign Up with
                  </h6>
                </div>
              
                <hr class="mt-6 border-b-1 border-blueGray-300" />
              </div>
              <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
               
                <form>

                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                      for="grid-password">Full name</label><input type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Full name" />
                  </div>

                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                      for="grid-password">Email</label><input type="email"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Email" />
                  </div>

                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                      for="grid-password">Password</label><input type="password"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Password" />
                  </div>

                  <div>
                    <label class="inline-flex items-center cursor-pointer"><input id="customCheckLogin" type="checkbox"
                        class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-4 h-4 ease-linear transition-all duration-150" /><span
                        class="ml-2 text-sm font-semibold text-blueGray-400">Remember me</span></label>
                  </div>
                  <div class="text-center mt-6">
                    <button
                      class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                      type="button">
                      Sign Up
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="flex flex-wrap mt-6">
              <div class="w-1/2">
                <a href="#pablo" class="text-blueGray-200"><small>Forgot password?</small></a>
              </div>
              <div class="w-1/2 text-right">
                <a href="./register.html" class="text-blueGray-200"><small>Create new account</small></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="absolute w-full bottom-0 bg-blueGray-800 pb-6">
        <div class="container mx-auto px-4">
          <hr class="mb-6 border-b-1 border-blueGray-600" />
          <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4">
              <div class="text-sm text-white font-semibold py-1 text-center md:text-left">
                Copyright © <span id="get-current-year"></span>
                <a href="https://www.creative-tim.com?ref=njs-login"
                  class="text-white hover:text-blueGray-300 text-sm font-semibold py-1">Payout For Work</a>
              </div>
            </div>
            <div class="w-full md:w-8/12 px-4">
              <ul class="flex flex-wrap list-none md:justify-end justify-center">
                <li>
                  <a href="https://www.creative-tim.com?ref=njs-login"
                    class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3">Services</a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/presentation?ref=njs-login"
                    class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3">About Us</a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com?ref=njs-login"
                    class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3">Contact</a>
                </li>
                <li>
                  <a href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-login"
                    class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3">Terms & Conditions</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
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