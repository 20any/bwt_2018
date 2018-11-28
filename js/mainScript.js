function ifEmpty(){
	var flag = 0;
	var valueOfElements = 8;
	var element='';
	for (i=0;i<valueOfElements;i++){
		element = document.forms[0].elements[i].value;
		if (element===''){
			//alert('Полe '+document.forms[0].elements[i].name+' пустое оно обязательно для заполнения!');
			alert('Не все поля заполнены! Заполните обязательные,пожалуйста');
			document.forms[0].elements[i].style.outline='1px solid red';
			flag = 0;
		}
		else{
			flag = 1;
			document.forms[0].elements[i].style.outline='1px solid white';
		}
	}
	return flag;
}
/*function ifDecInTextFields(){
	var flag = 0;
	if (/[0-9]/.test(document.forms[0].elements.[0].value)==1){
		alert("Есть цифра");
	}
}*/
function ifCorrectEmail(){
	var flag = 0;
	var emailField = document.forms[0].usersEmail.value;
	alert(emailField);
	var at = emailField.indexOf("@");
	var dot = emailField.indexOf(".");
	if (at<1||dot<1){
		alert("Эмейл некорректен");
		flag = 0;
	} else{
		alert("Эмейл норм");
		flag = 1;
	}
	return flag;
}
mySmbBtn.onclick = function(){
	ifEmpty();
	ifCorrectEmail();
	//ifDecInTextFields();
	var flag = ifEmpty() + ifCorrectEmail();
	if (flag<2){
		alert("Не пущу");
	} else{
		alert("Всё норм");
		document.forms[0].submit();
	}
}