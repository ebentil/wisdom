$(document).on("pagecreate", function() {
	$("#splahLabel1").slideDown(3000, function() {
		// window.location = 'login.php';
		window.location = 'http://api.nalosolutions.com/wisdom/login.php';
	});
});
 