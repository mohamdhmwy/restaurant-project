{{-- <div class="container d-flex justify-content-center">
    <button class="btn btn-danger  " data-toggle="modal" data-target="#delete_{{ $type }}_{{ $data->id }}"><i
            class="fa fa-trash"></i></button>
    <div id="delete_{{ $type }}_{{ $data->id }}" class="modal fade" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body p-0">
                    <div class="card border-0 p-sm-3 p-2 justify-content-center">


                        <form action="{{ route($routes, $data->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <div class="card-header pb-0 bg-white border-0 ">
                                <div class="row">
                                    <div class="col ml-auto"><button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>
                                </div>
                                <p class="font-weight-bold mb-2"> Are you sure you wanna delete this ?
                                    {{ $data->id }}</p>
                                <p class="text-muted "> This change will reflect in your portal after an hour.</p>
                            </div>


                            <div class="card-body px-sm-4 mb-2 pt-1 pb-0">
                                <div class="row justify-content-end no-gutters">
                                    <div class="col-auto"><button type="button" class="btn btn-light text-muted"
                                            data-dismiss="modal">Cancel</button></div>
                                    <div class="col-auto"><button type="submit" class="btn btn-danger px-4"
                                            data-dismiss="modal">Delete</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}



<!-- Button trigger modal -->
<button type="submit" class="btn btn-danger btn-icon-text" data-bs-toggle="modal"
    data-bs-target="#delete_{{ $type }}_{{ $data->id }}"><i class="mdi mdi-alert btn-icon-prepend"></i>
    <i class="fa fa-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="delete_{{ $type }}_{{ $data->id }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route($routes, $data->id) }}" method="post">
                @method('DELETE')
                @csrf

                <div class="modal-body">
                    <h4> Are You Sure ? </h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>




