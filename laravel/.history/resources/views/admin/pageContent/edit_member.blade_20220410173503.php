@extends('admin.layout.master1')
@section('content')

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Forms /</span> Basic Inputs
  </h4>
  
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">Default</h5>
        <div class="card-body">
          @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
              
          @endforeach
              
          @endif
          
          
          <form method="POST" action="{{ route('update_member',$company->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="row g-3">
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">company name</label>
                <div class="col-sm-9">
                  <input type="text"  value="{{ $company->name }}" name="name" id="formtabs-first-name" class="form-control" placeholder="John" />
                </div>
              </div>
            </div>
         
            <div class="col-md-6">
              <div class="form-password-toggle">
                <label class="form-label" for="multicol-confirm-password">status</label>
                <div class="input-group input-group-merge">
                <label class="switch">
                    <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
                    <span class="switch-toggle-slider">
                      <span class="switch-on"></span>
                      <span class="switch-off"></span>
                    </span>
                    <span class="switch-label">is active</span>
                  </label>
                </div>
              </div>
              </div>
              </div>
            
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">الصورة</label>
                <div class="col-sm-9">
                  <input type="file" name="image" id="formtabs-birthdate" class="form-control dob-picker" />
                </div>
              </div>
            </div>
           
          </div>



          
        </div>
        <div class="card-footer">
          <input type="submit" name="submit" id="formtabs-first-name"  value="تعديل"class="form-control" placeholder="John" />

        </form>


        </div>
      </div>
    </div>
    
  
  
  
  
  
  </div>
@endsection