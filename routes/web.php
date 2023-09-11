<?php

use App\Http\Controllers\AboutsController;
use App\Http\Controllers\AddPackageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\AyurvedapackagesController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomesliderController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AirlineticketingController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\KeralapackagesController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\AyurvedaPackageController;
use App\Http\Controllers\HouseboatspackageController;
use App\Http\Controllers\InternationalController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\KalariController;

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











Route::get('/slider', function () {
    return view('website.test');
});



//admin about


// Admin





// get methods
Route::get('/admin1', function() {
    return view('admin.login');
})->name('admin');







Route::get('/Contact', function () {
    return view('website.contact');
});






// get methods
Route::get('/admin1', function() {
    return view('admin.login');
})->name('admin');

Route::get('/dashboard', function() {
    return view('admin.dashboard.index');
})->middleware('auth');

// post methods
// login-logout
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login');

Route::post('/admin/logout', [AuthController::class, 'adminLogout'])->name('admin.logout')->middleware('auth');

Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('change.password.form')->middleware('auth');
Route::post('/change-password', [AuthController::class, 'changePassword'])->name('change.password')->middleware('auth');







//FrontEndController




//keralapackages


Route::resource('keralapackages', KeralapackagesController::class);

Route::get('/Packagetype/keralapackagetype',[KeralapackagesController::class,'show'])->name('kpackage_types.show');

Route::post('/Packagetype/savekeralapackagetype', [KeralapackagesController::class, 'savekeralapackage_type'])->name('package_types.submit');

Route::get('/Packagetype/editkeralapackagetype/{id}', [KeralapackagesController::class, 'editkeralapackage_type'])->name('Package_type.edit');
Route::put('/Packagetype/updatekeralapackagetype/{id}', [KeralapackagesController::class, 'updatekeralapackage_type'])->name('package_type.update');
Route::get('/Packagetype/deletekeralapackagetype/{id}', [KeralapackagesController::class, 'deletekeralapackage_type'])->name('kpackage_type.delete');

Route::get('Gallery/keralagallery',[KeralapackagesController::class,'display'])->name('packagegalleries.display');

Route::post('Gallery/savekeralagallery', [KeralapackagesController::class, 'savekeralagallery'])->name('packagegalleries.submit');

Route::post('Gallery/keralagallerylist', [KeralapackagesController::class, 'listKeralagallery'])->name('packagegalleries.listkeralagallery');

Route::get('Gallery/deletekeralagallery/{id}', [KeralapackagesController::class, 'deleteKeralagallery'])->name('packagegalleries.deletekeralagallery');

//AyurvedaPackageController

Route::resource('ayurvedapackages', AyurvedaPackageController::class);

Route::get('/Packagetype/ayurvedapackagetype',[AyurvedaPackageController::class,'show'])->name('Ayupackage_types.show');

Route::post('/Packagetype/saveayurvedapackagetype', [AyurvedaPackageController::class, 'savepackage_type'])->name('ayupackage_types.submit');
Route::get('/Packagetype/editayurvedapackagetype/{id}', [AyurvedaPackageController::class, 'editpackage_type'])->name('ayurvedaPackage_type.edit');
Route::put('/Packagetype/updateayurvedapackagetype/{id}', [AyurvedaPackageController::class, 'updatepackage_type'])->name('ayurvedapackage_type.update');
Route::get('/Packagetype/deleteayurvedapackagetype/{id}', [AyurvedaPackageController::class, 'deleteayurvedapackagetype'])->name('ayurvedapackage_type.delete');


Route::get('Gallery/ayurvedagallery',[AyurvedaPackageController::class,'display'])->name('ayurvedapackagegalleries.display');

Route::post('Gallery/saveayurvedagallery', [AyurvedaPackageController::class, 'savegallery'])->name('ayurvedapackagegalleries.submit');

Route::post('Gallery/ayurvedagallerylist', [AyurvedaPackageController::class, 'listgallery'])->name('ayurvedapackagegalleries.listgallery');

Route::get('Gallery/deleteayurvedapackagegallery/{id}', [AyurvedaPackageController::class, 'deletegallery'])->name('ayurvedapackagegalleries.deletegallery');


