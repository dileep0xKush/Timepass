<?php 

if(isset($_POST['name'])){
    if(isset($_POST['email'])){
        if(isset($_POST['m_name'])){
    $server ="localhost";
    $username = "id16304250_bravosd";
    $password = "/Q6tcey+JHN/ERGo";
    $con = mysqli_connect($server,$username,$password);

    if(!$con){
         die("connection failed due to".mysqli_connect_error());
    }
   // echo "connection success";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $m_name = $_POST['m_name'];

    $sql = "INSERT INTO `id16304250_bravodb`.`rmovie` ( `name`, `age`, `gender`, `email`, `m_name`, `timestamp`) VALUES ( '$name', '$age', '$gender', '$email', '$m_name',current_timestamp());";
    
    if($con->query($sql)==true){
          echo '<script type="text/javascript">';
          echo 'setTimeout(function () { swal("WOW!","successfully submited","success");';
          echo '}, 1000);</script>';
           
    }
    else{
     echo "error! $sql <br> $con->error";
    }
    $con->close();

}}}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>letstimepass | coming soon movie list & request new movies or movie that you want</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <!-- header -->
    <header class="text-gray-600 body-font">
       <img src="../images/4x4.png" class="h-200 sm:h-150 max-w-2xl flex-center  mx-auto border-black" />
       
                             <div class="text-gray-700 bg-white body-font">
                <div class="flex flex-col flex-wrap p-5 mx-auto border-b md:items-center md:flex-row">
                    <a href="./index.html" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
                        <div class="inline-flex items-center">
                            <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-cyan-400 to-lightBlue-500">
                            </div>
                            <h2
                                class="font-semibold tracking-tighter transition duration-1000 ease-in-out transform text-blue-400 dark:text-blue-400 lg:text-md text-bold lg:mr-8">
                                #letstimepass
                            </h2>
                        </div>
                    </a>
                    <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto md:mr-auto">
                        <div class="inline-flex"> 
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            <a class="mr-5 hover:bg-black hover:text-white rounded-2xl p-0.5" href="index.html">Home</a>
                        </div>
                        <div class="inline-flex">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path></svg>
                            <a class="mr-5 hover:bg-black hover:text-white  rounded-2xl p-1.5" href="Collection.html">Collection</a>
                        </div>
                        <div class="inline-flex">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                            <a class="mr-5 hover:bg-black hover:text-white  rounded-2xl p-1.5" href="coming-soon.php">Coming-soon</a>
                        </div>
                        <div class="inline-flex">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                            <a class="mr-5 hover:bg-black hover:text-white  rounded-2xl p-1.5" href="letstimepass | About us & contact us.html">About us</a>
                        </div>
                    </nav>
                    
                        <div class="bg-white  items-center rounded-full shadow-xl">
                            <script async src="https://cse.google.com/cse.js?cx=a7edc8b35d55ec16f"></script>
                            <div class="gcse-search"></div>
                        </div>
                    
                </div>
            </div>
        
      </header>
      
     <!-- request form -->
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
          <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://media.gqindia.com/wp-content/uploads/2019/11/top-image19-1920x1080.jpg" style="filter: grayscale(0) contrast(1.2) opacity(0.7);"></iframe>
            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
              <div class="lg:w-1/2 px-6">
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-l">This Sunday</h2>
                <p class="mt-1 text-inline">Ballers  at 8PM</p>
                 <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">.</h2>
                        <a class="text-green-500 leading-relaxed">.</a>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">.</h2>
                        <p class="leading-relaxed">.</p>
                    </div>
                </div>
            </div>
          </div>
          <form  class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0" action="coming-soon.php" method="post">
          
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">REQUEST YOUR MOVIE HERE</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Your requested Movie/Tv-series/Episode will be added shortly.</p>
            <div class="relative mb-4">
              <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
              <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>

            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Age</label>
                <input type="number" id="age" name="age" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>

              <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Gender</label>
                <input type="text" id="gender" name="gender" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
              <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="message" class="leading-7 text-sm text-gray-600" >Movie Name </label>
              <textarea id="m_name" name="m_name" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <button class="text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Submit</button>
            
         
        </form>
        </div>
      </section>

      <!-- footer -->
      <footer class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    
                    <span class="ml-3 text-xl">letstimepass</span>
                </a>
                <p class="mt-2 text-sm text-gray-500"> Website that you require.this webside is made  to provide you your desirable movies and Tv-series without showing any advertisment.
                </p>
            </div>
            <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Gallery</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="index.html">Home</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="Collection.html">Collection </a>
                        </li>
                        <li>
                        
                  <a class="text-gray-600 hover:text-gray-800" href="coming-soon.php">Coming-soon</a>
                
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800" href="letstimepass | About us & contact us.html">About us </a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-red-500 tracking-widest text-sm mb-3">Warning! <br>If any link stop working <br>Please inform - sarafsaransh321@gmail.com <br>OR <br>dileepkushwaha8090@gmail.com</h2>

                </div>

            </div>
        </div>
        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">© 2021 टाइमPASS —
              <a href="https://Instagram.com/_sarans_h" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@saransh</a>
               <a href="https://Instagram.com/dileep_kush_" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@dileep_kush</a>
            </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                      <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                      </a>
                      <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                        </svg>
                      </a>
                      <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                      </a>
                      <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                          <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                      </a>
                    </span>
            </div>
        </div>
    </footer>
</body>
</html>