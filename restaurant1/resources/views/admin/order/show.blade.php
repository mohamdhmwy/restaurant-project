@extends('admin.master')

@section('css')
    <style>
        #td {
            color: white
        }
    </style>
@endsection


@section('body')
    <div class="card">

        <div class="card-body">
            {{-- @if ($order) --}}
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>

                        <th>Name</th>
                        <th>Email</th>
                        <th>Qty.</th>

                        <th>Total</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="td">{{ $order->id }}</td>

                        <td id="td">{{ $order->fname }} {{ $order->lname }}</td>
                        <td id="td">{{ $order->email }}</td>
                        <td id="td">{{ $order->qty }}</td>

                        <td id="td">${{ $order->total }}</td>

                        <td>
                            <a href="{{ route('orderadmin.edit', $order->id) }}" class="btn btn-primary btn-sm float-left mr-1"
                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit"
                                data-placement="bottom"><i class="fas fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm dltBtn" data-id={{ $order->id }}
                                style="height:30px; width:30px;border-radius:50%" data-bs-toggle="modal"
                                data-bs-target="#delete_{{ $order->id }}" data-placement="bottom" title="Delete"><i
                                    class="fas fa-trash-alt"></i></button>

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
                                        <form action="{{ route('orderadmin.destroy', $order->id) }}" method="POST">
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
                </tbody>
            </table>

            <section class="confirmation_part section_padding" style="margin-top: 30px">
                <div class="order_boxes">
                    <div class="row">
                        <div class="col-lg-6 col-lx-4">
                            <div class="order-info">
                                <h4 class="text-center pb-4">ORDER INFORMATION</h4>
                                <table class="table">

                                    <tr>
                                        <td>Order Date</td>
                                        <td> : {{ $order->created_at->format('D d M m, Y') }} at
                                            {{ $order->created_at->format('g : i a') }} </td>
                                    </tr>
                                    <tr>
                                        <td>Quantity</td>
                                        <td> : {{ $order->qty }}</td>
                                    </tr>
                                    <tr>
                                        <td>Delivery Status</td>
                                        @if ($order->delivery_states == 'pendding')
                                            <td> : <span class="badge badge-warning">{{ $order->delivery_states }}</span>
                                            </td>
                                        @elseif($order->delivery_states == 'Delivered')
                                            <td> : <span class="badge badge-success">{{ $order->delivery_states }}</span>
                                            </td>
                                        @elseif($order->delivery_states == 'New')
                                            <td> : <span class="badge badge-primary">{{ $order->delivery_states }}</span>
                                            </td>
                                        @elseif($order->delivery_states == 'Cancelled')
                                            <td> : <span class="badge badge-danger">{{ $order->delivery_states }}</span>
                                            </td>
                                        @endif


                                    </tr>

                                    <tr>
                                        <td>Coupon</td>
                                        <td> : $ {{ $order->coubon }}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Amount</td>
                                        <td> : $ {{ $order->total }}</td>
                                    </tr>
                                    <tr>
                                        <td>Payment Method</td>
                                        <td> :
                                            @if ($order->payment_method == 'Cash_On_Delivery')
                                                Cash on Delivery
                                            @elseif($order->payment_method == 'Card_Payment')
                                                Card Payment
                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Payment Status</td>
                                        <td> :
                                            @if ($order->payment_states == 'Paid')
                                                <span class="badge badge-success">Paid</span>
                                            @elseif($order->payment_states == 'Unpaid')
                                                <span class="badge badge-danger">Unpaid</span>
                                            @else
                                                {{ $order->payment_states }}
                                            @endif
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>

                        <div class="col-lg-6 col-lx-4">
                            <div class="shipping-info">
                                <h4 class="text-center pb-4">SHIPPING INFORMATION</h4>
                                <table class="table">
                                    <tr class="">
                                        <td>Full Name</td>
                                        <td> : {{ $order->fname }} {{ $order->lname }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td> : {{ $order->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone No.</td>
                                        <td> : {{ $order->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td> : {{ $order->address }} , {{ $order->address2 }}</td>
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        <td> : {{ $order->country }}</td>
                                    </tr>
                                    <tr>
                                        <td>Zip Code</td>
                                        <td> : {{ $order->zip }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- @endif --}}

        </div>
    </div>
@endsection






@section('js')
@endsection
