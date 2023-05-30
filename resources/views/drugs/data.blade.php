@extends('layouts.main')

@section('content')
<h3>Data Drugs</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('drugs/add') }}'">
                <i class="fas fa-plus-circle"></i> Add New Data
            </button>
        </div>
        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> {{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Drugs Id</th>
                        <th>Drugs Name</th>
                        <th>Drugs Class</th>
                        <th>Drugs Type</th>
                        <th>Drugs Unit</th>
                        <th>Drugs Prices</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($drugs as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->drugs_id }}</td>
                            <td>{{ $row->drugs_name }}</td>
                            <td>{{ $row->drugs_class }}</td>
                            <td>{{ $row->drugs_type }}</td>
                            <td>{{ $row->drugs_unit }}</td>
                            <td>{{ $row->drugs_prices }}</td>
                            <td>
                                <button onclick="window.location='{{ url('drugs/'.$row->drugs_id) }}'" type="button" class="btn btn-sm btn-info" title="Edit Data">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->drugs_name }}')" style="display: inline" method="POST" action="{{ url('drugs/'.$row->drugs_id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function deleteData(name){
            pesan = confirm(`Are you sure want to delete ${name} data ?`)
            if(pesan) return true;
            else return false;
        }
    </script>
@endsection