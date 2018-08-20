$(function() {
  'use strict';

  $('.answer').on('click', function() {
    var $selected = $(this);
    $selected.addClass('selected');
    var answer    = $selected.text();

    $.ajax({
      url: '/api/answer',
      type: 'POST',
      dataType:'json',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: {
        selectedAnswer: answer,
      }
    }).done(function(res) {
      $('.answer').each(function() {
        if ($(this).text() === res) {
          $(this).addClass('correct');
        } else {
          $(this).addClass('wrong');
        }
      });
      if (answer === res) {
        $selected.text(answer + ' ... CORRECT!');
      } else {
        $selected.text(answer + ' ... WRONG!');
      }
    });
  });
});
