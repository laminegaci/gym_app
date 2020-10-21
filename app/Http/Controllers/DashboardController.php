<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = ['name' => 'lamine', 'age' => 26];
        return Inertia::render('Dashboard/Index', [
                'data' => $data,
        ]);

    }
}
