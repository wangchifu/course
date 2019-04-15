<?php

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

//首頁轉到最新消息
Route::get('/' , function(){
    return redirect()->route('posts.index');
})->name('index');

//Auth::routes();
#登入
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

//gsuite登入
Route::get('glogin', 'GLoginController@showLoginForm')->name('glogin');
Route::post('glogin', 'GLoginController@auth')->name('gauth');

#登出
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

#註冊
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register')->name('register.post');

#忘記密碼
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');


//Route::get('/home', 'HomeController@index')->name('home');

//公告系統公開
Route::get('posts/index' , 'PostController@index')->name('posts.index');
Route::get('posts/{post}' , 'PostController@show')->where('post', '[0-9]+')->name('posts.show');
//下載storage裡public的檔案
Route::get('file/{file}', 'FileController@getFile');

Route::match(['get','post'],'share' , 'HomeController@share')->name('share');
Route::get('/share/{select_year}/{school_code}' , 'HomeController@share_one')->name('share_one');
Route::match(['get','post'],'excellent' , 'HomeController@excellent')->name('excellent');

//使用者可用
Route::group(['middleware' => 'auth'],function(){
    Route::get('resetPwd' , 'HomeController@reset_pwd')->name('reset_pwd');
    Route::patch('updatePWD' , 'HomeController@update_pwd')->name('update_pwd');

    //打開檔案
    Route::get('file/{file_path}/open' , 'FileController@open')->name('file.open');

    //結束模擬
    Route::get('sims/impersonate_leave', 'SimulationController@impersonate_leave')->name('sims.impersonate_leave');

    //儲存email
    Route::post('email', 'HomeController@email')->name('email');
});

//管理者可用
Route::group(['middleware' => 'admin'],function(){
    //公告系統
    Route::get('posts/create' , 'PostController@create')->name('posts.create');
    Route::post('posts' , 'PostController@store')->name('posts.store');
    Route::get('posts/{post}/edit' , 'PostController@edit')->name('posts.edit');
    Route::patch('posts/{post}' , 'PostController@update')->name('posts.update');
    Route::delete('posts/{post}', 'PostController@destroy')->name('posts.destroy');
    //刪檔案
    Route::get('posts/{file}/fileDel' , 'PostController@fileDel')->name('posts.fileDel');

    //使用者管理
    Route::match(['get','post'],'users/index' , 'UserController@index')->name('users.index');
    Route::get('users/{group_id}/create' , 'UserController@create')->name('users.create');
    Route::post('users/store' , 'UserController@store')->name('users.store');
    Route::get('users/{user}/edit' , 'UserController@edit')->name('users.edit');
    Route::patch('users/{user}/update' , 'UserController@update')->name('users.update');
    Route::patch('users/{user}/disable' , 'UserController@disable')->name('users.disable');
    Route::patch('users/{user}/able' , 'UserController@able')->name('users.able');
    Route::get('users/{user}/reset' , 'UserController@reset')->name('users.reset');

    //年度管理
    Route::get('years/index' , 'YearController@index')->name('years.index');
    Route::get('years/{year}/show' , 'YearController@show')->name('years.show');
    Route::get('years/create' , 'YearController@create')->name('years.create');
    Route::post('years/store' , 'YearController@store')->name('years.store');
    Route::get('years/{year}/edit' , 'YearController@edit')->name('years.edit');
    Route::patch('years/{year}/update' , 'YearController@update')->name('years.update');
    Route::get('years/{year}/destroy' , 'YearController@destroy')->name('years.destroy');

    //教科書版本管理
    Route::get('books/index' , 'BookController@index')->name('books.index');
    Route::post('books/store' , 'BookController@store')->name('books.store');
    Route::delete('books/destroy' , 'BookController@destroy')->name('books.destroy');

    //普教審核管理
    Route::match(['get','post'],'reviews/index' , 'ReviewController@index')->name('reviews.index');
    Route::get('reviews/{select_year}/{school_code}/first_user' , 'ReviewController@first_user')->name('reviews.first_user');
    Route::post('reviews/first_user_store' , 'ReviewController@first_user_store')->name('reviews.first_user_store');
    Route::get('reviews/{select_year}/{school_code}/second_user' , 'ReviewController@second_user')->name('reviews.second_user');
    Route::post('reviews/second_user_store' , 'ReviewController@second_user_store')->name('reviews.second_user_store');

    Route::get('reviews/{select_year}/first_by_user' , 'ReviewController@first_by_user')->name('reviews.first_by_user');
    Route::post('reviews/first_by_user_store' , 'ReviewController@first_by_user_store')->name('reviews.first_by_user_store');
    Route::get('reviews/{select_year}/second_by_user' , 'ReviewController@second_by_user')->name('reviews.second_by_user');
    Route::post('reviews/second_by_user_store' , 'ReviewController@second_by_user_store')->name('reviews.second_by_user_store');

    Route::get('reviews/{select_year}/{school_code}/select_open' , 'ReviewController@select_open')->name('reviews.select_open');
    Route::get('reviews/{select_year}/{school_code}/select_close' , 'ReviewController@select_close')->name('reviews.select_close');
    Route::get('reviews/{select_year}/open' , 'ReviewController@open')->name('reviews.open');
    Route::get('reviews/{select_year}/unsent1' , 'ReviewController@unsent1')->name('reviews.unsent1');
    Route::get('reviews/{select_year}/unsent2' , 'ReviewController@unsent2')->name('reviews.unsent2');
    Route::get('reviews/{select_year}/unsent3' , 'ReviewController@unsent3')->name('reviews.unsent3');

    Route::get('reviews/{select_year}/{school_code}/show_school_first_suggest' , 'ReviewController@show_school_first_suggest')->name('reviews.show_school_first_suggest');

    //特教審查管理
    Route::match(['get','post'],'reviews2/index' , 'Review2Controller@index')->name('reviews2.index');
    Route::get('reviews2/{select_year}/{school_code}/{c}/special_user' , 'Review2Controller@special_user')->name('reviews2.special_user');
    Route::post('reviews2/special_user_store' , 'Review2Controller@special_user_store')->name('reviews2.special_user_store');
    Route::get('reviews2/{select_year}/{c}/special_by_user' , 'Review2Controller@special_by_user')->name('reviews2.special_by_user');
    Route::post('reviews2/special_by_user_store' , 'Review2Controller@special_by_user_store')->name('reviews2.special_by_user_store');
    Route::get('reviews2/{select_year}/unsent_special' , 'Review2Controller@unsent_special')->name('reviews2.unsent_special');

    //匯出表單
    Route::match(['get','post'],'exports/index' , 'ExportController@index')->name('exports.index');
    Route::get('exports/{select_year}/section' , 'ExportController@section')->name('exports.section');
    Route::get('exports/{select_year}/show_date' , 'ExportController@show_date')->name('exports.show_date');

    //模擬登入
    Route::get('sims/index' , 'SimulationController@index')->name('sims.index');
    Route::get('sims/{user}/impersonate', 'SimulationController@impersonate')->name('sims.impersonate');

});

