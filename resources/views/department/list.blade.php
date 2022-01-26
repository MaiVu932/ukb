<table>
    <tr>
        <th>STT</th>
        <th>Mã khoa</th>
        <th>Tên khoa</th>
        <th>Ngày tạo</th>
        <th></th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->code }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->created_at }}</td>
            <td>
                <a href='./1/{{ $item->id }}' >Cập nhập</a>
            </td>
        </tr>
    @endforeach
    

</table>