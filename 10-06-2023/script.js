
function validateForm(){
	let userName = 
		document.getElementById('username').value;
	let password = 
		document.getElementById('password').value;
	let result1 = document.getElementById('result1');
	let result2 = document.getElementById('result2');
	if (userName == "" || password == "") {
		alert("Fields should not be empty");
	}else if (userName.match(/^[a-z]+$/)) {
		result1.innerHTML = "username should have lowecase alphabets";
	} else if (password.length < 8){
		result2.innerHTML = "password should have at least 8 characters";
	}else{
		alert("success");
	}
	return false;
}