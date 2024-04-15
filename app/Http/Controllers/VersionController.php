<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Inertia\Inertia;

class VersionController extends Controller
{
    public function index(Request $request)
    {
        // Attempt to get the version from the cookie
        $version = $request->cookie('page_version');

        if (empty($version)) {
            $version = rand(0, 1) ? 'A' : 'B';
            Cookie::queue(Cookie::make('page_version', $version, 1)); 
        }

        $component = $version === 'A' ? 'Landings/MainA' : 'Landings/MainB';

        return Inertia::render($component, [
        ])->withViewData([
            'meta' => [
                'title' => 'Benvenuto - Marco Riformato',
                'description' => 'Marketing online per studi legali.',
            ],
        ]);
    }
}
