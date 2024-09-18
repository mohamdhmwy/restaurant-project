@extends('admin.master')
@section('css')
@endsection
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <a href="{{ route('order_status', 'New') }}" style="color: white;text-decoration: none">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center align-self-start">
                                            <h3 class="mb-0">Total New Order</h3>
                                            {{-- <h3 class="mb-0">{{ Helper::TotalNewOrder() }}</h3> --}}
                                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon icon-box-primary ">
                                            {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                                            {{ Helper::TotalNewOrder() }}
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Click for details </h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <a href="{{ route('order_status', 'Pendding') }}" style="color: white;text-decoration: none">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center align-self-start">
                                            <h3 class="mb-0">Total Pendding Order</h3>
                                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon icon-box-warning">
                                            {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                                            {{ Helper::TotalPenddingOrder() }}
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Click for details </h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <a href="{{ route('order_status', 'Delivered') }}" style="color: white;text-decoration: none">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center align-self-start">
                                            <h3 class="mb-0">Total Delivered Order</h3>
                                            {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon icon-box-success">
                                            {{-- <span class="mdi mdi-arrow-bottom-left icon-item"></span> --}}
                                            {{ Helper::TotalDeliveredOrder() }}
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Click for details </h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <a href="{{ route('order_status', 'Cancelled') }}" style="color: white;text-decoration: none">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center align-self-start">
                                            <h3 class="mb-0">Total Cancelled Order</h3>
                                            {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon icon-box-danger ">
                                            {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                                            {{ Helper::TotalCancelledOrder() }}
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Click for details </h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <a href="{{ route('orderadmin.index') }}" style="color: white;text-decoration: none">
                            <div class="card-body">
                                <h5>Total Orders</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">{{ Helper::TotalOrder() }} Orders</h2>
                                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Click for details</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <a href="{{ route('orderadmin.index') }}" style="color: white;text-decoration: none">
                            <div class="card-body">
                                <h5>Total Sales</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">${{ Helper::TotalSales() }} Sales</h2>
                                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Click for details</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Total Users</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">{{ Helper::TotalUsers() }} Users</h2>
                                        <p class="text-danger ms-2 mb-0 font-weight-medium"> </p>
                                    </div>
                                    <h6 class="text-muted font-weight-normal"></h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <a href="{{ route('reservation.index') }}" style="color: white;text-decoration: none">
                        <div class="card-body">
                            <h5>Total Reservation</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">{{ Helper::Count_Reservation() }} Reservation</h2>
                                        <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Click for details</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <a href="{{ route('order_time', Helper::Month()) }}" style="color: white;text-decoration: none">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">Total Order Last Month</h3>
                                        {{-- <h3 class="mb-0">{{ Helper::TotalNewOrder() }}</h3> --}}
                                        <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-primary ">
                                        {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                                        {{ Helper::TotalOrderLastMonth() }}
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Click for details </h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <a href="{{ route('order_time', Helper::Month()) }}" style="color: white;text-decoration: none">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">Total Sales Last Month</h3>
                                        <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-primary">
                                        {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                                        ${{ Helper::TotalSalesLastMonth() }}
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Click for details </h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <a href="{{ route('order_time', Helper::Week()) }}" style="color: white;text-decoration: none">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">Total Order Last Week</h3>
                                        {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p> --}}
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-warning">
                                        {{-- <span class="mdi mdi-arrow-bottom-left icon-item"></span> --}}
                                        {{ Helper::TotalOrderLastWeek() }}
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Click for details </h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <a href="{{ route('order_time', Helper::Week()) }}" style="color: white;text-decoration: none">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">Total Sales Last Week</h3>
                                        {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-warning ">
                                        {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                                        ${{ Helper::TotalSalesLastWeek() }}
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Click for details </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <a href="{{ route('order_time', Helper::Day()) }}" style="color: white;text-decoration: none">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">Total Order Last Day</h3>
                                        {{-- <h3 class="mb-0">{{ Helper::TotalNewOrder() }}</h3> --}}
                                        <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success ">
                                        {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                                        {{ Helper::TotalOrderLastDay() }}
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Click for details </h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <a href="{{ route('order_time', Helper::Day()) }}" style="color: white;text-decoration: none">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0">Total Sales Last Day </h3>
                                        <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success">
                                        {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                                        ${{ Helper::TotalSalesLastDay() }}
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Click for details </h6>
                        </div>
                    </a>
                </div>
            </div>

        </div>




    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
    </div>
@endsection
@section('js')
@endsection
