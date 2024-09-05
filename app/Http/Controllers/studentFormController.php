<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_form;
use Carbon\Carbon;


class studentFormController extends Controller
{
    public function index(){
        return view ('forms');
        }
    
        public function store(Request $request)
        {
            $forms = new student_form;
            $forms ->studentfirstname = $request['first_name'];
            $forms -> studentlastname= $request['last_name' ];
            $forms -> Guradianfirstname= $request['gfirst_name' ];
            $forms -> Guradianlastname= $request['glast_name' ];
            $forms -> address  = $request['address'];
            $forms -> religion  = $request['religion'];
            $forms -> nationality  = $request['nationality'];
            $forms -> DOB   = $request['dateofbirth'];
            $forms -> Email   = $request['email'];
            $forms -> phone   = $request['phone'];
            $forms -> Gender  = $request['gender'];
        
            $forms ->save();
            //return redirect()->back()->with ('success','student register sucessfully ');
            
            
    
        }
}
