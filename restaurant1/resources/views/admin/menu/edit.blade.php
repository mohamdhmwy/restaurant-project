@extends('admin.master')

@section('title')
    Update-item
@endsection
@section('css')
    <style>
        #input {
            color: white
        }
    </style>
@endsection
@section('body')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update item</h4>
                <form class="form-sample" action="{{ route('menu.update', $menu->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $menu->name }}" id="input"
                                        name="name" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Slug</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="input" value="{{ $menu->slug }}"
                                        name="slug" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <textarea name="title" class="form-control" id="input" required>{{ $menu->title }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Discription</label>
                                <div class="col-sm-9">
                                    <textarea name="dis" class="form-control" id="input" required>{{ $menu->dis }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="category_id" id="input" required>

                                        @foreach ($category as $category)
                                            <option id="input" value="{{ $category->id }}"
                                                {{ $menu->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">State</label>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="is_showing"
                                                id="membershipRadios1" {{ $menu->is_showing == 1 ? 'checked' : '' }}>
                                            Showing </label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="spe"
                                                id="membershipRadios2" {{ $menu->special == 1 ? 'checked' : '' }}> Special
                                        </label>
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
                                        class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" value="{{ $menu->image }}"
                                        class="form-control" />
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
                                        class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Type</label>
                                <div class="col-sm-9">
                                    <select class="form-control type" name="type[]" multiple="multiple" required>

                                        @foreach ($menu->type as $menu )
                                        <option selected>{{ $menu }}</option>
                                        @endforeach

                                        <option value="Break_fast">Breakfast</option>
                                        <option value="Lunch">Lunch</option>
                                        <option value="Dinner">Dinner</option>
                                        <option value="Healthy_food">Healthy food</option>
                                        <option value="vegetarian">vegetarian</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary btn-icon-text">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i> Save </button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    $(".type").select2({
        tags: true
    });
</script>

@endsection
