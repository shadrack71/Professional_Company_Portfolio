<x-admin.header />
<x-admin.aside />
<main id="main" class="main">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit call to Action</h5>

            <!-- Vertical Form -->
            <form class="row g-3">

                <div class="col-12">
                    <label for="hero-desc" class="form-label">Call to action description</label>
                    <input type="text" class="form-control" id="action-desc">
                </div>
                <div class="col-12">
                    <label for="hero-image" class="form-label">Call to action banner image</label>
                    <input type="file" class="form-control" id="action-image">
                </div>
                <div class="col-12">
                    <label for="hero-yt-link" class="form-label">Call to action Youtube Link</label>
                    <input type="text" class="form-control" id="action-yt-link" placeholder="1234 Main St">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">save</button>

                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</main>

<x-admin.footer />