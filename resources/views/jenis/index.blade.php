@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Jenis Kepribadian
                    </div>
                    <div class="float-end">
                            @csrf
                            <a href="{{ route('jenis.create') }}" class="btn btn-sm btn-outline-primary">Tambah
                                Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kepribadian</th>
                                    <th>Pengertian</th>
                                    <th>Kelebihan</th>
                                    <th>Kekurangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($jenis as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->Jenis_kepribadian }}</td>
                                    <td>{{ $data->pengertian }}</td>
                                    <td>{{ $data->kelebihan }}</td>
                                    <td>{{ $data->kekurangan }}</td>
                                    <td>
                                        <form action="{{ route('jenis.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('jenis.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">Edit</a> |
                                            <button type="submit" onclick="return confirm('Are You Sure ?');"
                                                class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
