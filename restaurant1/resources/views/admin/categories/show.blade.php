@extends('admin.master')
@section('title')
Show-Category
@endsection
@section('css')
<style>
    #input{
        color: white
    }
</style>
@endsection
@section('body')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Show Category</h4>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="input" name="name"
                                        value="{{ $category->name }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">is showing </label>
                                <div class="col-sm-9">
                                    <input type="checkbox" class="form-check-input" name="is_showing"
                                        {{ ($category->is_showing == 1) ? 'checked' : ''}} />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Slug</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="input" name="slug"
                                        value="{{ $category->slug }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <img src="{{ Storage::url( $category->image ) }}"
                                    style="width: 150px;height: 200px;">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">discription</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" id="input" name="dis">{{ $category->dis }}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
        </div>
    </div>
@endsection
