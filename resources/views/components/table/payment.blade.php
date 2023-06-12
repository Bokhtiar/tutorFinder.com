<div class="card">
    <div class="card-body">
        <h5 class="card-title">Display tutor payment list</h5>

        <!-- Table with stripped rows -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Student name</th>
                    <th scope="col">Tutor name</th>
                    <th scope="col">Payment name</th>
                    <th scope="col">Payment number</th>
                    <th scope="col">Transection id</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($payments as $item)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->user ? $item->user->name : '' }}</td>
                        <td>{{ $item->tutor ? $item->tutor->name : '' }}</td>
                        <td>{{ $item->payment_name }}</td>
                        <td>{{ $item->payment_number }}</td>
                        <td>{{ $item->transection_id }}</td>
                        <td>
                            <a href="@route('tutor.show', $item->tutor_id )" class="btn btn-sm btn-success"><i class="bi bi-eye"></i></a>
                        </td>
                    </tr>
                @empty
                    <h5 class="text-danger text-center">Data Not Available</h5>
                @endforelse

            </tbody>
        </table>
        <!-- End Table with stripped rows -->

    </div>
</div>
