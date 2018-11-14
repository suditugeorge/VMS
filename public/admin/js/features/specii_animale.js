$(document).ready(function () {
    $("#salveaza-specie").click(function () {
        let data = getSpecieAnimalBlogData();
        removeSpinner($(this));
        if (data.nume === '') {
            showNotification('Te rog să introduci un nume de specie', 'top', 'right');
            return;
        }
        addSpinner($(this));

        $.ajax({
            method: "POST",
            url: data.current_url,
            data: data
        })
            .done(function (result) {
                if (result.success) {
                    window.location.replace('/vms-admin/animale-specii');
                } else {
                    showNotification(result.message, 'top', 'right');
                    removeSpinner($("#salveaza-specie"));
                }
            })
            .fail(function (result) {
                showNotification(result.message, 'top', 'right');
                removeSpinner($("#salveaza-specie"));
            });
    });
});

function getSpecieAnimalBlogData() {
    let data = {};
    data.nume = $('#specie-nume').val().trim();
    data.code = $('#specie-code').val().trim();
    data.descirere = $('#specie-descriere').val().trim();
    data.current_url = $("#salveaza-specie").data('url').trim();
    data.active = $('[name="specie_active"]').prop("checked");
    data._token = LaravelToken;
    return data;
}
