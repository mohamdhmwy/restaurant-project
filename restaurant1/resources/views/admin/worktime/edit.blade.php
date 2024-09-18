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

                    <h4 class="card-title">Add Day</h4>
                    <form class="forms-sample" action="{{ route('worktime.update', $worktime->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="day">Day</label>
                            <input type="text" name="day" class="form-control" id="input" placeholder="Day"
                                value="{{ $worktime->day }}">
                        </div>
                        <div class="form-group">
                            <label for="opening time">Opening Time</label>
                            <input type="text" name="opening_time" class="form-control" id="input"
                                placeholder="Opening Time" value="{{ $worktime->opening_time }}">
                        </div>
                        <div class="form-group">
                            <label for="closing time">Closing Time</label>
                            <input type="text" name="closing_time" class="form-control" id="input"
                                placeholder="Closing Time" value="{{ $worktime->closing_time }}">
                        </div>


                        <button type="submit" class="btn btn-primary me-2">
                            <i class="mdi mdi-file-check btn-icon-prepend"></i>save</button>

                    </form>
                </div>
            </div>
        </div>
    @endsection



    @section('js')
    @endsection
