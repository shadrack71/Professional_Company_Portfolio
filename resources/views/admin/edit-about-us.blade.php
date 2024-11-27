<x-admin.header />
<x-admin.aside />
<main id="main" class="main">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit About Us Section</h5>
            @if(session()->has('msg'))
            <div class=" alert alert-success">
                <p>
                    {{session('msg')}}
                </p>
            </div>
            @endif

            <!-- Vertical Form -->
            <form class="row g-3" action="{{route('admin.edit-about-us-update',['about' => $about])}}" method="post"
                name="aboutForm" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="col-12">
                    <label for="about-tagline" class="form-label">About Us Tagline</label>
                    <input type="text" class="form-control" id="about-tagline" name="about_tagline"
                        value="{{old('about_tagline',$about->about_tagline)}}">
                    @error('about_tagline')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="about-desc" class="form-label">About Us description</label>
                    <input type="text" class="form-control" id="about-desc" name="about_desc"
                        value="{{old('about_desc',$about->about_desc)}}">
                    @error('about_desc')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="about-img-tagline" class="form-label">About Us Image Tagline</label>
                    <input type="text" class="form-control" id="about-img-tagline" name="about_img_tagline"
                        value="{{old('about_img_tagline',$about->about_img_tagline)}}" placeholder="1234 Main St">
                    @error('about_img_tagline')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="about-image" class="form-label">About Us image</label>
                    <input type="file" class="form-control" name="about_image" id="about_image">
                    <br>
                    <img src="{{asset($about->about_image_url)}}" alt="" style="max-width: 30%;">
                    @error('about_image')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="about-yt-link" class="form-label">About Us Youtube Link</label>
                    <input type="text" class="form-control" name="about_yt_link" id="about-yt-link"
                        value="{{old('about_yt_link',$about->about_yt_link)}}" placeholder="1234 Main St">
                    @error('about_yt_link')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="about-yt-banner-image" class="form-label">About Us Youtube Banner</label>
                    <input type="file" class="form-control" name="about_yt_banner_image" id="about-yt-banner-image">
                    <br>
                    <img src="{{asset($about->about_yt_banner_image)}}" alt="" style="max-width: 30%;">
                    @error('about_yt_banner_image')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">update</button>

                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</main>

<x-admin.footer />