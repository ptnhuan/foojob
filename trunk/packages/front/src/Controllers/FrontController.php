<?php

namespace Front\Controllers;
use App\Http\Controllers\Controller;
class FrontController extends Controller {
    public function index(){
        return view('front::front.index');
    }
    public function gioithieu(){
        return view('front::front.gioithieu');
    }
    public function gioithieu_id($id){
        return $id;
    }
    public function tintuc(){
        return view('front::front.tintuc');
    }
    public function tintuc_id($id){
        return $id;
    }
    public function vieclam(){
        return view('front::front.vieclam');
    }
    public function vieclam_id($id){
        return $id;
    }
    public function congty(){
        return view('front::front.congty');
    }
    public function congty_id($id){
        return $id;
    }
    public function dangtuyen(){
        return view('front::front.dangtuyen');
    }
    public function dangtuyen_id($id){
        return $id;
    }
}