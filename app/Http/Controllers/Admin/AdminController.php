<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use stdClass;

class AdminController extends Controller
{
    //
  
    public function index(){
        $data = 2;
        $object = new stdClass;
        $object->name = "ahmed";
        $object->id = 5;
        return view('admin.index',['data'=>$data],compact('object'));
    }
 
}
