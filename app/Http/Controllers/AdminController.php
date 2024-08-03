<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Home Routes
    public function homeMainVideo()
    {
        return view('admin.home.main_video');
    }

    public function homeDescription()
    {
        return view('admin.home.description');
    }

    public function homeFeatured()
    {
        return view('admin.home.featured');
    }

    public function homeWedding()
    {
        return view('admin.home.wedding');
    }

    public function homeInstagram()
    {
        return view('admin.home.instagram');
    }

    public function homeSponsors()
    {
        return view('admin.home.sponsors');
    }



    // Films Routes
    public function filmsMainVideo()
    {
        return view('admin.films.main_video');
    }

    public function filmsVideoLink()
    {
        return view('admin.films.video_link');
    }

    // About Routes
    public function aboutVideo()
    {
        return view('admin.about.video');
    }

    public function aboutDescription()
    {
        return view('admin.about.description');
    }

    public function aboutAim()
    {
        return view('admin.about.aim');
    }

    public function aboutTestimonials()
    {
        return view('admin.about.testimonials');
    }

    // FAQ Routes
    public function faqImage()
    {
        return view('admin.faq.image');
    }

    public function faqQuestions()
    {
        return view('admin.faq.questions');
    }

    // Contact Routes
    public function contactShowData()
    {
        return view('admin.contact.show_data');
    }
}
