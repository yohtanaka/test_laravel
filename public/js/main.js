$(function(){
  $('#mailon').click(function() {
    $('#mailto').html('<input class="form-control" type="email" name="mailto">');
  })

  $('#mailoff').click(function() {
    $('#mailto').html('');
  })
})
