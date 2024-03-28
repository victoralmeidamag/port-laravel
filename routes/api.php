<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vercel;

Route::get('/data', [Vercel::class, 'index']);    