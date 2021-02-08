<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AppController extends Controller
{
    public function index() {
        $data = ['siteName' => '人生得意'];
        return Inertia::render('App/Index', $data);
    }
}
