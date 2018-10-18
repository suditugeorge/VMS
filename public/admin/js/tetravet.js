var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var LaravelToken = $('[name="_token"]').val();

var showNotification = function(message, from, align, color = 'primary') {
    $.notify({
        icon: "now-ui-icons ui-1_bell-53",
        message: message
    }, {
        type: color,
        timer: 4000,
        placement: {
            from: from,
            align: align
        }
    });
};


var removeSpinner = function (element) {
    element.find('.fa-spin').addClass('hidden');
    element.find('.button-text').removeClass('hidden');
    element.removeClass('disabled');
};

var addSpinner = function (element) {
    element.find('.fa-spin').removeClass('hidden');
    element.find('.button-text').addClass('hidden');
    element.addClass('disabled');
};
