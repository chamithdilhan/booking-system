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
                    <form class="form" method="post" action="{{ route('customer-reg.store')}}">
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
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="cus_name">Customer Name</label>
                              <input id="cus_name" placeholder="Customer Name" class="form-control" name="cus_name" type="text">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="cus_nic">Customer NIC</label>
                              <input id="cus_nic" placeholder="Customer NIC" class="form-control" name="cus_nic" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="cus_address">Customer Address</label>
                              <input id="cus_address" placeholder="Customer Address" class="form-control" name="cus_address" type="text">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput4">Customer Number</label>
                               <input id="cus_nu" placeholder="Customer Number" class="form-control" name="cus_nu" type="text">
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
                        <h4 class="card-title">Customer Details</h4>
                        <a class="heading-elements-toggle">
                          <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                    </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                     <table class="table table-striped table-responsive table-bordered sourced-data">
                        <thead>
                            <tr>
                              <th>Customer Name</th>
                              <th>Customer NIC</th>
                              <th>Customer Address</th>
                              <th>Customer Number</th>
                              <th></th>
                              <th></th>


                            </tr>
                          </thead>
                          <tbody>
                          <?php $count = 0 ?>
                        @foreach ($customer_reg as $customer_regs)
                          <?php $count++ ?>
                            <tr>
                              <td>{{ $customer_regs['cus_name']}}</td>
                              <td>{{ $customer_regs['cus_nic']}}</td>
                              <td>{{ $customer_regs['cus_address']}}</td>
                              <td>{{ $customer_regs['cus_nu']}}</td>
                              <td>
                         
                              <a class="btn btn-info"
                                 href="{{ route('customer-reg.edit', $customer_regs['id']) }}"><i
                                         class="la la-edit"></i></a>
                              </td>
                               <td>
                            <form method="POST" action="{{ route('customer-reg.destroy',$customer_regs['id'])}}">
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
    </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
