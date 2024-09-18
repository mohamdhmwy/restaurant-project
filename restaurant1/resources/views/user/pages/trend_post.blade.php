<div class="treading-post-area" id="treadingPost">
    <div class="close-icon">
        <i class="fa fa-times"></i>
    </div>

    <h4>Treading Post</h4>

    @foreach (Helper::trend_blog() as $blog )


    <div class="single-blog-post style-1 d-flex flex-wrap mb-30">
        <!-- Blog Thumbnail -->
        <div class="blog-thumbnail">
            <img src="{{ Storage::url($blog->image) }}" alt="">
        </div>
        <!-- Blog Content -->
        <div class="blog-content">
            <a href="#" class="post-tag">The Best</a>
            <a href="#" class="post-title">{{ $blog->name }}</a>
            <div class="post-meta">
                <a href="#" class="post-date">{{ $blog->created_at->format('M d, Y') }}</a>
                <a href="#" class="post-author">By Julia Stiles</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
