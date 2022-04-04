<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>

</head>

<body>


    <header>
        <div style="height: 33.5vw;">

            <div id="navigation" class="fixed">
                <div>
                    <a href="../index.html">
                        <img id="logo" src="../assets/imges/logo1.png" alt=""></a>
                </div>

                <nav>
                    <ul>

                        <li><a href="../index.html">Home </a></li>
                        <li><a href="job.html">Jobs</a></li>
                        <li><a href="services.html">services</a> </li>
                        <li><a href="about.html">about</a></li>
                        <li><a href="members.html">members</a></li>
                        <li><a href="contact.html">contact us</a></li>

                    </ul>

                </nav>


                <div id="humb_icon" onclick="togglemobile(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                    <ul class="mobile">
                        <li style="border-bottom: 1px solid var(--lightcolor);">
                            <a href="../index.html"><img width="60px" src="../assets/imges/logo.png" alt=""></a>
                        </li>

                        <li><a href="../index.html">Home </a></li>
                        <li><a href="job.html">Jobs</a></li>
                        <li><a href="services.html">services</a> </li>
                        <li><a href="about.html">about</a></li>
                        <li><a href="members.html">members</a></li>
                        <li><a href="contact.html">contact us</a></li>


                    </ul>
                </div>
                <div id="login">Login
                    <a href="pages/lodin.html"><img width="15px" src="../assets/icos/user.png" alt=""></a>
                </div>
                <div id="login1">

                    <a href="pages/login.html"> <img width="25px" src="../assets/icos/user.png" alt=""></a>
                </div>
            </div>



            
            <!---         start      -->
            <div class="job-container mt-7 col-lg-8 col-sm-11 mx-auto"  id="search-tbl">



                
                
                
                
                <script src="../js/jquery.min.js"></script>
                
                <script>
                
                $(document).ready(function(){
                    
                
                
                
                
                    $("#search-key").on('keyup',function(){
                        var word=$('#search-key').val().toLowerCase();
                        $("#search-tbl .job-card").filter(function(){
                
                          
                            $(this).toggle( $(this).text().toLowerCase().indexOf(word)>-1);
                         
                
                
                
                        });
                
                       
                    });
                
                   
                
                    
                  
                });
                
                </script>
                





                <nav class="navbar navbar-light ml-auto">
                    <div class=" w-100 m-4">
                      <form class="d-flex">  
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search-key">
                      <img src="../assets/icos/search.png" width="50px" class="btn mx-1 btn-outline-secondary">
                      </form>
                    </div>
                  </nav>




<!-----------------JOBS START HERE ------------------------>



<!--------------------SELECT---------------------->








<div class="job-card ">
    <img src="../assets/corporators/logo-audible.svg" width="200px" alt="">
    <div>
      <h3 class="mb-3"><a href="pages/detailes.html"> Teatcher English</a></h3>
        <span>100% Remote Job </span>
        <span>Full-Time </span>
        <span>US National </span>
        <p>Partner with Sales Leadership on strategic
            planning and revenue-driving initiatives
            including supporting them with quota and
            territory planning, pipeline management/revenue
            forecasting,and establish an analytical system to
            oversee performance.</p>
            <a style="text-decoration: none;" href="detailes.html"><div class="btn1 m-2">applay now</div></a>
    </div>
</div>


  

<div class="job-card">
    <img src="../assets/corporators/1 (6).png" width="200px" alt="">
    <div>
      <h3 class="mb-3"><a href="pages/detailes.html"> Business Development Manager</h3></a>
        <span>100% Remote Job </span>
        <span>Full-Time </span>
        <span>US National </span>
        <p>Partner with Sales Leadership on strategic
            planning and revenue-driving initiatives
            including supporting them with quota and
            territory planning, pipeline management/revenue
            forecasting,and establish an analytical system to
            oversee performance.</p>
            <a style="text-decoration: none;" href="detailes.html"><div class="btn1 m-2">applay now</div></a>
    </div>
</div>




  

