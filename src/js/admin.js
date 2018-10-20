$(window).on('load',function () {
    $(document).ajaxStart(function() { Pace.restart(); });
});

