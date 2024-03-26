<!-- <?php 
$con = mysqli_connect("localhost", "root", "", "payoutforwork");
if (!$con) {
    exit("Database Not Connected....!");
}
if(isset($_POST['submit_feedback']))
{
    $q="insert into feedback set
    name='".$_REQUEST['name']."',
    email='".$_REQUEST['email']."',
    message= '".$_REQUEST['message']."'";
    if(mysqli_query($con,$q))
        echo "<script>alert('Feedback Submitted Successfully...!')</script>";
    else
        die("<script>alert('Error in submitting Feedback..!')</script>");
}

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | PAYOUT FOR WORK</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .mission-vision-container {
            padding: 20px;
            border-radius: 10px;
        }

        .gallery-image {
            object-fit: cover;
            width: 100%;
            height: 300px;
            background-size: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .profile-card {
            transition: transform 0.3s ease-in-out;
        }

        .profile-card:hover {
            transform: scale(1.05);
            background-color: #27374D;
        }
    </style>
</head>

<body class=" p-10 bg-gray-900">
    <div class="container mx-auto">

    <div class="text-center mt-4">
            <a href="./LandingPage2.php" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Back to Home
            </a>
        </div>
        <h1 class="text-3xl font-bold mt-6 mb-5 uppercase text-gray-400">About Us - Payout for Work Platform</h1>


      
        <!-- Mission and Vision Container -->
        <div class="mission-vision-container mb-10 bg-gray-800">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
                <div>
                    <h2 class="text-2xl text-gray-200 font-bold mb-3">Our Mission</h2>
                    <p class="text-gray-300 text-justify">At Payout For Work, our mission is to empower individuals by providing a comprehensive online platform where workers from diverse backgrounds can showcase their skills and expertise. We aim to create a seamless and transparent environment that facilitates connections between users seeking skilled workers and talented individuals looking for employment opportunities. By prioritizing transparency, fair compensation, and efficient communication, we strive to revolutionize the way people hire and work, ultimately fostering a community of collaboration and mutual benefit.</p>
                </div>
                <div>
                    <h2 class="text-2xl text-gray-200 font-bold mb-3">Our Vision</h2>
                    <p class="text-gray-300 text-justify">Our vision is to be the leading online platform for connecting users with skilled workers across various industries. We envision a future where individuals can easily find and hire the perfect candidate for their projects, whether it's a short-term task or a long-term collaboration. By offering a user-friendly interface, robust communication tools, and a secure payment gateway, we aim to set the standard for efficiency, reliability, and fairness in the gig economy. Through constant innovation and a commitment to customer satisfaction, we aspire to become the go-to solution for individuals and businesses alike, empowering them to succeed in their endeavors.</p>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <h2 class="text-2xl font-bold mb-5 text-gray-400">Our Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-700 rounded-lg overflow-hidden shadow-md p-5 profile-card">
                <img class="w-24 h-24 rounded-full mx-auto mb-3" src="img/brijesh.jpg" alt="Brijesh Shah">
                <h3 class="text-xl text-gray-300 font-bold mb-2">Brijesh Shah</h3>
                <p class="text-gray-400">CEO</p>
            </div>
            <div class="bg-gray-700 rounded-lg overflow-hidden shadow-md p-5 profile-card">
                <img class="w-24 h-24 rounded-full mx-auto mb-3" src="img/Divyang.jpg" alt="Divyang Chaudhari">
                <h3 class="text-xl text-gray-300 font-bold mb-2">Divyang Chaudhari</h3>
                <p class="text-gray-400">CTO</p>
            </div>
            <div class="bg-gray-700 rounded-lg overflow-hidden shadow-md p-5 profile-card">
                <img class="w-24 h-24 rounded-full mx-auto mb-3" src="img/kaushik.jpg" alt="Utsav Soni">
                <h3 class="text-xl text-gray-300 font-bold mb-2">Utsav Soni</h3>
                <p class="text-gray-400">Lead Developer</p>
            </div>
        </div>


        <!-- Contact Form Section -->
        <div class=" bg-transparent mt-16 h-fit flex items-center justify-center">
            <div class="bg-gray-800 p-8 w-1/2 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4 text-gray-300">Send Us A Message</h2>
                <form method="POST" enctype="multipart/form-data" id="contactForm" class="space-y-4" action="./Mail_Service/Feedback_Mail.php">
                    <div>
                        <label for="name" class="block text-gray-400">Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full bg-transparent border-b-2 border-gray-300 h-8 shadow-sm text-gray-200 focus:border-none focus:outline-none"
                            required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-400">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full bg-transparent border-b-2 border-gray-300 h-8 shadow-sm text-gray-200 focus:border-none focus:outline-none"
                            required>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-400">Message</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full bg-transparent border-b-2 border-gray-300 shadow-sm text-gray-200 focus:border-none focus:outline-none"
                            required></textarea>
                    </div>
                    <div>
                        <button type="submit" name="submit_feedback"
                            class="w-full bg-gray-600 hover:bg-gray-700 hover:text-white uppercase text-gray-100 font-bold font-mono py-3 rounded-sm">send message</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Gallery Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-20">
            <img class="gallery-image" src="img/bg24.jpg" alt="Gallery Image">
            <img class="gallery-image" src="img/pos2.jpg" alt="Gallery Image">
            <img class="gallery-image" src="img/bg4.jpg" alt="Gallery Image">
        </div>
    </div>


    <script>
        // JavaScript code (optional)
        const profileCards = document.querySelectorAll('.profile-card');
        profileCards.forEach(card => {
            card.addEventListener('mouseover', () => {
                card.style.transform = 'scale(1.05)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'scale(1)';
            });
        });
    </script>
</body>

</html>