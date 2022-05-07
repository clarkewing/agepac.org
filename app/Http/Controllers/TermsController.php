<?php

namespace App\Http\Controllers;

class TermsController extends Controller
{
    public function __invoke()
    {
        $termsFile = resource_path('markdown/terms.md');

        return view('terms', [
            'terms' => file_get_contents($termsFile),
        ]);
    }
}
