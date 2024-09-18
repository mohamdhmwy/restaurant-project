@extends('admin.master')

@section('css')
@endsection



@section('body')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 style="margin-bottom: 20px" class="card-title">All Notification</h4>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>Numper Order</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        @php
                            $i = 1;
                        @endphp
                        <tbody>
                            @foreach ($notification as $notification)
                                <tr>

                                        <td> {{ $i++ }} </td>
                                        <td>{{ $notification->order->id }}</td>
                                        <td>{{ $notification->order->fname }}</td>
                                        <td>{{ $notification->order->email }}</td>
                                        <td>{{ $notification->order->created_at }} </td>
                                        <td>
                                            <a href="{{ route('orderadmin.show', $notification->order->id) }}"
                                                class="btn btn-warning btn-sm float-left mr-1"
                                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
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
