$(function() {
  'use strict';

  $('.answer').on('click', function() {
    var $selected = $(this);
    var answer    = $selected.text();

    $.post('/api/answer', {

    }).done(function(res) {
      alert(res.correct_answer);
      if (answer === res.correct_answer) {
        //
      } else {
        //
      }
    });
  });
});
