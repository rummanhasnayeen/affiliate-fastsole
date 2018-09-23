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
 
Route::get('/', function () {
return view('testwelcome');
});

// Route::get('/testwelcome', function () {
// return view('testwelcome');
// });
Route::get('/teamA','HomeController@teamA'); 
// Route::get('/releases','HomeController@releases');
Route::get('/comingsoontest','HomeController@comingsoontest');
Route::get('/welcomebrandtest','HomeController@welcomebrandtest'); 



Route::get('/testreleases','HomeController@testreleases');

// Route::get('/allreleases','HomeController@allreleases');
// Route::get('/randomSearch','HomeController@randomSearch');
Route::get('/resetSearch','HomeController@resetSearch');
Route::get('/testbrand/{brandname}','HomeController@testbrand');

Route::get('/randomSearchtest','HomeController@randomSearchtest');

Route::post('/subscription','HomeController@subscription');

Route::get('/about',function(){
return view('about');

});
Route::get('/testabout',function(){
return view('testabout');

});
Route::get('/bsearch/{brand}','HomeController@bsearch');
Route::get('/wintersale',function(){
return view('profile.wintersale');
});
Route::get('/testwintersale',function(){
return view('testwintersale');
});
// Route::get('/newscatalogue','HomeController@newscatalogue');
Route::get('/testnewscatalogue','HomeController@testnewscatalogue');

Route::get('/product','HomeController@productPage');
Route::get('/testproduct/{product_id}','HomeController@testproductPage');

Route::get('/test','HomeController@test');
Route::get('/testall','HomeController@testall');


Route::get('/product/{product_id}','HomeController@productPage');



// Route::get('/searchResult','HomeController@searchResult');
Route::get('/newsSingle/{news_id}','HomeController@newsSingle');

Route::post('/search_releases','HomeController@search_releases');
Route::post('/messages', 'HomeController@messages');









Auth::routes();


Route::group(['middleware' => 'auth'], function()
{
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pagemanage', function(){
return view('profile.pagemanage');
});

Route::get('/editProduct', function(){
return view('profile.editProduct');
});
Route::get('/sliderBanner', function(){
return view('profile.sliderBanner');
});
Route::get('/editWintersale', function(){
return view('profile.editWintersale');
});

// Route::get('/profile/{slug}', 'ProfileController@index');
Route::get('/removeMessage/{message_id}','ProfileController@removeMessage');
Route::get('/messages/all', 'ProfileController@allmessages');
Route::post('/affiliateChange','ProfileController@affiliateChange');
Route::post('/productChange','ProfileController@productChange');





Route::get('/changePhoto',function ()
{



return view('profile.pic');
}



);
Route::post('/uploadPhoto', 'ProfileController@uploadPhoto');
Route::post('/remove_brand', 'ProfileController@remove_brand');
Route::post('/editWintersale/delete/{sale_id}', 'ProfileController@delete_sale');
Route::post('/editNews/delete/{news_id}', 'ProfileController@delete_news');

Route::post('/editWintersale/add', 'ProfileController@add_sale');
Route::post('/editNews/add', 'ProfileController@add_news');

Route::get('/editNews', function(){
return view('profile.editNews');
});



Route::post('/remove_onfocus', 'ProfileController@remove_onfocus');
Route::post('/remove_slider', 'ProfileController@remove_slider');
Route::post('/remove_banner', 'ProfileController@remove_banner');
Route::post('/remove_slider_banner', 'ProfileController@remove_slider_banner');





Route::post('/add_product', 'ProfileController@add_product');
Route::post('/add_onfocus', 'ProfileController@add_onfocus');

Route::post('/add_slider', 'ProfileController@add_slider');
Route::post('/add_slider_banner', 'ProfileController@add_slider_banner');

Route::post('/add_banner', 'ProfileController@add_banner');

Route::post('/add_brand', 'ProfileController@add_brand');


	
});
Route::get('/logout','Auth\LoginController@logout');
