
@extends('layout.master')
@section('content')



            <!---         start      -->


<div class="contact-container col-lg-6 col-sm-8 m-auto">

 <img class=" img-fluid" src="../assets/imges/contact.png" width="700px" alt="">

<h1 class="m-4">Let Us know if you have any question </h1>
 <form class="row g-3 m-5">
    <div class="col-md-6 col-lg-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4"placeholder="">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Your question</label>
      <textarea type="text-area" class="form-control" id="inputCity"></textarea>
    </div>

    <div class="col-12">
      <button class="btn1" type="submit" class="btn">submit</button>
    </div>
  </form>


</div>
           










            <!------------    END main ------------------------->

      

            <!-----------------START FOOTER --->

            @endsection
            