<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\Quiz;

class QuizController extends Controller
{
  public function index()
  {
    $quiz = new Quiz();
    $data = $quiz->getCurrentQuiz();
    shuffle($data['a']);

    return view('quiz.index', compact('data'));
  }
}
