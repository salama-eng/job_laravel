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
  <th>company name</th>
  <th>company email</th>
  <th>logo</th>
  <th>is active</th>
</tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($company as $comp)
          
        @endforeach
        <th>{{$comp->id}}</th>
        <th>{{$comp->name}}</th>
        <th>{{$comp->email}}</th>
        <th><img src="{{$comp->email}}" alt="{{$comp->email}}"></th>

        <th>{{$comp->is_active}}</th>
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->








            
          </div></div>
          <!-- / Content -->

          
          

<!-- Footer -->




@endsection