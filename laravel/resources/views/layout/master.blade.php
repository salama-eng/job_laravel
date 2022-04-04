<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>

</head>

<body>


    <header>
        <div style="height: 33.5vw;">

            <div id="navigation">
                <div>
                    <a href="index.html">
                        <img id="logo" src="assets/imges/logo1.png" alt=""></a>
                </div>

                <nav>
                    <ul>

                        <li><a href="{{ url('/') }}">Home </a></li>
                        <li><a href="{{ url('detailes') }}">Jobs</a></li>
                        <li><a href="{{ url('services') }}">services</a> </li>
                        <li><a href="{{ url('about') }}">about</a></li>
                        <li><a href="{{ url('members') }}">members</a></li>
                        <li><a href="{{ url('contact') }}">contact us</a></li>

                    </ul>

                </nav>


                <div id="humb_icon" onclick="togglemobile(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                    <ul class="mobile">
                        <li style="border-bottom: 1px solid var(--lightcolor);"> <a href="index.html"><img width="60px"
                                    src="assets/imges/logo.png" alt=""></a></li>
                                    <li><a href="index.html">Home </a></li>
                                    <li><a href="pages/job.html">Jobs</a></li>
                                    <li><a href="pages/services.html">services</a> </li>
                                    <li><a href="pages/about.html">about</a></li>
                                    <li><a href="pages/members.html">members</a></li>
                                    <li><a href="pages/contact.html">contact us</a></li>

                    </ul>
                </div>
                <a style="text-decoration: none;" href="pages/login.html"> <div id="login">Login
                   <img  width="15px" src="assets/icos/user.png" alt=""></a>
    
                </div>
            
                <div id="login1">
                    <a href="pages/login.html"> <img width="25px" src="assets/icos/user.png" alt=""></a>
                </div>

              
             <!-- Example single danger button -->


        
        <!-- Example single danger button -->
     

   
<div class="dropdown"> 
    <img src="assets/corporators/1 (1).jpg" class=" rounded-circle" alt="" 
      >
    <div class="dropdown-content col-12">
        <ul>
   <li>
       <a href="pages/dashinfo.html">Profile</a>
   </li>
<li> <a href="pages/cv.html">Download C.V</a></li>
        </ul>
    
   
    </div>
  </div>
   
            <!------------    START MODELE   ------------------------->

            </div>

  <!-----------------START FOOTER --->






            
  @yield('content')   








  <footer>

    <div id="footer-container">
      
            <div class="footer1  col-lg-3 col-5">

                <h3 class="w-75">Find Remote Work From Home & blockchain Jobs</h3>
                <p>Job Categories for Remote, Part-Time, Freelance, and Flexible Jobs
                    New Remote Work From Home and Flexible Jobs
                    Find Remote Work From Home and Flexible Jobs By Location
                    Top Searched Remote Work from Home Jobs
                    View Popular Job Searches
                    Job Seeker Success Stories!</p>

            </div>

            <div  class=" footer1  col-lg-3 col-5" >
                <h3 class="w-75">Job Search Resources</h3>
                <p>Research Top Flexible Companies
                    Job Search Advice, News, & More
                    See Flexible Job Trends
                    Browse Companies by Name
                    Career Coaching & Advice
                    How to Find a Remote Job Guide
                    Guide for Resumes & Cover Letters
                    A Guide for Mom’s Returning to Work
                    Remote Job Market Map
                    National Flex Day</p>
            </div>
        

            <div class=" footer1 col-lg-3 col-5">
                <h3 class="w-75">About blockchain</h3>
                <p>how FlexJobs Works
                    The FlexJobs Team
                    Careers at FlexJobs
                    Press & Awards
                    Contact Us
                    FlexJobs App
                    FAQ
                    Gift Certificates</p>
            </div>
           
            <!-- Force next columns to break to new line at md breakpoint and up -->
<div class=" footer1 col-lg-2 col-5">

                <h3 class="w-75">Contact us on</h3>
                <div class="contact-icon ">
                <img src="assets/icos/twitter.png " width="30px" alt="">
                <img src="assets/icos/phone.png " width="30px" alt="">
                <img src="assets/icos/twitter (1).png " width="30px" alt="">
                <img src="assets/icos/snap.png " width="30px" alt="">
                <img src="assets/icos/instagram (1).png " width="30px" alt="">
                <img src="assets/icos/8674891_ic_fluent_globe_search_regular_icon.png " width="30px" alt="">
                <img src="assets/icos/location.png " width="30px" alt=""></div>
            </div>

      
    </div>
    <a class="afooter" href="index.html"><img src="assets/icos/up-arrow.png" width="39px" alt=""></a>

    <div id="footer" class="bc-black">All rights reserved- Salama © 2022</div>
</footer>


<script src="assets/js/main.js"></script>
<script src="assets/js/header.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>