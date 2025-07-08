<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        echo "Página Inicial";
    }

    public function generateExercises(Request $request)
    {
        echo "Gerar Exercícios";
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
