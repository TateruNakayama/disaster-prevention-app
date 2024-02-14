<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index () 
    {
        $first = '今から防災に関するクイズが１０問出題されます。
        正解数に応じてプレゼントが変わるので全問正解目指して頑張ってください';

        return view('quiz', compact('first'));
    }

    public function show ($id) 
    {
        $quiz = new Quiz;
        $quiz = $quiz->find($id);

        return view('quiz', compact('quiz'));
    }
}
