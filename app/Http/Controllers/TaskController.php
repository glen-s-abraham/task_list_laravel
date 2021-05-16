<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
   //home page
   public function index()
   {
   	$task=Task::get();
   	return view("task",['task'=>$task]);

   }

   public function post(Request $request)
   {
   	$validated=$request->validate(['task'=>'required']);
   	
   	if(Task::create($validated))
   	{
   		return redirect('/');
   	}
   	else
   		return("Failed");


   }

   public function delete($id){
   	Task::find($id)->delete();
   	return redirect('/');

   }
}
