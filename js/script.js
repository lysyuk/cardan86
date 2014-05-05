
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

    $(".phone").mask("+7 (999) 999-9999", {placeholder: " "});

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
        image: 'img/digits.png',
        startTime: '01:12:12:00'
    });

    $('.getPriceButton').click(function() {
        var partName = $(this).attr("data-xxx");
        $("#part").val(partName);
    });

});
