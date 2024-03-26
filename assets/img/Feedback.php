<?php 
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
</head>
<body>
<section class="relative block py-24 lg:pt-0 bg-blueGray-800">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                    <div class="w-full lg:w-6/12 px-4">
                        <form method="POST" name="feedback_form">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200">
                            <div class="flex-auto p-5 lg:p-10">
                                <h4 class="text-2xl font-semibold">How's Your Experience with us</h4>
                                <p class="leading-relaxed mt-1 mb-4 text-blueGray-500">
                                    Add Your  Feedback Here!
                                </p>
                                <div class="relative w-full mb-3 mt-8">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="full-name">Full Name</label><input type="text" name="name"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Full Name" required/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="email">Email</label><input type="email" name="email"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Email" required/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="message">Message</label><textarea rows="4" cols="80" name="message"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                        placeholder="Type a message..." required></textarea>
                                </div>
                                <div class="text-center mt-6">
                                    <input type="submit" value="Send Message" name="submit_feedback"
                                        class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" >                                                                            
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>