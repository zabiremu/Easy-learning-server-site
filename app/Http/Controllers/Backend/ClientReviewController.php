<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ClientReview;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    public function index()
    {
        $result = ClientReview::latest()->get();
        return $result;
    }
}
