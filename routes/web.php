<?php

use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEnglishActivityController;
use App\Http\Controllers\AdminEnglishBrandController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('contact');
    } else {
        return redirect()->route('en.home');
    }
});



Route::prefix('En')->group(function () {
    Route::get('/about', function () {
        return view('en.about_us');
    })->name('en.about');
    Route::get('/brand-alawafy', function () {
        return view('en.our_brand');
    })->name('en.brands');
    Route::get('/brand-crico', function () {
        return view('en.our_brand_crico');
    })->name('en.brands_crico');
    Route::get('/brand-alyoum', function () {
        return view('en.our_brand_alyoum');
    })->name('en.brands_alyoum');
    Route::get('/home', function () {
        return view('en.home');
    })->name('en.home');
    Route::get('/contact-us', function () {
        return view('en.contact_us');
    })->name('en.contact');
    Route::get('/our-products', function () {
        return view('en.our_products');
    })->name('en.our.products');
    Route::get('/activities', function () {
        return view('en.activities');
    })->name('en.activities');
    Route::get('/terms_condition', function () {
        return view('en.terms_condition');
    })->name('en.terms_condition');
    Route::get('/privacy_policy', function () {
        return view('en.privacy_policy');
    })->name('en.privacy_policy');
});


Route::prefix('Ar')->group(function () {
    Route::get('/about', function () {
        return view('ar.about_us');
    })->name('ar.about');
    Route::get('/brand-alawafy', function () {
        return view('ar.our_brand');
    })->name('ar.brands');
    Route::get('/brand-crico', function () {
        return view('ar.our_brand_crico');
    })->name('ar.brands_crico');
    Route::get('/brand-alyoum', function () {
        return view('ar.our_brand_alyoum');
    })->name('ar.brands_alyoum');
    Route::get('/home', function () {
        return view('ar.home');
    })->name('ar.home');
    Route::get('/contact-us', function () {
        return view('ar.contact_us');
    })->name('ar.contact');
    Route::get('/our-products', function () {
        return view('ar.our_products');
    })->name('ar.our.products');
    Route::get('/activities', function () {
        return view('ar.activities');
    })->name('ar.activities');
    Route::get('/terms_condition', function () {
        return view('ar.terms_condition');
    })->name('ar.terms_condition');
    Route::get('/privacy_policy', function () {
        return view('ar.privacy_policy');
    })->name('ar.privacy_policy');
});


Route::prefix('Fr')->group(function () {
    Route::get('/about', function () {
        return view('fr.about_us');
    })->name('fr.about');
    Route::get('/brand-alawafy', function () {
        return view('fr.our_brand');
    })->name('fr.brands');
    Route::get('/brand-crico', function () {
        return view('fr.our_brand_crico');
    })->name('fr.brands_crico');
    Route::get('/brand-alyoum', function () {
        return view('fr.our_brand_alyoum');
    })->name('fr.brands_alyoum');
    Route::get('/home', function () {
        return view('fr.home');
    })->name('fr.home');
    Route::get('/contact-us', function () {
        return view('fr.contact_us');
    })->name('fr.contact');
    Route::get('/our-products', function () {
        return view('fr.our_products');
    })->name('fr.our.products');
    Route::get('/activities', function () {
        return view('fr.activities');
    })->name('fr.activities');
    Route::get('/terms_condition', function () {
        return view('fr.terms_condition');
    })->name('fr.terms_condition');
    Route::get('/privacy_policy', function () {
        return view('fr.privacy_policy');
    })->name('fr.privacy_policy');
});




