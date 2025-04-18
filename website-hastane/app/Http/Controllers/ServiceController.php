<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        return view('services.services');
    }

    public function serviceDetail($slug)
    {
        return view('services.service-detail');
    }
    public function serviceMain($slug)
    {
        return view('services.service-main');
    }
}
