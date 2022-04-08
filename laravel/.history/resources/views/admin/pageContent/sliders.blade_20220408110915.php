@extends('admin.layout.master')
@section('content')



      <!-- Content wrapper -->
 
   

<hr class="my-5">


<!-- Multilingual -->

<!--/ Multilingual -->




<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">slider Table</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
       
<tr>
  <th>id</th>
  <th>title</th>
  <th>description</th>
  <th>image</th>
  <th>is active</th>
</tr>
      </thead>
      <tbody class="table-border-bottom-0">


     @foreach ($slider as $slid)
       
   
        <tr>
          <th>{{$slid->id}}</th>
          <th>{{$slid->slider_title}}</th>
          <th>{{$slid->description}}</th>
          <th><img src="image/{{$slid->image}}" alt="{{$slid->slider_image}}" width="70%"></th>
          <th>{{$slid->is_active}}</th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->








            
          </div></div>
          <!-- / Content -->

          
          

<!-- Footer -->




@endsection