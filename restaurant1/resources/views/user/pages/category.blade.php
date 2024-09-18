{{-- <div class="section-title" style="margin-top: 50px" >
    <h4 style="color: #b0c364;text-align: center">Menu</h4>
    <h2 style="color: #b0c364;text-align: center">Check Our Tasty Menu</h2>
    <hr>
</div> --}}
<div class="post-catagory section-padding-100-0 mb-70">
    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s" style="margin-top: 50px">
        <h2 class="block-title text-center">
            Our Categories
        </h2>
        <p class="title-caption text-center">Check Our Tasty Categories</p>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Post Catagory -->
            @foreach ($category as $category)
                <a href="{{ route('show_category', $category->slug) }}">
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-post-catagory mb-30">
                            <img src="{{ Storage::url($category->image) }}" alt="">
                            <!-- Content -->
                            <div class="catagory-content-bg">
                                <div class="catagory-content">
                                    <a href="{{ route('show_category', $category->slug) }}"
                                        class="post-tag">{{ $category->created_at->format('M d,Y') }}</a>
                                    <a href="{{ route('show_category', $category->slug) }}"
                                        class="post-title">{{ $category->name }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div style="text-align: center; margin-top: 20px">
        <a  href="{{ route('moreCategory') }}" class="btn bueno-btn">Show More</a>
    </div>
</div>
