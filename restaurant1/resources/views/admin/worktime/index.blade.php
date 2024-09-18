@extends('admin.master')

@section('css')
@endsection



@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card" style="max-width: 100%">
                <div class="card-header">
                    <a href="{{ route('worktime.create') }}" id="a" class="btn btn-primary">Add New Day</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">day</th>
                                <th scope="col">opening time</th>
                                <th scope="col">closing time</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        @php
                            $i = 1;
                        @endphp
                        <tbody>
                            @foreach ($worktime as $worktime)
                            <tr>
                                <td>{{ $i++ }}</td>

                                <td>{{ $worktime->day }}</td>
                                <td>{{ $worktime->opening_time }}</td>
                                <td>{{ $worktime->closing_time }}</td>

                                <td style="max-width: 250px;">
                                    <a type="submit" href="{{ route('worktime.edit',$worktime->id) }}" class="btn btn-primary btn-icon-text"> Edit <i
                                            class="mdi mdi-file-check btn-icon-append"></i>
                                    </a>



                                    @include('admin.deleteitem', [
                                            'type' => 'worktime',
                                            'data' => $worktime,
                                            'routes' => 'worktime.destroy',
                                        ])


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
