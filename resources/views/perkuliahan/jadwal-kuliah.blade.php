@extends('main')

@section('content')
    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr>
              <th scope="col">No.</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Jenis Mata Kuliah</th>
                <th scope="col">Hari</th>
                <th scope="col">Jam</th>
                <th scope="col">Ruang </th>
                <th scope="col">Kelas </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwalKlh as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->matkul }}</td>
                    <td>{{ $item->jns_matkul }}</td>
                    <td>{{ $item->hari }}</td>
                    <td>{{ $item->jam }}</td>
                    <td>{{ $item->ruang }}</td>
                    <td>{{ $item->kelas }}</td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