//學校可用
Route::group(['middleware' => 'school'],function(){
    Route::match(['get','post'],'schools' , 'SchoolController@index')->name('schools.index');
    Route::get('schools/{select_year}/edit' , 'SchoolController@edit')->name('schools.edit');
    Route::get('schools/{select_year}/special_edit' , 'SchoolController@special_edit')->name('schools.special_edit');
    Route::post('schools/upload' , 'SchoolController@upload')->name('schools.upload');

    //下載課程計畫的檔案
    Route::get('schools/{year}/{school_code}/{file_name}/download' , 'FileController@download')->name('schools.download');
    //下載課程計畫的檔案2
    Route::get('schools/{file_path}/download2' , 'FileController@download2')->name('schools.download2');

    Route::get('schools/{year}/{school_code}/{file_name}/delfile' , 'FileController@delfile')->name('schools.delfile');
    Route::get('schools/{file_path}/delfile2' , 'FileController@delfile2')->name('schools.delfile2');


    Route::get('schools/{select_year}/{order}/normal_upload' , 'SchoolController@normal_upload')->name('schools.normal_upload');

    Route::post('schools/c3_1_store' , 'SchoolController@c3_1_store')->name('schools.c3_1_store');
    //刪除課程節數
    Route::delete('schools/c3_1_delete' , 'SchoolController@c3_1_delete')->name('schools.c3_1_delete');
    Route::get('schools/{select_year}/c3_1_print' , 'SchoolController@c3_1_print')->name('schools.c3_1_print');

    Route::get('schools/{select_year}/{order}/{subject}/{grade}/c6_upload' , 'SchoolController@c6_upload')->name('schools.c6_upload');
    Route::post('schools/c6_store' , 'SchoolController@c6_store')->name('schools.c6_store');

    Route::get('schools/{select_year}/{order}/{grade}/c7_1_upload' , 'SchoolController@c7_1_upload')->name('schools.c7_1_upload');
    Route::post('schools/c7_1_store' , 'SchoolController@c7_1_store')->name('schools.c7_1_store');

    Route::post('schools/c7_2_store' , 'SchoolController@c7_2_store')->name('schools.c7_2_store');

    //儲存教科書版本
    Route::post('schools/c8_1_store' , 'SchoolController@c8_1_store')->name('schools.c8_1_store');
    //刪除教科書版本
    Route::delete('schools/c8_1_delete' , 'SchoolController@c8_1_delete')->name('schools.c8_1_delete');

    Route::post('schools/c8_2_store' , 'SchoolController@c8_2_store')->name('schools.c8_2_store');

    Route::get('schools/{select_year}/{order}/{grade}/c9_upload' , 'SchoolController@c9_upload')->name('schools.c9_upload');
    Route::post('schools/c9_store' , 'SchoolController@c9_store')->name('schools.c9_store');

    Route::post('schools/c10_2_date_store' , 'SchoolController@c10_2_date_store')->name('schools.c10_2_date_store');
    Route::get('schools/{select_year}/c10_2_date_delete' , 'SchoolController@c10_2_date_delete')->name('schools.c10_2_date_delete');

    Route::post('schools/c14_store' , 'SchoolController@c14_store')->name('schools.c14_store');

    Route::post('schools/submit' , 'SchoolController@submit')->name('schools.submit');

    Route::get('schools/{select_year}/show_first_suggest' , 'SchoolController@show_first_suggest')->name('schools.show_first_suggest');

    //撤回送審
    Route::get('schools/{select_year}/give_up_first_suggest1' , 'SchoolController@give_up_first_suggest1')->name('schools.give_up_first_suggest1');
    Route::get('schools/{select_year}/give_up_first_suggest2' , 'SchoolController@give_up_first_suggest2')->name('schools.give_up_first_suggest2');

});

