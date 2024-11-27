<x-admin.header />
<x-admin.aside />
<main id="main" class="main">



    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Hero Section</h5>
            @if(session()->has('msg'))
            <div class=" alert alert-success">
                <p>
                    {{session('msg')}}
                </p>
            </div>
            @endif



            <!-- Vertical Form -->
            <form class="row g-3" action="{{route('admin.edit-hero-update',['hero'=>$hero])}}" method="post"
                name="heroForm" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="col-12">
                    <label for="hero-title" class="form-label">Hero title</label>
                    <input type="text" class="form-control" id="hero-title" name="hero_title"
                        value="{{old('hero_title',$hero->hero_title)}}">
                    @error('hero-title')
                    <p>

                        {{$message}}
                    </p>
                    @enderror

                </div>
                <div class="col-12">
                    <label for="hero-desc" class="form-label">Hero description</label>
                    <input type="text" class="form-control" id="hero-desc" name="hero_desc"
                        value="{{old('hero_desc',$hero->hero_desc)}}">

                    @error('hero-desc')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="hero-image" class="form-label">Hero image</label>
                    <input type="file" class="form-control" id="hero-image" name="hero_img">
                    <br>
                    <img src="{{asset($hero->hero_img_url)}}" alt="" style="max-width: 30%;">

                    @error('hero_img')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="hero-yt-link" class="form-label">Hero Youtube Link</label>
                    <input type="text" name="hero_link" class="form-control" id="hero-yt-link"
                        value="{{old('hero_link',$hero->hero_link)}}" placeholder="1234 Main St">
                    @error('hero_link')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="hero-tagline" class="form-label">Hero section Tagline</label>
                    <input type="text" name="hero_tagline" class="form-control" id="hero-tagline"
                        value="{{old('hero_tagline',$hero->hero_tagline)}}" placeholder="1234 Main St">
                    @error('hero_tagline')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>

                <!-- The  Hero card info 1 -->

                {{dd( explode(' ',$hero->hero_card_data))}}

                <div class="col-12">
                    <label for="hero-card-tagline1" class="form-label">Hero card taglines </label>
                    <p>add the tagline separating by comma</p>
                    <input type="text" name="hero_card_tagline1" class="form-control" id="hero-card-tagline1"
                        value="{{old('hero-card-tagline1', implode(',', array($hero->hero_card_data)))}}"
                        placeholder="1234 Main St">
                    @error('hero-card-tagline1')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>
                <!-- icon 1 -->
                <div class="col-12">
                    <label for="hero-icon1" class="form-label">Hero Card info Icon 1</label>
                    <input type="file" class="form-control" id="hero-card-icon1" name="hero_icon1">
                    <br>
                    <img src="{{asset($hero->hero_card_url_icon_1)}}" alt="" style="max-width: 30%;">

                    @error('hero_icon1')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>
                <!-- icon 2 -->
                <div class="col-12">
                    <label for="hero-icon2" class="form-label">Hero Card info Icon 2</label>
                    <input type="file" class="form-control" id="hero-card-icon2" name="hero_icon1">
                    <br>
                    <img src="{{asset($hero->hero_card_url_icon_2)}}" alt="" style="max-width: 30%;">

                    @error('hero_icon2')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>
                <!-- icon 3 -->
                <div class="col-12">
                    <label for="hero-icon3" class="form-label">Hero Card info Icon 3</label>
                    <input type="file" class="form-control" id="hero-card-icon3" name="hero_icon3">
                    <br>
                    <img src="{{asset($hero->hero_card_url_icon_3)}}" alt="" style="max-width: 30%;">

                    @error('hero_icon3')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>
                <!-- icon 4 -->

                <div class="col-12">
                    <label for="hero-icon1" class="form-label">Hero Card info Icon 4</label>
                    <input type="file" class="form-control" id="hero-card-icon1" name="hero_icon1">
                    <br>
                    <img src="{{asset($hero->hero_card_url_icon_4)}}" alt="" style="max-width: 30%;">

                    @error('hero_icon4')
                    <p>

                        {{$message}}
                    </p>
                    @enderror
                </div>
                <!--  end The  Hero card info 1 -->







                <div class="text-center">
                    <button type="submit" name="hero-submitBtn" class="btn btn-primary">Update Hero</button>

                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</main>

<x-admin.footer />