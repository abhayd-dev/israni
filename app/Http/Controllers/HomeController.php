<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Wedding;
use App\Models\Common;
use App\Models\ViewMore;
use App\Models\Aim;
use App\Models\Testimonial;
class HomeController extends Controller
{
    
    public function index(){
        $common = Common::first(); 
        $viewmoreItems = ViewMore::all();
        return view('home.index', compact('common','viewmoreItems'));
    }
    public function films(){
        $common = Common::first(); 
        return view('home.film', compact('common'));
    }
    public function viewmore($id){
        $common = Common::first(); 
        $viewmoreItem = ViewMore::findOrFail($id);
        $bulkImages = json_decode($viewmoreItem->bulk_image);
        return view('home.viewmore', compact('common','viewmoreItem','bulkImages'));
    }
    public function faq(){
        $common = Common::first(); 

        return view('home.faq', compact('common'));
    }
    public function contact()
    {
       
        $common = Common::first(); 

        return view('home.contact', compact('common'));
    }
    public function about(){

        $common = Common::first(); 
        $aims = Aim::all();
        $testimonials = Testimonial::all();
        return view('home.about', compact('common','aims','testimonials'));
    }
    public function submitContact(Request $request)
    {
        
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'country'    => 'required|string|max:255',
            'dates'      => 'required|date',
            'venue'      => 'required|string|max:255',
            'guest_count'=> 'required|integer|min:1',
            'services'   => 'required|array',
            'story'      => 'nullable|string',
        ]);

      
        Contact::create([
            'first_name' => $validatedData['first_name'],
            'last_name'  => $validatedData['last_name'],
            'email'      => $validatedData['email'],
            'phone'      => $validatedData['phone'],
            'country'    => $validatedData['country'],
            'dates'      => $validatedData['dates'],
            'venue'      => $validatedData['venue'],
            'guest_count'=> $validatedData['guest_count'],
            'services'   => json_encode($validatedData['services']),
            'story'      => $validatedData['story'],
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully ! We will contact you Soon.......');
    }

    public function submitWedding(Request $request)
    {
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'email'   => 'required|email|max:255',
            'needs'   => 'required|string',
        ]);

        Wedding::create([
            'name'    => $validatedData['name'],
            'phone'   => $validatedData['phone'],
            'email'   => $validatedData['email'],
            'needs'   => $validatedData['needs'],
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully! We will contact you soon.');

    }
    


}