Route::post('/contact/create', [FormController::class, 'contact_create'])->name('contact.create');
Route::post('/news-letter/create', [FormController::class, 'news_letter_create'])->name('news.letter.create');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {


    Route::get('/admin/contacts-details', [AdminController::class, 'get_contacts'])->name('contact');
    Route::delete('/admin/contacts-delete/{id}', [AdminController::class, 'contact_delete'])->name('contact.delete');
    Route::get('/admin-news-letter', [AdminController::class, 'get_news_letter'])->name('news.letter');
    Route::delete('/admin/news-letter-delete/{id}', [AdminController::class, 'news_letter_delete'])->name('news.letter.delete');



    // English Home Route
    Route::get('admin/home-english', [AdminHomeController::class, 'admin_home'])->name('admin.home.english');

    Route::post('admin/home-english/meta/store', [AdminHomeController::class, 'english_meta_section'])->name('home.english.meta');
    Route::post('admin/home-english/banner-1', [AdminHomeController::class, 'admin_home_banner_1'])->name('home.english.banner.1');
    Route::post('admin/home-english/banner-2', [AdminHomeController::class, 'admin_home_banner_2'])->name('home.english.banner.2');
    Route::post('admin/home-english/banner-3', [AdminHomeController::class, 'admin_home_banner_3'])->name('home.english.banner.3');

    // home about route
    Route::post('admin/home-english/about', [AdminHomeController::class, 'admin_home_about'])->name('home.english.about');

    Route::post('admin/home-english/our-value', [AdminHomeController::class, 'admin_home_our_value'])->name('home.english.our.value');

    Route::post('admin/home-english/section-6', [AdminHomeController::class, 'admin_home_section_6'])->name('home.english.section.6');

    Route::post('admin/home-english/our-brand-1', [AdminHomeController::class, 'admin_home_our_brand_1'])->name('home.english.our.brand_1');
    Route::post('admin/home-english/our-brand-2', [AdminHomeController::class, 'admin_home_our_brand_2'])->name('home.english.our.brand_2');
    Route::post('admin/home-english/our-brand-3', [AdminHomeController::class, 'admin_home_our_brand_3'])->name('home.english.our.brand_3');

    Route::post('/admin-home-english/english-activity/store', [AdminEnglishActivityController::class, 'eng_activity_store'])->name('eng.activity.store');
    Route::put('/admin-home-english/english-activity/update', [AdminEnglishActivityController::class, 'eng_activity_update'])->name('eng.activity.update');

    Route::delete('/admin-home-page/section-2-modal/{id}/delete', [AdminEnglishActivityController::class, 'empty_Modal_delete'])->name('section2modal.delete');

    Route::get('admin/brand-alawafy-english', [AdminEnglishBrandController::class, 'admin_brand_alawafy_english'])->name('admin.brand.alawafy.english');
    Route::get('admin/brand-alyoum-english', [AdminEnglishBrandController::class, 'admin_brand_alyoum_english'])->name('admin.brand.alyoum.english');
    Route::get('admin/brand-crico-english', [AdminEnglishBrandController::class, 'admin_brand_crico_english'])->name('admin.brand.crico.english');





    Route::get('admin/home-french', [AdminHomeController::class, 'admin_home'])->name('admin.home.french');

    Route::post('admin/home-french/meta/store', [AdminHomeController::class, 'french_meta_section'])->name('home.french.meta');
    Route::post('admin/home-french/banner-1', [AdminHomeController::class, 'french_admin_home_banner_1'])->name('home.french.banner.1');
    Route::post('admin/home-french/banner-2', [AdminHomeController::class, 'french_admin_home_banner_2'])->name('home.french.banner.2');
    Route::post('admin/home-french/banner-3', [AdminHomeController::class, 'french_admin_home_banner_3'])->name('home.french.banner.3');

    // home about route
    Route::post('admin/home-french/about', [AdminHomeController::class, 'french_admin_home_about'])->name('home.french.about');

    Route::post('admin/home-french/our-value', [AdminHomeController::class, 'french_admin_home_our_value'])->name('home.french.our.value');

    Route::post('admin/home-french/section-6', [AdminHomeController::class, 'french_admin_home_section_6'])->name('home.french.section.6');

    Route::post('admin/home-french/our-brand-1', [AdminHomeController::class, 'french_admin_home_our_brand_1'])->name('home.french.our.brand_1');
    Route::post('admin/home-french/our-brand-2', [AdminHomeController::class, 'french_admin_home_our_brand_2'])->name('home.french.our.brand_2');
    Route::post('admin/home-french/our-brand-3', [AdminHomeController::class, 'french_admin_home_our_brand_3'])->name('home.french.our.brand_3');







    Route::get('admin/about-english', [AdminAboutController::class, 'admin_about'])->name('admin.about.english');
});
