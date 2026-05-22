<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Auth\Login;
use App\Http\Middleware\StudentAuth;
use App\Http\Middleware\AdminAuth;
use App\Http\Controllers\Auth\Logout;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
    });
    
    Route::middleware('StudentAuth')->group(function(){
        Route::view('/studentdashboard', 'student.studentdashboard');
        Route::get('paymentuser',[FileController::class,'pay']);
        Route::get('newsubscription',[FileController::class,'newsub']);
        Route::view('dashboard','student.dashboard');
        Route::post('updatenew/{id}',[FileController::class,'userchange']);
        Route::post('/image/{id}',[FileController::class,'img']);
        Route::get('fav',[FileController::class,'favour']);
        Route::get('activatedplans',[FileController::class,'allfile']);
        Route::view('activatedplan/{id}','student.activatedplan');
        Route::view('planactivated','student.planactivated');

        Route::view('password','student.password'); 
        Route::post('otp',[FileController::class,'sendotp']);
        Route::post('enternewotp',[FileController::class,'passup']);
        Route::view('enterotp','student.enterotp');
        Route::view('emptyactivatedplan','student.emptyactivatedplan');
        Route::get('paidfile',[FileController::class,'allpaidfile']);
        Route::post('pay/paid/{id}',[FileController::class,'submit']);
        Route::post('updateform',[FileController::class,'passup']);
        Route::get('sub/{id}',[FileController::class,'other']);
        Route::post('sub/maildata/{id}',[FileController::class,'sendmail']);
        Route::get('like/{id}',[FileController::class,'likes']);
        Route::get('purchase',[FileController::class,'pur']);
        Route::view('purchaseshitory','student.purchasehistory');


});
Route::middleware('adminauth')->group(function(){
Route::get('paymentapprove/{id}',[FileController::class,'accept']);
Route::get('paymentdeny/{id}',[FileController::class,'reject']);
Route::get('subscriptionlist',[FileController::class,'sublist']);
Route::get('upload',[FileController::class,'today']);
Route::get('paymentuser',[FileController::class,'pay']);
Route::view('adminnotes','admin.adminnotes');
Route::view('/admindashboard', 'admin.admindashboard');
Route::view('subscription','admin.subscription');
Route::get('document',[FileController::class,'fetchfile']);
Route::view('adduser','admin.adduser');
Route::view('uploads','admin.upload');
Route::get('studentlist',[FileController::class,'list']);
Route::view('sublist','admin.subscriptionlist');
Route::post('filedata',[FileController::class,'fileuploaddata']);
Route::get('editfile/{id}',[FileController::class,'editing']);
Route::post('editfile/change/{id}',[FileController::class,'newdata']);
Route::get('deletefile/{id}',[FileController::class,'del']);
Route::post('subscribeddata',[FileController::class,'subscription']);
Route::get('studentdel/{id}',[FileController::class,'stdel']);
Route::get('subedit/{id}',[FileController::class,'subediting']);
Route::post('subedit/new/{id}',[FileController::class,'subupdate'])->name('sub.update');
Route::get('subdel/{id}',[FileController::class,'delsub']);


});

Route::post('/logout', [FileController::class,'exit'])->name('logout');
Route::view('register','student.register');
Route::get('home',[FileController::class,'freefile']);
Route::get('downloadto/{id}',[FileController::class,'verify'])->middleware('StudentAuth');
Route::get('homes',[FileController::class,'freeloginfile']);
Route::get('notes',[FileController::class,'notesdata']);
Route::view('adminlogin','admin.login');
Route::post('logindata', [FileController::class, 'loginpage'])->name('logindata');
Route::post('studentregisterdata',[FileController::class,'studentregister']);
Route::view('studentlogin','student.studentlogin');
Route::post('newuser',[FileController::class,'addnewuser']);
Route::view('subscriptionlists','admin.subscriptionlist');
Route::get('studentedit/{id}',[FileController::class,'studentedit']);
Route::post('studentedit/student/{id}',[FileController::class,'studentupdate']);
Route::get('pay/{id}',[FileController::class,'next']);
Route::view('about','aboutus');
Route::view('contact','contactus');
Route::post('studentlogindata', [FileController::class,'stlogin']);
        Route::view('ebookpage','ebook.ebookpage');
        Route::get('allfile',[FileController::class,'allfilesdata']);
        Route::get('freefile',[FileController::class,'allfreefile']);
        Route::get('ebook',[FileController::class,'ebooks']);
        
        Route::get('paidfile',[FileController::class,'allpaidfile']);
        Route::get('downloadnotlogin/{id}',[FileController::class,'nologin'])->middleware('StudentAuth');


