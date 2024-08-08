@extends('layouts.admin')

@section('css')

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

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
    .table-responsive{
        width: 100%;
    }
</style>
@endsection

@section('content')
<div class="container">
    <h1 class="text-center">Manage Testimonials</h1>

    <div class="col-sm-12 box1">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('testimonials.create') }}" method="POST">
        @csrf
        <div class="col-sm-10 col-sm-10 form-group mx-auto">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>
        <div class="col-sm-10 col-sm-10 form-group mx-auto">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" required></textarea>
        </div>
        <div class="col-sm-10 col-sm-10 form-group mx-auto">
        <button type="submit" class="btn btn">Add Testimonial</button>
        </div>
    </form>
</div>
    <hr>

    <h2 class="text-center">Existing Testimonials</h2>
    <div class="table-responsive box1">
    <table id="testimonials-table" class="table border-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $testimonial)
            <tr>
                <td class="mr-2">{{ $testimonial->id }}</td>
                <td class="mr-2" >{{ $testimonial->author }}</td>
                <td>{{ Str::limit( $testimonial->content ,69, '...')}}</td>
                <td>
                    <button class="btn btn-success btn-edit" data-id="{{ $testimonial->id }}" data-author="{{ $testimonial->author }}" data-content="{{ $testimonial->content }}">Edit</button>
                    <form action="{{ route('testimonials.delete', $testimonial) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="edit-form" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Testimonial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-10 col-sm-10 form-group mx-auto">
                        <label for="edit-author">Author</label>
                        <input type="text" name="author" id="edit-author" class="form-control" required>
                    </div>
                    <div class="col-sm-10 col-sm-10 form-group mx-auto">
                        <label for="edit-content">Content</label>
                        <textarea name="content" id="edit-content" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btni">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#testimonials-table').DataTable();
  

    // Handle edit button click with event delegation
    $(document).on('click', '.btn-edit', function() {
        var id = $(this).data('id');
        var author = $(this).data('author');
        var content = $(this).data('content');

        $('#edit-author').val(author);
        $('#edit-content').val(content);
        $('#edit-form').attr('action', '{{ url('admin/testimonial') }}/' + id);

        $('#editModal').modal('show');
    });
});
</script>
@endsection
