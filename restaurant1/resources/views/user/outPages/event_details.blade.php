@extends('user.master')

@section('css')
@section('title')
    Event
@endsection
@endsection
@section('body')
<div class="bueno-search-area section-padding-95-0 pb-70 bg-img"
    style="background-image: url({{ asset('user/assets/img/core-img/pattern.png') }}); ">
    <div class="container text-white py-5 text-center">
        <h1 class="display-4" style="margin-top: 40px">{{ $event->name }}</h1>
        <p class="lead mb-0"> </p>

    </div>
</div>
<div class="big-posts-area mb-50" style="margin-top: 120px">
    <div class="container">
        <!-- Single Big Post Area -->


        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="big-post-thumbnail mb-50">
                    <img src="{{ Storage::url($event->image) }}" style="height: 500px;">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="big-post-content text-center mb-50">
                    <a href="#" class="post-title">{{ $event->name }}</a>
                    <a href="#" style="font-size: 20px" class="post-tag">{{ $event->price }}$</a>
                    <div class="post-meta">
                        {{-- <a href="#" class="post-date">July 11, 2018</a>
                        <a href="#" class="post-author">By Julia Stiles</a> --}}
                    </div>
                    <p>{{ $event->des }}</p>
                    <a href="{{ route('show_Reservation_Form') }}" class="btn bueno-btn">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('js')
@endsection
