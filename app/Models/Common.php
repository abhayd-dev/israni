<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Common extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'homepage_main_video',
        'homepage_main_heading',
         'homepage_title',
          'homepage_description', 
          'homepage_status',
        'footer_address1_title',
         'full_address1', 
         'email1',
          'phone1',
           'footer_address2_title', 
           'full_address2',
        'email2', 
        'phone2', 
        'logo', 
        'film_main_video',
         'film_main_heading',
          'about_main_image', 
          'about_main_heading',
        'about_main_subheading', 
        'about_title', 
        'about_description1',
         'about_description2',
          'about_image', 
          'faq_heading',
        'faq_image',
         'faq_description',
          'contact_image',
           'contact_heading'
    ];
}