//houseboatspackages

Route::resource('houseboatspackages', HouseboatspackageController::class);

Route::get('Packagetype/keralahouseboats',[HouseboatspackageController::class,'show'])->name('khouseboatspackages.show');

Route::post('Packagetype/savekeralahouseboats', [HouseboatspackageController::class, 'savepackage_type'])->name('houseboatspackages.submit');
Route::get('/Packagetype/edithouseboatspackagetype/{id}', [HouseboatspackageController::class, 'editpackage_type'])->name('houseboatsPackage_type.edit');
Route::put('/Packagetype/updatehouseboatspackagetype/{id}', [HouseboatspackageController::class, 'updatepackage_type'])->name('houseboatspackage_type.update');
Route::get('/Packagetype/deletehouseboatspackagetype/{id}', [HouseboatspackageController::class, 'deletepackage_type'])->name('houseboatspackage_type.delete');


Route::get('Gallery/houseboatgallery',[HouseboatspackageController::class,'display'])->name('houseboatspackagesgalleries.display');

Route::post('Gallery/savehouseboatgallery', [HouseboatspackageController::class, 'savegallery'])->name('houseboatspackagesgalleries.submit');

Route::post('Gallery/houseboatgallerylist', [HouseboatspackageController::class, 'listgallery'])->name('houseboatspackagesgalleries.listgallery');

Route::get('Gallery/deletehouseboatpackagegallery/{id}', [HouseboatspackageController::class, 'deletegallery'])->name('houseboatspackagesgalleries.deletegallery');

//International

Route::resource('internationalpackages', InternationalController::class);

Route::get('Packagetype/international',[InternationalController::class,'show'])->name('kinternationaltype.show');

Route::post('Packagetype/saveinternational', [InternationalController::class, 'savepackage_type'])->name('internationaltype.submit');
Route::get('/Packagetype/editinternationalpackagetype/{id}', [InternationalController::class, 'editpackage_type'])->name('internationalPackage_type.edit');
Route::put('/Packagetype/updateinternationalpackagetype/{id}', [InternationalController::class, 'updatepackage_type'])->name('internationalpackage_type.update');
Route::get('/Packagetype/deleteinternationalpackagetype/{id}', [InternationalController::class, 'deletepackage_type'])->name('internationalpackage_type.delete');


Route::get('Gallery/internationalgallery',[InternationalController::class,'display'])->name('internationalgalleries.display');

Route::post('Gallery/saveinternationalgallery', [InternationalController::class, 'savegallery'])->name('internationalgalleries.submit');

Route::post('Gallery/internationalgallerylist', [InternationalController::class, 'listgallery'])->name('internationalgalleries.listgallery');

Route::get('Gallery/deleteinternationalgallery/{id}', [InternationalController::class, 'deletegallery'])->name('internationalgalleries.deletegallery');


//Students

Route::resource('studentspackages', StudentsController::class);

Route::get('Packagetype/students',[StudentsController::class,'show'])->name('kstudentspackages.show');

Route::post('Packagetype/savestudents', [StudentsController::class, 'savepackage_type'])->name('studentspackagestype.submit');
Route::get('/Packagetype/editstudentspackagetype/{id}', [StudentsController::class, 'editpackage_type'])->name('studentPackage_type.edit');
Route::put('/Packagetype/updatestudentspackagetype/{id}', [StudentsController::class, 'updatepackage_type'])->name('studentpackage_type.update');
Route::get('/Packagetype/deletestudentspackagetype/{id}', [StudentsController::class, 'deletepackage_type'])->name('studentpackage_type.delete');


Route::get('Gallery/studentsgallery',[StudentsController::class,'display'])->name('studentsgalleries.display');

Route::post('Gallery/savestudentsgallery', [StudentsController::class, 'savegallery'])->name('studentsgalleries.submit');

Route::post('Gallery/studentsgallerylist', [StudentsController::class, 'listgallery'])->name('studentsgalleries.listgallery');

