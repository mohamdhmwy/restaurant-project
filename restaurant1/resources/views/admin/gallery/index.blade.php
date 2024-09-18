@extends('admin.master')

@section('css')
@endsection



@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card" style="max-width: 100%">
                <div class="card-header">
                    <h4 style="margin-bottom: 20px">Add New Gallery</h4>
                    <div class="row" style="display: inline-block">
                        <form class="forms-sample" action="{{ route('gallery.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group" style="max-width: 200px">
                                <input type="file" name="image" class="form-control" id="input" placeholder=""
                                    required>
                            </div>


                            <button type="submit" class="btn btn-primary me-2">
                                <i class="mdi mdi-file-check btn-icon-prepend"></i>Add</button>

                            {{-- <button type="submit"  class="btn btn-primary">Add New gallery</button> --}}
                        </form>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">image</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        @php
                            $i = 1;
                        @endphp
                        <tbody>
                            @foreach ($gallery as $gallery)
                                <tr>
                                    <td>{{ $i++ }}</td>

                                    <td><img  src="{{ Storage::url($gallery->image) }}"
                                            style="width: 150px;height: 150px;border-radius:0%"></td>


                                    <td style="max-width: 250px;">
                                        



                                        @include('admin.deleteitem', [
                                            'type' => 'gallery',
                                            'data' => $gallery,
                                            'routes' => 'gallery.destroy',
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
