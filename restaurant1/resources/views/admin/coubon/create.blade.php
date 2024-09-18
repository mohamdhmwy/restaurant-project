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

                    <h4 class="card-title">Add Coubon</h4>
                    <form class="forms-sample" action="{{ route('coubon.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="code">code</label>
                            <input type="text" name="code" class="form-control" id="input" placeholder="code"
                                value="{{ old('code') }}">
                        </div>
                        <div class="form-group">
                            <label for="value">value</label>
                            <input type="number" name="value" class="form-control" id="input" placeholder="value"
                                value="{{ old('value') }}">
                        </div>
                        <div class="form-group">
                            <label for="type">type</label>
                            <select class="form-control" name="type" aria-label="Default select example" style="color: white" id="exampleSelectGender">
                                <option id="input" value="fixed">fixed</option>
                                <option id="input" value="percent">percent</option>
                            </select>
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
