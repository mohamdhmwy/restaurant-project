@extends('admin.master')
@section('title')
    Category
@endsection
@section('body')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('category.create') }}" style="margin-bottom: 30px" class="btn btn-primary btn-fw">Add New
                    Category</a>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Image </th>
                                <th> Name </th>
                                <th> Slug </th>
                                <th> Discription </th>
                                <th> Is showing </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i = 1;
                            @endphp
                            @foreach ($category as $category)
                                <tr>
                                    <td> {{ $i++ }} </td>
                                    <td><img src="{{ Storage::url($category->image) }}" class="image"
                                            style="width: 30%; border-radius:0%; height:40% ;"> </td>
                                    <td>{{ $category->name }}</td>
                                    <td> {{ $category->slug }} </td>
                                    <td> {{ $category->dis }} </td>
                                    <td>

                                        @if ($category->is_showing == '1')
                                            <span class="badge badge-success">Showing</span>
                                        @else
                                            <span class="badge badge-danger">UnShowing</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a type="submit" href="{{ route('category.edit', $category->id) }}"
                                            class="btn btn-primary btn-icon-text"> Edit <i
                                                class="mdi mdi-file-check btn-icon-append"></i>
                                        </a>

                                        <a href="{{ route('category.show', $category->id) }}" type="button"
                                            class="btn btn-success btn-icon-text" id="submit">
                                            <i class="mdi mdi-upload btn-icon-prepend"></i> Show </a>
                                        @include('admin.deleteitem', [
                                            'type' => 'category',
                                            'data' => $category,
                                            'routes' => 'category.destroy',
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
