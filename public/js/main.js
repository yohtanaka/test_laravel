$(function(){
  $('#mailon').click(function() {
    $('#mailto').html('<input class="form-control" type="email" name="mailto">');
  })

  $('#mailoff').click(function() {
    $('#mailto').html('');
  })

  nums = [1, 2];
  nums.forEach(function(i) {
    $("#slack").on("keypress", "#slacktext"+i, function(e) {
      if (e.keyCode == 13) {
        if (e.shiftKey) {
          $.noop();
        } else if ($("#slacktext"+i).val().replace(/\s/g, "").length > 0) {
          e.preventDefault();
          $("#slackform"+i).submit();
        }
      } else {
        $.noop();
      }
    });
  });
})
