<?php

namespace App\Http\Controllers;
 
use Illuminate\View\View;
 
class projectController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function Index(): View
    {
        return view('portfolio', [
            'user' => 'Flint'
        ]);
    }
}