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
         return redirect('viewform');
             
        }

        public function view(){
            $student = student_form::all();
            $data = compact ('student');
            return view ('viewform') -> with($data);
        }

        public function delete($id){
            student_form::find ($id)->delete();
            return redirect()->back();
        }

       public function edit_record($id){
           $record = student_form::find ($id);
           return view ('editform' , compact ('record'));
        }

        public function update_data( Request $request , $id){
            $form = student_form::find ($id);
            $form ->studentfirstname = $request['first_name'];
            $form -> studentlastname= $request['last_name' ];
            $form -> Guradianfirstname= $request['gfirst_name' ];
            $form -> Guradianlastname= $request['glast_name' ];
            $form -> address  = $request['address'];
            $form -> religion  = $request['religion'];
            $form -> nationality  = $request['nationality'];
            $form -> DOB   = $request['dateofbirth'];
            $form -> Email   = $request['email'];
            $form -> phone   = $request['phone'];
            $form -> Gender  = $request['gender'];
            $form ->save();
            return redirect ('viewform');
        
        }
       
    }

