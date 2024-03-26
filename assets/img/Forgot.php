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
  <title>FORGOT PASSWORD | PAYOUT FOR WORK</title>
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
                    Forgot Your Password?
                  </h6>
                </div>
            
                <hr class="mt-6 border-b-1 border-blueGray-200" />
              </div>
              <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
               
                <form method="POST" action="../Mail_Service/Forget_Email.php" enctype="multipart/form-data">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-300 text-xs font-bold mb-2"
                      for="grid-password">Email</label><input type="email" id="username" name="email"
                      class="border-0 px-3 py-3 placeholder-blueGray-400 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Email" required/>
                  </div>
                
                  <div>
                    <label class="inline-flex items-center cursor-pointer"><a href="LoginPage.php"><span
                        class="text-sm font-semibold text-blueGray-400 hover:text-blueGray-300">Back to Sign in</span></a>                        
                      </label>                        
                  </div>
                  
                  <div class="text-center mt-4">
              
                    
                    <input type="submit" value="reset PASSWORD" name="loginbtn"
                      class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">
                  </div>
                  
                  
                </form>
              
              </div>
            </div>
           

          </div>
        </div>
      </div>
    </section>
  </main>
</body>
<!-- <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script> -->

</html>