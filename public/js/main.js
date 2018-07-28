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

  $('.file').on('change', function() {
    var fileName = $(this).prop('files')[0].name;
    $('#filename').html('選択中のファイル: ' + fileName);
  });

  $('form').on('change', 'input[type="file"]', function(e) {
    var file = e.target.files[0],
        reader = new FileReader(),
        $preview = $("#fileimage");
        t = this;
    if(file.type.indexOf("image") < 0){
      return false;
    }
    reader.onload = (function(file) {
      return function(e) {
        $preview.empty();
        $preview.append($('<img>').attr({
                  src: e.target.result,
                  height: "300px",
                  class: "preview",
                  title: file.name
              }));
      };
    })(file);
    reader.readAsDataURL(file);
    $('#send').html('<input class="btn btn-laravel" type="submit" value="確認画面へ">');
  });
})
