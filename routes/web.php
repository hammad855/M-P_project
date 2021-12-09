<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DepartmentController;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'homePage'])->name("home");
Route::view('/logistics', 'logistics.index')->name("logistics");
Route::view("/cost-calculator", 'cost_calculator.index')->name("cost_calculator");
Route::view("/contact-us", 'contact_us.index')->name("contact");
Route::view("/get-a-quote", 'quote.index')->name("quote");

Route::prefix("/about-us")->group(function () {
    Route::view("/", 'about_us.index')->name("about_us");
    Route::get("/our-leadership", [PagesController::class, 'leadershipPage'])->name("our_leadership");
    Route::get("/timeline", [PagesController::class, 'timelinePage'])->name("timeline");
    Route::view("locations", 'about_us.location')->name("locations");
    Route::get('/branches/{location}/{branchCode}', [AboutController::class, 'subLocations'])->name('branches');
    Route::view('/life-at-m&p', 'about_us.life_at_mandp')->name("life_at_mnp");
});

Route::prefix("/courier")->group(function () {
    Route::get('/', [PagesController::class, 'courierPage'])->name("courier");
    Route::view('/overnight', 'courier.overnight')->name("overnight");
    Route::view('/same-day-delivery', 'courier.same_day')->name("same_day_delivery");
    Route::view("/second-day-delivery", 'courier.second_day')->name("second_day_delivery");
    Route::view('/my-flyer', 'courier.my_flyer')->name("my_flyer");
    Route::view('/my-box', 'courier.my_box')->name("my_box");
    Route::view('/cargo', 'courier.cargo')->name("cargo");
    Route::view('/express-cargo', 'courier.express_cargo')->name("express_cargo");
    Route::view('/value-added-services', 'courier.value_added_services')->name("value_added_services");
    Route::view('/cellophane-wrapping', 'courier.cellophane_wrapping')->name('cellophane_wrapping');
    Route::view('/brown-box-facility', 'courier.brown_box_facility')->name('brown_box_facility');
    Route::view('/special-handling', 'courier.special_handling')->name('special_handling');
    Route::view('/holiday-delivery', 'courier.holiday_delivery')->name('holiday_delivery');
    Route::view('/out-of-service-area', 'courier.out_of_service_area')->name("out_of_service_area");
    Route::view('/attestation', 'courier.attestation')->name("attestation");
    Route::view('/insurance', 'courier.insurance')->name("insurance");
    Route::view('/mfs', 'courier.mfs')->name("mfs");
    Route::view("/international", 'courier.international')->name('international');

});

Route::prefix("/cash-on-delivery")->group(function () {
    Route::view('/', 'cod.index')->name("cod");
    Route::view('/corporate', 'cod.corporate')->name("corporate_cod");
    Route::view('/retail', 'cod.retail')->name("retail_code");
});

Route::prefix('/business-solutions')->group(function (){
    Route::view('/warehousing', 'business_solutions.warehouse')->name("warehousing");
    Route::view('/cool-chain-temperature-controlled', 'business_solutions.cool_chain')->name("cool_chain");
    Route::view('/p&d', 'business_solutions.pandd')->name("pnd");
    ROute::view("/call-center", 'business_solutions.call_center')->name("call_center");
});

Route::prefix("/careers")->group(function (){
    Route::view('/', 'careers.index')->name("careers");
    Route::get('/list', [PostController::class,'joblist'])->name('joblist');
    Route::view('/apply', 'careers.job_form')->name('careers_apply');
    Route::post('/applypost', [PostController::class,'applypost'])->name('applypost');
});


Route::prefix("/terms-and-condition")->group(function (){
    Route::view('/international', 'tac.international')->name('tac_int');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::get('/migrate', function () {
    Artisan::call('migrate');
});
Route::get('/route-cache', function () {
    Artisan::call('route:cache');
});


Auth::routes();

Route::post('/loginprocess',[UserController::class, 'loginprocess']);
Route::post('/createuser',[UserController::class, 'createuser']);
Route::get('/logout',[UserController::class, 'logout']);

Route::post('/autocomplete',[PostController::class, 'autocomplete'])->name('autocomplete');
Route::post('/createjob',[PostController::class, 'createjob'])->name('createjob');

Route::post('/changeapplicationstatus',[PostController::class, 'changeapplicationstatus']);





Route::get('/downloadcv/{file}',[PostController::class, 'downloadcv']);

Route::prefix('/hr-admin')->group(function(){
    Route::view('/', 'careers_admin.dashboard')->name('hr-admin');
    Route::view('/login', 'careers_admin.login')->name('login');
    
    Route::get('/post', [PostController::class, 'createpost'])->middleware('auth');

    Route::get('/applications', [PostController::class, 'applications'])->middleware('auth');

    // Route::view('/post', 'careers_admin.post_job')->middleware('auth');
    Route::get('/departments',[DepartmentController::class, 'getdeparts'])->name('dep');
    Route::view('/add_user', 'careers_admin.add_user');
    Route::view('/users', 'careers_admin.users');

    Route::get('/joblisting',[PostController::class, 'joblisting']);
    Route::get('/joblistingedit/{id}', [PostController::class, 'joblistingedit'])->name('joblistedit');
});

Route::post('/joblistingupdate', [PostController::class, 'joblistingupdate']);

Route::get('/joblistingdelete/{id}', [PostController::class, 'joblistingdelete']);

Route::post('/joblisting/{id}', [PostController::class, 'joblistingedit'])->name('joblist.edit');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
