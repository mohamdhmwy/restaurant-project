@extends('admin.master')

@section('css')
    {{-- <style>
        @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

        body {
            font-family: 'Rubik', sans-serif;
            background: #eee;
        }

        .container {
            margin-top: 270px !important;
        }

        button {
            font-size: calc(12px + (16 - 12) * ((100vw - 360px) / (1600 - 300))) !important;
        }

        p {
            font-size: calc(13px + (16 - 13) * ((100vw - 360px) / (1600 - 300))) !important;
        }


        button:focus {
            box-shadow: none !important;
            outline-width: 0;
        }

        .card {
            border-radius: 12px;
            width: calc(500px + 10 * ((100vw - 320px) / 680));
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.8);
        }

        .card-header {
            border-radius: 12px !important;
        }

        .modal-body .btn-danger {
            border-radius: 11px;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.2);
        }

        .btn-light {
            background: transparent !important;
            border: 0px !important;
        }

        .btn-light:hover {
            border-color: #fff !important;
        }

        .btn-light:active {
            border-color: #fff !important;
        }

        @media (max-width: 526px) {
            .card {
                width: unset;
            }
        }

        span {
            font-size: 30px !important;
        }

        .modal-content {
            background: transparent !important;
        }
    </style> --}}
    <style>
    </style>
@endsection




@section('body')
<div class="row">
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <a href="{{ route('orderadmin.index') }}" style="color: white;text-decoration: none">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Total Orders</h3>
                                {{-- <h3 class="mb-0">{{ Helper::TotalNewOrder() }}</h3> --}}
                                <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-primary ">
                                {{-- <span class="mdi mdi-arrow-top-right icon-item"></span> --}}
                                {{ Helper::TotalOrder() }}
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
</div>


    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 style="margin-bottom: 20px" class="card-title">All Order</h4>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>Name</th>
                                <th>QTY</th>
                                <th> Discount </th>
                                <th> Total </th>
                                <th> Delivery status </th>
                                <th> Payment status </th>
                                <th> Date </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        @php
                            $i = 1;
                        @endphp
                        <tbody>
                            @foreach ($order as $order)
                                <tr>
                                    <td> {{ $i++ }} </td>
                                    <td>{{ $order->fname }} {{ $order->lname }}</td>
                                    <td>{{ $order->qty }}</td>
                                    <td>{{ $order->coubon }}</td>
                                    <td>{{ $order->total }} $ </td>
                                    <td>
                                        @if ($order->delivery_states == 'pendding')
                                            <span class="btn btn-warning">{{ $order->delivery_states }}</span>
                                        @elseif($order->delivery_states == 'New')
                                            <span class="btn btn-primary">{{ $order->delivery_states }}</span>
                                        @elseif($order->delivery_states == 'Delivered')
                                            <span class="btn btn-success">{{ $order->delivery_states }}</span>
                                        @elseif($order->delivery_states == 'Cancelled')
                                            <span class="btn btn-danger">{{ $order->delivery_states }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($order->payment_states == 'Unpaid')
                                            <span class="btn btn-danger">{{ $order->payment_states }}</span>
                                        @else
                                            <span class="btn btn-success">{{ $order->payment_states }}</span>
                                        @endif
                                    </td>

                                    <td>{{ $order->created_at }} </td>
                                    <td>
                                        <a href="{{ route('orderadmin.show', $order->id) }}"
                                            class="btn btn-warning btn-sm float-left mr-1"
                                            style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                            title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('orderadmin.edit', $order->id) }}"
                                            class="btn btn-primary btn-sm float-left mr-1"
                                            style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                            title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>

                                        <button type="submit" class="btn btn-danger btn-sm dltBtn"
                                            data-id={{ $order->id }} style="height:30px; width:30px;border-radius:50%"
                                            data-bs-toggle="modal" data-bs-target="#delete_{{ $order->id }}"
                                            data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_{{ $order->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('orderadmin.destroy', $order->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="modal-body">
                                                            <h4> Are You Sure ? </h4>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
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
@endsection






@section('js')
@endsection
