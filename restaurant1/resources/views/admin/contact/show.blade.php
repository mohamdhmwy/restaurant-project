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

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>

                        <th>Name</th>
                        <th>Email</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="td">{{ $contact->id }}</td>
                        <td id="td">{{ $contact->name }}</td>
                        <td id="td">{{ $contact->email }}</td>

                        <td>
                            <a href="{{ route('contacts.edit', $contact->id) }}"
                                class="btn btn-primary btn-sm float-left mr-1"
                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit"
                                data-placement="bottom"><i class="fas fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm dltBtn" data-id={{ $contact->id }}
                                style="height:30px; width:30px;border-radius:50%" data-bs-toggle="modal"
                                data-bs-target="#delete_{{ $contact->id }}" data-placement="bottom" title="Delete"><i
                                    class="fas fa-trash-alt"></i></button>

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
                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
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
                                <h4 class="text-center pb-4">MESSAGE INFORMATION</h4>
                                <table class="table">

                                    <tr>
                                        <td>Message Date</td>
                                        <td> : {{ $contact->created_at->format('D d M m, Y') }} at
                                            {{ $contact->created_at->format('g : i a') }} </td>
                                    </tr>

                                    <tr>
                                        <td>Message Status</td>
                                        @if ($contact->message_status == 'New')
                                            <td> : <span class="badge badge-primary">New</span>
                                            </td>
                                        @elseif($contact->message_status == 'Pendding')
                                            <td> : <span class="badge badge-warning">Pendding</span>
                                            </td>
                                        @elseif($contact->message_status == 'Finished')
                                            <td> : <span class="badge badge-success">Finished</span>
                                            </td>
                                        @endif
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-lg-6 col-lx-4">
                            <div class="shipping-info">
                                <h4 class="text-center pb-4">MESSAGE</h4>
                                <table class="table">
                                    <tr class="">

                                    {{ $contact->message }}
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
@endsection






@section('js')
@endsection
