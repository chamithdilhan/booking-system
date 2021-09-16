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
                    <form class="form" method="post" action="{{ route('rooms.update',$rooms['id'])}}">
              <!--=========================== Start Error validation ==================-->
            @if ($errors->any())
             @foreach ($errors->all() as $error)
                <div class="alert round bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                    <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        
                  <strong>DANGER : {{ $error }}</strong>    
                </div>
                 @endforeach
             @endif 
<!--=========================== End Error validation ==================-->
                       @csrf
                         @method('put')
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-user"></i> Update Rooms</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="room_name">Room Name</label>
                              <input type="text" id="room_name" value="{{ old('room_name') ?? $rooms['room_name']  }}" class="form-control" value="{{ old('room_no') ?? $rooms['room_no']  }}" placeholder="Room Name"
                              name="room_name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="room_no">Room No</label>
                              <input type="text" value="{{ old('room_no') ?? $rooms['room_no']  }}" id="room_no" class="form-control" placeholder="Room No"
                              name="room_no">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="room_price">Room Price</label>
                              <input type="text" id="room_price" value="{{ old('room_price') ?? $rooms['room_price']  }}" class="form-control" placeholder="Room Price"
                              name="room_price">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Room Type</label>
                              <select class="select2 form-control" id="room_type" tabindex="-1" aria-hidden="true" name="room_type">
                                <option value="0">Select Room Type</option>
                                <option value="A/C">A/C</option>
                                <option value="Non A/C">Non A/C</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">status</label>
                              <select class="select2 form-control" id="status" tabindex="-1" aria-hidden="true" name="status">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions right">
                        <button type="reset" class="btn btn-danger box-shadow-3 btn-min-width mr-1 mb-1 left">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" name="submit" class="btn btn-info box-shadow-3 btn-min-width mr-1 mb-1 right">
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
