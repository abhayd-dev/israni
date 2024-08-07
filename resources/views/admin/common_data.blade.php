

@extends('layouts.admin')
@section('css')
 <!-- Summernote CSS -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<style>
    body {
       background: rgb(229 160 50 / 15%) !important;
        color: black !important;
    }
    h1.h2 {
        font-size: 2rem;
        margin-bottom: 1rem;
    }
</style>
@endsection
@section('content')
<h1 class="text-center">Post All Pages Common Data</h1>

<hr />
<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('common.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <!-- HomePage Section -->
        <div class="box1 mb-5">
            <h4 class="text-center">HomePage</h4>
            <hr />
            <div class="row">
                <div class="form-group col-sm-6 mb-3">
                    <label for="homepage_main_video">Homepage Main Video</label>
                    <input type="file" class="form-control" id="homepage_main_video" name="homepage_main_video" value="{{ $common->homepage_main_video ?? '' }}">
                </div>
                <div class="form-group col-sm-6 mb-3">
                    <label for="homepage_main_heading">Homepage Main Heading</label>
                    <input type="text" class="form-control" id="homepage_main_heading" name="homepage_main_heading" value="{{ $common->homepage_main_heading ?? '' }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6 mb-3">
                    <label for="homepage_status">Homepage Status</label>
                    <select class="form-control" id="homepage_status" name="homepage_status">
                        <option value="active" {{ (isset($common->homepage_status) && $common->homepage_status == 'active') ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ (isset($common->homepage_status) && $common->homepage_status == 'inactive') ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <div class="form-group col-sm-6 mb-3">
                    <label for="homepage_title">Homepage Title</label>
                    <input type="text" class="form-control" id="homepage_title" name="homepage_title" value="{{ $common->homepage_title ?? '' }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12 mb-3">
                    <label for="homepage_description">Homepage Description</label>
                    <textarea class="form-control" id="homepage_description" name="homepage_description">{{ $common->homepage_description ?? '' }}</textarea>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="box1 mb-5">
            <h4 class="text-center">Footer</h4>
            <hr />
            <div class="row">
                <div class="form-group col-sm-6 mb-3">
                    <label for="footer_address1_title">Footer Address1 Title</label>
                    <input type="text" class="form-control" id="footer_address1_title" name="footer_address1_title" value="{{ $common->footer_address1_title ?? '' }}">
                </div>
                <div class="form-group col-sm-6 mb-3">
                    <label for="footer_address2_title">Footer Address2 Title</label>
                    <input type="text" class="form-control" id="footer_address2_title" name="footer_address2_title" value="{{ $common->footer_address2_title ?? '' }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6 mb-3">
                    <label for="full_address1">Full Address1</label>
                    <textarea class="form-control" id="full_address1" name="full_address1">{{ $common->full_address1 ?? '' }}</textarea>
                </div>
                <div class="form-group col-sm-6 mb-3">
                    <label for="full_address2">Full Address2</label>
                    <textarea class="form-control" id="full_address2" name="full_address2">{{ $common->full_address2 ?? '' }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6 mb-3">
                    <label for="email1">Email1</label>
                    <input type="text" class="form-control" id="email1" name="email1" value="{{ $common->email1 ?? '' }}">
                </div>
                <div class="form-group col-sm-6 mb-3">
                    <label for="email2">Email2</label>
                    <input type="text" class="form-control" id="email2" name="email2" value="{{ $common->email2 ?? '' }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6 mb-3">
                    <label for="phone1">Phone1</label>
                    <input type="text" class="form-control" id="phone1" name="phone1" value="{{ $common->phone1 ?? '' }}">
                </div>
                <div class="form-group col-sm-6 mb-3">
                    <label for="phone2">Phone2</label>
                    <input type="text" class="form-control" id="phone2" name="phone2" value="{{ $common->phone2 ?? '' }}">
                </div>
            </div>
        </div>

        <!-- FilmPage Section -->
        <div class="box1 mb-5">
            <h4 class="text-center">FilmPage</h4>
            <hr />
            <div class="row">
                <div class="form-group col-sm-6 mb-3">
                    <label for="film_main_video">Film Main Video</label>
                    <input type="file" class="form-control" id="film_main_video" name="film_main_video" value="{{ $common->film_main_video ?? '' }}">
                </div>
                <div class="form-group col-sm-6 mb-3">
                    <label for="film_main_heading">Film Main Heading</label>
                    <input type="text" class="form-control" id="film_main_heading" name="film_main_heading" value="{{ $common->film_main_heading ?? '' }}">
                </div>
            </div>
        </div>

        <!-- About Page Section -->
        <div class="box1 mb-5">
            <h4 class="text-center">About Page</h4>
            <hr />
            <div class="row">
                <div class="form-group col-sm-6 mb-3">
                    <label for="about_main_image">About Main Image</label>
                    <div class="input-group">
                    <input type="file" class="form-control" id="about_main_image" name="about_main_image">
                    @if(isset($common->about_main_image))
                        <img src="{{ asset('storage/' . $common->about_main_image) }}" height="100" width="200" alt="About Main Image" class="">
                    @endif
                </div>
                </div>
                <div class="form-group col-sm-6 mb-3">
                    <label for="about_main_heading">About Main Heading</label>
                    <input type="text" class="form-control" id="about_main_heading" name="about_main_heading" value="{{ $common->about_main_heading ?? '' }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6 mb-3">
                    <label for="about_main_subheading">About Main Subheading</label>
                    <textarea class="form-control" id="about_main_subheading" name="about_main_subheading">{{ $common->about_main_subheading ?? '' }}</textarea>
                </div>
                <div class="form-group col-sm-6 mb-3">
                    <label for="about_title">About Title</label>
                    <textarea class="form-control" id="about_title" name="about_title">{{ $common->about_title ?? '' }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6 mb-3">
                    <label for="about_description1">About Description1</label>
                    <textarea class="form-control" id="about_description1" name="about_description1">{{ $common->about_description1 ?? '' }}</textarea>
                </div>
                <div class="form-group col-sm-6 mb-3">
                    <label for="about_description2">About Description2</label>
                    <textarea class="form-control" id="about_description2" name="about_description2">{{ $common->about_description2 ?? '' }}"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6 mb-3">
                    <label for="about_image">About Image</label>
                    <input type="file" class="form-control" id="about_image" name="about_image">
                    @if(isset($common->about_image))
                        <img src="{{ asset('storage/' . $common->about_image) }}" height="100" width="200" alt="About Image" class="">
                    @endif
                </div>
            </div>
        </div>

        <!-- FaqPage Section -->
        <div class="box1 mb-5">
            <h4 class="text-center">FaqPage</h4>
            <hr />
            <div class="row">
                <div class="form-group col-sm-6 mb-3">
                    <label for="faq_heading">FAQ Heading</label>
                    <input type="text" class="form-control" id="faq_heading" name="faq_heading" value="{{ $common->faq_heading ?? '' }}">
                </div>
                <div class="form-group col-sm-6 mb-3">
                    <label for="faq_image">FAQ Image</label>
                    <input type="file" class="form-control" id="faq_image" name="faq_image">
                    @if(isset($common->faq_image))
                        <img src="{{ asset('storage/' . $common->faq_image) }}" height="100" width="200" alt="Faq Image" class="">
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12 mb-3">
                    <label for="faq_description">FAQ Description</label>
                    <textarea class="form-control" id="faq_description" name="faq_description">{{ $common->faq_description ?? '' }}</textarea>
                </div>
            </div>
        </div>

        <!-- ContactPage Section -->
        <div class="box1 mb-5">
            <h4 class="text-center">ContactPage</h4>
            <hr />
            <div class="row">
                <div class="form-group  col-sm-6 mb-3">
                    <label for="contact_image">Contact Image</label>
                   
                    <input type="file" class="form-control" id="contact_image" name="contact_image">
                    @if(isset($common->contact_image))
                        <img src="{{ asset('storage/' . $common->contact_image) }}" height="100" width="200" alt="Contact Image" class="">
                    @endif
           
                </div>
                <div class="form-group col-sm-6 mb-3">
                    <label for="contact_heading">Contact Heading</label>
                    <input type="text" class="form-control" id="contact_heading" name="contact_heading" value="{{ $common->contact_heading ?? '' }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12 text-center">
            <button type="submit" class="btn  col-sm-4">Submit</button>
        </div>
    </form>
</div>
@endsection


@section('script')
 <!-- Summernote JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
    $('#description').summernote({
        placeholder: 'Enter description here...',
        tabsize: 2,
        height: 100,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    $('#full_address1').summernote({
        placeholder: 'Enter address here...',
        tabsize: 2,
        height: 100,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    $('#full_address2').summernote({
        placeholder: 'Enter address here...',
        tabsize: 2,
        height: 100,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    $('#about_description1').summernote({
        placeholder: 'Enter address here...',
        tabsize: 2,
        height: 100,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    $('#about_description2').summernote({
        placeholder: 'Enter address here...',
        tabsize: 2,
        height: 100,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    $('#about_title').summernote({
        placeholder: 'Enter address here...',
        tabsize: 2,
        height: 100,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    
});
</script>
@endsection
