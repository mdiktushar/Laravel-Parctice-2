<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;

class AdminController extends Controller
{
    //
    public function __construct(Type $var = null)
    {
        # code...
        $this->middleware(IsAdmin::class);
    }
    public function index(Type $var = null)
    {
        # code...
        return "you are an administrator";
    }
}
