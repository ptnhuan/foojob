<?php

namespace Admin\Controllers;
use App\Http\Controllers\Controller;

class AdminController extends Controller{
    public function index(){
        return view('admin::admin.index');
    }
    public function categories(){
        return view('admin::admin.categories');
    }
    public function sites_categories(){
        return view('admin::admin.sites_categories');
    }
    public function companies(){
        return view('admin::admin.companies');
    }
    public function jobs(){
        return view('admin::admin.jobs');
    }
}
