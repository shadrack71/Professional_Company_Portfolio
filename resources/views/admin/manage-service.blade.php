<x-admin.header />
<x-admin.aside />
<main id="main" class="main">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">With Icons</h5>

            <!-- List group With Icons -->
            <ul class="list-group">
                <li class="list-group-item mt-2"><i class="bi bi-star me-1 text-success"></i>
                    <form action="{{route('deleteblog')}}" method="post" name="deleteblog">
                        @method("delete")
                        @csrf
                        <button class="btn btn-sm btn-danger">delete</button>
                    </form>

                </li>
                <li class="list-group-item mt-2"><i class="bi bi-collection me-1 text-primary"></i> A second item</li>
                <li class="list-group-item"><i class="bi bi-check-circle me-1 text-danger"></i> A third item</li>
                <li class="list-group-item"><i class="bi bi-exclamation-octagon me-1 text-warning"></i> A fourth item
                </li>
            </ul><!-- End List group With Icons -->

        </div>
    </div>


</main>
<x-admin.footer />