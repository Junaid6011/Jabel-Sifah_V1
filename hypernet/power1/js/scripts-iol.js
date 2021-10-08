$(document).ready(function ($) {
    Site.run();

    $('.selectpicker').selectpicker();

});



$("[data-toggle=popover]").each(function (i, obj) {
    $(this).popover({
        html: true,
        content: function () {
            var id = $(this).attr('id')
            return $('#popover-content-' + id).html();
        }
    });
});


w3.includeHTML();


(function () {
    $('.date').datepicker();
})();