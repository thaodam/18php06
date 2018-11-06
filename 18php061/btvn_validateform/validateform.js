function validateForm() {
	var username = document.getElementById('username').value;
	var email = document.getElementById('email').value;
if (username == '') {
	document.getElementById('invalidusername').innerHTML = 'Vui Lòng Nhập Giùm Cái Tên'
}
if (email == '') {
	document.getElementById('invalidemail').innerHTML = 'Vui Lòng Nhập Email Giùm Cái'
}
if (username != '' && email != '') {
	document.getElementById('success').innerHTML = 'Register done'
	document.getElementById('invalidemail').innerHTML = '';
	document.getElementById('invalidusername').innerHTML = '';
}
}
