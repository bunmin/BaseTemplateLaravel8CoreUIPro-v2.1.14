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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    $crawler = Goutte::request('GET', 'https://duckduckgo.com/html/?q=Laravel');
    $crawler->filter('.result__title .result__a')->each(function ($node) {
      dump($node->text());
    });
    return view('welcome');
});

Route::get('/idx', function() {
    $date = '20201126';
    $recordsTotal = 1;
    $url = "https://www.idx.co.id/umbraco/Surface/TradingSummary/GetStockSummary?date=$date&length=$recordsTotal";
    $response = Http::get($url);
    if ($response->json() == null) {
        dd("haiya"); //nanti taruh notif yak
    };

    $recordsTotal = $response->json()['recordsTotal'];
    if ($recordsTotal <= 0) {
        dd("haiya"); //nanti taruh notif yak
    };

    $url = "https://www.idx.co.id/umbraco/Surface/TradingSummary/GetStockSummary?date=$date&length=$recordsTotal";
    $response = Http::get($url);
    dd($response->json());
});