Route::get('Gallery/deletestudentsgallery/{id}', [StudentsController::class, 'deletegallery'])->name('studentsgalleries.deletegallery');


//kalari
Route::resource('kalaripackages', KalariController::class);

Route::get('Packagetype/kalari',[KalariController::class,'show'])->name('kkalaripackages.show');

Route::post('Packagetype/savekalari', [KalariController::class, 'savepackage_type'])->name('kalaripackagestype.submit');
Route::get('/Packagetype/editkalaripackagetype/{id}', [KalariController::class, 'editpackage_type'])->name('kalariPackage_type.edit');
Route::put('/Packagetype/updatekalaripackagetype/{id}', [KalariController::class, 'updatepackage_type'])->name('kalaripackage_type.update');
Route::get('/Packagetype/deletekalaripackagetype/{id}', [KalariController::class, 'deletepackage_type'])->name('kalaripackage_type.delete');


Route::get('Gallery/kalarigallery',[KalariController::class,'display'])->name('kalarigalleries.display');

Route::post('Gallery/kalarigallery', [KalariController::class, 'savegallery'])->name('kalarigalleries.submit');

Route::post('Gallery/savekalarigallerylist', [KalariController::class, 'listgallery'])->name('kalarigalleries.listgallery');

Route::get('Gallery/deleteGallery/kalarigallery/{id}', [KalariController::class, 'deletegallery'])->name('kalarisgalleries.deletegallery');


//testimonials

Route::resource('testimonials',TestimonialsController::class);




// Route::post('Gallery/keralagallerylist', [KeralapackagesController::class, 'listKeralagallery'])->name('keralapackages.listkeralagallery');

Route::resource('homesliders', HomesliderController::class);
Route::resource('destination', DestinationsController::class);

Route::resource('hotels',HotelsController::class);

Route::post('hotels/listByDestination', [HotelsController::class, 'listByDestination'])->name('hotels.listbydestination');

Route::resource('galleries',GalleryController::class);

Route::post('galleries/listByHotel', [GalleryController::class, 'listByHotel'])->name('galleries.listByHotel');









Route::get('/abouts/edit', [AboutsController::class, 'edit'])->name('abouts.edit');
Route::post('/abouts/update', [AboutsController::class, 'update'])->name('abouts.update');

Route::get('/career', [CareerController::class, 'edit'])->name('career.edit');
Route::post('/career', [CareerController::class, 'update'])->name('career.update');











//user forms in maill

//home

Route::get('/',[HomeController::class,'home'])->name('website.index');

Route::post('Test/homesendmail',[HomeController::class,'homesendmail'] )->name('homes.submit');


Route::get('/Services/airlineticketing',[AirlineticketingController::class,'show'])->name('airline.on');

Route::post('/airlineticketing/submit',[AirlineticketingController::class,'Airline'] )->name('booknow.submit');

Route::get('/Services/Starcruis',[AirlineticketingController::class,'starcruis'])->name('starcruis.on');

Route::post('/Starcruis/submit',[AirlineticketingController::class,'starcruismail'] )->name('starcruis.submit');

Route::get('/Services/Visamail',[AirlineticketingController::class,'visa'])->name('visa.on');

Route::post('/Visamail/submit',[AirlineticketingController::class,'visamail'] )->name('visa.submit');

Route::get('/Services/Rentacar',[AirlineticketingController::class,'rentacar'])->name('rentacar.on');

Route::post('/Rentacar/submit',[AirlineticketingController::class,'rentacarmail'] )->name('rentacar.submit');






Route::get('/Contact',[AirlineticketingController::class,'showcontact']);

Route::post('/contactus/submit',[AirlineticketingController::class,'contactUs'] )->name('contact.submit');



//hotel

Route::get('/Hotels',[HotelsController::class,'hotel'])->name('website.hotel');

Route::get('Hotels/hotels2/{id}',[HotelsController::class,'hotel2'])->name('website.hotel2');

Route::get('Hotels/hoteldetail/{id}',[HotelsController::class,'hoteldetail'])->name('website.hoteldetail');

Route::post('Test/hotelsendmail',[HotelsController::class,'sendmail'] )->name('hotels.submit');


