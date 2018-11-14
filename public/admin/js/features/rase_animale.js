$(document).ready(function () {
	$("#salveaza-rasa").click(function () {
		let data = getRaseAnimaleData();
		removeSpinner($(this));
		if (data.nume === '') {
			showNotification('Te rog să introduci un nume de rasa', 'top', 'right');
			return;
		}
		if (data.specie === '' || data.specie == null) {
			showNotification('Te rog să selectezi specia din care face parte animalul', 'top', 'right');
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
				 window.location.replace('/vms-admin/animale-rase');
			 } else {
				 showNotification(result.message, 'top', 'right');
				 removeSpinner($("#salveaza-rasa"));
			 }
		 })
		 .fail(function (result) {
			 showNotification(result.message, 'top', 'right');
			 removeSpinner($("#salveaza-rasa"));
		 });
	});

	$('#rasa_parinte').select2({
		theme: "bootstrap4",
		width: '100%',
		ajax: {
			type: 'GET',
			url: $('#rasa_parinte').data('api'),
			dataType: 'json',
			processResults: function (data,params) {
				return {
					results: $.map(data.data, function(obj) {
						return { id: obj.code, text: obj.name };
					}),
					pagination: {
						more: (params.page * data.per_page) < data.total
					}
				};
			},
			cache: false
		},

	});
});

function getRaseAnimaleData() {
	let data = {};
	data.nume = $('#rasa-nume').val().trim();
	data.code = $('#rasa-code').val().trim();
	data.specie = $('#rasa_parinte').val();
	data.descirere = $('#rasa-descriere').val().trim();
	data.current_url = $("#salveaza-rasa").data('url').trim();
	data.active = $('[name="rasa_active"]').prop("checked");
	data._token = LaravelToken;
	return data;
}
