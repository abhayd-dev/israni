
@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.css" />
<style>
    body {
        background: rgb(229 160 50 / 15%) !important;
        color: black !important;
    }
    h1.h2 {
        font-size: 2rem;
        margin-bottom: 1rem;
    }
    .form-group img {
        margin-top: 10px;
    }
</style>
@endsection

@section('content')
<h1 class="h2 text-center">Add/Edit View More</h1>
<p class="text-center">This form allows you to add or edit view more entries.</p>

<div class="container mt-5">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="text-right">
        <a href="{{ route('featured.index') }}" class="btn btni ml-4  mb-3">Show Data</a>
    </div>
    <div class="col-sm-12 box1">
        <form action="{{ route('viewmore.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Video File -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <div class="row">
                    <div class="col-sm-6">
                <label for="video">Video File</label>
                <input type="file" id="video" name="video" class="form-control @error('video') is-invalid @enderror">
                @error('video')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-6">
                <label for="image1">Primary Image</label>
                <input type="file" id="image1" name="image1" class="form-control-file @error('image1') is-invalid @enderror">
                @if(isset($viewmore) && $viewmore->image1)
                    <img src="{{ asset('storage/' . $viewmore->image1) }}" alt="Primary Image" class="img-thumbnail mt-2" width="200">
                @endif
                @error('image1')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            </div>
            </div>
            <div class="col-sm-10 mx-auto form-group mb-3">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="couple_name">Couple's Name</label>
                        <input type="text" id="couple_name" name="couple_name" class="form-control @error('couple_name') is-invalid @enderror" value="{{ old('couple_name', $viewmore->couple_name ?? '') }}" placeholder="Enter couple's name">
                        @error('couple_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
            </div>
            <div class="col-sm-6">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $viewmore->title ?? '') }}" placeholder="Enter title">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            </div>
            </div>

           


            <!-- Description -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="4" placeholder="Enter description">{{ old('description', $viewmore->description ?? '') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Film By -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="film_by">Film By</label>
                <input type="text" id="film_by" name="film_by" class="form-control @error('film_by') is-invalid @enderror" value="{{ old('film_by', $viewmore->film_by ?? '') }}" placeholder="Enter film by">
                @error('film_by')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Outfit -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="outfit">Outfit</label>
                <textarea id="outfit" name="outfit" class="form-control @error('outfit') is-invalid @enderror" rows="2" placeholder="Enter outfit details">{{ old('outfit', $viewmore->outfit ?? '') }}</textarea>
                @error('outfit')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Bulk Images -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="bulk_image">Additional Bulk Images</label>
                <input type="file" class="filepond" name="bulk_image[]" multiple>
                @error('bulk_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="form-group text-center">
                <button type="submit" class="col-sm-6 btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    // Register FilePond components
    FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginImageExifOrientation, FilePondPluginFileValidateSize, FilePondPluginFileValidateType);

    // Select the file input and register it as a FilePond instance
    FilePond.create(document.querySelector('input[type="file"].filepond'), {
        allowMultiple: true,
        maxFiles: 5,
        server: {
            process: '{{ route('viewmore.store') }}',
            revert: null, // Configure if you need to handle file removal
            restore: null, // Configure if you need to handle file restoration
            load: null, // Configure if you need to handle file loading
            fetch: null // Configure if you need to handle file fetching
        }
    });
</script>
@endsection


