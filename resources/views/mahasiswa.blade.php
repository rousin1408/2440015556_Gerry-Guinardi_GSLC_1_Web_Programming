@include('navbar');
<table class="table table-dark table-striped">
    <tr>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Jurusan</th>
    </tr>
    @foreach ($mhs as $m)
        <tr>
            <td>{{ $m[0] }}</td>
            <td>{{ $m[1] }}</td>
            @if ($m[2] == 'CS')
                <td>Computer Science</td>
            @elseif($m[2] == 'BC')
                <td>Business Creation</td>
            @elseif($m[2] == 'PR')
                <td>Public Relation</td>
            @endif
        </tr>
    @endforeach
</table>
