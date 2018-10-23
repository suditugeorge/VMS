$(document).ready(function () {
    $("#creeaza-categorie").click(function () {
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
        $.ajax({
            method: "POST",
            url: "/vms-admin/adauga-categorie-blog",
            data: data
        })
            .done(function (result) {
                if (result.success) {
                    window.location.replace('/vms-admin/blog-categories');
                } else {
                    showNotification(result.message, 'top', 'right');
                    removeSpinner($("#creeaza-categorie"));
                }
            })
            .fail(function (result) {
                showNotification(result.message, 'top', 'right');
                removeSpinner($("#creeaza-categorie"));
            });
    });

    $("#editeaza-categorie").click(function () {
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
        $.ajax({
            method: "POST",
            url: "/vms-admin/editeaza-categorie-blog",
            data: data
        })
            .done(function (result) {
                if (result.success) {
                    window.location.replace('/vms-admin/blog-categories');
                } else {
                    showNotification(result.message, 'top', 'right');
                    removeSpinner($("#editeaza-categorie"));
                }
            })
            .fail(function (result) {
                showNotification(result.message, 'top', 'right');
                removeSpinner($("#editeaza-categorie"));
            });
    });
});

function getCategorieBlogData() {
    let data = {};
    data.categorie_id = $('#categorie-id').data('id');
    data.categorie_nume = $('#categorie-nume').val().trim();
    data.categorie_parinte = $('#categorie-parinte').val().trim();
    data._token = LaravelToken;
    return data;
}
