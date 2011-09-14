function popup(anchor) {
    window.open(anchor.href,'sharer','toolbar=0,status=0,width=600,height=400');
    return false;
}

$(document).ready(function () {
    var state = 'top';
    $('#report-next').click(function () {
        if (state == 'top') {
            $('#webform-client-form-679707>div').css('position', 'absolute');
            $('#webform-client-form-679707>div').animate({top : '-125px'});
            $('#webform-client-form-679707').animate({'height' : '240px'});
            $(this).text('back');
            state = 'bottom';
        }
        else {
            $('#webform-client-form-679707>div').css('position', 'absolute');
            $('#webform-client-form-679707>div').animate({top : '0px'});
            $('#webform-client-form-679707').animate({'height' : '125px'});
            $(this).text('next');
            state = 'top';
        }
        return false;
    });
});