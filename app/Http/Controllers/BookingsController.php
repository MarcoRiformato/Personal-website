<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function Book()
    {
        return Inertia::render('Book');
    }
}
