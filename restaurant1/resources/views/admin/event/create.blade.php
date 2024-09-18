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

                    <h4 class="card-title">Add Event</h4>
                    <form class="forms-sample" action="{{ route('event.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="input" placeholder="Name" required
                                value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="des">Discription</label>
                            <input type="text" name="des" class="form-control" id="input" placeholder="Discription" required
                                value="{{ old('des') }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="input" placeholder="Price" required
                                value="{{ old('price') }}">
                        </div>
                        <div class="form-group">
                            <label for="Image">Image</label>
                            <input type="file" name="image" class="form-control" id="input" placeholder="" required
                                value="{{ old('image') }}">
                        </div>


                        <button type="submit" class="btn btn-primary me-2">
                            <i class="mdi mdi-file-check btn-icon-prepend"></i>Add</button>

                    </form>
                </div>
            </div>
        </div>
    @endsection



    @section('js')
    @endsection



