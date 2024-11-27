<x-admin.header />
<x-admin.aside />
<main id="main" class="main">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add New blog</h5>

            <x-flash-msg :flashAlert='success' />

            <!-- Vertical Form -->
            <form class="row g-3" action="{{route('add-blog')}}" name="blogForm" enctype="multipart/form-data"
                method="post">
                @method("post")
                @csrf

                <div class="col-12">
                    <label for="blog-tilte" class="form-label">Blog Title</label>
                    <input type="text" class="form-control" id="blog-title" name="blog_title">

                    @error('blog_title')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="blog-img" class="form-label">Blog banner image</label>
                    <input type="file" class="form-control" id="blog-img" name="blog_img">
                    @error('img_banner')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="blog-tag" class="form-label">Blog tags</label>
                    <input type="text" class="form-control" id="blog-tag" name="blog_tag">
                    @error('blog_tag')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="blogContent" class="form-label"> Blog content </label>
                    <textarea name="blog_content" id="blogContent" name="blog-content" cols="30" rows="10"
                        class="form-control"></textarea>

                    @error('blog_content')
                    <p>

                        {{$message}}
                    </p>
                    @enderror

                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">save</button>

                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</main>

<x-admin.footer />