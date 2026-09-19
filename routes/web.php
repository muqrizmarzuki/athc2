<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.mockup2');
})->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/case-study', [PageController::class, 'caseStudy'])->name('case-study');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/career', [PageController::class, 'career'])->name('career');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/sitemap.xml', function () {
    $content = view('sitemap');

    return response($content, 200)->header('Content-Type', 'text/xml');
})->name('sitemap');

Route::get('/robots.txt', function () {
    $blockedPaths = [
        '/services',
        '/case-study',
        '/team',
        '/career',
        '/pricing',
        '/contact-us',
        '/blog',
    ];

    $lines = ['User-agent: *'];
    foreach ($blockedPaths as $path) {
        $lines[] = "Disallow: {$path}";
    }
    $lines[] = 'Allow: /';
    $lines[] = '';
    $lines[] = 'Sitemap: '.url('/sitemap.xml');

    return response(implode("\n", $lines), 200)->header('Content-Type', 'text/plain');
})->name('robots');
