@extends('navbar')
@section('content')
    <br>
    <h1 style="color: white; padding-left:10px">Faculty At Binus Malang</h1>
    <br>
    <table class="table table-dark table-striped">
        <tr>
            <th scope="col">Fakultas</th>
            <th scope="col">Kode Falkutas</th>
            <th scope="col">Jumlah Mahasiswa</th>
        </tr>
        @for ($i = 0; $i < count($jrs); $i++)
            <tr>
                <td>{{ $jrs[$i][0] }}</td>
                <td>{{ $jrs[$i][1] }}</td>
                <td>{{ $jrs[$i][2] }}</td>
            </tr>
        @endfor
    </table>
@endsection
