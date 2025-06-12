<?php

namespace App\Http\Controllers;

class AboutController extends Controller{
    public function about(){
        $companyInfo = [
            'companyName' => 'HITS Solutions',
            'description' => 'We build powerful and scalable Laravel applications.',
            'team' => ['Sahil', 'Fatima', 'Ali', 'Yusaf']
        ];

        return view('about', $companyInfo);
        
    }
}