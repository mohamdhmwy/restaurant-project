@extends('admin.master')

@section('css')
@endsection



@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card" style="max-width: 100%">
                <div class="card-header">
                    <a href="{{ route('blog.create') }}" id="a" class="btn btn-primary">Add New Blog</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Discription</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @php
                            $i = 1;
                        @endphp
                        <tbody>
                            @foreach ($blog as $blog)
                                <tr>
                                    <td>{{ $i++ }}</td>

                                    <td style="max-width: 200px"><img style="width: 40%; border-radius:0%; height:40% ;"
                                            src="{{ Storage::url($blog->image) }}">
                                    </td>
                                    <td>{{ $blog->name }}</td>
                                    <td style="max-width: 100px;overflow: auto;">{{ $blog->dis }}</td>
                                    <td>{{ $blog->price }}</td>

                                    <td style="max-width: 250px;">
                                        <a type="submit" href="{{ route('blog.edit', $blog->id) }}"
                                            class="btn btn-primary btn-icon-text"> Edit <i
                                                class="mdi mdi-file-check btn-icon-append"></i>
                                        </a>



                                        @include('admin.deleteitem', [
                                            'type' => 'blog',
                                            'data' => $blog,
                                            'routes' => 'blog.destroy',
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
