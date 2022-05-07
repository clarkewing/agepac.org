<?php

namespace App\Http\Controllers;

class PrivacyPolicyController extends Controller
{
    public function __invoke()
    {
        $termsFile = resource_path('markdown/privacy.md');

        return view('terms', [
            'terms' => file_get_contents($termsFile),
        ]);
    }
}
