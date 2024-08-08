<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

// Admin Panel routes
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Home routes
    Route::prefix('admin')->group(function () {
        // Route to show the form for common data (GET request)
        Route::get('/common_data', [AdminController::class, 'common_create'])->name('common.create');
    
        // Route to handle form submission for common data (POST request)
        Route::post('/common/store', [AdminController::class, 'store'])->name('common.store');
    });

 

    // Featured routes
    Route::prefix('featured')->group(function () {
        Route::get('/create', [AdminController::class, 'featured_create'])->name('featured.create');
        Route::post('/store', [AdminController::class, 'featured_store'])->name('viewmore.store');
        Route::get('/', [AdminController::class, 'getFeatured'])->name('featured.index');
        Route::get('/data', [AdminController::class, 'getFeaturedData'])->name('featured.data');
        Route::get('/{id}/edit', [AdminController::class, 'editFeatured'])->name('featured.edit');
        Route::post('/{id}', [AdminController::class, 'updateFeatured'])->name('featured.update');
        Route::delete('/{id}', [AdminController::class, 'deleteFeatured'])->name('featured.delete');
    });
    
    Route::prefix('aim')->group(function () {
        Route::get('/create', [AdminController::class, 'create_aim'])->name('admin.aims.create');
        Route::post('/store', [AdminController::class, 'store_aim'])->name('admin.aims.store');
        Route::get('/index', [AdminController::class, 'index_aim'])->name('admin.aims_index');
        Route::get('/aims/{id}/edit', [AdminController::class, 'aim_edit'])->name('aims.edit');
        Route::put('/aims/{id}', [AdminController::class, 'aim_update'])->name('aims.update');
        Route::delete('/aims/{id}', [AdminController::class, 'aim_destroy'])->name('aims.destroy');
    
   
    });


    Route::prefix('testimonial')->group(function () {
        Route::get('/', [AdminController::class, 'showTestimonial'])->name('testimonials.show');
        Route::post('/create', [AdminController::class, 'createTestimonial'])->name('testimonials.create');
        Route::put('/{testimonial}', [AdminController::class, 'updateTestimonial'])->name('testimonials.update');
        Route::delete('/{testimonial}', [AdminController::class, 'deleteTestimonial'])->name('testimonials.delete');
    });
    

    // About routes
    Route::prefix('about')->group(function () {
        Route::get('/video', [AdminController::class, 'aboutVideo'])->name('admin.about.video');
        Route::get('/description', [AdminController::class, 'aboutDescription'])->name('admin.about.description');
        Route::get('/aim', [AdminController::class, 'aboutAim'])->name('admin.about.aim');
        Route::get('/testimonials', [AdminController::class, 'aboutTestimonials'])->name('admin.about.testimonials');
    });

   

    // FAQ routes
    Route::prefix('faq')->group(function () {
        Route::get('/image', [AdminController::class, 'faqImage'])->name('admin.faq.image');
        Route::get('/questions', [AdminController::class, 'faqQuestions'])->name('admin.faq.questions');
    });

    // Contact routes
    Route::prefix('contact')->group(function () {
        Route::get('/show-data', [AdminController::class, 'contactShowData'])->name('admin.contact.show_data');
    });

    // Footer routes
 
});

Route::get('/films', [HomeController::class, 'films']);
Route::get('/viewmore/{id}', [HomeController::class, 'viewmore'])->name('viewmore');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');
Route::get('/about', [HomeController::class, 'about'])->name('about');
// routes/web.php
Route::post('/wedding/submit', [HomeController::class, 'submitWedding'])->name('submit.wedding');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
