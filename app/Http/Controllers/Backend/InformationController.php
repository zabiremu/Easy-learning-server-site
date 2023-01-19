<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $result = Information::latest()->get();
        return $result;
    }
}
