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

                    <h4 class="card-title">Edit Coubon</h4>
                    <form class="forms-sample" action="{{ route('coubon.update', $coubon->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="code">code</label>
                            <input type="text" name="code" class="form-control" id="input" placeholder="code"
                                value="{{ $coubon->code }}">
                        </div>
                        <div class="form-group">
                            <label for="value">value</label>
                            <input type="number" name="value" class="form-control" id="input" placeholder="value"
                                value="{{ $coubon->value }}">
                        </div>
                        <div class="form-group">
                            <label for="type">type</label>
                            <select class="form-control" name="type" aria-label="Default select example"
                                id="input">
                                <option id="input" value="fixed" {{ $coubon->type == 'fixed' ? 'selected' : '' }}>
                                    fixed</option>
                                <option id="input"
                                    value="percent" {{ $coubon->type == 'percent' ? 'selected' : '' }}>percent</option>
                            </select>
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
