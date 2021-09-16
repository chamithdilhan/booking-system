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
                    <form class="form" method="post" action="{{ route('rooms.store')}}">
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
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-user"></i> Create Rooms</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="room_name">Room Name</label>
                              <input type="text" id="room_name" class="form-control" placeholder="Room Name"
                              name="room_name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="room_no">Room No</label>
                              <input type="text" id="room_no" class="form-control" placeholder="Room No"
                              name="room_no">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="room_price">Room Price</label>
                              <input type="text" id="room_price" class="form-control" placeholder="Room Price"
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

                 <div class="content-body">
                    <!-- HTML5 export buttons table -->
                    <section id="html5">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Rooms Details</h4>
                                        <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <table class="table table-striped table-bordered sourced-data">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Room Name</th>
                                            <th>Room No</th>
                                            <th>Room Price</th>
                                            <th>Room Type</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php $count = 0 ?>
                                      @foreach ($room as $rooms)

                                          <?php $count++ ?>
                                            <tr>
                                              <td>{{ $count }}</td>
                                              <td>{{ $rooms['room_name']}}</td>
                                               <td>{{ $rooms['room_no']}}</td>
                                               <td>{{ $rooms['room_price']}}</td>
                                               <td>{{ $rooms['room_type']}}</td>

                                              <td>

                            <div> 
                              <a class="btn btn-info"
                                 href="{{ route('rooms.edit', $rooms['id']) }}"><i
                                         class="la la-edit"></i></a>
                             </div>
                            </td>
                                              <td>
                        <form method="POST" action="{{ route('rooms.destroy',$rooms['id'])}}">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger"><i
                                         class="la la-trash"></i>
                               
                            </button>

                        </form>
                  </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                          </div>
                            </div>
                        </div>
                    </section>
                    <!--/ HTML5 export buttons table -->
                    <!-- Tab separated values table -->
                </div>
      </div>
    </div>
  </div>

@endsection
