<div class="card">
    <div class="card-body">
        <h5 class="card-title">Display listing of countries</h5>

        <!-- Table with stripped rows -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($countries as $item)
                    <tr>
                        <th scope="row">1</th>
                        <td>Brandon Jacob</td>
                        <td>Designer</td>
                        <td>28</td>
                        <td>2016-05-25</td>
                    </tr>
                @empty
                    <h5 class="text-danger text-center">Data Not Available</h5>
                @endforelse

            </tbody>
        </table>
        <!-- End Table with stripped rows -->

    </div>
</div>
