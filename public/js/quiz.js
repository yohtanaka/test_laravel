$(function() {
  'use strict';

  $('.answer').on('click', function() {
    var $selected = $(this);
    if ($selected.hasClass('correct') || $selected.hasClass('wrong')) {
      return;
    }
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
      $('#btn').removeClass('disabled');
    });
  });

  $('#btn').on('click', function() {
    if (!$(this).hasClass('disabled')) {
      location.reload();
    }
  });
});
