<div class="blog-sidebar-header">
    <div class="container">
        <h4 class="title d-md-none float-left">Blog</h4>

        <div class="categories dropdown">
            <div class="dropdown-menu">
                <a class="dropdown-item" href="index.html">Business</a>
            </div>
            @foreach($categories as $category)
                <a href="{{route('blog.category', $category->slug)}}">{{$category->name}}</a>
            @endforeach
        </div>
        {{--            <div class="search">--}}
        {{--                <form>--}}
        {{--                    <input type="text" class="form-control" placeholder="Search the blog...">--}}
        {{--                    <a href="#">--}}
        {{--                        <i class="ion-search"></i>--}}
        {{--                    </a>--}}
        {{--                </form>--}}
        {{--            </div>--}}
    </div>
</div>
