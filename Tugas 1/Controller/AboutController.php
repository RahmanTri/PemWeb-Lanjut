<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function IndexPages()
    {
        return view('admin.pages.about.index');
    }
}
