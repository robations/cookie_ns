if (window.jQuery) {
    jQuery(function ($) {
        $("#cookieNonsenseAgree").submit(function (e) {
            var action;
            action = $(this).get(0).action;
            $.ajax({
                async : true,
                type : 'POST',
                url : action,
                success : function (data, textStatus) {
                    $("#cookieNonsense").remove();
                }
            });
            e.preventDefault();
        });
    });
}