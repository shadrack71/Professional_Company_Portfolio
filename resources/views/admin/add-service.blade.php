<x-admin.header />
<x-admin.aside />
<main id="main" class="main">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add New Service</h5>

            <!-- Vertical Form -->
            <form class="row g-3">

                <div class="col-12">
                    <label for="hero-desc" class="form-label">Service Name</label>
                    <input type="text" class="form-control" id="action-desc">
                </div>
                <div class="col-12">
                    <label for="hero-desc" class="form-label">Service Description</label>
                    <input type="text" class="form-control" id="action-desc">
                </div>
                <div class="col-12">
                    <label for="hero-image" class="form-label">Service banner image</label>
                    <input type="file" class="form-control" id="action-image">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">save</button>

                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</main>

<x-admin.footer />