@include('navbar');
<h1 style="color: white; padding-left:10px">Student At Binus Malang</h1>
<br>
<table class="table table-dark table-striped">
    <tr>
        <th scope="col"><b style="font-size: 20px">NIM</b></th>
        <th scope="col"><b style="font-size: 20px"> Nama</b></th>
        <th scope="col"><b style="font-size: 20px">Jurusan</b></th>
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
