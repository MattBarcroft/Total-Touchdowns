$(document).ready(function () {
    $('#week_id').change(function () {
        $('#weekpicker').form.submit();
    });

    $('.btn-add-score, .btn-subtract-score').click(function (e) {
        e.preventDefault();
        var $input = $(this).closest('.score-controls').find('.input-bet-scores');
        //var $input = $(this).siblings('.input-bet-scores');
        var val = parseInt($input.val(), 10);
        $input.val(val + ($(this).hasClass('btn-subtract-score') ? -1 : 1));
    });



});