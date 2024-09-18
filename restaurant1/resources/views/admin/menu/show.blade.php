@extends('admin.master')

@section('title')
    Show-item
@endsection
@section('css')
    <style>
        #input {
            color: black
        }
    </style>
@endsection
@section('body')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Show item</h4>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $menu->name }}" id="input"
                                    name="name" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Slug</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input" value="{{ $menu->slug }}"
                                    name="slug" readonly />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <textarea name="title" class="form-control" id="input" readonly>{{ $menu->title }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Discription</label>
                            <div class="col-sm-9">
                                <textarea name="dis" class="form-control" id="input" readonly>{{ $menu->dis }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $menu->category->name }}" class="form-control" id="input" readonly>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="is_showing"
                                            id="membershipRadios1" {{ $menu->is_showing == 1 ? 'checked' : '' }}> Showing
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="spe" id="membershipRadios2"
                                            {{ $menu->special == 1 ? 'checked' : '' }}> Special </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="card-description"> prices </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="number" name="price" value="{{ $menu->price }}" id="input"
                                    class="form-control" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">

                                <img src="{{ Storage::url($menu->image) }}" style="width: 150px;height: 200px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">dis Price </label>
                            <div class="col-sm-9">
                                <input type="number" id="input" value="{{ $menu->dis_price }}" name="dis_price"
                                    class="form-control" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Type</label>
                            <div class="col-sm-9">
                                <ol class=" type" name="type[]" multiple="multiple" >

                                    @foreach ($menu->type as $type )
                                    <li>{{ $type }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection
@section('js')


@endsection
