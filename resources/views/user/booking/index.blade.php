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
                    <form class="form" method="post" action="{{ route('booking.store')}}">
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
                        <h4 class="form-section"><i class="ft-user"></i> Create Customer</h4>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="projectinput4">Customer Name</label>
                              <select class="select2 form-control" id="cus_id" name="cus_id" tabindex="-1" aria-hidden="true" name="status">
                                <option value="">Customer Name</option>
                                    @foreach ($cus as $cust)
                                      <option value="{{ $cust['id']}}">{{ $cust['cus_name']}}</option>
                                    @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="cus_nic">Customer NIC</label>
                              <input id="cus_nic" placeholder="Customer NIC" readonly class="form-control" name="cus_nic" type="text">
                            </div>
                          </div>
                         <div class="col-md-4">
                            <div class="form-group">
                              <label for="cus_nic">Customer Number</label>
                              <input id="cus_nu" placeholder="Customer NIC" readonly class="form-control" name="cus_nu" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="projectinput4">Room Number</label>
                              <select class="select2 form-control" id="room_id" tabindex="-1" aria-hidden="true" name="room_id">
                                <option value="">Room Number</option>
                                    @foreach ($room as $rooms)
                                      <option value="{{ $rooms['id']}}">{{ $rooms['room_name']}}</option>
                                    @endforeach
                              </select>
                            </div>
                          </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="projectinput4">Room Type</label>
                               <input id="room_type" placeholder="Room Price" readonly class="form-control" name="room_price" type="text">
                            </div>
                          </div>
                           <div class="col-md-4">
                            <div class="form-group">
                              <label for="projectinput4">Room Price</label>
                               <input id="room_price" placeholder="Room Price" readonly class="form-control" name="room_price" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="projectinput4">Booking Start Time</label>
                               <input id="start_time" placeholder="Booking Start Time" class="form-control" name="start_time" type="time">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="projectinput4">Booking End Time</label>
                               <input id="end_time" placeholder="Booking End Time" class="form-control" name="end_time" type="time">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="projectinput4">status</label>
                              <select disabled class="select2 form-control" id="status" tabindex="-1" aria-hidden="true" name="status">
                                <option value="1">Booking In</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                         <div class="col-md-12">
                           <label for="projectinput4">Note</label>
                           <textarea class="form-control" placeholder="Type the Note" name="note"></textarea>
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
                      <table class="table table-striped table-responsive table-bordered sourced-data">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Customer Name</th>
                                  <th>Customer Nu</th>
                                  <th>Room Name</th>
                                  <th>Room Price</th>
                                  <th>Start Time</th>
                                  <th>End Time</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>

                          <?php $count = 0 ?>
                            @foreach ($booking as $bookings)

                                <?php $count++ ?>
                                  <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $bookings['cus_name']}}</td>
                                     <td>{{ $bookings['cus_nu']}}</td>
                                     <td>{{ $bookings['room_name']}}</td>
                                     <td>{{ $bookings['room_price']}}</td>
                                     <td>{{ $bookings['start_time']}}</td>
                                     <td>{{ $bookings['end_time']}}</td>

                                    <td>

                                <div class="float-left"> 
                                  <a class="btn btn-info"
                                    href="{{ route('booking.edit', $bookings['id']) }}"><i
                                            class="la la-edit"></i></a>
                                </div>
                                <div class="float-right">
                                  <form method="POST" action="{{ route('booking.destroy',$bookings['id'])}}">
                                    @csrf
                                    @method('delete')
                  
                                    <button type="submit" class="btn btn-danger"><i
                                                 class="la la-trash"></i>
                                       
                                    </button>
                  
                                </form>
                                </div>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script>
  //CUSTOMER DEATILS APPEND
  $(document).ready(function () {
      $('#cus_id').on('change', function () {
      var cus_id = $(this).val();
      $('#cus_nic').val('');
        if(cus_id){
          $.ajax({
            url :"{{url('/get/getcus')}}/"+cus_id,
            type:"GET",
            dataType:"json",
            success:function(data){
              $('#cus_nic').empty();
              $.each(data,function(r){
                  $('#cus_nic').val(data[0].cus_nic);
                  $('#cus_nu').val(data[0].cus_nu);
              });
              $('#cus_nic').trigger("chosen:updated");
              $('#cus_nu').trigger("chosen:updated");
            },
          });
        }else{
          alert('Select Customer Name');
        }
  });
});


  //ROOM DEATILS APPEND
  $(document).ready(function () {
      $('#room_id').on('change', function () {
      var room_id = $(this).val();
        if(room_id){
          $.ajax({
            url :"{{url('/get/getroom')}}/"+room_id,
            type:"GET",
            dataType:"json",
            success:function(data){
              $('#room_type').empty();
              $.each(data,function(r){
                  $('#room_type').val(data[0].room_type);
                  $('#room_price').val(data[0].room_price);
              });
              $('#cus_nic').trigger("chosen:updated");
              $('#cus_nu').trigger("chosen:updated");
            },
          });
        }else{
          alert('Select Customer Name');
        }
  });
});
</script>


@endsection


