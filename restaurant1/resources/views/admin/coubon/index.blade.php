@extends('admin.master')

@section('css')
@endsection



@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card" style="max-width: 100%">
                <div class="card-header">
                    <a href="{{ route('coubon.create') }}" id="a" class="btn btn-primary">Add New coubon</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">code</th>
                                <th scope="col">type</th>
                                <th scope="col">value</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @php
                            $i = 1;
                        @endphp
                        <tbody>
                            @foreach ($coubon as $coubon)
                            <tr>
                                <td>{{ $i++ }}</td>

                                <td>{{ $coubon->code }}</td>
                                <td>{{ $coubon->type }}</td>
                                <td>{{ $coubon->value }}</td>

                                <td style="max-width: 250px;">
                                    <a type="submit" href="{{ route('coubon.edit',$coubon->id) }}" class="btn btn-primary btn-icon-text"> Edit <i
                                            class="mdi mdi-file-check btn-icon-append"></i>
                                    </a>



                                    @include('admin.deleteitem', [
                                            'type' => 'coubon',
                                            'data' => $coubon,
                                            'routes' => 'coubon.destroy',
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
