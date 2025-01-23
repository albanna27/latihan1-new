<?php

use App\Http\Controllers\Baru;

Route::get('/tugas',[Baru::class, 'index'])->name('dashboard.index'); {
    return view('latihan');
}