<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function task_list(){
        $tasks = [
            ["task_name"=>"Task 1","task_count"=>30],
            ["task_name"=>"Task 2","task_count"=>39],
            ["task_name"=>"Task 3","task_count"=>47],
            ["task_name"=>"Task 4","task_count"=>34]
        ];
        return view('pages.tasks',compact('tasks'));
    }
}
