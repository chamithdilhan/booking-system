@extends('layouts.layouts')
@section('content')

 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        @foreach ($room as $rooms)
           @if($rooms->is_booking == 1)
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="info">{{ $rooms['room_name']}}</h3>
                    <h6>End Time : {{ $rooms['booking_endtime']}}</h6>
                  </div>
                  <div>
                    <p class="float-right">{{ $rooms['room_type']}}</p>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @else 
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="info">{{ $rooms['room_name']}}</h3>
                    <h6>Available</h6>
                  </div>
                  <div>
                    <p class="float-right">{{ $rooms['room_type']}}</p>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
        @endforeach

      </div>
    </div>
  </div>




@endsection
