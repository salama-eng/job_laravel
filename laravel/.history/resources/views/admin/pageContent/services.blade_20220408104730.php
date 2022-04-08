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
  <th>title</th>
  <th>description</th>
  <th>image</th>
  <th>is active</th>
</tr>
      </thead>
      <tbody class="table-border-bottom-0">



@foreach ($services as $service)
  

       
        <tr>
          <th>{{$service->id}}</th>
          <th>{{$service->title}}</th>
          <th>{{$service->description}}</th>
          <th><img src="image/{{$service->image}}" alt="{{$service->image}}" width="50" ></th>
          <th>{{$service->is_active}}</th>
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