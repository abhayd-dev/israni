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
    Route::prefix('home')->group(function () {
        Route::get('/main-video', [AdminController::class, 'homeMainVideo'])->name('admin.home.main_video');
        Route::get('/description', [AdminController::class, 'homeDescription'])->name('admin.home.description');
        Route::get('/featured', [AdminController::class, 'homeFeatured'])->name('admin.home.featured');
        Route::get('/wedding', [AdminController::class, 'homeWedding'])->name('admin.home.wedding');
        Route::get('/instagram', [AdminController::class, 'homeInstagram'])->name('admin.home.instagram');
        Route::get('/sponsors', [AdminController::class, 'homeSponsors'])->name('admin.home.sponsors');
    });

 

    // Films routes
    Route::prefix('films')->group(function () {
        Route::get('/main-video', [AdminController::class, 'filmsMainVideo'])->name('admin.films.main_video');
        Route::get('/video-link', [AdminController::class, 'filmsVideoLink'])->name('admin.films.video_link');
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
Route::get('/viewmore', [HomeController::class, 'viewmore'])->name('viewmore');
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
