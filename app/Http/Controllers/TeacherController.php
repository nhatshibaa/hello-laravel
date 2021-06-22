<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function create(){
        return 'Tao moi giang vien';
    }

    public function showList(){
        return 'danh sach';
    }
}
