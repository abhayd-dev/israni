@extends('layouts.admin')
@section('css')

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

    <div class="col-sm-12 box1">
        <form id="featured-form" action="{{ route('featured.update', $viewmore->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <!-- Video File -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="video">Video File</label>
                <input type="file" class="form-control @error('video') is-invalid @enderror" id="video" name="video" placeholder="Choose video file">
                @if(isset($viewmore) && $viewmore->video)
                    <video width="200" controls>
                        <source src="{{ asset($viewmore->video) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                @endif
                @error('video')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Primary Image -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="image1">Primary Image</label>
                <input type="file" class="form-control-file @error('image1') is-invalid @enderror" id="image1" name="image1">
                @if(isset($viewmore) && $viewmore->image1)
                    <img src="{{ asset('storage/' . $viewmore->image1) }}" alt="Primary Image" class="img-thumbnail mt-2" width="200">
                @endif
                @error('image1')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Couple's Name -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="couple_name">Couple's Name</label>
                <input type="text" class="form-control @error('couple_name') is-invalid @enderror" id="couple_name" name="couple_name" value="{{ old('couple_name', $viewmore->couple_name ?? '') }}" placeholder="Enter couple's name">
                @error('couple_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Title -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $viewmore->title ?? '') }}" placeholder="Enter title">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Enter description">{{ old('description', $viewmore->description ?? '') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Film By -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="film_by">Film By</label>
                <input type="text" class="form-control @error('film_by') is-invalid @enderror" id="film_by" name="film_by" value="{{ old('film_by', $viewmore->film_by ?? '') }}" placeholder="Enter film by">
                @error('film_by')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Outfit -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="outfit">Outfit</label>
                <textarea class="form-control @error('outfit') is-invalid @enderror" id="outfit" name="outfit" rows="2" placeholder="Enter outfit details">{{ old('outfit', $viewmore->outfit ?? '') }}</textarea>
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
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>


@endsection
@section('script')

<script>
 

</script>
@endsection