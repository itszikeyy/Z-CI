function custom(title, text, type, btn, redirect) {
	swal({
		title: title,
		text: text,
		type: type,
		confirmButtonText: btnTxt,
		allowEscapeKey: false
	},
	function() {
		window.location.href=redirect;
	});
}

function simple(title, text, type, btn) {
	swal({
		title: title,
		text: text,
		type: type,
		confirmButtonText: btnTxt,
		allowEscapeKey: false
	});
}