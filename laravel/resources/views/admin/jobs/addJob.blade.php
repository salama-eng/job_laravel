@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>




            <!-- Multi Column with Form Separator -->
            <div class="card mb-4">
                <h5 class="card-header">ADD NEW BOOK </h5>
                <form class="card-body" action="{{ route('storjob') }}"  method="POST" >
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="multicol-username">job title </label>
                            <input name="jobtitle" type="text" id="multicol-username" required class="form-control"
                                placeholder="john.doe" />
                        </div>


                        <div class="col-md-6">
                            <label class="form-label" for="multicol-email">description</label> </label>
                            <div class="input-group input-group-merge">
                                <input name="description" type="text" class="form-control" required
                                    aria-describedby="multicol-email2" />

                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="multicol-email">country </label>
                            <div class="input-group input-group-merge">
                                <input name="country" type="text" class="form-control" required
                                    aria-describedby="multicol-email2" />

                            </div>
                        </div>


                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="basic-default-country">shift</label>
                          <select name="shift" class="form-select" id="basic-default-country" required>
                              
                              <option value="part time">part time</option>

                              <option value="full time">full time</option>

                          </select>
                      </div>


                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="basic-default-country">jon type</label>
                        <select name="type" class="form-select" id="basic-default-country" required>
                            
                            <option value="remote job">remote job</option>

                            <option value="in compay">in compay</option>

                        </select>
                    </div>







                       

                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="basic-default-country">company</label>
                            <select name="company_id" class="form-select" id="basic-default-country" required>
                                

@foreach ($company as $company )
  

                                <option value="{{$company->id}}">{{$company->name}}</option>
@endforeach


                            </select>
                        </div>


                        <div class="mb-3 row">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Time start</label>
                            <div class="col-md-10">
                              <input name="time_start" class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
                            </div>
                          </div>



                          <div class="mb-3 row">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Time close</label>
                            <div class="col-md-10">
                              <input name="time_close" class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
                            </div>
                          </div>

                          <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Qualifications</label>
                            <textarea name="qualifications" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>

                          <div>
                            <label for="exampleFormControlTextarea1" class="form-label">respossbilities</label>
                            <textarea name="respossbilities" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>


                          <div>
                            <label for="exampleFormControlTextarea1" class="form-label">steps_to_applye</label>
                            <textarea name="steps_to_applye" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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


                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        @endsection
