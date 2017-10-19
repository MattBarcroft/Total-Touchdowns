$(document).ready(function () {
    var firstgame = $(".game-number:first").val();
    var lastgame = parseInt(firstgame) + 5;

    for (i = firstgame; i < lastgame; i++) {
        var id1 = "#htscore-game-result-" + i;
        var id2 = "#htscore-bet-result-" + i;
        var htscoreresult = $(id1).val();
        var htscorebet = $(id2).val();
        if (htscoreresult == htscorebet) {
            $(id1).css("background-color", "#dff0d8");
            $(id2).css("background-color", "#dff0d8");
        } else {
            $(id1).css("background-color", "#f2dede");
            $(id2).css("background-color", "#f2dede");
        }
        var id3 = "#atscore-game-result-" + i;
        var id4 = "#atscore-bet-result-" + i;

        var atscoreresult = $(id3).val();
        var atscorebet = $(id4).val();
        if (atscoreresult == atscorebet) {
            $(id3).css("background-color", "#dff0d8");
            $(id4).css("background-color", "#dff0d8");
        } else {
            $(id3).css("background-color", "#f2dede");
            $(id4).css("background-color", "#f2dede");
        }
    }
    var tiebreaker1 = $('#tiebreaker-1').val();
    var tiebreaker2 = $('#tiebreaker-2').val();
    if (tiebreaker1 == tiebreaker2) {
        $('#tiebreaker-1').css("background-color", "#dff0d8");
        $('#tiebreaker-2').css("background-color", "#dff0d8");
    } else {
        $('#tiebreaker-1').css("background-color", "#f2dede");
        $('#tiebreaker-2').css("background-color", "#f2dede");
    }

});