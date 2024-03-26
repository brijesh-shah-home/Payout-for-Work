<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="img/id-card.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/id-card.png" />
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/styles/tailwind.css" />
    <title>Contact | PAYOUT FOR WORK</title>
</head>

<body class="text-blueGray-700 antialiased">
    <main class="profile-page">
        <section class="relative block h-500-px">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="background-image: url('img/bg23.jpg');">
                <span id="blackOverlay" class="w-full h-full absolute opacity-60 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-700 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="relative py-16 bg-blueGray-700">
            <div class="container mx-auto px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-blueGray-800 w-full mb-6 shadow-xl rounded-lg -mt-64">
                    <div class="px-6">
                        <div class="text-center mt-12">
                            <h3 class="text-4xl font-semibold leading-normal  text-blueGray-300 mb-2">
                                Contact PayoutForWork
                            </h3>
                            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                                <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-300"></i>
                                Mandvi, Surat
                            </div>
                            <div class="mb-2 text-blueGray-300 mt-10">
                                <i class="fas fa-phone-alt mr-2 text-lg text-blueGray-300"></i>
                                +91 97265 01866
                            </div>
                            <div class="mb-2 text-blueGray-300">
                                <i class="far fa-envelope mr-2 text-lg text-blueGray-400"></i>
                                payoutforwork@gmail.com
                            </div>
                        </div>
                        <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-9/12 px-4">
                                    <p class="mb-4 text-lg leading-relaxed text-blueGray-300">
                                        We are a dedicated team at PayoutForWork, striving to provide the best
                                        services to our clients and users. Meet our key team members:
                                    </p>

                                    
                                    <div class="mb-4">
                                        <h4 class="text-lg font-bold text-blueGray-300">CEO: Brijesh Shah & Divyang Chaudhari</h4>
                                        <p class="text-blueGray-300">Contact: +91 9624697379 <br>Email: shahbrijesh223@gmail.com <br>Email: divyangachaudhari@gmail.com</p>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="text-lg font-bold text-blueGray-300">CFO: Kaushik Khatwani</h4>
                                        <p class="text-blueGray-300">Contact: +91 9726501866 <br>Email: khatwanikaushik111@gmail.com</p>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="text-lg font-bold text-blueGray-300">CTO: Soni Utsav</h4>
                                        <p class="text-blueGray-300">Contact: +91 9876543210 <br>Email: r4101211@gmail.com</p>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('./navigation/footer.php') ?>

    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script>
        /* Make dynamic date appear */
        (function () {
            if (document.getElementById("get-current-year")) {
                document.getElementById("get-current-year").innerHTML =
                    new Date().getFullYear();
            }
        })();
        /* Function for opening navbar on mobile */
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
