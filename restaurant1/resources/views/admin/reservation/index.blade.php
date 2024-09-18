@extends('admin.master')

@section('css')
@endsection



@section('body')
    {{-- <div class="main-panel">
        <div class="content-wrapper"> --}}
            <div class="row">
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <a href="{{ route('reservation.index') }}" style="color: white;text-decoration: none">
                            <div class="card-body">
                                <h5>Total Reservation Last Day</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">{{ Helper::Total_Reservation_Last_Day() }} Reservation</h2>
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
        {{-- </div>
    </div> --}}



    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 style="margin-bottom: 20px" class="card-title">All Reservation</h4>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number people</th>
                                <th>Event</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        @php
                            $i = 1;
                        @endphp
                        <tbody>
                            @foreach ($reservation as $reservation)
                                <tr>

                                    <td> {{ $i++ }} </td>
                                    <td>{{ $reservation->full_name }}</td>
                                    <td>{{ $reservation->email }}</td>
                                    <td>{{ $reservation->number_people }}</td>
                                    <td>{{ $reservation->event }}</td>

                                    <td>{{ $reservation->date }} </td>
                                    <td>{{ $reservation->time }} </td>
                                    <td>
                                        {{-- <a href="{{ route('reservations.show', $reservation->id) }}"
                                            class="btn btn-warning btn-sm float-left mr-1"
                                            style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                            title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('reservations.edit', $reservation->id) }}"
                                            class="btn btn-primary btn-sm float-left mr-1"
                                            style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                            title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a> --}}

                                        <button type="submit" class="btn btn-danger btn-sm dltBtn"
                                            data-id={{ $reservation->id }} style="height:30px; width:30px;border-radius:50%"
                                            data-bs-toggle="modal" data-bs-target="#delete_{{ $reservation->id }}"
                                            data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_{{ $reservation->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('reservation.destroy', $reservation->id) }}"
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
