$(function() {
  'use strict';

  $('.answer').on('click', function() {
    var $selected = $(this);
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
      if (answer === res) {
        alert('正解です！');
      } else {
        alert('不正解です！');
      }
    });
  });
});
