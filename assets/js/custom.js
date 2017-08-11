function custom(title, text, type, btnTxt, redirect) {
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

function simple(title, text, type, btnTxt) {
	swal({
		title: title,
		text: text,
		type: type,
		confirmButtonText: btnTxt,
		allowEscapeKey: false
	});
}