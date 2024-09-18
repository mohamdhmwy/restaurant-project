@extends('admin.master')

@section('css')
    <style>
        #input {
            color: white;
        }
    </style>
@endsection



@section('body')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Update Event</h4>
                    <form class="form-sample" action="{{ route('event.update', $event->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="input" placeholder="Name"
                                value="{{ $event->name }}">
                        </div>
                        <div class="form-group">
                            <label for="des">Discription</label>
                            <input type="text" name="des" class="form-control" id="input"
                                placeholder="Discription" value="{{ $event->des }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="input" placeholder="Price"
                                value="{{ $event->price }}">
                        </div>
                        <div class="form-group">
                            <label for="Image">Image</label>
                            <input type="file" name="image" class="form-control" id="input" placeholder=""
                                value="{{ $event->image }}">
                        </div>


                        <button type="submit" class="btn btn-primary me-2">
                            <i class="mdi mdi-file-check btn-icon-prepend"></i>Save</button>

                    </form>
                </div>
            </div>
        </div>
    @endsection



    @section('js')
    @endsection
