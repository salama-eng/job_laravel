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
          
    <tr>
        <th>{{$comp->id}}</th>
        <th>{{$comp->name}}</th>
        <th>{{$comp->email}}</th>
        <th><img src="image/{{$comp->image}}" alt="{{$comp->image}}" width="60" ></th>

        <th>{{$comp->is_active}}</th>


        <td>
          <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('edit_member',$comp->id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
              <a class="dropdown-item" href="{{ route('toggle_member',$comp->id) }}"><i class="bx bx-trash me-2"></i> @if($category->is_active==1)disable @else enable @endif</a>
            </div>
          </div>
        </td>


       </tr>   @endforeach</tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->








            
          </div></div>
          <!-- / Content -->

          
          

<!-- Footer -->




@endsection