$(document).ready(function () {
    $("#categorie-blog").click(function () {
        let data = getCategorieBlogData();
        removeSpinner($(this));
        if (data.categorie_nume === '') {
            showNotification('Te rog să introduci un nume de categorie', 'top', 'right');
            return;
        }
        if (data.categorie_parinte === '') {
            showNotification('Te rog sa selectezi un parinte', 'top', 'right');
            return;
        }
        addSpinner($(this));
        let sendUrl = "/vms-admin/categorie-blog";
        if (data.categorie_code !== '') {
            sendUrl += '/' + data.categorie_code;
        }

        $.ajax({
            method: "POST",
            url: sendUrl,
            data: data
        })
            .done(function (result) {
                console.log(result);
                if (result.success) {
                    window.location.replace('/vms-admin/blog-categories');
                } else {
                    showNotification(result.message, 'top', 'right');
                    removeSpinner($("#categorie-blog"));
                }
            })
            .fail(function (result) {
                showNotification(result.message, 'top', 'right');
                removeSpinner($("#categorie-blog"));
            });
    });
});

function getCategorieBlogData() {
    let data = {};
    data.categorie_nume = $('#categorie-nume').val().trim();
    data.categorie_code = $('#categorie-code').val().trim();
    data.categorie_parinte = $('#categorie-parinte').val().trim();
    data._token = LaravelToken;
    return data;
}
