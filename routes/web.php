<?php

use App\Http\Controllers\HomeC;

Route::get('/dashboard',[HomeC::class, 'index'])->name('dashboard.index'); {
    return view('latihan');
}