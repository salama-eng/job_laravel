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
@if (isset($jobs))
    

  

@foreach ($jobs as $jobs)


<td>id</td>
<th>{{$jobs->jobtitle}}</th>
<th>{{$jobs->description}}</th>

<th><img src="image/{{$jobs->companies->name}}" alt="{{$jobs->companies->name}}"></th>
<th>{{$jobs->companies->name}}</th>

<th>{{$jobs->type}}</th>
<th>{{$jobs->country}}</th>
<th>{{$jobs->time_start}}</th>
<th>{{$jobs->time_close}}</th>
<th>{{$jobs->steps_to_applye}}</th>
<th>{{$jobs->respossbilities}}</th>
<th>{{$jobs->qualifications}}</th>
<th>{{$jobs->shift}} </th>
<th>{{$jobs->is_active}}</th>
  
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