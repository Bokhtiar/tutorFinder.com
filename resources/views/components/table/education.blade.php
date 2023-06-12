<div class="card">
    <div class="card-body">
        <h5 class="card-title">Display listing of Tutor Education</h5>

        <!-- Table with stripped rows -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Name</th>
                    <th scope="col">Institute</th>
                    <th scope="col">Degree</th>
                    <th scope="col">Result</th>
                    @if (@$action == true)
                        <th scope="col">Action</th>    
                    @endif
                    
                </tr>
            </thead>
            <tbody>
                @forelse ($educations as $item)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->tutor ? $item->tutor->name : "data not found" }}</td>
                        <td>{{ $item->institute_name }}</td>
                        <td>{{ $item->degree_name }}</td>
                        <td>{{ $item->result }}</td>
                        @if (@$action == true)
                        <td class="d-flex items-center gap-2">
                            <a class="btn btn-sm btn-success" href="@route('tutor-education.edit', $item->tutor_education_id)"><i
                                    class="bi bi-pencil-square"></i></a>
                            <form action="@route('tutor-education.destroy', $item->tutor_education_id)" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit"><i
                                        class="bi bi-trash"></i></button>
                            </form>
                        </td>
                        @endif
                    </tr>
                @empty
                    <h5 class="text-danger text-center">Data Not Available</h5>
                @endforelse

            </tbody>
        </table>
        <!-- End Table with stripped rows -->

    </div>
</div>
