<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Products\Index as ProductsIndex;
use App\Livewire\Pages\Products\Show as ProductShow;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Privacy;


Route::get('/', Home::class)->name('home');
Route::get('/products', ProductsIndex::class)->name('products.index');
Route::get('/product/{product:slug}', ProductShow::class)->name('products.show');
Route::get('/about', About::class)->name('about.index');
Route::get('/contact', Contact::class)->name('contact.index');
Route::get('/privacy', Privacy::class)->name('privacy');
