@extends('user.master')

@section('css')
    <style>
        .number-control {
            display: flex;
            align-items: center;
            margin-left: 100px
        }

        .number-left::before,
        .number-right::after {
            content: attr(data-content);
            background-color: #333333;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid black;
            width: 20px;
            color: white;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .number-left::before {
            content: "-";
        }

        .number-right::after {
            content: "+";
        }

        .number-quantity {
            padding: 0.25rem;
            border: 0;
            width: 50px;
            -moz-appearance: textfield;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .number-left:hover::before,
        .number-right:hover::after {
            background-color: #666666;
        }
    </style>
@section('title')
    {{ $menus->name }}
@endsection
@endsection
@section('body')
<div class="bueno-search-area section-padding-100-0 pb-70 bg-img"
    style="background-image: url({{ asset('user/assets/img/core-img/pattern.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="form-group mb-30">
                                <select class="form-control" id="recipe">
                                    <option value="">Recipe</option>
                                    <option value="">Recipe 1</option>
                                    <option value="">Recipe 2</option>
                                    <option value="">Recipe 3</option>
                                    <option value="">Recipe 4</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="form-group mb-30">
                                <select class="form-control" id="vegan">
                                    <option value="">Vegan</option>
                                    <option value="">Vegan 1</option>
                                    <option value="">Vegan 2</option>
                                    <option value="">Vegan 3</option>
                                    <option value="">Vegan 4</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="form-group mb-30">
                                <select class="form-control" id="ingredients">
                                    <option value="">Ingredients</option>
                                    <option value="">Ingredients 1</option>
                                    <option value="">Ingredients 2</option>
                                    <option value="">Ingredients 3</option>
                                    <option value="">Ingredients 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="form-group mb-30">
                                <button class="btn bueno-btn w-100">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@if ($menus->is_showing == 1)
    <div style="margin-top: 60px" class="big-posts-area mb-50">
        <div class="container">
            <!-- Single Big Post Area -->
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="big-post-thumbnail mb-50">
                        <img src="{{ Storage::url($menus->image) }}" alt="">
                    </div>
                </div>
                <input type="hidden" value="{{ $menus->price }}" id="price">
                <div class="col-12 col-md-6">
                    <div class="big-post-content text-center mb-50">
                        <a style="color: #b0c364" class="post-tag">{{ $menus->category->name }}</a>
                        <a class="post-title">{{ $menus->name }}</a>
                        <div class="post-meta">
                            <a class="post-date">{{ $menus->created_at->format('M d Y') }} </a>
                            <a style="font-size: 20px; color: #b0c364" id="price"
                                class="post-author">${{ $menus->price }}</a>
                        </div>
                        <p>{{ $menus->dis }}</p>
                        <h5></h5>
                        <div class="row">

                            <input type="hidden" value="{{ $menus->id }}" id="menu_id">
                            <div class="number-control">
                                <div onclick="this.parentNode.querySelector('input[type=number]').stepDown();"
                                    class="number-left">
                                </div>

                                <input type="number" value="1" min="1" readonly name="qty"
                                    id="qty" class="number-quantity">

                                <div onclick="this.parentNode.querySelector('input[type=number]').stepUp();"
                                    class="number-right"></div>
                            </div>
                            <button style="margin-left: 140px" onclick="addtocart()" class="btn bueno-btn">Add To
                                Cart
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 122.88 104.43" style="width: 30px; margin-left: 5px; ">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill-rule: evenodd;
                                            }
                                        </style>
                                    </defs>
                                    <path class="cls-1"
                                        d="M97,0A25.9,25.9,0,1,1,78.67,7.59,25.79,25.79,0,0,1,97,0ZM3.66,10.89a3.71,3.71,0,0,1,0-7.42H9.11A17.3,17.3,0,0,1,18,5.81c4.92,3.12,5.79,7.57,7,12.59H66.7a31,31,0,0,0-.9,7.33H27.14L35.5,57.19H94.77l0-.18c.72.05,1.44.08,2.17.08a31.59,31.59,0,0,0,5.46-.48l-1.29,5.18a3.62,3.62,0,0,1-3.57,2.82H37.47c1.32,4.88,2.63,7.51,4.42,8.74,2.16,1.4,5.92,1.5,12.21,1.4H96.64a3.67,3.67,0,1,1,0,7.33H54.19c-7.79.09-12.58-.09-16.44-2.63s-6-7.14-8.07-15.31h0L17.09,16.52c0-.09,0-.09-.09-.19a6.51,6.51,0,0,0-2.82-4.22A9.51,9.51,0,0,0,9,10.89H3.66ZM60.87,33.47a2.6,2.6,0,0,1,5.11,0V47.63a2.6,2.6,0,0,1-5.11,0V33.47Zm-15.3,0a2.6,2.6,0,0,1,5.11,0V47.63a2.6,2.6,0,0,1-5.11,0V33.47ZM85.66,86.4a9,9,0,1,1-9,9,9,9,0,0,1,9-9Zm-39.55,0a9,9,0,1,1-9,9,9,9,0,0,1,9-9Zm64.08-62.91V28.3a2.09,2.09,0,0,1-2.07,2.07h-6.66V37a2.08,2.08,0,0,1-2.07,2.07H94.58A2.07,2.07,0,0,1,92.51,37V30.37H85.85a2.08,2.08,0,0,1-2.07-2.07V23.49a2.07,2.07,0,0,1,2.07-2.07h6.66V14.76a2.07,2.07,0,0,1,2.07-2.07h4.81a2.08,2.08,0,0,1,2.07,2.07v6.66h6.66a2.08,2.08,0,0,1,2.07,2.07Z" />
                                </svg>
                            </button>


                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="comment_area clearfix mb-100">
                        <h4 class="mb-50">Comments</h4>

                        <ol>
                            @foreach ($comment as $comment)
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="{{ asset('user/assets/img/bg-img/user.webp') }}" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <div class="d-flex">
                                                <a href="#" class="post-author">{{ Auth::user()->name }}</a>
                                                <a href="#" class="post-date">{{ $comment->created_at->format('d M Y') }}</a>

                                            </div>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach


                        </ol>
                    </div>

                    <div class="post-a-comment-area mb-30 clearfix">
                        <h4 class="mb-50">Leave a Comments</h4>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="{{ route('Add_comment') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    {{-- <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Name*">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Email*">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Website">
                                    </div> --}}
                                    <input name="menu_id" value="{{ $menus->id }}" type="hidden">
                                    <input name="menu_slug" value="{{ $menus->slug }}" type="hidden">
                                    <div class="col-12">
                                        <textarea name="comment" required class="form-control" id="message" cols="30" rows="10"
                                            placeholder="Comments"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn bueno-btn mt-30" type="submit">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@else
    <div style="text-align: center; margin-bottom: 15%; margin-top: 7%">
        <h1> Soory that product unavailable</h1>
    </div>
@endif
@endsection
@section('js')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function addtocart() {
        var menu_id = $('#menu_id').val();
        var qty = $('#qty').val();
        var price = $('#price').val();
        console.log('menu_id :' + menu_id + 'qty : ' + qty + 'price : ' + price);
        $.ajax({
            method: 'POST',
            url: '{{ route('add_to_cart') }}',
            data: {
                'menu_id': menu_id,
                'qty': qty,
                'price': price,
            },
            success: function(res) {
                if (res.success) {
                    toastr.success('added to your cart successfuly', '', {
                        closeButton: true
                    })

                }
                if (res.succes) {
                    toastr.success('added one more successfully', '', {
                        closeButton: true
                    })
                }
                if (res.error) {
                    toastr.error('the product not found!', '', {
                        closeButton: true
                    })
                }
                if (res.erro) {
                    toastr.error('you have to login first!', '', {
                        closeButton: true
                    })
                }
            }
        });
    }
</script>
@endsection
