<?php

namespace App\Http\Controllers;

use App\Models\Grades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    public function grade_choose()
    {
        $polski = DB::table('Oceny')
            ->where('Przedmiot', 'Polski')
            ->get();

        $matematyka = DB::table('Oceny')
            ->where('Przedmiot', 'Matematyka')
            ->get();

        return view('grade_choose',['polski'=>$polski],['matematyka'=>$matematyka]);

    }



};

