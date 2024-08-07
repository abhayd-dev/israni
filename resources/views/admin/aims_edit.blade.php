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
    .form-group col-sm-10 mx-auto img {
        margin-top: 10px;
    }
</style>
@endsection

@section('content')
<h1 class="h2 text-center">Edit Aim</h1>
<p class="text-center">This form allows you to  edit aims entries.</p>

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
        
        <form action="{{ route('aims.update', $aim->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
            <div class="form-group col-sm-10 mx-auto">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $aim->title) }}" required>
            </div>
    
            <div class="form-group col-sm-10 mx-auto">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ old('description', $aim->description) }}</textarea>
            </div>
    
            <div class="form-group col-sm-10 mx-auto">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($aim->image)
                    <img src="{{ asset('storage/' . $aim->image) }}" alt="Current Image" height="100">
                @endif
            </div>
            <div class="form-group col-sm-10 mx-auto text-center">
            <button type="submit" class="col-sm-6 btn btn-primary">Update Aim</button>
            </div>
        </form>
    
    </div>
</div>
@endsection

@section('script')

<script>
  
</script>
@endsection
