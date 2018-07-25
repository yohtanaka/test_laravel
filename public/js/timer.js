$(function() {
  countdown();
});

function countdown() {
  var _year  = $('#year').data('date');
  var _month = $('#month').data('date');
  var _day   = $('#day').data('date');
  var startTime = new Date();
  var endTime   = new Date(`${_year},${_month},${_day}, 00:00:00`);
  var diff  = endTime - startTime;
  var times = 24 * 60 * 60 * 1000;
  var day   = Math.floor(diff / times);
  var hour  = Math.floor(diff % times / (60 * 60 * 1000));
  var min   = Math.floor(diff % times / (60 * 1000)) % 60;
  var sec   = Math.floor(diff % times / 1000) % 60 % 60;
  var ms    = Math.floor(diff % times / 10) % 100;
  if (diff > 0) {
    $("#timer").text(day + '日' + hour + '時間' + min + '分' + sec +'秒' + ms);
    setTimeout('countdown()', 10);
  } else {
    $("#timer").text('*終了のメッセージ');
  }
}
