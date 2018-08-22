<?php

namespace App\Libs;

class Quiz
{
  private $_quizSet = [];

  public function __construct()
  {
    $this->_setup();
      session(['current_num' => 0]);
  }

  public function checkAnswer()
  {
    $correctAnswer = $this->_quizSet[session('current_num')]['a'][0];
    return $correctAnswer;
  }

  public function getCurrentQuiz()
  {
    return $this->_quizSet[session('current_num')];
  }

  private function _setup()
  {
    $this->_quizSet[] = [
      'q' => 'PHPのフレームワークではないものはどれ？',
      'a' => ['Django', 'Laravel', 'CakePHP', 'Symfony']
    ];
    $this->_quizSet[] = [
      'q' => 'PHPのパッケージ管理システムといえば？',
      'a' => ['Composer', 'Writer', 'Singer', 'Engineer']
    ];
    $this->_quizSet[] = [
      'q' => 'Laravelで使用される言語といえば？',
      'a' => ['PHP', 'Ruby', 'Python', 'Java']
    ];
  }
}
