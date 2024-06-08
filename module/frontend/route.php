<?php

use \Illuminate\Support\Facades\Route;

/*Route::group(['middleware' => 'frontendguesh'],function(){
    Route::get('login','AuthController@showLoginForm')->name('login.index');
    Route::post('login','AuthController@login')->name('login.post');
});*/

Route::group([],function(){
    Route::post('logout','AuthController@logout')->name('logout.post');
    Route::get('/','HomeController@index')->name('home.index');
    Route::get('ajax/home/affilation','HomeController@ajaxAffilationHomePage');
    Route::get('ajax/home/award','HomeController@ajaxAwardHomePage');
    Route::get('ajax/home/blog','HomeController@ajaxBlogHomePage');
    Route::get('ajax/home/event','HomeController@ajaxEventHomePage');
    Route::get('ajax/home/ourclient','HomeController@ajaxOurClientHomePage');


    Route::get('about-us','AboutUsController@index')->name('about_us.index');

    Route::get('technical-data','TechnicalDataController@index')->name('technical_data.index');
    Route::get('zip-download', 'TechnicalDataController@zipDownload')->name('zip-download');

    Route::get('awards','AwardController@index')->name('award.index');
    Route::get('faq','FaqController@index')->name('faq.index');

    Route::get('scheme','SchemeController@index')->name('scheme.index');
    Route::get('blog','BlogController@index')->name('blog.index');
    Route::get('blog/{blog}','BlogController@detail')->name('blog.detail');
    Route::get('product','ProductController@index')->name('product.index');
    Route::get('product/{product}','ProductController@detail')->name('product.detail');
    Route::get('gallery','GalleryController@index')->name('gallery.index');
    Route::get('gallery/{gallery}','GalleryController@detail')->name('gallery.detail');
    Route::get('event','EventController@index')->name('event.index');
    Route::get('event/{event}','EventController@detail')->name('event.detail');

     Route::get('login','AuthController@showLoginFrom')->name('login.index');
    Route::get('forget-password','AuthController@showForgetPasswordFrom')->name('forget_password.index');
    Route::get('register','AuthController@showRegisterFrom')->name('register.index');
    Route::post('register/user','AuthController@registerUser')->name('create.user');
    Route::get('contact-us','ContactUsController@index')->name('contact_us.index');
    Route::post('contact-us','ContactUsController@store')->name('contact_us.store');
    Route::post('subscription','SubscriptionController@store')->name('subscription.store');
    Route::get('/send-mail-using-mailchimp', 'ContactUsController@mailchimp')->name('send.mail.using.mailchimp.index');
});



