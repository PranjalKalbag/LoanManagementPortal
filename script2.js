function validateemi(){
	var emi = document.update.emiu.value;
	if(emi<1000 || emi>10000){
		
		alert("Please Input Valid EMI Amount. Amount Between 1000 and 10000 accepted.");
		return false;

	}
	else
		return true;
}


