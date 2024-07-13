<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index()
    {
        return view('pages.site.reserve.reserve');
    }
}
