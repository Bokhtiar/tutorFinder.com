<div class="card">
    <div class="card-body">
        <h5 class="card-title">Display listing of Services</h5>

        <!-- Table with stripped rows -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $item)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->body }}</td>
                        <td> <img height="30" src="{{asset($item->image)}}" alt=""> </td>

                        <td class="d-flex items-center gap-2">
                            <a class="btn btn-sm btn-success" href="@route('services.edit', $item->service_id)"><i
                                    class="bi bi-pencil-square"></i></a>
                            <form action="@route('services.destroy', $item->service_id)" method="POST">
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
