@extends('user.master')

@section('title')
    Menu
@endsection
@section('css')
@endsection
@section('body')
    <div class="post-catagory section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Single Post Catagory -->


                @foreach ($categories as $category)
                    <a href="{{ route('show_category', $category->slug) }}">
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-post-catagory mb-30">
                                <img src="{{ Storage::url($category->image) }}" alt="">
                                <!-- Content -->
                                <div class="catagory-content-bg">
                                    <div class="catagory-content">
                                        <a href="{{ route('show_category', $category->id) }}"
                                            class="post-tag">{{ $category->created_at->format('M d,Y') }}</a>
                                        <a href="{{ route('show_category', $category->id) }}"
                                            class="post-title">{{ $category->name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>

            <div class="row">
                <div class="col-12">
                    <div class="pagination-area mt-70">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">01</a></li>
                                <li class="page-item active"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
