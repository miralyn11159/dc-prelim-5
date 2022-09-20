<div>
    <table class="table table-striped">
        <thead class="table table-striped bg-info">
            <tr>
                <th>ID</th>
                <th>Sale Name</th>
                <th>Amount</th>
                <th>Type</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->amount }}</td>
                    <td>{{ $sale->type }}</td>
                    <td>{{ $sale->host }}</td>
                    <td>
                        <a href="{{ url('edit', ['sale' => $sale->id]) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['sale' => $sale->id]) }}" class="btn btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

