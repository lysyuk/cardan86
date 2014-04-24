
$(document).ready(function() {

    $('#menu').affix({
        offset: {
            top: 1
        }
    })
    $("#menu a").click(function() {
        var str = $(this).attr("href");
        $.scrollTo(str, 1000, {offset: -80});
        return false;
    });

    var note = $('#note');
    ts = new Date();
    ts.setHours(ts.getHours() + 22);
    ts.setMinutes(ts.getMinutes() + 56);
    ts.setSeconds(ts.getSeconds() + 60);
    newYear = true;

    if ((new Date()) > ts) {
        ts = (new Date()).getTime() + 10 * 24 * 60 * 60 * 1000;
    }

    $('#countdown').countdown({
        timestamp: ts,
        callback: function(days, hours, minutes, seconds) {

            var message = "";

            message += "Дней: " + days + ", ";
            message += "часов: " + hours + ", ";
            message += "минут: " + minutes + " и ";
            message += "секунд: " + seconds + " <br />";


            note.html(message);
        }
    });
});
