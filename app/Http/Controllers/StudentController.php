<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(){
        return 'Tao moi sinh vien';
    }

    public function showList(){
        return 'danh sach sinh vien';
    }
}
