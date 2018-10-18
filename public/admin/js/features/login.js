$(document).ready(function () {
    $("#login_user").click(function () {
        let data = {};
        data.email = $('#email').val().trim();
        data.password = $('#password').val().trim();
        data.remember = $('#remember_me').is(':checked');
        removeSpinner($('#login_user'));
        if(data.email === '' || !emailRegex.test(data.email)){
            showNotification('Te rog să introduci o adresă de email corectă','top', 'right');
            return;
        }
        if(data.password === ''){
            showNotification('Câmpul parolă nu poate fi gol','top', 'right');
            return;
        }
        addSpinner($('#login_user'));
        data._token = LaravelToken;
        $.ajax({
            method: "POST",
            url: "/vms-admin/login",
            data: data
        })
        .done(function( result ) {
            if(result.success){
                window.location.replace('/vms-admin');
            }else{
                showNotification(result.message,'top', 'right');
                removeSpinner($('#login_user'));
            }
        })
        .fail(function( result ) {
            showNotification(result.message,'top', 'right');
            removeSpinner($('#login_user'));
        });
    });


});
