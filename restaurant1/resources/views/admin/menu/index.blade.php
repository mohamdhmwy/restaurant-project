@extends('admin.master')
@section('title')
    Menus
@endsection
@section('body')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('menu.create') }}" style="margin-bottom: 30px" class="btn btn-primary btn-fw">Add New
                    item</a>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Image </th>
                                <th> Name </th>
                                <th> Slug </th>
                                <th> category </th>
                                <th> Is Showing </th>
                                <th> Special </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i = 1;
                            @endphp
                            @foreach ($menu as $menu)
                                <tr>
                                    <td> {{ $i++ }} </td>
                                    <td><img src="{{ Storage::url($menu->image) }}" class="image"
                                            style="width: 70%; border-radius:0%; height:70% ;"> </td>
                                    <td>{{ $menu->name }}</td>
                                    <td> {{ $menu->slug }} </td>
                                    <td> {{ $menu->category->name }}</td>
                                    <td>

                                        @if ($menu->is_showing == '1')
                                            <span class="badge badge-success">Showing</span>
                                        @else
                                            <span class="badge badge-danger">UnShowing</span>
                                        @endif
                                    </td>
                                    <td>

                                        @if ($menu->special == '1')
                                            <span class="badge badge-success">Special</span>
                                        @else
                                            <span class="badge badge-danger">Unspecial</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a type="submit" href="{{ route('menu.edit', $menu->id) }}"
                                            class="btn btn-primary btn-icon-text"> Edit <i
                                                class="mdi mdi-file-check btn-icon-append"></i>
                                        </a>

                                        <a href="{{ route('menu.show', $menu->id) }}" type="button"
                                            class="btn btn-success btn-icon-text" id="submit">
                                            <i class="mdi mdi-upload btn-icon-prepend"></i> Show </a>
                                        @include('admin.deleteitem', [
                                            'type' => 'menu',
                                            'data' => $menu,
                                            'routes' => 'menu.destroy',
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
