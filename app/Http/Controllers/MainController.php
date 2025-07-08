<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function generateExercises(Request $request)
    {
        // form validation
        $request->validate([
            'check_sum' => 'required_without_all:check_subtraction,check_multiplication,check_division',
            'check_subtraction' => 'required_without_all:check_sum,check_multiplication,check_division',
            'check_multiplication' => 'required_without_all:check_sum,check_subtraction,check_division',
            'check_division' => 'required_without_all:check_sum,check_subtraction,check_multiplication',

            'number_one' => 'required|integer|min:0|max:999',
            'number_two' => 'required|integer|min:0|max:999',
            'number_exercises' => 'required|integer|min:5|max:50'
        ]);

        // get selected operations
        $operations = [];
        $operations[] = $request->check_sum ? 'sum' : '';
        $operations[] = $request->check_subtraction ? 'subtraction' : '';
        $operations[] = $request->check_multiplication ? 'multiplication' : '';
        $operations[] = $request->check_division ? 'division' : '';

        // get number range
        $min = $request->number_one;
        $max = $request->number_two;

        // get number of exercises
        $numberExercises = $request->number_exercices;

        //dd($request->all());
    }

    public function printExercises()
    {
        echo "Exibir Exercícios";
    }

    public function exportExercises()
    {
        echo "Exportar Exercícios em txt";
    }
}
