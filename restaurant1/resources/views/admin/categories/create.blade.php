@extends('admin.master')
@section('title')
Create-Category
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
                <h4 class="card-title">Create Category</h4>
                <form action="{{ route('category.store') }}" method="POST" class="form-sample" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="input" name="name" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">is showing </label>
                                <div class="col-sm-9">
                                    <input type="checkbox" class="form-check-input" name="is_showing" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Slug</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="input" name="slug" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" name="image" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">discription</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" id="input" name="dis" required></textarea>
                                </div>
                            </div>
                        </div>

                    </div>


                    <button type="submit" class="btn btn-primary btn-icon-text">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i> Add </button>
                </form>
            </div>
        </div>
    </div>
@endsection
