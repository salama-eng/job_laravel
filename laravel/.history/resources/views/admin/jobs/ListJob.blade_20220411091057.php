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

<th><img src="image/{{$jobs->companies->image}}" alt="{{$jobs->companies->image}}" width="70"></th>
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
<td>
  <div class="dropdown">
    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{ route('edit_job',$jobs->id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
      <a class="dropdown-item" href="{{ route('toggle_job',$jobs->id) }}"><i class="bx bx-trash me-2"></i> @if($comp->is_active==1)disable @else enable @endif</a>
    </div>
  </div>
</td>
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