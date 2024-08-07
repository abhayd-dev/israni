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
<h1 class="h2 text-center">Add Aim</h1>
<p class="text-center">This form allows you to add  aims entries.</p>

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="text-right">
        <a href="{{ route('admin.aims_index') }}" class="btn btni ml-4  mb-3">Show Data</a>
    </div>
    <div class="col-sm-12 box1">
        <form action="{{ route('admin.aims.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
           

            <!-- Title -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $aim->title ?? '') }}" placeholder="Enter title">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="4" placeholder="Enter description">{{ old('description', $aim->description ?? '') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image -->
            <div class="col-sm-10 mx-auto form-group mb-3">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="form-control-file @error('image') is-invalid @enderror">
                @if(isset($aim) && $aim->image)
                    <img src="{{ asset('storage/' . $aim->image) }}" alt="Aim Image" class="img-thumbnail mt-2" width="200">
                @endif
                @error('image')
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

<script>
  
</script>
@endsection