//特教委員
Route::group(['middleware' => 'special'],function(){
    Route::match(['get','post'],'specials/index' , 'SpecialController@index')->name('specials.index');
    Route::get('specials/{course_id}/{page}/edit13' , 'SpecialController@edit13')->name('specials.edit13');
    Route::post('specials13' , 'SpecialController@store13')->name('specials.store13');
    Route::patch('specials13/{course}' , 'SpecialController@update13')->name('specials.update13');

    Route::get('specials/{course_id}/{page}/edit13_1' , 'SpecialController@edit13_1')->name('specials.edit13_1');
    Route::post('specials13_1' , 'SpecialController@store13_1')->name('specials.store13_1');
    Route::patch('specials13_1/{course}' , 'SpecialController@update13_1')->name('specials.update13_1');

    Route::get('specials/{course_id}/{page}/edit13_2' , 'SpecialController@edit13_2')->name('specials.edit13_2');
    Route::post('specials13_2' , 'SpecialController@store13_2')->name('specials.store13_2');
    Route::patch('specials13_2/{course}' , 'SpecialController@update13_2')->name('specials.update13_2');

    Route::get('specials/{course_id}/{page}/edit13_3' , 'SpecialController@edit13_3')->name('specials.edit13_3');
    Route::post('specials13_3' , 'SpecialController@store13_3')->name('specials.store13_3');
    Route::patch('specials13_3/{course}' , 'SpecialController@update13_3')->name('specials.update13_3');

});

//初審委員
Route::group(['middleware' => 'first'],function(){
    Route::match(['get','post'],'firsts/index' , 'FirstController@index')->name('firsts.index');
    Route::post('firsts/store1' , 'FirstController@store1')->name('firsts.store1');
    Route::post('firsts/store2' , 'FirstController@store2')->name('firsts.store2');

    Route::get('firsts/{course_id}/{page}/create1' , 'FirstController@create1')->name('firsts.create1');
    Route::get('firsts/{course_id}/{page}/create2' , 'FirstController@create2')->name('firsts.create2');
    Route::get('firsts/{course_id}/{page}/show' , 'FirstController@show')->name('firsts.show');
    Route::get('firsts/{course_id}/{page}/edit1' , 'FirstController@edit1')->name('firsts.edit1');
    Route::get('firsts/{course_id}/{page}/edit2' , 'FirstController@edit2')->name('firsts.edit2');

    Route::post('firsts/update1' , 'FirstController@update1')->name('firsts.update1');
    Route::post('firsts/update2' , 'FirstController@update2')->name('firsts.update2');



});

//複審委員
Route::group(['middleware' => 'second'],function(){
    Route::match(['get','post'],'seconds/index' , 'SecondController@index')->name('seconds.index');
    Route::get('seconds/{course_id}/{page}/create' , 'SecondController@create')->name('seconds.create');
    Route::post('seconds' , 'SecondController@store')->name('seconds.store');
    Route::patch('seconds/{course}' , 'SecondController@update')->name('seconds.update');
});
