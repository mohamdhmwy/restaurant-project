@extends('admin.master')

@section('css')
@endsection



@section('body')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 style="margin-bottom: 20px" class="card-title">Reservation</h4>

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
                                <tr>

                                    <td> {{ $i++ }} </td>
                                    <td>{{ $reservations->full_name }}</td>
                                    <td>{{ $reservations->email }}</td>
                                    <td>{{ $reservations->number_people }}</td>
                                    <td>{{ $reservations->event }}</td>

                                    <td>{{ $reservations->date }} </td>
                                    <td>{{ $reservations->time }} </td>
                                    <td>


                                        <button type="submit" class="btn btn-danger btn-sm dltBtn"
                                            data-id={{ $reservations->id }} style="height:30px; width:30px;border-radius:50%"
                                            data-bs-toggle="modal" data-bs-target="#delete_{{ $reservations->id }}"
                                            data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_{{ $reservations->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('reservation.destroy', $reservations->id) }}"
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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('js')
@endsection
