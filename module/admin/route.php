<?php

use \Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'adminguesh'],function(){
    Route::get('login','AuthController@showLoginForm')->name('login.index');
    Route::post('login','AuthController@login')->name('login.post');
});



Route::group(['middleware' => 'adminauth'],function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard.index');
    Route::post('logout','AuthController@logout')->name('logout.post');
    Route::resource('language','LanguageController');
    Route::resource('blogcategory','BlogCategoryController');
    Route::resource('blog','BlogController');
    Route::resource('productcategory','ProductCategoryController');
    Route::resource('product','ProductController');
    Route::resource('eventcategory','EventCategoryController');
    Route::resource('event','EventController');
    Route::resource('user','UserController');
    Route::resource('award','AwardController');
    Route::resource('scheme','SchemeController');
    Route::resource('gallery','GalleryController');
    Route::post('gallery/images/update/{id}','GalleryController@updadeImages')->name('gallery.imagesupdate');
    Route::resource('galleryimage','GalleryImageController');
    Route::resource('techinicaldata','TechinicalDataController');
    Route::get('techinicaldata/file/update','TechinicalDataController@addFiles')->name('techinicaldata.addfiles');
    Route::resource('technicaldatafile','TechnicaldataFileController');
    Route::resource('affilation','AffilationController');
    Route::resource('generalsetting','GeneralsettingController');
    Route::resource('technicaldataimage','TechnicaldataImageController');
    Route::resource('homeslider','HomeSliderController');
    Route::resource('faq','FaqController');
    Route::resource('aboutus','AboutUsController');
    Route::resource('testimonial','TestimonialController');
    Route::resource('contactus',\Module\Admin\Controllers\ContactusController::class);
    Route::resource('subscription',\Module\Admin\Controllers\SubscriptionController::class);
    Route::resource('ourclient','OurClientController');
    Route::post('ajax/product/delete/{id}','ProductController@deleteProductImagess');
    Route::post('ajax/gallery/images/delete/{id}','GalleryController@deleteGalleryImages');
});
