@extends('admin.master')

@section('css')
    <style>
        option {
            color: white
        }
    </style>
@endsection

@section('body')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 style="margin-bottom: 20px" class="card-title">Edit Order</h4>
                <hr>
                <form class="form-sample" action="{{ route('orderadmin.update', $order->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Delivery Status : </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="delivery_status" >
                                    <option  selected>{{ $order->delivery_states }}</option>
                                    <option value="New">New</option>
                                    <option value="pendding">Pendding</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Payment Status :</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="payment_status">
                                <option selected>{{ $order->payment_states }}</option>
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-icon-text">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i> Save </button>
                </form>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection

@section('js')
@endsection
