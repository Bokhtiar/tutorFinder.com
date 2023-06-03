<div class="card">
    <div class="card-body">
        <h5 class="card-title">Display listing of village</h5>

        <!-- Table with stripped rows -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">City name</th>
                    <th scope="col">Village name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($villages as $item)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->city ? $item->city->city_name : 'data not found' }}</td>
                        <td>{{ $item->village_name }}</td>
                        <td class="d-flex items-center gap-2">
                            <a class="btn btn-sm btn-success" href="@route('village.edit', $item->village_id)"><i
                                    class="bi bi-pencil-square"></i></a>
                            <form action="@route('village.destroy', $item->village_id)" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit"><i
                                        class="bi bi-trash"></i></button>
                            </form>
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
