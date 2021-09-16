@extends('layouts.layouts')
@section('content')



  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
          <div class="row match-height">
            <div class="col-md-12">
              <div class="card">
                <div class="card-content collapse show">
                  <div class="card-body">
                    <form class="form" method="post" action="{{ route('admin-create.store')}}">
                       @csrf
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-user"></i> Admin Create</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput1">Name</label>
                              <input type="text" id="name" class="form-control" placeholder="Name"
                              name="name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput2">Email</label>
                              <input type="text" id="email" class="form-control" placeholder="Email"
                              name="email">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput3">Password</label>
                              <input type="password" id="password" class="form-control" placeholder="Password" name="password">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Confirm Password</label>
                              <input type="password" id="confirm-password" class="form-control" placeholder="Confirm Password" name="confirm-password">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" name="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>




        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>

@endsection
