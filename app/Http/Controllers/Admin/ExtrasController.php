<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Config;
use App\Contact;

class ExtrasController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){

        return view('admin.dashboard');
    }

    public function config(Request $request){
        if($request->isMethod('post')){
            foreach($request->all() as $key => $value){
                if($request->hasFile($key)){
                    Config::updateAll($key, $value, 'file');
                }else{
                    Config::updateAll($key, $value, 'text');
                }
            }
            return redirect('admin/config')->with('success', 'A settings has been saved successfully.');
        }
        return view('admin.extras.config');
    }
}
