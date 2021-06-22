<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(){
        return view('admin/student/form');
    }

    public function showList(){
        return view('admin/student/list');
    }
}
