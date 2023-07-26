@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Lurid</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-primary float-right">Daily</span>
                            <h5 class="card-title mb-0">Danh mục
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $allCate }}
                                </h2>
                            </div>

                        </div>

                        <div class="progress shadow-sm" style="height: 7px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-primary float-right">Per Week</span>
                            <h5 class="card-title mb-0">Sản phẩm</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $allProduct }}
                                </h2>
                            </div>

                        </div>

                        <div class="progress shadow-sm" style="height: 7px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-primary float-right">Per Month</span>
                            <h5 class="card-title mb-0">Khách Hàng</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{ $allUser }}
                                </h2>
                            </div>
                        </div>

                        <div class="progress shadow-sm" style="height: 7px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-primary float-right">All Time</span>
                            <h5 class="card-title mb-0">Đơn Hàng</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    0 </h2>
                            </div>

                        </div>

                        <div class="progress shadow-sm" style="height: 7px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right position-relative">
                            <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#" class="dropdown-item">Action</a></li>
                                <li><a href="#" class="dropdown-item">Another action</a></li>
                                <li><a href="#" class="dropdown-item">Something else here</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="#" class="dropdown-item">Separated link</a></li>
                            </ul>
                        </div>
                        <h4 class="card-title d-inline-block">Daily Sales</h4>

                        <div id="morris-donut-example" class="morris-chart" style="height: 260px;"></div>

                        <div class="row text-center mt-4">
                            <div class="col-6">
                                <h4>5,459</h4>
                                <p class="text-muted mb-0">Total Sales</p>
                            </div>
                            <div class="col-6">
                                <h4>18</h4>
                                <p class="text-muted mb-0">Open Compaign</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right position-relative">
                            <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#" class="dropdown-item">Action</a></li>
                                <li><a href="#" class="dropdown-item">Another action</a></li>
                                <li><a href="#" class="dropdown-item">Something else here</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="#" class="dropdown-item">Separated link</a></li>
                            </ul>
                        </div>
                        <h4 class="card-title d-inline-block">Statistics</h4>

                        <div id="morris-bar-example" class="morris-chart" style="height: 260px;"></div>

                        <div class="row text-center mt-4">
                            <div class="col-6">
                                <h4>$1875.54</h4>
                                <p class="text-muted mb-0">Revenue</p>
                            </div>
                            <div class="col-6">
                                <h4>541</h4>
                                <p class="text-muted mb-0">Total Offers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-right position-relative">
                            <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#" class="dropdown-item">Action</a></li>
                                <li><a href="#" class="dropdown-item">Another action</a></li>
                                <li><a href="#" class="dropdown-item">Something else here</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="#" class="dropdown-item">Separated link</a></li>
                            </ul>
                        </div>
                        <h4 class="card-title d-inline-block">Total Revenue</h4>

                        <div id="morris-line-example" class="morris-chart" style="height: 260px;"></div>

                        <div class="row text-center mt-4">
                            <div class="col-6">
                                <h4>$7841.12</h4>
                                <p class="text-muted mb-0">Total Revenue</p>
                            </div>
                            <div class="col-6">
                                <h4>17</h4>
                                <p class="text-muted mb-0">Open Compaign</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Recent Customers</h4>
                        <p class="card-subtitle mb-4 font-size-13">Transaction period from 21 July to 25
                            Aug</p>

                        <div class="table-responsive">
                            <table class="table table-centered table-striped table-nowrap">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>Create Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-user">
                                            <img src="assets/images/users/avatar-4.jpg" alt="table-user"
                                                class="mr-2 avatar-xs rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul
                                                J.
                                                Friend</a>
                                        </td>
                                        <td>
                                            937-330-1634
                                        </td>
                                        <td>
                                            pauljfrnd@jourrapide.com
                                        </td>
                                        <td>
                                            New York
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-user">
                                            <img src="assets/images/users/avatar-3.jpg" alt="table-user"
                                                class="mr-2 avatar-xs rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Bryan
                                                J.
                                                Luellen</a>
                                        </td>
                                        <td>
                                            215-302-3376
                                        </td>
                                        <td>
                                            bryuellen@dayrep.com
                                        </td>
                                        <td>
                                            New York
                                        </td>
                                        <td>
                                            09/12/2018
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-user">
                                            <img src="assets/images/users/avatar-8.jpg" alt="table-user"
                                                class="mr-2 avatar-xs rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Kathryn
                                                S.
                                                Collier</a>
                                        </td>
                                        <td>
                                            828-216-2190
                                        </td>
                                        <td>
                                            collier@jourrapide.com
                                        </td>
                                        <td>
                                            Canada
                                        </td>
                                        <td>
                                            06/30/2018
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-user">
                                            <img src="assets/images/users/avatar-1.jpg" alt="table-user"
                                                class="mr-2 avatar-xs rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Timothy
                                                Kauper</a>
                                        </td>
                                        <td>
                                            (216) 75 612 706
                                        </td>
                                        <td>
                                            thykauper@rhyta.com
                                        </td>
                                        <td>
                                            Denmark
                                        </td>
                                        <td>
                                            09/08/2018
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-user">
                                            <img src="assets/images/users/avatar-5.jpg" alt="table-user"
                                                class="mr-2 avatar-xs rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Zara
                                                Raws</a>
                                        </td>
                                        <td>
                                            (02) 75 150 655
                                        </td>
                                        <td>
                                            austin@dayrep.com
                                        </td>
                                        <td>
                                            Germany
                                        </td>
                                        <td>
                                            07/15/2018
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Account Transactions</h4>
                        <p class="card-subtitle mb-4 font-size-13">Transaction period from 21 July to 25
                            Aug</p>

                        <div class="table-responsive">
                            <table class="table table-borderless table-hover table-centered table-nowrap mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">4257 **** ****
                                                7852</h5>
                                            <span class="text-muted font-size-12">11 April 2020</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">$79.49</h5>
                                            <span class="text-muted font-size-12">Amount</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-17 mb-1 font-weight-normal"><i
                                                    class="fab fa-cc-visa"></i></h5>
                                            <span class="text-muted font-size-12">Card</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">Helen Warren
                                            </h5>
                                            <span class="text-muted font-size-12">Pay</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">4265 **** ****
                                                0025</h5>
                                            <span class="text-muted font-size-12">28 Jan 2020</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">$1254.00</h5>
                                            <span class="text-muted font-size-12">Amount</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-17 mb-1 font-weight-normal"><i
                                                    class="fab fa-cc-stripe"></i></h5>
                                            <span class="text-muted font-size-12">Card</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">Kayla Lambie
                                            </h5>
                                            <span class="text-muted font-size-12">Pay</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">5570 **** ****
                                                8547</h5>
                                            <span class="text-muted font-size-12">08 Dec 2018</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">$784.25</h5>
                                            <span class="text-muted font-size-12">Amount</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-17 mb-1 font-weight-normal"><i
                                                    class="fab fa-cc-amazon-pay"></i></h5>
                                            <span class="text-muted font-size-12">Card</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">Hugo Lavarack
                                            </h5>
                                            <span class="text-muted font-size-12">Pay</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">7845 **** ****
                                                5214</h5>
                                            <span class="text-muted font-size-12">03 Dec 2018</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">$485.24</h5>
                                            <span class="text-muted font-size-12">Amount</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-17 mb-1 font-weight-normal"><i
                                                    class="fab fa-cc-visa"></i></h5>
                                            <span class="text-muted font-size-12">Card</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">Amber Scurry
                                            </h5>
                                            <span class="text-muted font-size-12">Pay</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">4257 **** ****
                                                7852</h5>
                                            <span class="text-muted font-size-12">12 Nov 2018</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">$8964.04</h5>
                                            <span class="text-muted font-size-12">Amount</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-17 mb-1 font-weight-normal"><i
                                                    class="fab fa-cc-visa"></i></h5>
                                            <span class="text-muted font-size-12">Card</span>
                                        </td>
                                        <td>
                                            <h5 class="font-size-15 mb-1 font-weight-normal">Caitlyn Gibney
                                            </h5>
                                            <span class="text-muted font-size-12">Pay</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container-fluid -->
@endsection
