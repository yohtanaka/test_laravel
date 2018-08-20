<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Libs\Quiz;

class QuizController extends Controller
{
  public function _answer(Request $request)
  {
    $quiz           = new Quiz();
    $correctAnswer  = $quiz->checkAnswer();
    echo json_encode($correctAnswer);
  }
}
