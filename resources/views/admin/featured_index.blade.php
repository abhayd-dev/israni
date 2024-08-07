
@extends('layouts.admin')
@section('css')
<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<style>
    body {
        background: rgb(229 160 50 / 15%) !important;
        color: black !important;
    }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="text-center">
    <h1 >Featured Entries</h1>
    <div class="text-right">
    <a href="{{ route('featured.create') }}" class="btn btni mb-3">Add New Entry</a>
</div>
    <div class="table-responsive box1">
        <table class="table table-bordered" id="featured-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Video</th>
                    <th>Image</th>
                    <th>Couple Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Film By</th>
                    <th>Outfit</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
        </div>
    </div>
</div>



@endsection

@section('script')
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#featured-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('featured.data') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'video', name: 'video', orderable: false, searchable: false },
                { data: 'image1', name: 'image1', orderable: false, searchable: false },
                { data: 'couple_name', name: 'couple_name' },
                { data: 'title', name: 'title' },
                {   data: 'description',
                name: 'description',
                render: function(data, type, row) {
                    // Split the description into words
                    var words = data.split(' ');
                    // Limit to the first 5 words
                    var truncated = words.slice(0, 5).join(' ');
                    // Add ellipsis if there are more words
                    return words.length > 5 ? truncated + '...' : truncated;
                } },
                {   data: 'film_by',
                name: 'film_by',
                render: function(data, type, row) {
                    // Split the description into words
                    var words = data.split(' ');
                    // Limit to the first 5 words
                    var truncated = words.slice(0, 5).join(' ');
                    // Add ellipsis if there are more words
                    return words.length > 5 ? truncated + '...' : truncated;
                } },
                {   data: 'outfit',
                name: 'outfit',
                render: function(data, type, row) {
                    // Split the description into words
                    var words = data.split(' ');
                    // Limit to the first 5 words
                    var truncated = words.slice(0, 5).join(' ');
                    // Add ellipsis if there are more words
                    return words.length > 5 ? truncated + '...' : truncated;
                } },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
    

@endsection
