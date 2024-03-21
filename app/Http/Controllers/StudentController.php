<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{

     public  function index(){
        $students = DB::table('students')->get();
return view("index",['students' =>$students]);
     }

    public function create(Request $request)
    {
      DB::table('students')->insert([
'name' => $request->name,
'city' => $request->city,
'marks' => $request->marks,
      ]);
      return redirect(route('index'))->with('status',"Student Added Successfully");
    }

    public function edit(string $id)
    {
       $student = DB::table("students")->find($id);
       return view('editform', ["student" => $student ]);

    }


    public function update(Request $request, string $id)
    {
       DB::table("students")->where('id', $id)->update([
        'name' => $request->name,
        'city' => $request->city,
        'marks' => $request->marks,
       ]);
      return redirect(route('index'))->with('status',"Student Updated Successfully");

    }

    public function destroy(string $id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect(route('index'))->with('status',"Student Deleted Successfully");

    }
}
