<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class DasboardController extends Controller
{
    public function IndexPages()
    {
        return view('admin.pages.dasboard.index');
    }
}
