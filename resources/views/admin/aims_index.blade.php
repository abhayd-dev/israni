@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
<style>
    body {
        background: rgb(229 160 50 / 15%) !important;
        color: black !important;
    }
    .table-responsive {
        margin-top: 20px;
    }
    .page-item.active .page-link {
      background-color: #ff0031 !important;
    }
</style>
@endsection

@section('content')
<h1 class="h2 text-center">Our Aims</h1>
<p class="text-center">List of all aims entries.</p>

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-right mb-3">
        <a href="{{ route('admin.aims.create') }}" class="btn btni">Add New Aim</a>
    </div>

    <div class="table-responsive box1">
        <table class="table table-bordered" id="aims-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($aims as $aim)
                    <tr>
                        <td>{{ $aim->id }}</td>
                        <td>{{ $aim->title }}</td>
                        <td>{{ Str::limit($aim->description, 39, '...') }}</td>
                        <td>
                            @if($aim->image)
                                <img src="{{ asset('storage/' . $aim->image) }}" alt="Aim Image" height="50" width="50">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('aims.edit', $aim->id) }}" class="btn btn-sm btn-warning ">
                                <i class="fas fa-edit"></i>  Edit</a>
                          
                            <form action="{{ route('aims.destroy', $aim->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash-alt"></i>    
                                Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#aims-table').DataTable();
    });
</script>
@endsection
