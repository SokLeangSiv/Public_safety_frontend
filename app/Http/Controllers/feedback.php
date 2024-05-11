<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class feedback extends Controller
{
    public function showFeedback()
    {
        return view('feedback.feedback');
    }
}
