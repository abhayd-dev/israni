<?php

namespace App\Http\Controllers;

use App\Models\Common;
use App\Models\ViewMore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Aim;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Common Create
    public function common_create()
    {
        $common = Common::first();
        return view('admin.common_data', compact('common'));
    }

    // Common Store
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'homepage_main_video' => 'nullable|mimes:mp4,mov,avi',
            'homepage_main_heading' => 'nullable|string|max:255',
            'homepage_title' => 'nullable|string|max:255',
            'homepage_description' => 'nullable|string',
            'homepage_status' => 'required|string|in:active,inactive',
            'footer_address1_title' => 'nullable|string|max:255',
            'full_address1' => 'nullable|string',
            'email1' => 'nullable|string|email|max:255',
            'phone1' => 'nullable|string|max:255',
            'footer_address2_title' => 'nullable|string|max:255',
            'full_address2' => 'nullable|string',
            'email2' => 'nullable|string|email|max:255',
            'phone2' => 'nullable|string|max:255',
            'logo' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'film_main_video' => 'nullable|mimes:mp4,mov,avi',
            'film_main_heading' => 'nullable|string|max:255',
            'about_main_image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_main_heading' => 'nullable|string|max:255',
            'about_main_subheading' => 'nullable|string',
            'about_title' => 'nullable|string|max:255',
            'about_description1' => 'nullable|string',
            'about_description2' => 'nullable|string',
            'about_image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'faq_heading' => 'nullable|string|max:255',
            'faq_image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'faq_description' => 'nullable|string',
            'contact_image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contact_heading' => 'nullable|string|max:255',
        ]);

        // Saving Common Data
        $common = Common::firstOrNew(['id' => 1]);

        if ($request->hasFile('homepage_main_video')) {
            if ($common->homepage_main_video && Storage::exists('public/' . $common->homepage_main_video)) {
                Storage::delete('public/' . $common->homepage_main_video);
            }
            $videoPath = $request->file('homepage_main_video')->move(public_path('videos'), $request->file('homepage_main_video')->getClientOriginalName());
            $common->homepage_main_video = 'videos/' . $request->file('homepage_main_video')->getClientOriginalName();
        }

        $common->homepage_main_heading = $request->homepage_main_heading;
        $common->homepage_title = $request->homepage_title;
        $common->homepage_description = $request->homepage_description;
        $common->homepage_status = $request->homepage_status;
        $common->footer_address1_title = $request->footer_address1_title;
        $common->full_address1 = $request->full_address1;
        $common->email1 = $request->email1;
        $common->phone1 = $request->phone1;
        $common->footer_address2_title = $request->footer_address2_title;
        $common->full_address2 = $request->full_address2;
        $common->email2 = $request->email2;
        $common->phone2 = $request->phone2;

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $common->logo = $logoPath;
        }

        if ($request->hasFile('film_main_video')) {
            if ($common->film_main_video && Storage::exists('public/' . $common->film_main_video)) {
                Storage::delete('public/' . $common->film_main_video);
            }
            $videoPath = $request->file('film_main_video')->move(public_path('videos'), $request->file('film_main_video')->getClientOriginalName());
            $common->film_main_video = 'videos/' . $request->file('film_main_video')->getClientOriginalName();
        }

        $common->film_main_heading = $request->film_main_heading;

        if ($request->hasFile('about_main_image')) {
            $aboutMainImagePath = $request->file('about_main_image')->store('about_images', 'public');
            $common->about_main_image = $aboutMainImagePath;
        }

        $common->about_main_heading = $request->about_main_heading;
        $common->about_main_subheading = $request->about_main_subheading;
        $common->about_title = $request->about_title;
        $common->about_description1 = $request->about_description1;
        $common->about_description2 = $request->about_description2;

        if ($request->hasFile('about_image')) {
            $aboutImagePath = $request->file('about_image')->store('about_images', 'public');
            $common->about_image = $aboutImagePath;
        }

        $common->faq_heading = $request->faq_heading;

        if ($request->hasFile('faq_image')) {
            $faqImagePath = $request->file('faq_image')->store('faq_images', 'public');
            $common->faq_image = $faqImagePath;
        }

        $common->faq_description = $request->faq_description;

        if ($request->hasFile('contact_image')) {
            $contactImagePath = $request->file('contact_image')->store('contact_images', 'public');
            $common->contact_image = $contactImagePath;
        }

        $common->contact_heading = $request->contact_heading;

        $common->save();

        return redirect()->route('common.create')->with('success', 'Common data saved successfully.');
    }

    // Featured Create
    public function featured_create()
    {
        return view('admin.featured');
    }

    // Featured Store
    public function featured_store(Request $request)
    {
        $request->validate([
            'video'        => 'nullable|mimes:mp4,mov,avi',
            'image1'       => 'nullable|image',
            'couple_name'  => 'nullable|string|max:255',
            'title'        => 'required|string|max:255',
            'description'  => 'required|string',
            'film_by'      => 'nullable|string|max:255',
            'outfit'       => 'nullable|string',
            'bulk_image'   => 'nullable|array',
           'bulk_image.*' => 'nullable|image',
        ]);

        $viewmore = new ViewMore();

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->move(public_path('videos'), $request->file('video')->getClientOriginalName());
            $viewmore->video = 'videos/' . $request->file('video')->getClientOriginalName();
        }

        if ($request->hasFile('image1')) {
            $viewmore->image1 = $request->file('image1')->store('images', 'public');
        }

        if ($request->hasFile('bulk_image')) {
            $bulkImages = [];
            foreach ($request->file('bulk_image') as $file) {
                $path = $file->store('bulk_images', 'public');
                $bulkImages[] = $path;
            }
            $viewmore->bulk_image = json_encode($bulkImages);
        }

        $viewmore->couple_name = $request->couple_name;
        $viewmore->title = $request->title;
        $viewmore->description = $request->description;
        $viewmore->film_by = $request->film_by;
        $viewmore->outfit = $request->outfit;

        $viewmore->save();

        return redirect()->route('featured.create')->with('success', 'View More entry created successfully.');
    }

    // Get Featured Entries
    public function getFeatured()
    {
        return view('admin.featured_index');
    }

    public function getFeaturedData()
    {
        $viewmore = ViewMore::all();
        return DataTables::of($viewmore)
            ->addColumn('action', function ($viewmore) {
                return '
                    <a href="' . route('featured.edit', $viewmore->id) . '" class="btn btn-sm btn-primary mb-3 mt-1"><i class="fas fa-edit mr-2"></i>Edit</a>
                    <form action="' . route('featured.delete', $viewmore->id) . '" method="POST" style="display:inline-block;border-radius:5px;" class="bg-danger text-white w-30">
                        ' . csrf_field() . method_field('DELETE') . '
                         <i class="fas fa-trash-alt mr-1 ml-1"><button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure?\')">
                       Delete</button>
                    </form>
                ';
            })
            ->editColumn('video', function ($viewmore) {
                return '<video width="100" controls>
                            <source src="' . asset($viewmore->video) . '" type="video/mp4">
                        </video>';
            })
            ->editColumn('image1', function ($viewmore) {
                return '<img src="' . asset('storage/' . $viewmore->image1) . '" width="100">';
            })
            ->rawColumns(['action', 'video', 'image1'])
            ->make(true);
    }
    
    // Edit Featured Entry
    public function editFeatured($id)
    {
        $viewmore = ViewMore::findOrFail($id);
        return view('admin.edit_featured', compact('viewmore'));
    }

    // Update Featured Entry
    public function updateFeatured(Request $request, $id)
    {
        $viewmore = ViewMore::findOrFail($id);

        $request->validate([
            'video'        => 'nullable|mimes:mp4,mov,avi',
            'image1'       => 'nullable|image',
            'couple_name'  => 'nullable|string|max:255',
            'title'        => 'nullable|string|max:255',
            'description'  => 'nullable|string',
            'film_by'      => 'nullable|string|max:255',
            'outfit'       => 'nullable|string',
            'bulk_image'   => 'nullable|array',
            'bulk_image.*' => 'nullable|image',
        ]);

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->move(public_path('videos'), $request->file('video')->getClientOriginalName());
            $viewmore->video = 'videos/' . $request->file('video')->getClientOriginalName();
        }

        if ($request->hasFile('image1')) {
            $viewmore->image1 = $request->file('image1')->store('images', 'public');
        }

         if ($request->hasFile('bulk_image')) {
            $bulkImages = [];
            foreach ($request->file('bulk_image') as $image) {
                $bulkImages[] = $image->store('images', 'public');
            }
            $viewmore->bulk_image = json_encode($bulkImages);
        }

        $viewmore->couple_name = $request->couple_name;
        $viewmore->title = $request->title;
        $viewmore->description = $request->description;
        $viewmore->film_by = $request->film_by;
        $viewmore->outfit = $request->outfit;

        $viewmore->save();

        return redirect()->route('featured.index')->with('success', 'View More entry updated successfully.');
    }

    // Delete Featured Entry
    public function deleteFeatured($id)
    {
        $viewmore = ViewMore::findOrFail($id);
        $viewmore->delete();

        return redirect()->route('featured.index')->with('success', 'View More entry deleted successfully.');
    }

    public function index_aim(){

        $aims = Aim::all();
        return view('admin.aims_index', compact('aims'));

    }

    public function create_aim()
    {
        return view('admin.aims_create');
    }

    public function store_aim(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('aims', 'public');
        }
    
        Aim::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);
    
        return redirect()->route('admin.aims.create')->with('success', 'Aim created successfully.');
    }

    public function aim_edit($id)
    {
        $aim = Aim::findOrFail($id);
        return view('admin.aims_edit', compact('aim'));
    }

    // Update aim in the database
    public function aim_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $aim = Aim::findOrFail($id);
        $aim->title = $request->input('title');
        $aim->description = $request->input('description');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('aims', 'public');
            $aim->image = $imagePath;
        }

        $aim->save();

        return redirect()->back()->with('success', 'Aim updated successfully');
    }

    // Delete aim from the database
    public function aim_destroy($id)
    {
        // Find the aim by its ID
        $aim = Aim::findOrFail($id);
        
        // Check if the aim exists
        if (!$aim) {
            return redirect()->route('adimn.aims_index')->with('error', 'Aim not found');
        }

        // Delete the aim
        $aim->delete();
        
        // Redirect with a success message
        return redirect()->route('admin.aims_index')->with('success', 'Aim deleted successfully');
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

