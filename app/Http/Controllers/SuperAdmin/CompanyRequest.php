<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyRequest extends Controller
{
    public function index(){
        return view("super-admin.admin-content.company-request.index");
    }

    public function history(){
        return view("super-admin.admin-content.history.index");
    }
}
