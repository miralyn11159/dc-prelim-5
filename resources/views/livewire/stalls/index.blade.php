<div>
    <table class="table table-striped">
        <thead class="table table-striped bg-info">
            <tr>
                <th>ID</th>
                <th>Stall Name</th>
                <th>Owner</th>
                <th>Product</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stalls as $stall)
                <tr>
                    <td>{{ $stall->id }}</td>
                    <td>{{ $stall->name }}</td>
                    <td>{{ $stall->owner }}</td>
                    <td>{{ $stall->product }}</td>
                    <td>
                        <a href="{{ url('edit', ['stall' => $stall->id]) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['stall' => $stall->id]) }}" class="btn btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

