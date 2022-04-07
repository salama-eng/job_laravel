@extends('admin.layout.master')
@section('content')



      <!-- Content wrapper -->
 
   

<hr class="my-5">


<!-- Multilingual -->

<!--/ Multilingual -->




<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Books Table</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
       
<tr>
  <th>id</th>
  <th>Job title</th>
  <th>description</th>
  <th>company logo</th>
  <th>company name</th>
  <th>type</th>
  <th>country</th>
  <th>publish time</th>
  <th>close time</th>
  <th>steps to apply</th>
  <th>responsiblities</th>
  <th>qualificatons</th>
  <th>shift </th>
  <th>is active</th>
</tr>
      </thead>
      <tbody class="table-border-bottom-0">
@if (isset($job))
    

  

@foreach ($job as $jobs)


<th>id</th>
<th>{{$jobs->jobtitle}}</th>
<th>{{$job->description}}</th>
<th>{{$company::where}} </th>
<th>company name</th>
<th>type</th>
<th>country</th>
<th>publish time</th>
<th>close time</th>
<th>steps to apply</th>
<th>responsiblities</th>
<th>qualificatons</th>
<th>shift </th>
<th>is active</th>

  
@endforeach
@endif

      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->








            
          </div></div>
          <!-- / Content -->

          
          

<!-- Footer -->




@endsection