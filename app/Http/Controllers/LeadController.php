<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function create()
    {
        $message = 'hello';
        return Inertia::render('Leader/Addleader', [
            'message' => $message,
    ]);
    }
}
