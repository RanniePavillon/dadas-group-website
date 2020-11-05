<?php

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/companies', function () {
    return view('companies');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/gallery-LagunaBranch', function () {
    return view('gallery-LagunaBranch');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/contact-us', 'App\Http\Controllers\ContactController@contact');

Route::post('/contact-us', 'App\Http\Controllers\ContactController@contactSubmit')->name('contact.submit');

/* administrator */

Route::get('/adminDashboard', function () {
    return view('adminDashboard');
});

Route::get('/adminUserAccount', function () {
    return view('adminUserAccount');
});

Route::get('/adminGallery-LagunaBranch', function () {
    return view('adminGallery-LagunaBranch');
});

Route::get('/adminGallery-PangasinanBranch', function () {
    return view('adminGallery-PangasinanBranch');
});

Route::get('/adminGallery-ParañaqueBranch', function () {
    return view('adminGallery-ParañaqueBranch');
});

Route::get('/adminGallery-Phase4Branch', function () {
    return view('adminGallery-Phase4Branch');
});

Route::get('/adminGallery-PasigBranch', function () {
    return view('adminGallery-PasigBranch');
});

Route::get('/adminGallery-TaguigBranch', function () {
    return view('adminGallery-TaguigBranch');
});

Route::get('/adminGallery-videos', function () {
    return view('adminGallery-videos');
});

/* administrator */




























Route::get('/sample', function () {
    
    $companies = [

        ['type' => 'Dadas Litson', 'base' => 'Roasted Chicken and Liempo'],
        ['type' => 'Dadas Market', 'base' => 'fresh produce, poultry, meat, and pork products '],
        ['type' => 'Dadas Eats', 'base' => 'sumptous and nutritious snacks at an affordable price'],
        ['type' => 'Dadas Roast', 'base' => 'Oven-grilled Litson Manok and Liempo']

    ];
    
   return view('sample', ['companies' => $companies]);
});

















/*


Route::get('/', function () {
    
    $companies = [

        ['type' => 'Dadas Litson', 'base' => 'Dadas Litson is well known in the food industry 
                                            selling Litson Manok and Liempo (Roasted Chicken and Liempo). 
                                            It also offer other products such asFried Chicken, Chicken Inasal, 
                                            Inihaw na Bangus, Special Atsara, Barbeque,Litson Paksiw,
                                            Roasted Boneles Belly, and the tastiest and crispiest Pinoy Litson Baboy.'
        ],
        
        ['type' => 'Dadas Market', 'base' => 'Dadas Market offers a wide range of fresh produce, poultry, meat, 
                                            and pork products at Palengke prices delivered right at your doorsteps.'
        ],
        
        ['type' => 'Dadas Eats', 'base' => 'Looking for sumptous and nutritious snacks at an 
                                        affordable price? Dadas Eats gets you covered with a wide array of delicious 
                                        snacks and refreshments at a very economical price. You can choose from a 
                                        variety of snacks from Siomai, Siopao, Chicken Burger, Asado Pandesal, Beef Burger, 
                                        Beef Shawarma, Chicken Shawarma, and various refreshment such as Milkteas and Sodas.'
        ],
        
        ['type' => 'Dadas Roast', 'base' => 'Oven-grilled Litson Manok and Liempo at a very affordable price? 
                                            Dadas Roast is here to serve your cravings. Get this oven-grilled 
                                            products any time any day from Dadas Roast- one of the leading dealer 
                                            of oven-grilled Chicken and Liempo.'
        ]

    ];
    
   return view('welcome', ['companies' => $companies]);
});
*/

/*
Route::get('/companies', function () {
     $company = ['type' => 'Dadas Litson',
    'base' => '(Roasted Chicken and Liempo)',
    'price' => 250];
    return view('companies',$company);
});*/
