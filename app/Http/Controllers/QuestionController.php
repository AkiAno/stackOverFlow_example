<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //3
    public function index() {
        return "this is the list of questions";
    }
    //6
    public function show(){
        return 'This is a detail of a question';
    }
}