<div class="job-card">
    <img src="../assets/corporators/1 (7).png" width="200px" alt="">
    <div>
      <h3 class="mb-3"><a href="pages/detailes.html">Artisit</h3></a>
        <span>100% Remote Job </span>
        <span>Full-Time </span>
        <span>US National </span>
        <p>Partner with Sales Leadership on strategic
            planning and revenue-driving initiatives
            including supporting them with quota and
            territory planning, pipeline management/revenue
            forecasting,and establish an analytical system to
            oversee performance.</p>
            <a style="text-decoration: none;" href="detailes.html"><div class="btn1 m-2">applay now</div></a>
    </div>
</div>




  

<div class="job-card">
    <img src="../assets/corporators/1 (5).png" width="200px" alt="">
    <div>
      <h3 class="mb-3"><a href="pages/detailes.html"> Human resource</h3></a>
        <span>100% Remote Job </span>
        <span>Full-Time </span>
        <span>US National </span>
        <p>Partner with Sales Leadership on strategic
            planning and revenue-driving initiatives
            including supporting them with quota and
            territory planning, pipeline management/revenue
            forecasting,and establish an analytical system to
            oversee performance.</p>
            <a style="text-decoration: none;" href="detailes.html"><div class="btn1 m-2">applay now</div></a>
    </div>
</div>





  

<div class="job-card">
    <img src="../assets/corporators/1 (8).png" width="200px" alt="">
    <div>
      <h3 class="mb-3"><a href="pages/detailes.html"> Business Development Manager</h3></a>
        <span>100% Remote Job </span>
        <span>Full-Time </span>
        <span>US National </span>
        <p>Partner with Sales Leadership on strategic
            planning and revenue-driving initiatives
            including supporting them with quota and
            territory planning, pipeline management/revenue
            forecasting,and establish an analytical system to
            oversee performance.</p>
            <a style="text-decoration: none;" href="detailes.html"><div class="btn1 m-2">applay now</div></a>
    </div>
</div>





    

<div class="job-card">
    <img src="../assets/corporators/logo-coaching-bundle.svg" width="200px" alt="">
    <div>
      <h3 class="mb-3"><a href="pages/detailes.html"> Business Development Manager</h3></a>
        <span>100% Remote Job </span>
        <span>Full-Time </span>
        <span>US National </span>
        <p>Partner with Sales Leadership on strategic
            planning and revenue-driving initiatives
            including supporting them with quota and
            territory planning, pipeline management/revenue
            forecasting,and establish an analytical system to
            oversee performance.</p>
            <a style="text-decoration: none;" href="detailes.html"><div class="btn1 m-2">applay now</div></a>
    </div>
</div>







<div class="job-card">
    <img src="../assets/corporators/Six_Flags.png" width="200px" alt="">
    <div>
       <h3 class="mb-3"> <a href="pages/detailes.html">Business Development Manager</h3></a>
        <span>100% Remote Job </span>
        <span>Full-Time </span>
        <span>US National </span>
        <p>Partner with Sales Leadership on strategic
            planning and revenue-driving initiatives
            including supporting them with quota and
            territory planning, pipeline management/revenue
            forecasting,and establish an analytical system to
            oversee performance.</p>
            <a style="text-decoration: none;" href="detailes.html"><div class="btn1 m-2">applay now</div></a>
    </div>
</div>





            </div>
            <!------------    END main ------------------------->



            <!-----------------START FOOTER --->

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
                            <img src="../assets/icos/twitter.png " width="30px" alt="">
                            <img src="../assets/icos/phone.png " width="30px" alt="">
                            <img src="../assets/icos/twitter (1).png " width="30px" alt="">
                            <img src="../assets/icos/snap.png " width="30px" alt="">
                            <img src="../assets/icos/instagram (1).png " width="30px" alt="">
                            <img src="../assets/icos/8674891_ic_fluent_globe_search_regular_icon.png " width="30px" alt="">
                            <img src="../assets/icos/location.png " width="30px" alt=""></div>
                        </div>
        
                  
                </div>
                <a class="afooter" href="index.html"><img src="../assets/icos/up-arrow.png" width="39px" alt=""></a>
        
                <div id="footer" class="bc-black">All rights reserved- Salama © 2022</div>
            </footer>


            <script src="../js/main.js"></script>
            <script src="../js/bootstrap.min.js"></script>


















</body>

</html>