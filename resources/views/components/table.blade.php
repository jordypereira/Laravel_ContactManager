<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        @foreach ($headers as $columnHeader)
            <th scope="col">{{ $columnHeader }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach ($rows as $row)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            @foreach ($headers as $column)
                <td>{{ $row->$column }}</td>
            @endforeach
            <td><a href="{{ route($resource.'.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
            <td>
                <form action="{{ route($resource.'.destroy', $row->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button role="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@if($rows instanceof \Illuminate\Pagination\LengthAwarePaginator)
<div>
    {{ $rows->links() }}
</div>
@endif