//Keralapkages

Route::get('Tour/keralatourpackages',[KeralapackagesController::class,'Keralapkages'])->name('website.Keralapkages');
Route::get('Tour/keralatourpackages/packages2/{id}',[KeralapackagesController::class,'Keralapkages2'])->name('website.Keralapkages2');
Route::get('Tour/keralatourpackages/packagesdetail/{id}',[KeralapackagesController::class,'packagesdetail'])->name('website.packagesdetail');
Route::post('Tour/keralatourpackages/packagessendmail',[KeralapackagesController::class,'packagessendmail'])->name('Keralapkages.submit');

//ayurvedapackages

Route::get('Tour/ayurvedapackages',[AyurvedaPackageController::class,'pkages'])->name('website.ayurvedapkages');
Route::get('Tour/ayurvedapackages/packages2/{id}',[AyurvedaPackageController::class,'pkages2'])->name('website.ayurvedapkages2');
Route::get('Tour/ayurvedapackages/packagesdetail/{id}',[AyurvedaPackageController::class,'packagesdetail'])->name('website.ayurvedadetail');
Route::post('Tour/ayurvedapackages/packagessendmail',[AyurvedaPackageController::class,'packagessendmail'])->name('ayurvedapkages.submit');

//

Route::get('Tour/internationalpackages',[InternationalController::class,'pkages'])->name('website.internationalpkages');
Route::get('Tour/internationalpackages/packages2/{id}',[InternationalController::class,'pkages2'])->name('website.internationalpkages2');
Route::get('Tour/internationalpackages/packagesdetail/{id}',[InternationalController::class,'packagesdetail'])->name('website.internationaldetail');
Route::post('Tour/internationalpackages/packagessendmail',[InternationalController::class,'packagessendmail'])->name('internationalpkages.submit');

//houseboats

Route::get('Tour/houseboatspackages',[HouseboatspackageController::class,'pkages'])->name('website.houseboatspkages');
Route::get('Tour/houseboatspackages/packages2/{id}',[HouseboatspackageController::class,'pkages2'])->name('website.houseboatspkages2');
Route::get('Tour/houseboatspackages/packagesdetail/{id}',[HouseboatspackageController::class,'packagesdetail'])->name('website.houseboatsdetail');
Route::post('Tour/houseboatspackages/packagessendmail',[HouseboatspackageController::class,'packagessendmail'])->name('houseboatspkages.submit');


//students

Route::get('Tour/studentspackages',[StudentsController::class,'pkages'])->name('website.studentspkages');
Route::get('Tour/studentspackages/packages2/{id}',[StudentsController::class,'pkages2'])->name('website.studentspkages2');
Route::get('Tour/studentspackages/packagesdetail/{id}',[StudentsController::class,'packagesdetail'])->name('website.studentsdetail');
Route::post('Tour/studentspackages/packagessendmail',[StudentsController::class,'packagessendmail'])->name('studentspkages.submit');

//kalari

Route::get('Tour/kalaripackages',[KalariController::class,'pkages'])->name('website.kalaripkages');
Route::get('Tour/kalaripackages/packages2/{id}',[KalariController::class,'pkages2'])->name('website.kalaripkages2');
Route::get('Tour/kalaripackages/packagesdetail/{id}',[KalariController::class,'packagesdetail'])->name('website.kalaridetail');
Route::post('Tour/kalaripackages/packagessendmail',[KalariController::class,'packagessendmail'])->name('kalaripkages.submit');

Route::get('Home/testimonials',[TestimonialsController::class,'show'])->name('website.testimonials');
Route::post('Home/testimonialssendmail',[TestimonialsController::class,'sendmail'])->name('Home.savetestimonial');

Route::get('Home/careers',[CareerController::class,'show'])->name('website.careers');
Route::post('Home/careerssendmail',[CareerController::class,'submitCareerForm'])->name('Home.savecareers');

// Tour/ayurvedapackages
// Tour/internationalpackages
// Tour/keralahouseboats
// Tour/studentspackages
// Tour/kalaripackages
