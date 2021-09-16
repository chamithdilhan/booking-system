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
                    <form class="form" method="post" action="{{ route('customer-reg.update',$customer_reg['id'])}}">
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
                        <h4 class="form-section"><i class="ft-user"></i> Update Customer</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="cus_name">Customer Name</label>
                              <input id="cus_name" placeholder="Customer Name" class="form-control" value="{{ old('cus_name') ?? $customer_reg['cus_name']  }}" name="cus_name" type="text">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="cus_nic">Customer NIC</label>
                              <input id="cus_nic" placeholder="Customer NIC" class="form-control" value="{{ old('cus_nic') ?? $customer_reg['cus_nic']  }}" name="cus_nic" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="cus_address">Customer Address</label>
                               <input id="cus_address" placeholder="Customer Address" class="form-control" value="{{ old('cus_address') ?? $customer_reg['cus_address']  }}" name="cus_address" type="text">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Customer Number</label>
                               <input id="cus_nu" placeholder="Customer Number" class="form-control" name="cus_nu" value="{{ old('cus_nu') ?? $customer_reg['cus_nu']  }}" type="text">
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
</div>
</div>

@endsection
