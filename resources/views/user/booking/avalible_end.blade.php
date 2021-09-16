@extends('layouts.layouts')
@section('content')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
      
        <div class="content-body">
          <!-- HTML5 export buttons table -->
          <section id="html5">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Room Booking</h4>
                          </div>
              <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                      <table class="table table-striped table-responsive table-bordered sourced-data">
                          <thead>
                              <tr>
                                  <th>Customer Name</th>
                                  <th>Customer Nu</th>
                                  <th>Room Name</th>
                                  <th>Room Price</th>
                                  <th>Room Type</th>
                                  <th>Start Time</th>
                                  <th>End Time</th>
                              </tr>
                          </thead>
                          <tbody>

                          <?php $count = 0 ?>
                            @foreach ($booking as $bookings)

                                <?php $count++ ?>
                                  <tr>
                                    <td>{{ $bookings['cus_name']}}</td>
                                     <td>{{ $bookings['cus_nu']}}</td>
                                     <td>{{ $bookings['room_name']}}</td>
                                     <td>{{ $bookings['room_price']}}</td>
                                     <td>{{ $bookings['room_type']}}</td>
                                     <td>{{ $bookings['start_time']}}</td>
                                     <td>{{ $bookings['end_time']}}</td>
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


@endsection


