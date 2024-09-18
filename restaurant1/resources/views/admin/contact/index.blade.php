@extends('admin.master')

@section('css')
@endsection



@section('body')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 style="margin-bottom: 20px" class="card-title">All Message</h4>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>State</th>
                                <th>Date</th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        @php
                            $i = 1;
                        @endphp
                        <tbody>
                            @foreach ($contact as $contact)
                                <tr>

                                    <td> {{ $i++ }} </td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>
                                        @if ($contact->message_status == 'New')
                                            <span class="btn btn-primary">{{ $contact->message_status }}</span>
                                        @elseif ($contact->message_status == 'Pendding')
                                            <span class="btn btn-warning">{{ $contact->message_status }}</span>
                                        @else
                                            <span class="btn btn-success">{{ $contact->message_status }}</span>
                                        @endif
                                        
                                    </td>

                                    <td>{{ $contact->created_at }} </td>
                                    <td>
                                        <a href="{{ route('contacts.show', $contact->id) }}"
                                            class="btn btn-warning btn-sm float-left mr-1"
                                            style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                            title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('contacts.edit', $contact->id) }}"
                                            class="btn btn-primary btn-sm float-left mr-1"
                                            style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                            title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>

                                        <button type="submit" class="btn btn-danger btn-sm dltBtn"
                                            data-id={{ $contact->id }} style="height:30px; width:30px;border-radius:50%"
                                            data-bs-toggle="modal" data-bs-target="#delete_{{ $contact->id }}"
                                            data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_{{ $contact->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('contacts.destroy', $contact->id) }}"
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
