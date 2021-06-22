<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function create()
    {
        return view('admin/teacher/form');
    }

    public function showList()
    {
        return view('admin/teacher/list');
    }
}
