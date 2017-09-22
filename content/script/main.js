$(document).ready(function(){
    $('#week_id').change(function() {
        $('#weekpicker').form.submit();
    });

    $('.btn-add-score, .btn-subtract-score').click(function (e) {
        e.preventDefault();
        var $input = $(this).siblings('.form-bet-scores');
        var val = parseInt($input.val(), 10);
        $input.val(val + ($(this).hasClass('btn-subtract-score') ? -1 : 1));
    });

  });
