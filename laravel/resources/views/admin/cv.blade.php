<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <title>Home</title>

</head>

<body>


    




        <div id="htmlContent" class="cv-content m-auto col-8 mt-5">


            <div class="head-container m-auto mx-5 my-5">
                
               
                    <h1 class="mt-2 col-12">
                        Salama mahdi
                    </h1>
                    <h3 class="mt-2 col-12"> Developer</h3>
                    <article class="mt-2">I'm Amat Alsalam A UX designer &front-end<br> developer and graphic designer &
                        product person passionate
                        about creating simple yet innovative experiences for
                        users.</article>
           
                         </div>      

                  
                        <table class="table">
          <h1 class="cvh1 float-md-start">Personal Information </h1>
                            <tbody>
                              <tr>
                                <td>Location</td>
                                <td>Taiz street</td>
            
                              </tr>
                              <tr>
                                <td>Phone number</td>
                                <td>+967 734 116 392</td>
            
                              </tr>
         
                              <tr>
                                <td>web site</td>
                                <td>a541996salamh@gmail.com</td>
            
                              </tr>

                              <tr>
                                <td>Gender</td>
                                <td>female</td>
            
                              </tr>

                              <tr>
                                <td>Date of birth</td>
                                <td>5 April 96</td>
            
                              </tr>

                              <tr>
                                <td>Nationality</td>
                                <td>Yemeni</td>
            
                              </tr>
                            </tbody>
                          </table>
        


                      
                          <table class="table">
      
                          <h1  class="cvh1 float-md-start">Education </h1>
                              <tbody>
                                <tr>
                                  <td>· College Graduate, Information System Field. Sana'a 
                                      University, Faculty of Computer and Information Technology.</td>
                                  
                                </tr>
                           
                                <tr>
                                    <td>· · Intermdiate diploma in English Language,Fli Institute Sana’a – Yemen.</td>
                                    
                                  </tr>
                                  <tr>
                                    <td>·· CTLT courses in English Language, Sana’a – Yemen..</td>
                                    
                                  </tr>
                                  <tr>
                                    <td>· · High School Graduate, Sumaia School.</td>
                                    
                                  </tr>
                                  <tr>
                                    <td>·Graphics designs program.</td>
                                    
                                  </tr>
                                   



                              </tbody>
                            </table>




                            
                         
                          <table class="table">
       <h1  class="cvh1 float-md-start" >Experiance </h1>
                              <tbody>
                                <tr>
                                    <td>·postion</td>
                                    <td>· from</td>
                                    <td>·to</td>
                                   <td>·company</td>
                              </tr>   <tr>
                                  <td>·graphic designer</td>
                                      <td>· July – 2020</td>
                                      <td>· July – 2020</td>
                                     <td>·Kaizen pro for trading company</td>
                                    
                                </tr>
                                <tr>
                                    <td>·graphic designer</td>
                                        <td>· July – 2020</td>
                                        <td>· July – 2020</td>
                                       <td>·Kaizen pro for trading company</td>
                                      
                                  </tr>

                              </tbody>
                            </table>





                    
                    </div>
        











                <div id="editor"  col-12></div>
                <center>
                    <p>
                        <button id="generatePDF"class="btndash m-4 w-25">generate PDF</button>
                    </p>
                </center>





        


        </div>





        <script> var doc = new jsPDF();
            var specialElementHandlers = {
                '#editor': function (element, renderer) {
                    return true;
                }
            };

            //margins.left, // x coord   margins.top, { // y coord
            $('#generatePDF').click(function () {
                doc.fromHTML($('#htmlContent').html(),10, 10, {
                    'width':700,
                    'elementHandlers': specialElementHandlers
                });
                doc.save('sample_file.pdf');
            });
        </script>


        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
</body>
</body>

</html>