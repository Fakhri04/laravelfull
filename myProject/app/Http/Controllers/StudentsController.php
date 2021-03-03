<?php

namespace App\Http\Controllers;

use App\Models\Students as ModelsStudents;
use Illuminate\Http\Request;
use Students;

class StudentsController extends Controller
{
    //
    public function show()
    {

        return view('welcome', [
            'students' => ModelsStudents::all()
        ]);
        }
    }
