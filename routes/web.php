<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */


//jobs
Route::get('/',[App\Http\Controllers\JobController::class, 'index']);
Route::get('/jobs/create',[App\Http\Controllers\JobController::class, 'create'])->name('job.create');
Route::post('/jobs/create',[App\Http\Controllers\JobController::class, 'store'])->name('job.store');
Route::get('/jobs/{id}/edit',[App\Http\Controllers\JobController::class, 'edit'])->name('job.edit');
Route::post('/jobs/{id}/edit',[App\Http\Controllers\JobController::class, 'update'])->name('job.update');
Route::get('/jobs/my-job',[App\Http\Controllers\JobController::class, 'myJob'])->name('my.job');

Route::get('/jobs/applications',[App\Http\Controllers\JobController::class, 'applicant'])->name('applicant');
Route::get('/jobs/alljobs',[App\Http\Controllers\JobController::class, 'allJobs'])->name('alljobs');



//Auth::routes();
Auth::routes(['verify' => true]);





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jobs/{id}/{job}',[App\Http\Controllers\JobController::class, 'show'])->name('jobs.show');
//company
Route::get('/company/{id}/{company}',[App\Http\Controllers\CompanyController::class, 'index'])->name('company.index');
Route::get('company/create',[App\Http\Controllers\CompanyController::class, 'create'])->name('company.view');
Route::post('company/create',[App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');


Route::post('company/coverphoto',[App\Http\Controllers\CompanyController::class, 'coverPhoto'])->name('cover.photo');

Route::post('company/logo',[App\Http\Controllers\CompanyController::class, 'companyLogo'])->name('company.logo');



//user profile
Route::get('user/profile',[App\Http\Controllers\UserController::class, 'index'])->name('user.profile');
Route::post('user/profile/create',[App\Http\Controllers\UserController::class, 'store'])->name('profile.create');

Route::post('user/coverletter',[App\Http\Controllers\UserController::class, 'coverLetter'])->name('cover.letter');

Route::post('user/resume',[App\Http\Controllers\UserController::class, 'resume'])->name('resume');
Route::post('user/avatar',[App\Http\Controllers\UserController::class, 'avatar'])->name('avatar');



//employer view
Route::view('employer/register','auth.employer-register')->name('employer.register');

Route::post('employer/register',[App\Http\Controllers\EmployerRegisterController::class, 'employerRegister'])->name('emp.register');

Route::post('/applications/{id}',[App\Http\Controllers\JobController::class, 'apply'])->name('apply');


//save and unsave job
Route::post('/save/{id}',[App\Http\Controllers\FavouriteController::class, 'saveJob']);

Route::post('/unsave/{id}',[App\Http\Controllers\FavouriteController::class, 'unsaveJob']);

//category
Route::get('/category/{id}/jobs',[App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');

//company
Route::get('/companies',[App\Http\Controllers\CompanyController::class, 'company'])->name('company');


//admin
Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->middleware('admin');
Route::get('/dashboard/create',[App\Http\Controllers\DashboardController::class, 'create'])->middleware('admin');
Route::post('/dashboard/create',[App\Http\Controllers\DashboardController::class, 'store'])->name('post.store')->middleware('admin');
Route::post('/dashboard/destroy',[App\Http\Controllers\DashboardController::class, 'destroy'])->name('post.delete')->middleware('admin');

Route::get('/dashboard/{id}/edit',[App\Http\Controllers\DashboardController::class, 'edit'])->name('post.edit')->middleware('admin');
Route::post('/dashboard/{id}/update',[App\Http\Controllers\DashboardController::class, 'update'])->name('post.update')->middleware('admin');

Route::get('/dashboard/trash',[App\Http\Controllers\DashboardController::class, 'trash'])->middleware('admin');

Route::get('/dashboard/{id}/trash',[App\Http\Controllers\DashboardController::class, 'restore'])->name('post.restore')->middleware('admin');

Route::get('/dashboard/{id}/toggle',[App\Http\Controllers\DashboardController::class, 'toggle'])->name('post.toggle')->middleware('admin');
Route::get('/posts/{id}/{slug}',[App\Http\Controllers\DashboardController::class, 'show'])->name('post.show');

Route::get('/dashboard/jobs',[App\Http\Controllers\DashboardController::class, 'getAllJobs'])->middleware('admin');
Route::get('/dashboard/{id}/jobs',[App\Http\Controllers\DashboardController::class, 'changeJobStatus'])->name('job.status')->middleware('admin');


//testimonial
Route::get('testimonial',[App\Http\Controllers\TestimonialController::class, 'index'])->middleware('admin');

Route::get('testimonial/create',[App\Http\Controllers\TestimonialController::class, 'create'])->middleware('admin');
Route::post('testimonial/create',[App\Http\Controllers\TestimonialController::class, 'store'])->name('testimonial.store')->middleware('admin');

//email
Route::post('/job/mail',[App\Http\Controllers\EmailController::class, 'send'])->name('mail');


