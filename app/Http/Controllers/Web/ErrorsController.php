<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ErrorsController extends Controller
{
    public function index($error) {
        $data = [];
        $data['error_number'] = $error;
        $data['sub_message'] =  Response::$statusTexts[$error];
        return view('errors.error', $data);
    }
}
