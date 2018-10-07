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
        </tr>
    @endforeach
    </tbody>
</table>