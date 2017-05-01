<?php

// ===============================================
// STATIC PAGES ==================================
// ===============================================

// show a static view for your home page (app/resources/views/home.blade.php)
Route::resource('/', 'HomeController');

// about page (app/resources/views/skills.blade.php)
Route::resource('/skills', 'HomeController');

// about page (app/resources/views/skills.blade.php)
Route::resource('/contact', 'HomeController');

// about page (app/resources/views/skills.blade.php)
Route::resource('/resume', 'HomeController');

Route::resource('skills', 'SkillController');

Route::auth();

Route::get('/home', 'HomeController@index');
