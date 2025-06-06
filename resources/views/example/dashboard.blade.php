@extends('.layout.main')
@section('title')
Dashboard
@endsection
@section('judul')
Dashboard
@endsection
@section('nav')
Dashboard
@endsection
{{-- @section('button')
<button type="button" class="btn btn-primary">Contoh Button</button>
@endsection --}}
@section('content')
<div class="row">
  <!-- support-section start -->
  <div class="col-xl-6 col-md-12">
      <div class="card flat-card">
          <div class="row-table">
              <div class="col-sm-6 card-body br">
                  <div class="row">
                      <div class="col-sm-4">
                          <i class="icon feather icon-users text-primary mb-1 d-block"></i>
                      </div>
                      <div class="col-sm-8 text-md-center">
                          <h5>1000</h5>
                          <span>Customers</span>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                  <div class="row">
                      <div class="col-sm-4">
                          <i class="icon feather icon-globe text-primary mb-1 d-block"></i>
                      </div>
                      <div class="col-sm-8 text-md-center">
                          <h5>$1252</h5>
                          <span>Revenue</span>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 card-body">
                  <div class="row">
                      <div class="col-sm-4">
                          <i class="icon feather icon-trending-up text-primary mb-1 d-block"></i>
                      </div>
                      <div class="col-sm-8 text-md-center">
                          <h5>600</h5>
                          <span>Growth</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row-table">
              <div class="col-sm-6 card-body br">
                  <div class="row">
                      <div class="col-sm-4">
                          <i class="icon feather icon-rotate-ccw text-primary mb-1 d-block"></i>
                      </div>
                      <div class="col-sm-8 text-md-center">
                          <h5>3550</h5>
                          <span>Returns</span>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                  <div class="row">
                      <div class="col-sm-4">
                          <i class="icon feather icon-download text-primary mb-1 d-block"></i>
                      </div>
                      <div class="col-sm-8 text-md-center">
                          <h5>3550</h5>
                          <span>Downloads</span>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 card-body">
                  <div class="row">
                      <div class="col-sm-4">
                          <i class="icon feather icon-shopping-cart text-primary mb-1 d-blockz"></i>
                      </div>
                      <div class="col-sm-8 text-md-center">
                          <h5>100%</h5>
                          <span>Order</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="card support-bar overflow-hidden">
                  <div class="card-body pb-0">
                      <h2 class="m-0">53.94%</h2>
                      <span class="text-primary">Conversion Rate</span>
                      <p class="mb-3 mt-3">Number of conversions divided by the total visitors. </p>
                  </div>
                  <div id="support-chart"></div>
                  <div class="card-footer border-0 bg-primary text-white background-pattern-white">
                      <div class="row text-center">
                          <div class="col">
                              <h4 class="m-0 text-white">10</h4>
                              <span>2018</span>
                          </div>
                          <div class="col">
                              <h4 class="m-0 text-white">15</h4>
                              <span>2017</span>
                          </div>
                          <div class="col">
                              <h4 class="m-0 text-white">13</h4>
                              <span>2016</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card support-bar overflow-hidden">
                  <div class="card-body pb-0">
                      <h2 class="m-0">1432</h2>
                      <span class="text-primary">Order delivered</span>
                      <p class="mb-3 mt-3">Total number of order delivered in this month.</p>
                  </div>
                  <div class="card-footer border-0">
                      <div class="row text-center">
                          <div class="col">
                              <h4 class="m-0">130</h4>
                              <span>May</span>
                          </div>
                          <div class="col">
                              <h4 class="m-0">251</h4>
                              <span>June</span>
                          </div>
                          <div class="col">
                              <h4 class="m-0 ">235</h4>
                              <span>July</span>
                          </div>
                      </div>
                  </div>
                  <div id="support-chart1"></div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-6 col-md-12">
      <div class="card">
          <div class="card-header">
              <h5>Department wise monthly sales report</h5>
          </div>
          <div class="card-body">
              <div class="row pb-2">
                  <div class="col-auto m-b-10">
                      <h3 class="mb-1">$21,356.46</h3>
                      <span>Total Sales</span>
                  </div>
                  <div class="col-auto m-b-10">
                      <h3 class="mb-1">$1935.6</h3>
                      <span>Average</span>
                  </div>
              </div>
              <div id="account-chart"></div>
          </div>
      </div>
  </div>
  <!-- support-section end -->
  <!-- customer-section start -->
  <div class="col-xl-6 col-md-12">
      <div class="card">
          <div class="card-body">
              <h6>Customer Satisfaction</h6>
              <span>It takes continuous effort to maintain high customer satisfaction levels Internal and external.</span>
              <div class="row d-flex justify-content-center align-items-center">
                  <div class="col">
                      <div id="satisfaction-chart"></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="card table-card">
          <div class="card-header">
              <h5>New Products</h5>
          </div>
          <div class="pro-scroll" style="height:255px;position:relative;">
              <div class="card-body p-0">
                  <div class="table-responsive">
                      <table class="table table-hover m-b-0">
                          <thead>
                              <tr>
                                  <th>Product Name</th>
                                  <th>Image</th>
                                  <th>Status</th>
                                  <th>Price</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>HeadPhone</td>
                                  <td><img src="assets/images/widget/p1.jpg" alt="" class="img-20"></td>
                                  <td>
                                      <div><label class="badge badge-light-warning">Pending</label></div>
                                  </td>
                                  <td>$10</td>
                                  <td><a href="#!"><i class="icon feather icon-edit f-16  text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a></td>
                              </tr>
                              <tr>
                                  <td>Iphone 6</td>
                                  <td><img src="assets/images/widget/p2.jpg" alt="" class="img-20"></td>
                                  <td>
                                      <div><label class="badge badge-light-danger">Cancel</label></div>
                                  </td>
                                  <td>$20</td>
                                  <td><a href="#!"><i class="icon feather icon-edit f-16  text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a></td>
                              </tr>
                              <tr>
                                  <td>Jacket</td>
                                  <td><img src="assets/images/widget/p3.jpg" alt="" class="img-20"></td>
                                  <td>
                                      <div><label class="badge badge-light-success">Success</label></div>
                                  </td>
                                  <td>$35</td>
                                  <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a></td>
                              </tr>
                              <tr>
                                  <td>Sofa</td>
                                  <td><img src="assets/images/widget/p4.jpg" alt="" class="img-20"></td>
                                  <td>
                                      <div><label class="badge badge-light-danger">Cancel</label></div>
                                  </td>
                                  <td>$85</td>
                                  <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a></td>
                              </tr>
                              <tr>
                                  <td>Iphone 6</td>
                                  <td><img src="assets/images/widget/p2.jpg" alt="" class="img-20"></td>
                                  <td>
                                      <div><label class="badge badge-light-success">Success</label></div>
                                  </td>
                                  <td>$20</td>
                                  <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a></td>
                              </tr>
                              <tr>
                                  <td>HeadPhone</td>
                                  <td><img src="assets/images/widget/p1.jpg" alt="" class="img-20"></td>
                                  <td>
                                      <div><label class="badge badge-light-warning">Pending</label></div>
                                  </td>
                                  <td>$50</td>
                                  <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a></td>
                              </tr>
                              <tr>
                                  <td>Iphone 6</td>
                                  <td><img src="assets/images/widget/p2.jpg" alt="" class="img-20"></td>
                                  <td>
                                      <div><label class="badge badge-light-danger">Cancel</label></div>
                                  </td>
                                  <td>$30</td>
                                  <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-6 col-md-12">
      <div class="row">
          <div class="col-sm-6">
              <div class="card prod-p-card background-pattern">
                  <div class="card-body">
                      <div class="row align-items-center m-b-0">
                          <div class="col">
                              <h6 class="m-b-5">Total Profit</h6>
                              <h3 class="m-b-0">$1,783</h3>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-money-bill-alt text-primary"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-6">
              <div class="card prod-p-card bg-primary background-pattern-white">
                  <div class="card-body">
                      <div class="row align-items-center m-b-0">
                          <div class="col">
                              <h6 class="m-b-5 text-white">Total Orders</h6>
                              <h3 class="m-b-0 text-white">15,830</h3>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-database text-white"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-6">
              <div class="card prod-p-card bg-primary background-pattern-white">
                  <div class="card-body">
                      <div class="row align-items-center m-b-0">
                          <div class="col">
                              <h6 class="m-b-5 text-white">Average Price</h6>
                              <h3 class="m-b-0 text-white">$6,780</h3>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-dollar-sign text-white"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-6">
              <div class="card prod-p-card background-pattern">
                  <div class="card-body">
                      <div class="row align-items-center m-b-0">
                          <div class="col">
                              <h6 class="m-b-5">Product Sold</h6>
                              <h3 class="m-b-0">6,784</h3>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-tags text-primary"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="card feed-card">
          <div class="card-header">
              <h5>Feeds</h5>
          </div>
          <div class="feed-scroll" style="height:385px;position:relative;">
              <div class="card-body">
                  <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                          <i data-feather="bell" class="badge-light-primary feed-icon"></i>
                      </div>
                      <div class="col">
                          <a href="#!">
                              <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-right f-14">Just Now</span></h6>
                          </a>
                      </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                          <i data-feather="shopping-cart" class="badge-light-danger feed-icon"></i>
                      </div>
                      <div class="col">
                          <a href="#!">
                              <h6 class="m-b-5">New order received <span class="text-muted float-right f-14">30 min ago</span></h6>
                          </a>
                      </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                          <i data-feather="file-text" class="badge-light-success feed-icon"></i>
                      </div>
                      <div class="col">
                          <a href="#!">
                              <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-right f-14">Just Now</span></h6>
                          </a>
                      </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                          <i data-feather="bell" class="badge-light-primary feed-icon"></i>
                      </div>
                      <div class="col">
                          <a href="#!">
                              <h6 class="m-b-5">You have 4 tasks Done. <span class="text-muted float-right f-14">1 hours ago</span></h6>
                          </a>
                      </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                          <i data-feather="file-text" class="badge-light-success feed-icon"></i>
                      </div>
                      <div class="col">
                          <a href="#!">
                              <h6 class="m-b-5">You have 2 pending tasks. <span class="text-muted float-right f-14">Just Now</span></h6>
                          </a>
                      </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                          <i data-feather="shopping-cart" class="badge-light-danger feed-icon"></i>
                      </div>
                      <div class="col">
                          <a href="#!">
                              <h6 class="m-b-5">New order received <span class="text-muted float-right f-14">4 hours ago</span></h6>
                          </a>
                      </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                          <i data-feather="shopping-cart" class="badge-light-danger feed-icon"></i>
                      </div>
                      <div class="col">
                          <a href="#!">
                              <h6 class="m-b-5">New order Done <span class="text-muted float-right f-14">Just Now</span></h6>
                          </a>
                      </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                          <i data-feather="file-text" class="badge-light-success feed-icon"></i>
                      </div>
                      <div class="col">
                          <a href="#!">
                              <h6 class="m-b-5">You have 5 pending tasks. <span class="text-muted float-right f-14">5 hours ago</span></h6>
                          </a>
                      </div>
                  </div>
                  <div class="row m-b-0 align-items-center">
                      <div class="col-auto p-r-0">
                          <i data-feather="bell" class="badge-light-primary feed-icon"></i>
                      </div>
                      <div class="col">
                          <a href="#!">
                              <h6 class="m-b-5">You have 4 tasks Done. <span class="text-muted float-right f-14">2 hours ago</span></h6>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- customer-section end -->
</div>
@endsection
